<?php

namespace App\Model;

class Starship
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
        private readonly string $class,
        private readonly string $captain,
        private readonly string $status,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getCaptain(): string
    {
        return $this->captain;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
