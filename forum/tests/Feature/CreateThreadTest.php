<?php

namespace Tests\Feature;

use App\Activity;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateThreadTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function test_guest_cant_create_thread()
    {
        //Given we have a signed in User
        //$this->actingAs(factory('App\User')->create());
        $this->withExceptionHandling();

        $this->get('/thread/create')
            ->assertRedirect('/login');

        $this->post('/thread')
            ->assertRedirect('/login');
    }



    public function test_an_authenticated_user_can_create_a_new_forum_threads()
    {
        //Given we have a signed in User
        $this->signIn();

        //we hit the end point to create anew thread

        $thread = make('App\Thread');


        $response = $this->post('/thread', $thread->toArray());

      //  dd($response->headers->get('Location'));
        //when we visit the thread page

        //we should see the new thread
        $this->get($response->headers->get('Location'))
            ->assertSee($thread->title)
            ->assertSee($thread->body);

        //we should see the new thread
            //

    }


    public function test_a_thread_requires_a_title()
    {
        $this->publishThread(['title' => null])
            ->assertSessionHasErrors('title');
    }

    public function test_a_thread_requires_a_body()
    {
        $this->publishThread(['body' => null])
            ->assertSessionHasErrors('body');
    }

    public function test_a_thread_requires_a_valid_channel()
    {
        factory('App\Channel', 2)->create();

        $this->publishThread(['channel_id' => null])
            ->assertSessionHasErrors('channel_id');

        $this->publishThread(['channel_id' => 999])
            ->assertSessionHasErrors('channel_id');
    }

    /** @test */
    public function unAuthorized_users_may_not_delete_thread()
    {
        $this->withExceptionHandling();
        $thread = create('App\Thread');
        $this->delete($thread->path())->assertRedirect('/login');

        $this->signIn();
        $this->delete($thread->path())->assertStatus(403);
    }

    /** @test */
    public function a_thread_can_be_deleted()
    {
        $this->signIn();

        $thread = create('App\Thread', ['user_id'=>Auth()->id()]);
        $reply = create('App\Reply', ['thread_id'=>$thread->id]);

        $this->json('DELETE', $thread->path());

        $this->assertDatabaseMissing('threads', ['id'=>$thread->id]);
        $this->assertDatabaseMissing('replies', ['id'=>$reply->id]);

        $this->assertEquals(0, Activity::count());
    }

    public function publishThread($overrides=[])
    {
        $this->withExceptionHandling()->signIn();
        $thread = make('App\Thread', $overrides);

        return $this->post('/thread', $thread->toArray());
    }
}

