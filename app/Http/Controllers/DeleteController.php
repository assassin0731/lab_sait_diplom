<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DeleteController extends Controller
{
  public function getProducts($id)
{
  return view('fordelete', [
      'id' => $id,
  ]);
}


}
