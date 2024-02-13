<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class GetCharacterListController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('User/CharacterList', [
            'test' => 'unko'
        ]);
    }
}
