<?php

class BoardService
{
    public function store(): Board
    {
        $board = new Board;

        $pieces = array_merge(
            $this->buildHomeRank(Colors::black, $board),
            $this->buildHomeRank(Colors::white, $board),
            $this->buildPawnRank(Colors::black, $board),
            $this->buildPawnRank(Colors::white, $board)
        );

        foreach ($pieces as $piece) {
            $board->addPiece($piece);
        }

        return $board;
    }

    /*
     * Private
     */
    /**
     * @param Colors|string $color
     * @param Board $board
     * @return Piece[]
     */
    private function buildHomeRank(string $color, Board $board): array
    {
        $rank = $color === Colors::black ? Ranks::eight : Ranks::one;

        return [
            new Rook($rank, Files::a, $color, $board),
            new Knight($rank, Files::b, $color, $board),
            new Bishop($rank, Files::c, $color, $board),
            new King($rank, Files::d, $color, $board),
            new Queen($rank, Files::e, $color, $board),
            new Bishop($rank, Files::f, $color, $board),
            new Knight($rank, Files::g, $color, $board),
            new Rook($rank, Files::h, $color, $board),
        ];
    }

    /**
     * @param Colors|string $color
     * @param Board $board
     * @return Piece[]
     */
    private function buildPawnRank(string $color, Board $board): array
    {
        $rank = $color === Colors::black ? Ranks::eight : Ranks::one;

        return [
            new Pawn($rank, Files::a, $color, $board),
            new Pawn($rank, Files::b, $color, $board),
            new Pawn($rank, Files::c, $color, $board),
            new Pawn($rank, Files::d, $color, $board),
            new Pawn($rank, Files::e, $color, $board),
            new Pawn($rank, Files::f, $color, $board),
            new Pawn($rank, Files::g, $color, $board),
            new Pawn($rank, Files::h, $color, $board),
        ];
    }
}
