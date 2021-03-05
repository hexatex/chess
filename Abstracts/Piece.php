<?php

abstract class Piece extends Model
{
    /**
     * @param Ranks|int $rank
     * @param Files|int $file
     * @param Colors|string $color
     */
    public function __construct(int $rank, int $file, string $color)
    {
        parent::__construct();

        $this->rank = $rank;
        $this->file = $file;
        $this->color = $color;
    }

    /** @var int */
    public $rank = Ranks::one;

    /** @var int */
    public $file = Files::a;

    /** @var string */
    public $color = Colors::black;

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
}
