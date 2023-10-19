<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Subscription;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function welcome(){
      return view('welcome');
    }

    public function about(){
        return view('about');

    }

    public function events(){
      return view('events');
    }


    public function gallery(){
      return view('gallery');
    }

    public function contacts(){
      return view('contacts');
    }

    public function donate(){
      return view('donate');
    }

    public function volunteer(){
      return view('volunteer');
    }

    public function subscription(Request $request){

        $data = $request->except(['_token']);
        $subscription = Subscription::create($data);


      $response = ['statusCode' => 1, 
        'subscription' => $data, 
        'error' => false
      ];

      return response()->json($response, 200);

    }
}
