<?php

namespace App\UseCases\Character;

use App\Domain\Repositories\Character\IFetchRepository as ICharacterFetchRepository;

class GetListAction
{
    public function __construct(
        private readonly ICharacterFetchRepository $fetchCharacterRepository
    ) {}

    public function handle(): array
    {
        return $this->fetchCharacterRepository->execute();
    }
}
