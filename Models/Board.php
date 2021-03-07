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

    public function movePiece(Move $move): ?Piece
    {
        $captured = $this->getPiece($move->getRank(), $move->getFile());

        $piece = $move->getPiece();
        $this->removePiece($piece);

        $piece->setRank($move->getRank());
        $piece->setFile($move->getFile());
        $this->addPiece($piece);

        return $captured;
    }
}
