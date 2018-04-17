<?php
/**
 * Created by PhpStorm.
 * User: Matthijs
 * Date: 15-3-2018
 * Time: 13:36
 */

namespace Tests\Unit;

use App\CreditItems;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class TeamTest extends TestCase
{
    use WithFaker;

    private $naam;

    public function setUp()
    {
        parent::setUp();
        $this->naam = $this->faker->word;

        $this->team = new Team(
            $this->naam
        );
    }

    /** @test */
    public function a_team_has_a_naam()
    {
        $this->assertEquals($this->naam, $this->team->naam());
    }

}
