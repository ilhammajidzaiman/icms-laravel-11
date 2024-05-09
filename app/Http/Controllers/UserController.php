<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $title = 'user';

    // public function __construct()
    // {
    //     $this->title = 'user';
    // }

    public function index()
    {
        $data['title']          = $this->title;
        $data['users']          = User::orderByDesc('id')->paginate(5);
        return view('private.user.index', $data);
    }

    public function create()
    {
        $data['title']          = $this->title;
        return view('private.user.create', $data);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return view('private.user.show');
    }

    public function edit(string $id)
    {
        return view('private.user.edit');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
