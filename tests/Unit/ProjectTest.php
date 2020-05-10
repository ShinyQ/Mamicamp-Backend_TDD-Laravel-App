<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_a_path()
    {
        $project = factory('App\Project')->create();
        $this->assertEquals('/projects/'. $project->id, $project->path());
    }

    public function test_belongs_to_an_owner()
    {
        $project = factory('App\Project')->create();
        $this->assertInstanceOf('App\User', $project->owner);
    }
}
