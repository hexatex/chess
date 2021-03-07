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
                /* Todo This quora answer is very long, and lists the many different rules to determine which player is
                 * white and which is black
                 * https://www.quora.com/In-the-game-of-chess-who-determines-who-plays-white-and-who-plays-black/answer/Brad-Hoehne?ch=10&share=b95ef02d&srid=hBW8
                 */
            }
        }

        return $tournament;
    }
}
