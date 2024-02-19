<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Zayavka;
use Auth;

class ZayavkaController extends Controller
{
    public function submit (Request $req)
    {
      $a=Auth::user()->id;
      $zayav=new Zayavka();
      $zayav->id_user=$a;
      $zayav->plat=$req->input('plat');
      $zayav->aim=$req->input('aim');
      $zayav->viezd=$req->input('viezd');
      $zayav->metod=$req->input('metod');
      $zayav->vozvr=$req->input('vozvr');
      session(['key' => $zayav]);
      $zayav->save();
      return redirect()->route('products')->with( ['zayav' => $zayav] );
    }
    public function index()
    {
        return view('products');
    }
}
