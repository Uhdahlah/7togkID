<?php

namespace App\Http\Controllers;

use App\Models\Redeem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedeemCode extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.redeem');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.redeem');
    }

    /**
     * Store a newly created resource in storage.
     *n
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ambil(Request $request)
    {
        $redem = Redeem::create([
            'Gamertag' => Auth::user()->Gamertag,
            'Checklist' => False,
        ]); 
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Redeem  $redeem
     * @return \Illuminate\Http\Response
     */
    public function show(Redeem $redeem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Redeem  $redeem
     * @return \Illuminate\Http\Response
     */
    public function edit(Redeem $redeem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Redeem  $redeem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redeem $redeem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Redeem  $redeem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redeem $redeem)
    {
        //
    }
}
