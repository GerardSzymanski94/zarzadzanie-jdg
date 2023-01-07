<?php

namespace Tests\Feature;

use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_seeder_added_user()
    {
        $this->seed(UserSeeder::class);
        $this->assertDatabaseHas('users', [
            'email' => 'gerard.szymanski1@gmail.com'
        ]);
    }

}
