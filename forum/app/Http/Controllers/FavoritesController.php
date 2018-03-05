<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{

    /**
     * FavoritesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }

    public function store(Reply $reply)
    {
        $reply->favorite();
        return back();
    }

    public function destroy(Reply $reply)
    {
        $reply->unfavorite();
    }
}
