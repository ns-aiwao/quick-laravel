<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class SaveController extends Controller
{
  public function create()
  {
    return view('save.create');
  }

  public function store(Request $req)
  {
    $b = new Book();
    $b->fill($req->except('_token'))->save();
    return redirect('/save/create');
  }
  public function edit($id)
  {
    //指定された書籍情報を取得
    return view('save.edit', ['b'=>Book::findOrFail($id)]);
  }
  
    //
}
