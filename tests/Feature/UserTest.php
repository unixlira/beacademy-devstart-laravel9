<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test user.
     *
     * @return void
     */
    public function test_user()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->actingAs($user);
        
        $this->assertAuthenticated();

        $response = $this->get('/users');

        $response->assertStatus(200);
    }


    public function test_create_user()
    {
        $response = $this->post('/login/create', [
            'name' => 'Admin',
            'email' => 'unixlira@gmail.com',
            'password' => '1q2w3e4r',
            'is_admin' => 1
        ]);


        $response->assertStatus(200);
    }
}
