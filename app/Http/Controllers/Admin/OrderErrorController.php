<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderErrorController extends Controller
{
    public function showErrorPage(Request $request, string $errorMessage)
    {
        Session::flash('error', $errorMessage);
        return view('admin.import.order_error', [
            'error_message' => $errorMessage,
        ]);
    }
}