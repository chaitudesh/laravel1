<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\DB;
// use illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


use App\Models\User;
class UsersController extends Controller
{
    //
    // function loadView()
    // {
    //     $data = ['anil', 'chaitanya', 'guru', 'sagar'];
    //     return view('users', ["name" => $data]);
    // }

    // function getData()
    // {
    //     // return $req->input();
    //   return User::all();
    // }
    // function getData(Request $req)
    // {
    //     // return $req->input();
    //     return $req->input("username");
    // }

    // function index()
    // {
    //     // echo "Db connection will be here";
    //     return DB::select("select * from users");
    // }

    function index()
    {
        // echo "API call";
        $client = new Client;
        $request = $client->get('https://jsonplaceholder.typicode.com/posts');
        $response = $request->getBody();

        $data = json_decode($response);

        $page_data = ['collection' => $data];

        return view('users', compact('data'));
    }

    function storedata(Request $req)
    {
        $data = $req->input('user');
        $req->session()->flash('user', $data);
        $req->session()->put('data', $req->input('email'));
        echo session('data');
        // return redirect('store');

    }
}
