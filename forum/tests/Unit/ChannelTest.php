<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 6/26/2017
 * Time: 5:16 PM
 */

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ChannelTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function a_channel_consists_of_threads()
    {
        $channel = create('App\Channel');
        $thread = create('App\Thread', ['channel_id'=>$channel->id]);

        //dd($channel->thread);

        $this->assertTrue($channel->thread->contains($thread));
    }

}