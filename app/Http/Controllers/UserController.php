<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // check apakah user sudah terdaftar di camp ini atau belum
        // check juga berdasarkan user yang login
        // return $camp;
        // $user = Checkout::with("camp", "user")
        //     ->where("user_id", auth()->user()->id)
        //     ->get();
        // return $user;
        // return view("pages.user.index", compact("user"));
    }

    public function search(Request $request)
    {
        // $search = Checkout::search($request->q)
        //     ->query(function ($query) {
        //         $query->with("camp", "user");
        //     })
        //     ->get();
        // return $search;
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
    public function show(User $user, Checkout $checkout)
    {
        return $checkout;

        return view("pages.user.show", compact("user"));
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
