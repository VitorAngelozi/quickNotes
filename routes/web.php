<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::resource('pokemons', PokemonController::class);