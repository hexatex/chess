<?php

trait HasColor
{
    /** @var Colors|string */
    protected $color;

    /**
     * @param Colors|string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return Colors|string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}
