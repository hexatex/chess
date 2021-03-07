<?php

class Rook extends Piece
{
    /**
     * @return Move[]
     */
    public function getAvailableMoves(): array
    {
        $allOffBoard = false;

        $moves = [];
        for ($i = 1; $allOffBoard; $i++) {
            $allOffBoard = !$this->addMove($moves, new Move($this, $this->rank + $i, $this->file))
                && !$this->addMove($moves, new Move($this, $this->rank, $this->file + 1))
                && !$this->addMove($moves, new Move($this, $this->rank - 1, $this->file))
                && !$this->addMove($moves, new Move($this, $this->rank, $this->file - 1));
        }

        return $moves;
    }
}
