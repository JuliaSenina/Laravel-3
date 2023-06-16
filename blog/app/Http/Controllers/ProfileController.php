<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function __invoke()
  {
    return view('profile', ['user' => Auth::user()]);
  }
}
