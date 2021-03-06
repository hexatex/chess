<?php

class Bishop extends Piece
{
    /**
     * @return Move[]
     */
    public function getAvailableMoves(): array
    {
        $allOffBoard = false;

        $moves = [];
        for ($i = 1; $i >= Ranks::eight + 1 || $allOffBoard; $i++) {
            $allOffBoard = !$this->addMove($moves, new Move($this->rank + $i, $this->file + $i))
                && !$this->addMove($moves, new Move($this->rank - $i, $this->file + $i))
                && !$this->addMove($moves, new Move($this->rank - $i, $this->file - $i))
                && !$this->addMove($moves, new Move($this->rank + $i, $this->file - $i));
        }

        return $moves;
    }
}
