<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_is_login_user()
    {
        $response = $this->post('/login', [
            'email'    => "joserobertolira@gmail.com",
            'password' => "1q2w3e4r"
        ]);
        
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function test_create_user()
    {

        $response = $this->post('/login', [
            'email'    => "joserobertolira@gmail.com",
            'password' => "1q2w3e4r"
        ]);

        $response = $this->get('/create');

        $response->assertStatus(200);
    }

    public function test_store_user()
    {

        $response = $this->post('/login', [
            'email'    => "joserobertolira@gmail.com",
            'password' => "1q2w3e4r"
        ]);
        
        $response = $this->post('/users', 
        [     
            "name" => "User Teste Lira",
            "email" => "test@admin.com",
            "email_verified_at" => now(),
            "password" => "1q2w3e4r",
            "remember_token" => "yovAaRo4kv",
            "is_admin" => true
        ]);

        $response = $this->get('/users');

        $response->assertStatus(200);
    }
}
