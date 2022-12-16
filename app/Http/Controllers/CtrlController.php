<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
  public function plain()
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

  public function header()
  {
    return response()
      ->view('ctrl.header', ['msg'=>'美織、愛してる！'], 200)
      ->withHeaders([
        'Content-Type'=>'text/html',
        'hage'=>'hoge',
        'garagara'=>'hebi',
      ]);
  }

  public function outJson()
  {
    return response()
      ->json([
        'name'=>'Yoshihiro, YAMADA',
        'sex'=>'male',
        'age'=>18,
      ]);
  }

  public function download()
  {
    return response()
      ->download(
        'd:/iwao/tmp/neko.txt', 'neko.txt',
        ['content-type'=>'text/plain']);
  }

  public function outImage()
  {
    return response()
      ->file('d:/iwao/tmp/usagi.png', ['content-type'=>'image/png']);
  }

  public function redirectBasic()
  {
    return redirect('hello/list');
  }

  public function redirectRoute()
  {
    return redirect()->route('list');
  }
}
