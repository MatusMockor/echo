<?php

namespace Tests\Unit;

use App\Models\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class TeamControllerTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;

    /** @test */
    public function user_can_create_team()
    {
        $this->post(route('teams.store'), [
            'name' => 'test Team',
            'body' => 'amazing Team',
        ]);

        $this->assertDatabaseCount('teams', 1);
    }
}