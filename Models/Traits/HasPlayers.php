<?php

trait HasPlayers
{
    /** @var Player[] */
    protected $players = [];

    public function addPlayer(Player $player): void
    {
        $this->players[] = $player;
    }
}
