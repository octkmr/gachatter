<?php

namespace App\Domain\Repositories\Character;

interface IFetchRepository
{
    public function execute(): array;
}
