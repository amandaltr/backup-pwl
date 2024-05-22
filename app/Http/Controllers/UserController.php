<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function all()
    {
        $result = User::all();
        // echo($result[1]->id).'<br>';
        // echo($result[1]->NamaDepan).'<br>';
        // echo($result[1]->email).'<br>';
        foreach($result as $user){
            echo($user->id).'<br>';
            echo($user->name).'<br>';
            echo($user->email).'<br>';
            echo'<hr>';
        }
    }

    public function index()
    {

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
            $user = User::find(5);
            $user->email = "putri@gmail.com";
            $user->password = bcrypt('Fasilkom-TI');
            $user->save();
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
