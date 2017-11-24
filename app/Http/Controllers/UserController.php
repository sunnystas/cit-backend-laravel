<?php

namespace App\Http\Controllers;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $request->user();
    }
}
