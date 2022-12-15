<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
  function plain()
  {
    return response('こんにちは、世界！', 200)
           ->header('Content-Type', 'text/plain');
  }

  function test()
  {
    $data = [
      'msg'=>'miori',
    ];
    return view('ctrl.test', $data);
  }

  function header()
  {
    return response()
      ->view('ctrl.header', ['msg'=>'美織、愛してる！'], 200)
      ->withHeaders([
        'Content-Type'=>'text/html',
        'hage'=>'hoge',
        'garagara'=>'hebi',
      ]);
  }
}
