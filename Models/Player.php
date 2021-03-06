<?php

class Player extends Model
{
    /** @var Colors|string */
    protected $color;

    /** @var Tournament|null */
    protected $tournament;

    /** @var Game[] */
    protected $gamesWon = [];

    /** @var Game[] */
    protected $gamesDrawn = [];

    /** @var Game[] */
    protected $gamesLost = [];

    /**
     * @param Colors|string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setTournament(Tournament $tournament): void
    {
        $this->tournament = $tournament;
    }

    public function getScore(): int
    {
        if ($this->tournament && $this->tournament->getScoringVariation() === ScoringVariations::footballScoring) {
            return count($this->gamesDrawn) + (count($this->gamesWon) * 3);
        }

        return count($this->gamesWon) + (count($this->gamesDrawn) / 2);
    }
}
