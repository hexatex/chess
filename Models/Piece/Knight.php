<?php

class Knight extends Piece
{
    /**
     * @return Move[]
     */
    public function getAvailableMoves(): array
    {
        $moves = [];

        $this->addMove($moves, new Move($this->rank + 2, $this->file - 1));
        $this->addMove($moves, new Move($this->rank + 2, $this->file + 1));
        $this->addMove($moves, new Move($this->rank + 1, $this->file + 2));
        $this->addMove($moves, new Move($this->rank - 1, $this->file + 2));
        $this->addMove($moves, new Move($this->rank - 2, $this->file + 1));
        $this->addMove($moves, new Move($this->rank - 2, $this->file - 1));
        $this->addMove($moves, new Move($this->rank - 2, $this->file - 1));
        $this->addMove($moves, new Move($this->rank - 1, $this->file - 2));
        $this->addMove($moves, new Move($this->rank + 1, $this->file - 2));

        return $moves;
    }
}
