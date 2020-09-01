<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreTest extends TestCase
{

    /**
     * @test */
    public function aNotAuthenticatedCannotStoreUsers()
    {

        $response = $this->get(route('users.index'));

        $response->assertRedirect('login');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
