<?php

namespace Tests\Feature\User;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreTest extends TestCase
{

    use RefreshDatabase;
    /**
     * @test */
    public function aNotAuthenticatedCannotStoreUsers()
    {

        $response = $this->get(route('users.store'));

        $response->assertRedirect('login');
    }


    /**
     *
     *
     * @test
     */
    public function   aAuthenticatedCanStoreUsers()
    {

        $user = factory(User::Class)->create();

        $response = $this->actingAs($user)
            ->post(route('users.store'),[
                'first_name' => 'jhon',
                'last_name' => 'Doe',
                'email' => 'jhon@mail.com',
                'password' => 'admin',

            ]);



        $this->assertDatabaseHas('users', [
            'first_name' => 'jhon',
            'last_name'=> 'Doe',
            'email' => 'jhon@mail.com',
        ]);

        $response->assertRedirect(route('users.index'));
    }
}
