<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function indexAction()
    {
        return 'This is a new post from controller';
    }
}
