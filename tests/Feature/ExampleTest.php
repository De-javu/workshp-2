<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function aUserCanListUsers()
    {
        $user = factory(User::class)->create();

        $response = $this->get(route('users.index'));

        $response->assertOk();
        $response->assertViewIs('users.index');
        $response->assertViewHas('users');

        $responseUsers = $response->getOriginalContent()['users'];

        $responseUsers->each(function ($item) use ($user) {
            $this->assertEquals($user->id, $item->id);
    });


    }
}
