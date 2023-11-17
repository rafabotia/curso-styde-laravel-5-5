<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    public function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/rafa/rafita')
            ->assertStatus(200)
            ->assertSee("Bienvenido rafa, tu apodo es rafita");
    }

    /** @test */
    public function it_welcomes_users_witout_nickname()
    {
        $this->get('saludo/rafa')
        ->assertStatus(200)
        ->assertSee("Bienvenido rafa");
    }
}
