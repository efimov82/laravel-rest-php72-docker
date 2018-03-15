<?php

namespace App\Http\Controllers\RestApi;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TokenController extends Controller
{
    public function request(Request $request)
    {
      $login = $request->get('login');
      $password = $request->get('password');

      return Video::with('Owner')->skip($offset)->take($limit)->get();//->limit($limit)->offset($offset);
    }

    public function refresh(Request $request)
    {
      
    }
}
