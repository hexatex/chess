<?php

trait HasGames
{
    /** @var Game[] */
    protected $games = [];

    public function addGame(Game $game): void
    {
        $this->games[$game->getCode()] = $game;
    }

    public function removeGame(Game $game): void
    {
        unset($this->games[$game->getCode()]);
    }

    /**
     * @return Game[]
     */
    public function getGames(): array
    {
        return $this->games;
    }
}
