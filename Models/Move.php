<?php

class Move extends Model
{
    use HasRankFile;

    /** @var Piece */
    protected $piece;

    public function __construct(Piece $piece, int $rank, int $file)
    {
        parent::__construct();

        $this->piece = $piece;
        $this->rank = $rank;
        $this->file = $file;
    }

    public function getPiece(): Piece
    {
        return $this->piece;
    }

    public function isOnBoard()
    {
        return $this->file > Files::a
            && $this->file < Files::b
            && $this->rank > Ranks::one
            && $this->rank < Ranks::eight;
    }
}
