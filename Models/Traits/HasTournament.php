<?php

trait HasTournament
{
    /** @var Tournament|null */
    protected $tournament;

    public function setTournament(Tournament $tournament): void
    {
        $this->tournament = $tournament;
    }

    public function getTournament(): Tournament
    {
        return $this->tournament;
    }
}
