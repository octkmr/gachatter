<?php

namespace App\Infrastructure\Repositories\Character;

use App\Domain\Repositories\Character\IFetchRepository;
use App\Models\Character;

class FetchRepository implements IFetchRepository
{
    public function execute(): array
    {
        return Character::all()->toArray();
    }
}
