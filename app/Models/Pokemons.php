<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

use function Pest\Laravel\json;

class Pokemons extends Model
{

    public static function getPokemon(){
        $response = Http::get(env('API_URL').'pokemon');
        return $response ->json();
    }

    use HasFactory;
}
