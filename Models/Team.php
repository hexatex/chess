<?php

class Team extends Model
{
    use HasPlayers, HasTournament, HasGames;

    public function getScore(): int
    {
        $score = 0;

        foreach ($this->players as $player) {
            $score += $player->getScore();
        }

        return $score;
    }
}
