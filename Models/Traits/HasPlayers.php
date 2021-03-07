<?php

trait HasPlayers
{
    /** @var Player[] */
    protected $players = [];

    public function addPlayer(Player $player): void
    {
        $this->players[$player->getCode()] = $player;
    }

    public function removePlayer(Player $player): void
    {
        unset($this->players[$player->getCode()]);
    }

    /**
     * @return Player[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }
}
