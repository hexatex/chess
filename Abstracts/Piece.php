<?php

abstract class Piece extends Model
{
    /** @var Ranks|int */
    protected $rank = Ranks::one;

    /** @var Files|int */
    protected $file = Files::a;

    /** @var Colors|string */
    protected $color = Colors::black;

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

    /**
     * @param Ranks|int
     */
    public function setRank(int $rank): void
    {
        $this->rank = $rank;
    }

    /**
     * @return Ranks|int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @param Files|int
     */
    public function setFile(int $file): void
    {
        $this->file = $file;
    }

    /**
     * @return Files|int
     */
    public function getFile(): int
    {
        return $this->file;
    }

    /**
     * @param Colors|string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return Colors|string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param Move[] $moves
     * @param Move $move
     * @return bool
     */
    protected function addMove(array &$moves, Move $move): bool
    {
        if (!$move->getIsOnBoard()) {
            return false;
        }

        $moves[] = $move;

        return true;
    }
}
