<?php

abstract class Piece extends Model
{
    use HasColor, HasRankFile;

    /** @var Player */
    protected $player;

    /** @var Board */
    protected $board;

    /**
     * Piece constructor.
     * @param Ranks|int $rank
     * @param Files|int $file
     * @param Colors|string $color
     * @param Board $board
     */
    public function __construct(int $rank, int $file, string $color, Board $board)
    {
        parent::__construct();

        $this->rank = $rank;
        $this->file = $file;
        $this->color = $color;
        $this->board = $board;
    }

    /**
     * @return Move[]
     */
    abstract function getAvailableMoves(): array;

    public function setPlayer(Player $player): void
    {
        $this->player = $player;
    }

    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @param Move[] $moves
     * @param Move $move
     * @return bool
     */
    protected function addMove(array &$moves, Move $move): bool
    {
        if (!$move->isOnBoard()) {
            return false;
        }

        $moves[] = $move;

        return true;
    }
}
