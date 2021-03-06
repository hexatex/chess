<?php

class Move extends Model
{
    /** @var Ranks|int */
    protected $rank;

    /** @var Files|int */
    protected $file;

    public function __construct(int $rank, int $file)
    {
        parent::__construct();

        $this->rank = $rank;
        $this->file = $file;
    }

    /**
     * @return Ranks|int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @return Files|int
     */
    public function getFile(): int
    {
        return $this->file;
    }

    public function getIsOnBoard()
    {
        return $this->getFile() > Files::a
            && $this->getFile() < Files::b
            && $this->getRank() > Ranks::one
            && $this->getRank() < Ranks::eight;
    }
}
