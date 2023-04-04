<?php

namespace App\Http\Controllers;

use App\Models\Redeem;
use App\Models\coderedeem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DB;

class RedeemCode extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Gamertag = Auth::user()->Gamertag;
        $player = Redeem::where('Gamertag', $Gamertag)->first();
        if (!$player){
            return view('page.redeem');
        } else {
            return redirect('berhasil');
        }
        //return view('page.redeem');
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
        return view('page.berhasil');
        // $Gamertag = Auth::user()->Gamertag;
        // $player = Redeem::where('Gamertag', $Gamertag)->first();
        // if (!$player){
        //     $code = $request->input('code');
        //     $insert = Redeem::create([
        //         'Gamertag' => $Gamertag,
        //         'Checklist' => 'false',
        //     ]);
        //     return redirect()->back()->withErrors(['msg' => 'Redeem diperoleh silahkan claim di dalam server']);
        // } else {
        //     return view('page.berhasil');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Redeem  $redeem
     * @return \Illuminate\Http\Response
     */
    public function show(Redeem $redeem)
    {
        $Gamertag = Auth::user()->Gamertag;
        $player = Redeem::where('Gamertag', $Gamertag)->first();
        if (!$player){
            return redirect('redeem');
        } else {
            return view('page.sudah');
        }
        //return view('page.redeem');
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
        $code = $request->get('code');
        $Gamertag = Auth::user()->Gamertag;
        $player = Redeem::where('Gamertag', $Gamertag)->first();
        if (!$player){
            $coder = coderedeem::where('code', $code)->first();
            if ($coder){
                $insert = Redeem::create([
                    'Gamertag' => $Gamertag,
                    'Checklist' => 'false',
                ]);
                return view('page.berhasil')->withErrors(['msg' => 'Redeem Berhasil silahkan claim di dalam server']);
            }else {
                return redirect()->back()->withErrors(['msg' => 'code reedem salah masukan code yang masih aktif']);
            }
        } else {
            return redirect('berhasil');
        }
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
