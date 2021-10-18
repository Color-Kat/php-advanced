<?php

interface DBInterface
{
    public function create(): self;
    public function table(string $tableName): self;
    public function where(string $field, mixed $value): self;
    public function select(string ...$fields): self;
    public function get(): mixed;
}