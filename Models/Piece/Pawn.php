<?php

class Pawn extends Piece
{
    /**
     * @return Move[]
     */
    public function getAvailableMoves(): array
    {
        $moves = [
            new Move($this->rank + $this->forward(1), $this->file),
        ];

        $pawnRank = $this->color === Colors::black ? Ranks::seven : Ranks::two;
        if ($this->rank === $pawnRank) {
            $moves[] = new Move($this->rank + $this->forward(2), $this->file); // Two step advance
        }

        $this->addCaptureMove($moves, 1);
        $this->addCaptureMove($moves, -1);

        return $moves;
    }

    /*
     * Private
     */
    private function addCaptureMove(array &$moves, int $fileOffset)
    {
        $opponent = $this->board->getPiece($this->rank + $this->forward(1), $this->file + $fileOffset);
        if ($opponent) {
            $moves[] = new Move($opponent->getRank(), $opponent->getFile());
        }
    }

    private function forward(int $i): int
    {
        return $this->color === Colors::black ? $i * -1 : $i;
    }
}
