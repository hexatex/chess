<?php

trait HasRankFile
{
    /** @var Ranks|int */
    protected $rank;

    /** @var Files|int */
    protected $file;

    /**
     * @param Ranks|int $rank
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
     * @param Files|int $file
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
}
