<?php

class GameService
{
    /** @var BoardService */
    private $boardService;

    public function __construct()
    {
        $this->boardService = new BoardService;
    }

    public function storeGame(): Game
    {
        $board = $this->boardService->storeBoard();

        $game = new Game;
        $game->setBoard($board);

        return $game;
    }
}
