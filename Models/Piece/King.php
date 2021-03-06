<?php

class King extends Piece
{
    /**
     * @return Move[]
     */
    public function getAvailableMoves(): array
    {
        $moves = [];

        $this->addMove($moves, new Move($this->rank + 1, $this->file));
        $this->addMove($moves, new Move($this->rank + 1, $this->file + 1));
        $this->addMove($moves, new Move($this->rank, $this->file + 1));
        $this->addMove($moves, new Move($this->rank - 1, $this->file + 1));
        $this->addMove($moves, new Move($this->rank - 1, $this->file));
        $this->addMove($moves, new Move($this->rank - 1, $this->file - 1));
        $this->addMove($moves, new Move($this->rank, $this->file - 1));
        $this->addMove($moves, new Move($this->rank + 1, $this->file - 1));

        return $moves;
    }
}
