<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $users=User::all();
        $search=$request->search;
        // dd($users);
        $users=User::where('name','like',"%".$request->users."%")
        ->orwhere('email','like',"%".$request->users."%")
        ->get();

        // dd($search);

        return view('users.index', compact('search','users'));
    }

    public function search(Request $request)
    {
        // $users=User::all();
        // $search=$request->search;
        // // dd($users);
        // $users=User::where('name','like',"%".$request->users."%")
        // ->orwhere('email','like',"%".$request->users."%")
        // ->get();

        // return view('users.index', compact('search','users'));
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }



}
