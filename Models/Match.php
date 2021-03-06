<?php

class Match extends Model
{
    /** @var Game[] */
    protected $games = [];

    public function addGame(Game $game): array
    {
        $this->games[] = $game;
    }
}
