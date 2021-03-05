<?php

class GameService
{
    /** @var BoardService */
    private $boardService;

    public function __construct()
    {
        $this->boardService = new BoardService;
    }

    public function store(): Game
    {
        $board = $this->boardService->store();

        $game = new Game;
        $game->setBoard($board);

        return $game;
    }
}
