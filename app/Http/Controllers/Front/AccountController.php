<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


class AccountController extends Controller
{
    public function index()
    {
        return view('front.account.index');
    }
}
