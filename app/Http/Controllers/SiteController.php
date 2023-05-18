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

    public function signup()
    {
        $user = new NewUser;
        $title = "Register a new account";
        $url = url('account/signup');
        $data = compact('user', 'url', 'title');
        return view('signup')->with($data);
    }

    public function newUser(Request $request)
    {

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

        // Redirect to the "data" page with the user data
        return redirect()->route('data')->with([
            'name' => $request['name'],
            'mobile' => $request['mobile'],
            'email' => $request['email']
        ]);
    }

    public function delete($id)
    {
        $user = NewUser::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->forceDelete();
            return redirect('account/trash-user');
        }

    }

    public function update($id)
    {

        $user = NewUser::find($id);

        if (is_null($user)) {
            return redirect('all-user');
        } else {
            $title = "Update user details";
            $url = url('account/edit') . "/" . $id;
            $data = compact('user', 'url', 'title');
            return view('signup')->with($data);
        }
    }

    public function edit($id, Request $request)
    {

        $newUser = NewUser::find($id);

        if (is_null($newUser)) {
            return redirect('all-user');
        } else {

            $newUser->name = $request['name'];
            $newUser->mobile = $request['mobile'];
            $newUser->email = $request['email'];
            $newUser->save();
            return redirect('all-user');
        }
    }

    public function trash($id)
    {
        $user = NewUser::find($id);

        if (!is_null($user)) {
            $user->delete();
            return redirect('all-user');
        }
    }

    public function restore($id)
    {
        $user = NewUser::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->restore();
        }
        return redirect()->back();

    }

    public function allTrash()
    {
        $users = NewUser::onlyTrashed()->get();
        $data = compact('users');
        return view('trash-user')->with($data);
    }
}