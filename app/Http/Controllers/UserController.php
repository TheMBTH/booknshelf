<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\UserRepository;
use App\Repositories\ShelfRepository;

class UserController extends Controller
{
    private $users;
    private $shelves;

    public function __construct(UserRepository $users, ShelfRepository $shelves)
    {
        $this->middleware('auth');
        $this->users = $users;
        $this->shelves = $shelves;
    }

    public function current()
    {
        $this->users->current();
    }

    public function shelves()
    {
        $user = $this->users->current();
        return response()->json($this->shelves->forUser($user)->toArray());
    }

    public function profile()
    {
        $user = $this->users->current();
        return view('profile', [
            'user' => $user,
            'shelves' => $this->shelves->forUser($user),
        ]);
    }
}
