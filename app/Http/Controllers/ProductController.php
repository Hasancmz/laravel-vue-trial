<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;


class ProductController extends Controller
{
    public function index()
    {
        $cards = Card::select('*');
        $cards = $cards->orderBy('title', 'desc')->Paginate(12);

        return view('index', compact('cards'));
    }
}
