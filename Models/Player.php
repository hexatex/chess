<?php

class Player extends Model
{
    use HasColor, HasTournament;

    /** @var Game[] */
    protected $gamesWon = [];

    /** @var Game[] */
    protected $gamesDrawn = [];

    /** @var Game[] */
    protected $gamesLost = [];

    /** @var Game */
    protected $currentGame;

    /** @var Piece[] */
    protected $capturedPieces = [];

    public function getScore(): int
    {
        if ($this->tournament && $this->tournament->getScoringVariation() === ScoringVariations::footballScoring) {
            return count($this->gamesDrawn) + (count($this->gamesWon) * 3);
        }

        return count($this->gamesWon) + (count($this->gamesDrawn) / 2);
    }

    public function setCurrentGame(Game $game): void
    {
        $this->currentGame = $game;
    }

    public function getCurrentGame(): Game
    {
        return $this->currentGame;
    }

    public function addCapturedPiece(Piece $piece): void
    {
        $this->capturedPieces[$piece->getCode()] = $piece;
    }

    /**
     * @return Piece[]
     */
    public function getCapturedPieces(): array
    {
        return $this->capturedPieces;
    }

    public function removeCapturedPiece(Piece $piece): void
    {
        unset($this->capturedPieces[$piece->getCode()]);
    }
}
