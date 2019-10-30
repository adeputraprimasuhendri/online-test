<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
class RandomizeReward extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('register', ['users' => $users]);
    }

    public function simulate(){
        $limit = 200000;
        $getReward = 0;
        $users = User::orderByRaw("RAND()")->get();
        foreach($users as $user){
            $reward = rand($user->minReward, $user->maxReward);
            if($limit >= $reward){
                $getReward= $reward;
                $limit = $limit - $reward;
            }else{
                $getReward = $limit;
                $limit = 0;
            }
            $data[] = [
                    "fullname"=>$user->fullname,
                    "minReward"=>$user->minReward,
                    "maxReward"=>$user->maxReward,
                    "reward"=>$getReward
            ];
        }
        return view('simulate', ['users' => $data]);
    }

    public function register(){
        $user = new User();
        $user->fullname = request('fullname');
        $user->minReward = request('minReward');
        $user->maxReward = request('maxReward');
        $user->save();
        return redirect('/register');
    }
    
}