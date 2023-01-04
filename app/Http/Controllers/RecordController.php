<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;

class RecordController extends Controller
{
  public function find()
  {
    return Book::find(1)->title;
  }

  public function dump()
  {
    return Book::groupBy('publisher')
      ->having('price_avg', '<', 2500)
      ->selectRaw('publisher, AVG(price) AS price_avg')
      ->dump()
      ->get();
  }

  public function hasmany()
  {
    return view('record.hasmany', [
      'book'=>Book::find(1),
    ]);
  }
    //
}
