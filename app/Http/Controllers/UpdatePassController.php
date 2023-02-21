<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //per decriptare e criptare pass
use App\Models\User; //per accedere alla password di un utente

class UpdatePassController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');  //perchè solo utente loggato può cambiare la password
    }

    public function ShowChangePassForm()
    {
        return view('UpdatePass');
    }

    public function ChangePass(Request $request)
    {
      $this->validate($request,[
      'old_password' => ['required', 'string', 'min:8'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
     'password_confirmation' => ['required', 'string', 'min:8'],
      ]);

      $current_user=auth()->user(); //utente attualmente loggato da cui prendo la pass per vedere se combacia con quella vecchia

      if(Hash::check($request->old_password,$current_user->password)){
      $current_user->update([
      'password'=>bcrypt($request->password)
      ]);
      return redirect()->back()->with('status','password successfully changed');

      } else {
      return redirect()->back()->with('status','old password does not match');
      }

    }

}
