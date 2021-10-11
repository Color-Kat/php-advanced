<?php

interface MultitonInterface
{
    static public function getInstance(string $instanceName): self;
    public function setName(string $name): self;
    public function getName(): string;
}