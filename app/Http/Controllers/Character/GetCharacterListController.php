<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\UseCases\Character\GetListAction as CharacterGetListAction;
use Inertia\Inertia;
use Inertia\Response;

class GetCharacterListController extends Controller
{
    public function __construct(
        private readonly CharacterGetListAction $characterGetListAction
    ) {}

    public function __invoke(): Response
    {
        $characterList = $this->characterGetListAction->handle();

        return Inertia::render('User/CharacterList', [
            'characterList' => $characterList,
        ]);
    }
}
