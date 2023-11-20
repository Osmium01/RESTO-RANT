<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restorant;
use App\Models\User;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;


use Session;



class RestoController extends Controller
{
    //
    function index()
    {
        
        $data = Restorant::orderBy('updated_at', 'desc')->limit(2)->get();

        return view('home', ["data" => $data]);
    }

    function list(){
        $data = Restorant::all();
        return view('list', ["data" => $data]);
    }

    function add(Request $req){
        
        $resto = new Restorant;
        
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address = $req->input('address');
        $resto->save();

        $req->session()->flash('status', 'Restorant Entered Successfully');
        return redirect('list');
    }

    function delete($id){
        $data = Restorant::find($id);
        $data->delete();

        Session()->flash('deletestatus', 'Restorant Deleted Successfully');
        return redirect('list');
        
    }

    function edit($id){
        $data = Restorant::find($id);
        return view('edit', ["data" => $data]);
    }

    function update(Request $req){
        
        $resto = Restorant::find($req->input('id'));
        
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address = $req->input('address');
        $resto->save();

        $req->session()->flash('updatestatus', 'Restorant updated Successfully');
        return redirect('list');
    }

    function register(Request $req){
        $user = new User;
        
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        // $user->password = Crypt::encryptString($req->input('password'));
        // use hash
        $user->password = password_hash($req->input('password'), PASSWORD_BCRYPT);

        
        $user->contact = $req->input('contact');
        $user->save();

        $req->session()->put('user', $req->input('name'));
        return redirect('/');
    }


    function login(Request $req){
        $user = User::where('email', $req->input('email'))->get();
        if(password_verify($req->input('password'), $user[0]->password)){
            $req->session()->put('user', $user[0]->name);
            return redirect('/');
    }

}
    
}
