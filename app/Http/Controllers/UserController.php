<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //

    public function getUser($username)
    {
        $user = User::where('username', 'like', $username)->first();
        return $user;
    }

    public function checkExistingUser($username)
    {
        $user = $this->getUser($username);
        return $user == NULL ? false : true;
    }

    public function updateToken($username, $token)
    {
        $user = $this->getuser($username);
        $user->access_token = $token;
        $user->save();
    }
    public function login(Request $request)
    {
        $base_url = config('global.base_url');
        $url =  $base_url . "Account/LogOn";
        $username = $request->get('user');
        $password = $request->get('password');
        $isStudent = false;
        if (!str_contains($username, "-")) {
            $url =  "$base_url" . "Account/LogOnBinusian";
            $isStudent = true;
        }
        $response = Http::asForm()->post($url, [
            "username" => $username,
            "password" => $password
        ]);
        if ($response->successful() == false) {
            return redirect("login")->withErrors("Invalid Username or Password");
        }
        $name = "";
        $token = "";
        $role = "";
        if ($isStudent == true) {
            $role = "Student";
            $token = $response->json()["Token"]["token"];
            // login as student
            $new_url = $base_url . "Student";
            $newResponse = Http::get($new_url, [
                "nim" => $username
            ]);
            $name = $newResponse->json()["Name"];
        } else {
            // login as ast
            $role = "Assistant";
            $token = $response->json()["access_token"];
            $new_url = $base_url . "Assistant";
            $newResponse = Http::get($new_url, [
                "initial" => $username,
                "generation" => substr($username, 2)
            ]);
            
            $name = $newResponse->json()[0]["Name"];
        }
        //put username in session
        $request->session()->put('username', $username);
        $request->session()->put('role', $role);
        $request->session()->put('token', $token);
        $request->session()->put('name', $name);


        // //check existing user
        // if($this->checkExistingUser($username))
        // {
        //     $this->updateToken($username,$token);
        // }
        // else{
        //     $newUser = new User;
        //     $newUser->name = $name;
        //     $newUser->username = $username;
        //     $newUser->role = $role;
        //     $newUser->access_token = $token;
        //     $newUser->save();
        // }

        return redirect('learning-video');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("login");
    }
}
