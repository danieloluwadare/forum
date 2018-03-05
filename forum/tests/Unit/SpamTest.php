<?php

namespace Tests\Unit;

use App\Inspections\Spam;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SpamTest extends TestCase
{
    /** @test */
    function it_check_for_invalid_keywords()
    {
        $spam = new Spam();

        $this->assertFalse($spam->detect('Innocent Reply Here'));

        $this->expectException('Exception');

        $spam->detect('Yahoo customer Support');

    }

    /** @test */
    function it_check_for_key_being_held_down()
    {
        $spam = new Spam();

        $this->expectException('Exception');

        $spam->detect('Hello World aaaaaaaaaa');
    }
}