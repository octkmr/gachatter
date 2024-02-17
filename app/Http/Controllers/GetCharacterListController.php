<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class GetCharacterListController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('User/CharacterList', [
            'test' => 'unko',
        ]);
    }
}
