<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StateController extends Controller
{
  function recCookie()
  {
    return response()
      ->view('state.view')
      ->cookie('app_title', 'Laravel', 60*24*30);
  }
    //
}
