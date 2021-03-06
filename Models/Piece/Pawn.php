<?php

class Pawn extends Piece
{
    /**
     * @return Move[]
     */
    public function getAvailableMoves(): array
    {
        $moves = [
            new Move($this->rank + $this->positive(1), $this->file),
        ];

        $pawnRank = $this->color === Colors::black ? Ranks::seven : Ranks::two;
        if ($this->rank === $pawnRank) {
            $moves[] = new Move($this->rank + $this->positive(2), $this->file);
        }

        $this->addCapture($moves, $this->positive(1));
        $this->addCapture($moves, $this->negative(1));

        return $moves;
    }

    /*
     * Private
     */
    private function addCapture(array &$moves, int $fileOffset)
    {
        $opponent = $this->board->getPiece($this->rank + $this->positive(1), $this->file + $fileOffset);
        if ($opponent) {
            $moves[] = new Move($opponent->getRank(), $opponent->getFile());
        }
    }
}
