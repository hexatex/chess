<?php

class BoardService
{
    public function storeBoard(): Board
    {
        $pieces = array_merge(
            $this->buildHomeRank(Colors::black),
            $this->buildHomeRank(Colors::white),
            $this->buildPawnRank(Colors::black),
            $this->buildPawnRank(Colors::white)
        );

        $board = new Board;

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
     * @return Piece[]|array
     */
    private function buildHomeRank(string $color): array
    {
        $rank = $color === Colors::black ? Ranks::eight : Ranks::one;

        return [
            new Rook($rank, Files::a, $color),
            new Knight($rank, Files::b, $color),
            new Bishop($rank, Files::c, $color),
            new King($rank, Files::d, $color),
            new Queen($rank, Files::e, $color),
            new Bishop($rank, Files::f, $color),
            new Knight($rank, Files::g, $color),
            new Rook($rank, Files::h, $color),
        ];
    }

    /**
     * @param Colors|string $color
     * @return Piece[]|array
     */
    private function buildPawnRank(string $color): array
    {
        $rank = $color === Colors::black ? Ranks::eight : Ranks::one;

        return [
            new Pawn($rank, Files::a, $color),
            new Pawn($rank, Files::b, $color),
            new Pawn($rank, Files::c, $color),
            new Pawn($rank, Files::d, $color),
            new Pawn($rank, Files::e, $color),
            new Pawn($rank, Files::f, $color),
            new Pawn($rank, Files::g, $color),
            new Pawn($rank, Files::h, $color),
        ];
    }
}
