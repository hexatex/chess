<?php

class Board extends Model
{
    /** @var Piece[] */
    protected $pieces = [];

    public function addPiece(Piece $piece): void
    {
        $this->pieces[$piece->getRank()][$piece->getFile()] = $piece;
    }

    public function getPiece(int $rank, int $file): ?Piece
    {
        return $this->pieces[$rank][$file] ?? null;
    }

    public function removePiece(Piece $piece): void
    {
        unset($this->pieces[$piece->getRank()][$piece->getFile()]);
    }
}
