<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
  public function escape()
  {
    return view('view.escape', [
      'msg'=>'<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ">
      <p>WINGSへようこそ</p>',
    ]);
  }

  public function if()
  {
    return view('view.if', [
      'random'=>random_int(0, 100),
    ]);
  }

  public function unless()
  {
    return view('view.unless', [
      'random'=>random_int(0, 100),
    ]);
  }
  
  public function isset()
  {
    return view('view.isset', [
//      'msg'=>'こんにちは、世界！',
    ]);
  }

  public function switch()
  {
    return view('view.switch', [
      'random'=>random_int(1,5),
    ]);
  }

  public function while()
   {
    return view('view.while', []);
  }
    
  public function for() 
  {
    return view('view.for', []);
  }

  public function foreach_assoc() {
    return view('view.foreach_assoc',[
      'members'=>[
          [
          'name'=>'IWAO, Atsushi',
          'sex'=>'男',
          'birth'=>'1965-09-21',
          ],
          [
            'name'=>'TAKIMOTO, miori',
            'sex'=>'女',
            'birth'=>'知らん',
          ],
      ],
    ]);
  }

  function foreach_loop()
  {
    return view('view.foreach_loop', [
      'weeks'=>['月', '火', '水', '木', '金', '土', '日',]
    ]);
  }

  function style_class()
  {
    return view('view.style_class', [
      'isEnabled'=>true
    ]);
  }

  function checked()
  {
    return view('view.checked', [
      'isEnabled'=>true
    ]);
  }
  
  function master()
  {
    return view('view.master', [
      'msg'=>'こんにちは、世界！'
    ]);
  }

  public function comp()
  {
    $data = [
      'title'=>'こんにちは、世界！',
    ];
    return view('view.comp', $data);
  }
}   