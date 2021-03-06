<?php

class Game extends Model
{
    use HasPlayers;

    /** @var ?Board */
    protected $board;

    public function setBoard(Board $board): void
    {
        $this->board = $board;
    }
}
