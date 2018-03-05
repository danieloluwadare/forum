<?php

namespace Tests\Feature;

use Illuminate\Notifications\DatabaseNotification;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MentionUsersTest extends TestCase
{

    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */

    function mention_users_in_a_thread_are_notified()
    {
        $john = create('App\User', ['name'=> 'johnDoe']);

        $this->signIn($john);

        $jane = create('App\User', ['name'=> 'janedoe']);

        $thread = create('App\Thread');

        $reply = make('App\Reply', [
            'body' => '@janedoe look at this'
        ]);

        $this->json('post',$thread->path().'/replies', $reply->toArray());

        $this->assertCount(1, $jane->notifications);


    }
}