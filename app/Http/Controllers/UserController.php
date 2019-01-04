<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::select('select email from utilisateurs where age > 42');

        foreach ($utilisateurs as $utilisateur) {
            return $user->email;
        }
    }}
