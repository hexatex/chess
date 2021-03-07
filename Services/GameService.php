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
        $board = $this->boardService->get();

        $game = new Game;
        $game->setBoard($board);

        return $game;
    }

    public function movePiece(Game $game, Move $move)
    {
        $captured = $game->getBoard()->movePiece($move);
        if ($captured) {
            $move->getPiece()->getPlayer()->addCapturedPiece($captured);
        }
    }
}
