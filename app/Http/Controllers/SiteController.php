<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewUser;

class SiteController extends Controller
{
    function Home()
    {
        return view('home');
    }
    function Account()
    {
        return view('account');
    }
    function Data($name, $number)
    {
        return view('data', ['namekey' => $name, 'numberkey' => $number]);
    }

    public function newUser(Request $request)
    {

        echo "<pre>";
        print_r($request->all());

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'mobile' => 'required',
            ]
        );

        $newUser = new NewUser;
        $newUser->name = $request['name'];
        $newUser->mobile = $request['mobile'];
        $newUser->email = $request['email'];
        $newUser->save();
    }
}