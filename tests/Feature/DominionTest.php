<?php

namespace OpenDominion\Tests\Feature;

use CoreDataSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use OpenDominion\Tests\BaseTestCase;

class DominionTest extends BaseTestCase
{
    use DatabaseMigrations;

    public function testUserSeesNoActiveDominionsWhenUserDoesntHaveAnyActiveDominions()
    {
        $this->createAndImpersonateUser();

        $this->visit('/dashboard')
            ->see('Dashboard')
            ->see('You have no active dominions');
    }

    public function testUserCantPlayYetDuringPreRound()
    {
        $this->markTestIncomplete();
    }

    public function testUserCanBeginPlayingOnceRoundStarts()
    {
        $this->markTestIncomplete();
    }

    public function testUserCanPlayDominion()
    {
        $this->markTestIncomplete();
    }

    public function testUserCanSeeStatusPage()
    {
        $this->markTestIncomplete();
//        $this->seed(CoreDataSeeder::class);
//        $user = $this->createAndImpersonateUser();
//        $round = $this->createRound();
//        $dominion = $this->createDominion($user, $round);
//
//        $this->visit('dominion/1/status')
//            ->see("{$dominion->name} (#1 Testing Round)");
    }
}
