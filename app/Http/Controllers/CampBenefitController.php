<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\CampBenefit;
use Illuminate\Http\Request;

class CampBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $benefits = CampBenefit::with("camp")->get();
        // return $benefits;
        return view("dashboard.camp-benefits.index", compact("benefits"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $camps = Camp::all();
        // dd($camp);
        return view("dashboard.camp-benefits.create", compact("camps"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "camp_id" => ["required", "exists:camps,id", "integer"],
            "name" => "required",
        ]);
        $data = $request->all();
        $data["camp_id"] = $request->camp_id;
        CampBenefit::create($data);
        // dd($yo);
        return redirect()->route("camp-benefits.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(CampBenefit $campBenefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CampBenefit $campBenefit)
    {
        // return $campBenefit;
        $benefits = Camp::all();
        return view(
            "dashboard.camp-benefits.edit",
            compact("campBenefit", "benefits")
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CampBenefit $campBenefit)
    {
        // return $campBenefit;
        $request->validate([
            "camp_id" => ["required", "exists:camps,id", "integer"],
            "name" => "required",
        ]);
        $data = $request->all();
        $data["camp_id"] = $request->camp_id;
        $campBenefit->update($data);
        // return $campBenefit;
        return redirect()->route("camp-benefits.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CampBenefit $campBenefit)
    {
        $campBenefit->delete();
        return redirect()->route("camp-benefits.index");
    }
}