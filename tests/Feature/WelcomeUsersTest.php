<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/javi/mante')
        ->assertStatus(200)
        ->assertSee('Bienvenido Javi, tu apodo es mante');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/javi')
        ->assertStatus(200)
        ->assertSee('Bienvenido Javi, no tienes apodo');
    }

}
