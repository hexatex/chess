<?php

class Game extends Model
{
    /** @var ?Board */
    protected $board;

    public function setBoard(Board $board): void
    {
        $this->board = $board;
    }
}
