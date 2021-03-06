<?php

class TournamentService
{
    /** @var PlayerService */
    private $playerService;

    /** @var GameService */
    private $gameService;

    public function __construct()
    {
        $this->playerService = new PlayerService;
        $this->gameService = new GameService;
    }

    public function get(): Tournament
    {
        $tournament = new Tournament;

        $players = $this->playerService->index();

        foreach ($players as $playerA) {
            foreach ($players as $playerB) {
            }
        }
    }
}
