<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function testBasicExample()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');
        $this->get('api/users')->assertJson(['stub']);
    }
}
