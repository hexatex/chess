<?php

class Tournament extends Model
{
    use HasGames;
    use HasPlayers {
        addPlayer as parentAddPlayer;
    }

    /** @var TournamentFormats|int */
    protected $format = TournamentFormats::roundRobin;

    /** @var ScoringVariations|int */
    protected $scoringVariation = ScoringVariations::regular;

    /**
     * @param TournamentFormats|int $format
     */
    public function setFormat(int $format): void
    {
        $this->format = $format;
    }

    /**
     * @return TournamentFormats|int
     */
    public function getFormat(): int
    {
        return $this->format;
    }

    /**
     * @param ScoringVariations|int $scoringVariation
     */
    public function setScoringVariation(int $scoringVariation): void
    {
        $this->scoringVariation = $scoringVariation;
    }

    /**
     * @return ScoringVariations|int
     */
    public function getScoringVariation(): int
    {
        return $this->scoringVariation;
    }

    public function addPlayer(Player $player): void
    {
        $this->parentAddPlayer($player);
        $player->setTournament($this);
    }
}
