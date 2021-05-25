<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function test(){
    //query using raw sql

    // DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', 
    // [1, 'Dayle','germanwerr@gmail.com','ekrekjrekjrk']
     //  );
    
    //DB::update('update users set name = ? where id = 1',['Christy']);

    // DB::delete('delete from users where id = ?', [1]);

    //  $item = DB::select('select * from users');
    //  return $item;
     
    //query using Eloquent ORM

    // $user = new User();
    // $user->name = 'Phil';
    // $user->email = 'klenner@gmail.com';
    // $user->password = 'Philsddd2';

    // $user->save();

    $user = User::all();
    return $user;

    
        return view('new');
    }
}
