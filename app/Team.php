<?php
/**
 * Created by PhpStorm.
 * User: Matthijs
 * Date: 15-3-2018
 * Time: 13:40
 */
class Team
{
    protected $team_id;
    protected $competitie_id;
    protected $naam;
    protected $klasse;
    protected $klasse_afkorting;

    public function __construct($team_id, $competitie_id, $naam, $klasse, $klasse_afkorting)
    {
        $this->team_id = $team_id;
        $this->competitie_id = $competitie_id;
        $this->naam = $naam;
        $this->klasse = $klasse;
        $this->klasse_afkorting = $klasse_afkorting;
    }

    public function team_id()
    {
        return $this->team_id;
    }


    public function competitie_id()
    {
        return $this->competitie_id;
    }

    public function naam()
    {
        return $this->naam;
    }

    /**
     * @return mixed
     */
    public function klasse()
    {
        return $this->klasse;
    }

    /**
     * @return mixed
     */
    public function klasse_afkorting()
    {
        return $this->klasse_afkorting;
    }
}
