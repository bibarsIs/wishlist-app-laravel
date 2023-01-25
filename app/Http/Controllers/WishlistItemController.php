<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use Illuminate\Http\Request;

class WishlistItemController extends Controller
{
    public function index()
    {
        return WishlistItem::latest()->take(6)->get();
    }
}
