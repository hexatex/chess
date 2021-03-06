<?php

class PlayerService
{
    /**
     * @return Player[]
     */
    public function index(): array
    {
        return [
            new Player,
            new Player,
            new Player,
        ];
    }
}
