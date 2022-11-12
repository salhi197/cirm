<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;
use App\Commune;
use App\Http\Requests\StoreUser;
use App\Wilaya;

class UserController extends Controller
{
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        return view('users.create',compact('wilayas','communes'));
    }
    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'email'=>'unique'
        ]);


        $user = new User();
        $user->name = $request->get('nom');
        $user->prenom = $request->get('prenom');
        $user->email = $request->get('email');
        $user->sexe = $request->get('sexe');
        $user->identite = $request->get('identite');
        $user->nit = $request->get('nit');
        $user->nia = $request->get('nia');
        $user->naissance = $request->get('naissance');
        $user->telephone = $request->get('telephone');
        $user->commune = $request->get('commune');
        $user->wilaya = $request->get('wilaya');
        $user->type = $request->get('type');
        $user->date_emission = $request->get('date_emission');
        $user->password = Hash::make($request->get('password'));
        $user->password_text = $request->get('password');

        $user->save();
        return redirect()->route('login');
    }  
    public function edit($id_user)
    {
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        $user = User::find($id_user);
        return view('users.edit',compact('user','wilayas','communes'));
    }

    public function update(Request $request,$id_user)
    {
        $user = User::find($id_user);
        $user->name = $request->get('nom');
        $user->prenom = $request->get('prenom');
        
        $user->telephone = $request->get('telephone');
        $user->save();
        return redirect()->route('home');
    }

    
    public function destroy($id_user)
    {
        $user = User::find($id_user);
        $user->delete();    
        return redirect()->route('user.index')->with('success', 'le  commercial a été supprimé ');
    }

}
