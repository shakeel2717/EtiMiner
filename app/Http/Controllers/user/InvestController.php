<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\Power;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'coin_id' => 'required|integer|exists:coins,id',
            'range' => 'required|integer|min:1|max:100',
        ]);
        $range = $validated['range'];
        $amount = power(auth()->user()->id) * $range / 100;
        // checking if this user have enough power
        if (power(auth()->user()->id) < $amount) {
            return redirect()->back()->withErrors('Insufficient Power');
        }
        // out this power
        $power = new Power();
        $power->user_id = auth()->user()->id;
        $power->status = true;
        $power->amount = $amount;
        $power->type = "Used";
        $power->sum = false;
        $power->save();

        $invest  = new Investment();
        $invest->user_id  = auth()->user()->id;
        $invest->coin_id  = $validated['coin_id'];
        $invest->status  = true;
        $invest->amount  = $amount;
        $invest->save();

        return redirect()->back()->with('success', 'Power Invested Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
