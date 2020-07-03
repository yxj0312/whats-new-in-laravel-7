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

        $this->get('api/users')->assertJson([$user->toArray()]);
        $this->get('api/users')->assertJson([['name' => $user->name]]);
    }
    
    /** @test */
    function testSemiExample()
    {
        $user = factory(User::class)->create(['name' => 'John']);

        $this->actingAs($user, 'api');
        $this->get('api/users/John')->assertStatus(200)->assertJson([
            'name' => 'John'
        ]);
    }

    /** @test */
    function testPostExample()
    {
        $user = factory(User::class)->create(['name' => 'John']);
        $this->actingAs($user, 'api');

        $this->post('api/users', ['name' => 'Foobar', 'email' => 'john@doe.com', 'password' => bcrypt('password')]);

        $this->assertDatabaseHas('users', ['email' => 'john@doe.com']);
    }

    /** @test */
    function testQueryExample()
    {   
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create(['name' => 'John']);
        $this->actingAs($user, 'api');
        $this->get('api/search/?q=Deathpool');
    }
}
