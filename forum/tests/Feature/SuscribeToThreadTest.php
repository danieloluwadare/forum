<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SuscribeToThreadTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test */
    public function a_user_can_subscribe_to_threads()
    {
        $this->signIn();

        $thread = create('App\Thread');

        $this->post($thread->path().'/subscriptions');

        $this->assertCount(1, $thread->subscriptions);
    }

    /** @test */
    public function a_user_can_unsubscribe_to_threads()
    {
        $this->signIn();

        $thread = create('App\Thread');

        $thread->subscribe();

        $this->delete($thread->path().'/subscriptions');

        $this->assertCount(0, $thread->subscriptions);
    }
}