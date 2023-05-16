<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $comics = config('comics');

        $links = config('links');

        $lists = config('lists');

        $buy = config('buy');

        return view('home', compact('comics', 'links', 'lists', 'buy'));
    }
}
