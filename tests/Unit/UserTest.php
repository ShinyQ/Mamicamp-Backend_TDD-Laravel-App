<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Facades\Tests\Setup\ProjectFactory;
use App\User;

class UserTest extends TestCase
{
    use RefreshDatabase;


    public function test_a_user_has_projects()
    {
        $user = factory('App\User')->create();
        $this->assertInstanceOf(Collection::class, $user->projects);
    }

    /** @test */
    function a_user_has_accessible_projects()
    {
        $john = $this->signIn();
        ProjectFactory::ownedBy($john)->create();
        $this->assertCount(1, $john->accessibleProjects());

        $sally = factory(User::class)->create();
        $nick = factory(User::class)->create();

        $project = tap(ProjectFactory::ownedBy($sally)->create())->invite($nick);
        $this->assertCount(1, $john->accessibleProjects());

        $project->invite($john);
        $this->assertCount(2, $john->accessibleProjects());
    }
}
