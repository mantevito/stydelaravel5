<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_users_list()
    {

        factory(User::class)->create([
            'name' => 'Ellie'
        ]);
        factory(User::class)->create([
            'name' => 'Joel'
        ]);


        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de usuarios')
        ->assertSee('Joel')
        ->assertSee('Ellie');

    }

    /** @test */
    function it_shows_a_default_message_if_list_is_empty()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('No hay usuarios registrados');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear nuevo usuario');
    }
}
