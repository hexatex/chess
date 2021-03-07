<?php

class Game extends Model
{
    use HasPlayers;

    /** @var Board|null */
    protected $board;

    /** @var Player */
    protected $blackPlayer;

    /** @var Player */
    protected $whitePlayer;

    public function setBoard(Board $board): void
    {
        $this->board = $board;
    }

    public function getBoard(): Board
    {
        return $this->board;
    }

    public function setBlackPlayer(Player $player): void
    {
        $this->addPlayer($player);
        $this->blackPlayer = $player;
    }

    public function setWhitePlayer(Player $player): void
    {
        $this->addPlayer($player);
        $this->whitePlayer = $player;
    }
}
