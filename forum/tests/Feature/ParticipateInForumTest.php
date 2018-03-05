<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ParticipateInForumTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_an_unauthenticated_user_may_not_participate_in_forum_threads()
    {
        $this->withExceptionHandling();
        $thread = factory('App\Thread')->create();

        $reply = factory('App\Reply')->create();

        //$channel = factory('App\Channel')->create();

        $this->post($thread->path().'/replies', $reply->toArray());

    }

    //Test this thread after you update the path
    public function test_an_authenticated_user_may_participate_in_forum_threads()
    {
        //$user = factory('App\User')->create();
        $this->signIn();

        $thread = create('App\Thread');

        $reply = make('App\Reply');

       // $channel = factory('App\Channel')->make();

        $this->post($thread->path().'/replies', $reply->toArray());

        $this->assertDatabaseHas('replies', ['body'=>$reply->body]);

        $this->assertEquals(1, $thread->fresh()->replies_count);
    }

    public function test_a_reply_needs_a_body()
    {
        $this->withExceptionHandling()->signIn();
        $thread = create('App\Thread');
        $reply = make('App\Reply', ['body'=>null]);

        $this->post($thread->path().'/replies' , $reply->toArray())

            ->assertSessionHasErrors('body');

    }

    /** @test */
    public function unauthorized_users_cannot_delete_replies()
    {
        $this->withExceptionHandling();

        $reply = create('App\Reply');

        $this->delete("/replies/{$reply->id}")
            ->assertRedirect('login');

        $this->signIn()
            ->delete("/replies/{$reply->id}")
            ->assertStatus(403);

    }

    /** @test */
    public function authorized_users_can_delete_replies()
    {
        $this->signIn();

        $thread = create('App\Thread');

        $reply1 = create('App\Reply', [
            'user_id'=> auth()->id(),
            'thread_id'=>$thread->id
            ]);
        $reply2 = create('App\Reply', [
            'user_id'=> auth()->id(),
            'thread_id'=>$thread->id
        ]);

        $this->delete("/replies/{$reply1->id}");

        $this->assertDatabaseMissing('replies', ['id'=>$reply1->id]);

        $this->assertDatabaseHas('replies',['id'=>$reply2->id] );

        $this->assertDatabaseHas('threads',['id'=>$thread->id]);

        $this->assertEquals(1, $reply1->thread->fresh()->replies_count);

    }

    /** @test */
    public function authorized_users_can_update_replies()
    {
        $this->signIn();

        $reply = create('App\Reply', ['user_id'=> auth()->id()]);

        $this->patch("/replies/{$reply->id}", ['body'=>"changed all"]);

        $this->assertDatabaseHas('replies', ['id'=>$reply->id, 'body'=>'changed all']);

    }

    /** @test */
    public function unauthorized_users_cannot_update_replies()
    {
        $this->withExceptionHandling();

        $reply = create('App\Reply');

        $this->patch("/replies/{$reply->id}", ['body'=>"changed all"])
            ->assertRedirect('login');

        $this->signIn()
            ->patch("/replies/{$reply->id}")
            ->assertStatus(403);

//        $this->assertDatabaseHas('replies', ['id'=>$reply->id, 'body'=>"chan"]);

    }

    /** @test */
    function replies_that_contain_spam_may_not_be_detected()
    {
        $this->signIn();

        $thread = create('App\Thread');

        $reply = make('App\Reply', [
            'body'=>'Yahoo customer Support'
        ]);

        //$this->withExceptionHandling();
        //$this->expectException(\Exception::class);

        $response=$this->post($thread->path().'/replies', $reply->toArray());

        $response->assertStatus(422);

    }

    /** @test */
    function users_may_reply_a_maximum_of_once_per_minute()
    {
        $this->signIn();

        $thread = create('App\Thread');

        $reply = make('App\Reply', [
            'body'=>'simple stuffs'
        ]);

        $this->post($thread->path().'/replies', $reply->toArray())
            ->assertStatus(200);

        $this->post($thread->path().'/replies', $reply->toArray())
            ->assertStatus(422);
    }
}

