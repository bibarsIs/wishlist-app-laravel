<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WishlistItem;
use Illuminate\Http\Request;

class WishlistItemController extends Controller
{
    public function index(): array|\Illuminate\Database\Eloquent\Collection
    {
        return WishlistItem::with('creator')->latest()->take(6)->get();
    }
}
