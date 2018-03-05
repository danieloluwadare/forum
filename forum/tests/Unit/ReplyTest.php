<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;
    /**
     *
     */
    public function test_it_has_a_owner(){
        $reply = factory('App\Reply')->create();

        $this->assertInstanceOf('App\User',  $reply->owner);
    }

    /** @test */

    function it_knows_if_it_was_just_published()
    {
        $reply = create('App\Reply');

        $this->assertTrue($reply->wasJustPublished());

        $reply->created_at = Carbon::now()->subMonth();

        $this->assertFalse($reply->wasJustPublished());
    }

    /** @test */
    function it_can_detect_all_mentioned_users_in_a_body()
    {
        $reply = create('App\Reply', [
            'body' => '@janedoe wants to talk to @johndoe'
        ]);

        $this->assertEquals(['janedoe', 'johndoe'], $reply->mentionedUsers());
    }

    /** @test */
    function  it_wraps_mentioned_usernames_in_the_body_within_anchor_tags()
    {
        $reply = create('App\Reply', [
            'body' => 'Hello @janedoe'
        ]);

        $this->assertEquals('Hello <a href="/profiles/janedoe">@janedoe</a>', $reply->body);

    }
}
