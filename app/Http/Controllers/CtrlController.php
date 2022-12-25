<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CtrlController extends Controller
{

  public function __construct()
  {
    $this->middleware(function($request, $next) {
      // 処理
      return $next($request);
    });
  }
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
  public function redirectParam()
  {
    return redirect()->route('param', ['id'=>108]);
  }

  public function redriectRoute()
  {
    return redirect()->route('param', ['id=>108']);
  }

  public function redirectAction()
  {
    return redirect()->action([RouteController::class, 'param'], ['id'=>108]);
  }

  public function redirectAway()
  {
    return redirect()->away('https://wings.msn.to/');
  }

  public function index(Request $req)
  {
    //return "リクエストパス：{$req->path()}";
    return "リクエストパス：" . request()->path;
  }

  public function form()
  {
    return view('ctrl.form', ['result'=>'']);
  }

  /*public function result(Request $req)
  {
    $name = $req->name;
    return view('ctrl.form', [
        'result'=>'こんにちは、' . $name . "さん！",
    ]);
  }*/
  public function result(Request $req)
  {
    $name = $req->name;
    if (empty($name) || mb_strlen($name) > 10) {
      return redirect('ctrl/form')
        ->withInput()
        ->with('alert', '名前は必須、または10文字以内で入力してください。');
    }
    else {
      return view('ctrl.form', [
        'result'=>'こんにちは、' . $name . 'さん！',
      ]);
    }
  }

  public function upload()
  {
    return view('ctrl.upload', ['result'=>'']);
  }

  public function uploadfile(Request $req)
  {
    if (!$req->hasFile('upfile')) {
      return 'ファイルを指定してください。';
    }

    $file = $req->upfile;
    if (!$file->isValid()) {
      return 'アップロードに失敗しました。';
    }

    $name = $file->getClientOriginalName();

    $file->storeAs('files', $name);
    return view('ctrl.upload', [
      'result'=>$name . 'をアップロードしました。'
    ]);
  }

  public function middle()
  {
    return 'log is recorded.';
  }
}






