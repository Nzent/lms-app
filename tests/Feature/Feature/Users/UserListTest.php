<?php

namespace Tests\Feature\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserListTest extends TestCase
{
    use RefreshDatabase;

    public function users_list_page_loads_successfully()
    {
        User::factory()->count(5)->create();

        $response = $this->get('/users');

        $response->assertStatus(200);
        $response->assertViewIs('users.index');
    }

    public function users_list_shows_all_users()
    {
        $users = User::factory()->count(3)->create();

        $response = $this->get('/users');

        foreach ($users as $user) {
            $response->assertSee($user->name);
            $response->assertSee($user->email);
            $response->assertSee($user->registration_number);
        }
    }

    public function users_list_shows_correct_columns()
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'registration_number' => 'REG001',
            'batch' => 'Batch 2024',
        ]);

        $response = $this->get('/users');

        $response->assertSee('John Doe');
        $response->assertSee('john@example.com');
        $response->assertSee('REG001');
        $response->assertSee('Batch 2024');
    }

    public function view_button_exists_for_each_user()
    {
        $user = User::factory()->create();

        $response = $this->get('/users');

        $response->assertSee(route('users.show', $user));
    }
}
