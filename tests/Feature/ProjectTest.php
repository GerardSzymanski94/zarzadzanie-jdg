<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_show_project_screen_is_rendered()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->get('/project/' . $project->id);
        $response->assertStatus(200);
    }

    public function test_add_project_screen_is_rendered()
    {
        $response = $this->get('/project/add');
        $response->assertStatus(200);
    }

    public function test_edit_project_screen_is_rendered()
    {
        $response = $this->get('/project/edit');
        $response->assertStatus(200);
    }

    public function test_list_projects_screen_is_rendered()
    {
        $response = $this->get('/project/list');
        $response->assertStatus(200);
    }

    public function test_store_project_in_database()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('project', [
            'name' => 'Projekt test',
            'description' => 'Project desc',
        ]);
        $response->assertStatus(201);
    }
  /*  public function test_update_project_in_database()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/project/', [
            'name' => 'Projekt test',
            'description' => 'Project desc',
        ]);

        $response->assertStatus(201);
    }*/
}
