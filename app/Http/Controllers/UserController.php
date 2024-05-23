<?php
namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(); // Fetch paginated users
        return view('users.index', compact('users')); // Pass users to the view
    }

}
