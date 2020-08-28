<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class indexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */ 
    public function sUserCanListUsers()
    {
        $response = $this->get(route('users.index'));

        $response->assertStatus(200);
    }
}
