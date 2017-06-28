<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Deal;

class DealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deals = Deal::all();
        
        return view('deals.index', [
            'deals' => $deals,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deal = new Deal;

        return view('deals.create', [
            'deal' => $deal,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|max:255',
        ]);
        
        $request->user()->deals()->create([
            'amount' => $request->amount,
            'category_id' => $request->category_id,
            'item_id' => $request->item_id,
            'attribute'=> $request->attribute,
        ]);
    
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deal = Deal::find($id);

        return view('deals.show', [
            'deal' => $deal,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deal = Deal::find($id);

        return view('deals.edit', [
            'deal' => $deal,
        ]);
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
        $deal = Deal::find($id);
        $deal->amount = $request->amount;
        $deal->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
   {
        $deal = Deal::find($id);
        
        if (\Auth::user()->id === $deal->user_id) {
            $deal->delete();
        }
        
        return redirect()->back();
    }
}