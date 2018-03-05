<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReadThreadTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->thread = factory('App\Thread')->create();

    }

    public function test_a_user_can_view_all_threads()
    {
        //$thread = factory('App\Thread')->create();
        $response = $this->get('/thread');
        $response->assertSee($this->thread->title);



    }

    public function test_a_user_can_read_a_single_thread()
    {
       // $thread = factory('App\Thread')->create();
        $response = $this->get($this->thread->path());
        $response->assertSee($this->thread->title);
    }


    public function test_a_user_can_filter_thread_according_to_a_channel()
    {
        $channel = create('App\Channel');

        $threadINChannel = create('App\Thread', ['channel_id'=> $channel->id]);
        $threadNotInChannel = create('App\Thread');

        $this->get('/thread/'.$channel->slug)
            ->assertSee($threadINChannel->title)
            ->assertDontSee($threadNotInChannel->title);
    }

    /** @test */
    public function test_a_user_can_filter_thread_by_any_username()
    {
        $this->signIn(create('App\User', ['name'=>'johndoe']));

        $threadByJohn = create('App\Thread', ['user_id'=>Auth()->id()]);
        $threadNotByJohn = create('App\Thread');

        $this->get('thread?by=johndoe')
            ->assertSee($threadByJohn->title)
            ->assertDontSee($threadNotByJohn->title);
    }

    /** @test */

    public function a_user_can_filter_thread_by_popularity()
    {
        $threadWithThreeReplies = create("App\Thread");
        create('App\Reply', ['thread_id'=>$threadWithThreeReplies->id], 3);

        $threadWithTwoReplies = create("App\Thread");
        create('App\Reply', ['thread_id'=>$threadWithTwoReplies->id], 2);

        $threadWithNoReplies = $this->thread;

        $response = $this->getJson('thread?popular=1')->json();

        $this->assertEquals([3,2,0], array_column($response, 'replies_count'));
    }

    /** @test */

    public function a_user_can_filter_thread_by_those_that_are_unanswered()
    {
        $thread = create("App\Thread");
        create('App\Reply' , ['thread_id'=>$thread->id]);

        $response = $this->getJson('thread?unanswered=1')->json();

        $this->assertCount(1, $response);
    }

    /** @test */

    public function  a_user_can_request_all_replies_for_a_given_thread()
    {
        $thread = create("App\Thread");

        create('App\Reply', ['thread_id'=>$thread->id], 2);

        $response = $this->getJson($thread->path().'/replies')->json();

        $this->assertCount(2, $response['data']);
        $this->assertEquals(2, $response['total']);
    }

}