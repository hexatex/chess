<?php

class Bishop extends Piece
{
    /**
     * @return Move[]
     */
    public function getAvailableMoves(): array
    {
        $allOffBoard = false;

        /*
         * Todo the ranks and files are shared between black & white, +/- needs to be inverted conditionally,
         * same goes for >/< for the Pawn, and maybe other places
         */

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
