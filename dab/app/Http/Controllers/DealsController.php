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
            'year' => $request->year,
            'month' => $request->month,
            'day' => $request->day,
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
    public function look($year, $month)
   {
       $deals = Deal::where('year',$year)->where('month', $month)->get();;

         return view('deals.look', [
          'deals' => $deals,
          'year' => $year,
          'month'=> $month,
      ]);
   }
   
   public function report()
   {
        $deals = Deal::all();
        if (\Auth::check()) {
            $user = \Auth::user();
            $husband201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husband201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $husbandtotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '夫手取り')->get();
            $wife201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wife201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $wifetotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '収入')->where('category_id', '本業')->where('item_id', '妻手取り')->get();
            $main201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '収入')->where('category_id', '本業')->get();
            $main201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '収入')->where('category_id', '本業')->get();
            $maintotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '収入')->where('category_id', '本業')->get();
            $pointsite201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsite201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $pointsitetotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '収入')->where('category_id', '本業以外')->where('item_id', 'ポイントサイト')->get();
            $sub201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $sub201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $subtotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '収入')->where('category_id', '本業以外')->get();
            $income201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '収入')->get();
            $income201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '収入')->get();
            $income201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '収入')->get();
            $income201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '収入')->get();
            $income201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '収入')->get();
            $income201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '収入')->get();
            $income201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '収入')->get();
            $income201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '収入')->get();
            $income201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '収入')->get();
            $income201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '収入')->get();
            $income201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '収入')->get();
            $income201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '収入')->get();
            $incometotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '収入')->get();
            $rent201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $rent201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $renttotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '居住費')->where('item_id', '家賃')->get();
            $livingexpenses201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpenses201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $livingexpensestotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '居住費')->get();
            $food201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $food201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $foodtotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '食品')->get();
            $eatingout201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingout201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $eatingouttotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '食費')->where('item_id', '外食')->get();
            $foodexpense201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '食費')->get();
            $foodexpense2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '食費')->get();
            $gas201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gas201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $gastotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', 'ガス')->get();
            $water201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $water2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '水道')->get();
            $electric201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $electric2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '電気')->get();
            $kerosene201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $kerosene2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '光熱水費')->where('item_id', '灯油')->get();
            $utilitycost201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycost201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $utilitycosttotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '光熱水費')->get();
            $gasoline201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $gasoline2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', 'ガソリン')->get();
            $transportexpenses201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $transportexpenses2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '交通費')->get();
            $maintenance201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $maintenance2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '車関係')->where('item_id', '整備等')->get();
            $car201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $car201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $cartotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '車関係')->get();
            $dailynecessities201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $dailynecessities2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '日用雑貨費')->where('item_id', '日用品')->get();
            $conveniencegoods201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoods201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $conveniencegoodstotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '日用雑貨費')->get();
            $internet201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $internet2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', 'インターネット')->get();
            $mobile201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $mobile2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '通信費')->where('item_id', '携帯')->get();
            $communicationcosts201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcosts201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $communicationcoststotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '通信費')->get();
            $lifeinsurance201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $lifeinsurance2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '保険')->where('item_id', '生命保険')->get();
            $insurance201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurance201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '保険')->get();
            $insurancetotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '保険')->get();
            $hospital201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $hospital2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '病院')->get();
            $medicine201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medicine2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '医療費')->where('item_id', '薬')->get();
            $medical201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medical201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $medicaltotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '医療費')->get();
            $celebration201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $celebration2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お祝い')->get();
            $souvenir201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $souvenir2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', 'お土産')->get();
            $socialdisposition201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $socialdisposition2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '交際費')->where('item_id', '人付き合い')->get();
            $entertainmentexpenses201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpenses201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $entertainmentexpensestotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '交際費')->get();
            $amusement201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $amusement2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '娯楽')->get();
            $hobby201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $hobby2017total = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '教養娯楽費')->where('item_id', '趣味')->get();
            $recreationalexpenses201701 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '1')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201702 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '2')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201703 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '3')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201704 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '4')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201705 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '5')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201706 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '6')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201707 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '7')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201708 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '8')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201709 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '9')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201710 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '10')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201711 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '11')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpenses201712 = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('month', '12')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $recreationalexpensestotal = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('year', '2017')->where('attribute', '支出')->where('category_id', '教養娯楽費')->get();
            $data = [
                'user' => $user,
                'deals' => $deals,
                'husband201701'=>$husband201701[0]->sum,
                'husband201702'=>$husband201702[0]->sum,
                'husband201703'=>$husband201703[0]->sum,
                'husband201704'=>$husband201704[0]->sum,
                'husband201705'=>$husband201705[0]->sum,
                'husband201706'=>$husband201706[0]->sum,
                'husband201707'=>$husband201707[0]->sum,
                'husband201708'=>$husband201708[0]->sum,
                'husband201709'=>$husband201709[0]->sum,
                'husband201710'=>$husband201710[0]->sum,
                'husband201711'=>$husband201711[0]->sum,
                'husband201712'=>$husband201712[0]->sum,
                'husbandtotal'=>$husbandtotal[0]->sum,
                'wife201701'=>$wife201701[0]->sum,
                'wife201702'=>$wife201702[0]->sum,
                'wife201703'=>$wife201703[0]->sum,
                'wife201704'=>$wife201704[0]->sum,
                'wife201705'=>$wife201705[0]->sum,
                'wife201706'=>$wife201706[0]->sum,
                'wife201707'=>$wife201707[0]->sum,
                'wife201708'=>$wife201708[0]->sum,
                'wife201709'=>$wife201709[0]->sum,
                'wife201710'=>$wife201710[0]->sum,
                'wife201711'=>$wife201711[0]->sum,
                'wife201712'=>$wife201712[0]->sum,
                'wifetotal'=>$wifetotal[0]->sum,
                'main201701'=>$main201701[0]->sum,
                'main201702'=>$main201702[0]->sum,
                'main201703'=>$main201703[0]->sum,
                'main201704'=>$main201704[0]->sum,
                'main201705'=>$main201705[0]->sum,
                'main201706'=>$main201706[0]->sum,
                'main201707'=>$main201707[0]->sum,
                'main201708'=>$main201708[0]->sum,
                'main201709'=>$main201709[0]->sum,
                'main201710'=>$main201710[0]->sum,
                'main201711'=>$main201711[0]->sum,
                'main201712'=>$main201712[0]->sum,
                'maintotal'=>$maintotal[0]->sum,
                'pointsite201701'=>$pointsite201701[0]->sum,
                'pointsite201702'=>$pointsite201702[0]->sum,
                'pointsite201703'=>$pointsite201703[0]->sum,
                'pointsite201704'=>$pointsite201704[0]->sum,
                'pointsite201705'=>$pointsite201705[0]->sum,
                'pointsite201706'=>$pointsite201706[0]->sum,
                'pointsite201707'=>$pointsite201707[0]->sum,
                'pointsite201708'=>$pointsite201708[0]->sum,
                'pointsite201709'=>$pointsite201709[0]->sum,
                'pointsite201710'=>$pointsite201710[0]->sum,
                'pointsite201711'=>$pointsite201711[0]->sum,
                'pointsite201712'=>$pointsite201712[0]->sum,
                'pointsitetotal'=>$pointsitetotal[0]->sum,
                'sub201701'=>$sub201701[0]->sum,
                'sub201702'=>$sub201702[0]->sum,
                'sub201703'=>$sub201703[0]->sum,
                'sub201704'=>$sub201704[0]->sum,
                'sub201705'=>$sub201705[0]->sum,
                'sub201706'=>$sub201706[0]->sum,
                'sub201707'=>$sub201707[0]->sum,
                'sub201708'=>$sub201708[0]->sum,
                'sub201709'=>$sub201709[0]->sum,
                'sub201710'=>$sub201710[0]->sum,
                'sub201711'=>$sub201711[0]->sum,
                'sub201712'=>$sub201712[0]->sum,
                'subtotal'=>$subtotal[0]->sum,
                'income201701'=>$income201701[0]->sum,
                'income201702'=>$income201702[0]->sum,
                'income201703'=>$income201703[0]->sum,
                'income201704'=>$income201704[0]->sum,
                'income201705'=>$income201705[0]->sum,
                'income201706'=>$income201706[0]->sum,
                'income201707'=>$income201707[0]->sum,
                'income201708'=>$income201708[0]->sum,
                'income201709'=>$income201709[0]->sum,
                'income201710'=>$income201710[0]->sum,
                'income201711'=>$income201711[0]->sum,
                'income201712'=>$income201712[0]->sum,
                'incometotal'=>$incometotal[0]->sum,
                'rent201701'=>$rent201701[0]->sum,
                'rent201702'=>$rent201702[0]->sum,
                'rent201703'=>$rent201703[0]->sum,
                'rent201704'=>$rent201704[0]->sum,
                'rent201705'=>$rent201705[0]->sum,
                'rent201706'=>$rent201706[0]->sum,
                'rent201707'=>$rent201707[0]->sum,
                'rent201708'=>$rent201708[0]->sum,
                'rent201709'=>$rent201709[0]->sum,
                'rent201710'=>$rent201710[0]->sum,
                'rent201711'=>$rent201711[0]->sum,
                'rent201712'=>$rent201712[0]->sum,
                'renttotal'=>$renttotal[0]->sum,
                'livingexpenses201701'=>$livingexpenses201701[0]->sum,
                'livingexpenses201702'=>$livingexpenses201702[0]->sum,
                'livingexpenses201703'=>$livingexpenses201703[0]->sum,
                'livingexpenses201704'=>$livingexpenses201704[0]->sum,
                'livingexpenses201705'=>$livingexpenses201705[0]->sum,
                'livingexpenses201706'=>$livingexpenses201706[0]->sum,
                'livingexpenses201707'=>$livingexpenses201707[0]->sum,
                'livingexpenses201708'=>$livingexpenses201708[0]->sum,
                'livingexpenses201709'=>$livingexpenses201709[0]->sum,
                'livingexpenses201710'=>$livingexpenses201710[0]->sum,
                'livingexpenses201711'=>$livingexpenses201711[0]->sum,
                'livingexpenses201712'=>$livingexpenses201712[0]->sum,
                'livingexpensestotal'=>$livingexpensestotal[0]->sum,
                'food201701'=>$food201701[0]->sum,
                'food201702'=>$food201702[0]->sum,
                'food201703'=>$food201703[0]->sum,
                'food201704'=>$food201704[0]->sum,
                'food201705'=>$food201705[0]->sum,
                'food201706'=>$food201706[0]->sum,
                'food201707'=>$food201707[0]->sum,
                'food201708'=>$food201708[0]->sum,
                'food201709'=>$food201709[0]->sum,
                'food201710'=>$food201710[0]->sum,
                'food201711'=>$food201711[0]->sum,
                'food201712'=>$food201712[0]->sum,
                'foodtotal'=>$foodtotal[0]->sum,
                'eatingout201701'=>$eatingout201701[0]->sum,
                'eatingout201702'=>$eatingout201702[0]->sum,
                'eatingout201703'=>$eatingout201703[0]->sum,
                'eatingout201704'=>$eatingout201704[0]->sum,
                'eatingout201705'=>$eatingout201705[0]->sum,
                'eatingout201706'=>$eatingout201706[0]->sum,
                'eatingout201707'=>$eatingout201707[0]->sum,
                'eatingout201708'=>$eatingout201708[0]->sum,
                'eatingout201709'=>$eatingout201709[0]->sum,
                'eatingout201710'=>$eatingout201710[0]->sum,
                'eatingout201711'=>$eatingout201711[0]->sum,
                'eatingout201712'=>$eatingout201712[0]->sum,
                'eatingouttotal'=>$eatingouttotal[0]->sum,
                'foodexpense201701'=>$foodexpense201701[0]->sum,
                'foodexpense201702'=>$foodexpense201702[0]->sum,
                'foodexpense201703'=>$foodexpense201703[0]->sum,
                'foodexpense201704'=>$foodexpense201704[0]->sum,
                'foodexpense201705'=>$foodexpense201705[0]->sum,
                'foodexpense201706'=>$foodexpense201706[0]->sum,
                'foodexpense201707'=>$foodexpense201707[0]->sum,
                'foodexpense201708'=>$foodexpense201708[0]->sum,
                'foodexpense201709'=>$foodexpense201709[0]->sum,
                'foodexpense201710'=>$foodexpense201710[0]->sum,
                'foodexpense201711'=>$foodexpense201711[0]->sum,
                'foodexpense201712'=>$foodexpense201712[0]->sum,
                'foodexpense2017total'=>$foodexpense2017total[0]->sum,
                'gas201701'=>$gas201701[0]->sum,
                'gas201702'=>$gas201702[0]->sum,
                'gas201703'=>$gas201703[0]->sum,
                'gas201704'=>$gas201704[0]->sum,
                'gas201705'=>$gas201705[0]->sum,
                'gas201706'=>$gas201706[0]->sum,
                'gas201707'=>$gas201707[0]->sum,
                'gas201708'=>$gas201708[0]->sum,
                'gas201709'=>$gas201709[0]->sum,
                'gas201710'=>$gas201710[0]->sum,
                'gas201711'=>$gas201711[0]->sum,
                'gas201712'=>$gas201712[0]->sum,
                'gastotal'=>$gastotal[0]->sum,
                'water201701'=>$water201701[0]->sum,
                'water201702'=>$water201702[0]->sum,
                'water201703'=>$water201703[0]->sum,
                'water201704'=>$water201704[0]->sum,
                'water201705'=>$water201705[0]->sum,
                'water201706'=>$water201706[0]->sum,
                'water201707'=>$water201707[0]->sum,
                'water201708'=>$water201708[0]->sum,
                'water201709'=>$water201709[0]->sum,
                'water201710'=>$water201710[0]->sum,
                'water201711'=>$water201711[0]->sum,
                'water201712'=>$water201712[0]->sum,
                'water2017total'=>$water2017total[0]->sum,
                'electric201701'=>$electric201701[0]->sum,
                'electric201702'=>$electric201702[0]->sum,
                'electric201703'=>$electric201703[0]->sum,
                'electric201704'=>$electric201704[0]->sum,
                'electric201705'=>$electric201705[0]->sum,
                'electric201706'=>$electric201706[0]->sum,
                'electric201707'=>$electric201707[0]->sum,
                'electric201708'=>$electric201708[0]->sum,
                'electric201709'=>$electric201709[0]->sum,
                'electric201710'=>$electric201710[0]->sum,
                'electric201711'=>$electric201711[0]->sum,
                'electric201712'=>$electric201712[0]->sum,
                'electric2017total'=>$electric2017total[0]->sum,
                'kerosene201701'=>$kerosene201701[0]->sum,
                'kerosene201702'=>$kerosene201702[0]->sum,
                'kerosene201703'=>$kerosene201703[0]->sum,
                'kerosene201704'=>$kerosene201704[0]->sum,
                'kerosene201705'=>$kerosene201705[0]->sum,
                'kerosene201706'=>$kerosene201706[0]->sum,
                'kerosene201707'=>$kerosene201707[0]->sum,
                'kerosene201708'=>$kerosene201708[0]->sum,
                'kerosene201709'=>$kerosene201709[0]->sum,
                'kerosene201710'=>$kerosene201710[0]->sum,
                'kerosene201711'=>$kerosene201711[0]->sum,
                'kerosene201712'=>$kerosene201712[0]->sum,
                'kerosene2017total'=>$kerosene2017total[0]->sum,
                'utilitycost201701'=>$utilitycost201701[0]->sum,
                'utilitycost201702'=>$utilitycost201702[0]->sum,
                'utilitycost201703'=>$utilitycost201703[0]->sum,
                'utilitycost201704'=>$utilitycost201704[0]->sum,
                'utilitycost201705'=>$utilitycost201705[0]->sum,
                'utilitycost201706'=>$utilitycost201706[0]->sum,
                'utilitycost201707'=>$utilitycost201707[0]->sum,
                'utilitycost201708'=>$utilitycost201708[0]->sum,
                'utilitycost201709'=>$utilitycost201709[0]->sum,
                'utilitycost201710'=>$utilitycost201710[0]->sum,
                'utilitycost201711'=>$utilitycost201711[0]->sum,
                'utilitycost201712'=>$utilitycost201712[0]->sum,
                'utilitycost2017total'=>$utilitycosttotal[0]->sum,
                'gasoline201701'=>$gasoline201701[0]->sum,
                'gasoline201702'=>$gasoline201702[0]->sum,
                'gasoline201703'=>$gasoline201703[0]->sum,
                'gasoline201704'=>$gasoline201704[0]->sum,
                'gasoline201705'=>$gasoline201705[0]->sum,
                'gasoline201706'=>$gasoline201706[0]->sum,
                'gasoline201707'=>$gasoline201707[0]->sum,
                'gasoline201708'=>$gasoline201708[0]->sum,
                'gasoline201709'=>$gasoline201709[0]->sum,
                'gasoline201710'=>$gasoline201710[0]->sum,
                'gasoline201711'=>$gasoline201711[0]->sum,
                'gasoline201712'=>$gasoline201712[0]->sum,
                'gasoline2017total'=>$gasoline2017total[0]->sum,
                'transportexpenses201701'=>$transportexpenses201701[0]->sum,
                'transportexpenses201702'=>$transportexpenses201702[0]->sum,
                'transportexpenses201703'=>$transportexpenses201703[0]->sum,
                'transportexpenses201704'=>$transportexpenses201704[0]->sum,
                'transportexpenses201705'=>$transportexpenses201705[0]->sum,
                'transportexpenses201706'=>$transportexpenses201706[0]->sum,
                'transportexpenses201707'=>$transportexpenses201707[0]->sum,
                'transportexpenses201708'=>$transportexpenses201708[0]->sum,
                'transportexpenses201709'=>$transportexpenses201709[0]->sum,
                'transportexpenses201710'=>$transportexpenses201710[0]->sum,
                'transportexpenses201711'=>$transportexpenses201711[0]->sum,
                'transportexpenses201712'=>$transportexpenses201712[0]->sum,
                'transportexpenses2017total'=>$transportexpenses2017total[0]->sum,
                'maintenance201701'=>$maintenance201701[0]->sum,
                'maintenance201702'=>$maintenance201702[0]->sum,
                'maintenance201703'=>$maintenance201703[0]->sum,
                'maintenance201704'=>$maintenance201704[0]->sum,
                'maintenance201705'=>$maintenance201705[0]->sum,
                'maintenance201706'=>$maintenance201706[0]->sum,
                'maintenance201707'=>$maintenance201707[0]->sum,
                'maintenance201708'=>$maintenance201708[0]->sum,
                'maintenance201709'=>$maintenance201709[0]->sum,
                'maintenance201710'=>$maintenance201710[0]->sum,
                'maintenance201711'=>$maintenance201711[0]->sum,
                'maintenance201712'=>$maintenance201712[0]->sum,
                'maintenance2017total'=>$maintenance2017total[0]->sum,
                'car201701'=>$car201701[0]->sum,
                'car201702'=>$car201702[0]->sum,
                'car201703'=>$car201703[0]->sum,
                'car201704'=>$car201704[0]->sum,
                'car201705'=>$car201705[0]->sum,
                'car201706'=>$car201706[0]->sum,
                'car201707'=>$car201707[0]->sum,
                'car201708'=>$car201708[0]->sum,
                'car201709'=>$car201709[0]->sum,
                'car201710'=>$car201710[0]->sum,
                'car201711'=>$car201711[0]->sum,
                'car201712'=>$car201712[0]->sum,
                'car2017total'=>$cartotal[0]->sum,
                'dailynecessities201701'=>$dailynecessities201701[0]->sum,
                'dailynecessities201702'=>$dailynecessities201702[0]->sum,
                'dailynecessities201703'=>$dailynecessities201703[0]->sum,
                'dailynecessities201704'=>$dailynecessities201704[0]->sum,
                'dailynecessities201705'=>$dailynecessities201705[0]->sum,
                'dailynecessities201706'=>$dailynecessities201706[0]->sum,
                'dailynecessities201707'=>$dailynecessities201707[0]->sum,
                'dailynecessities201708'=>$dailynecessities201708[0]->sum,
                'dailynecessities201709'=>$dailynecessities201709[0]->sum,
                'dailynecessities201710'=>$dailynecessities201710[0]->sum,
                'dailynecessities201711'=>$dailynecessities201711[0]->sum,
                'dailynecessities201712'=>$dailynecessities201712[0]->sum,
                'dailynecessities2017total'=>$dailynecessities2017total[0]->sum,
                'conveniencegoods201701'=>$conveniencegoods201701[0]->sum,
                'conveniencegoods201702'=>$conveniencegoods201702[0]->sum,
                'conveniencegoods201703'=>$conveniencegoods201703[0]->sum,
                'conveniencegoods201704'=>$conveniencegoods201704[0]->sum,
                'conveniencegoods201705'=>$conveniencegoods201705[0]->sum,
                'conveniencegoods201706'=>$conveniencegoods201706[0]->sum,
                'conveniencegoods201707'=>$conveniencegoods201707[0]->sum,
                'conveniencegoods201708'=>$conveniencegoods201708[0]->sum,
                'conveniencegoods201709'=>$conveniencegoods201709[0]->sum,
                'conveniencegoods201710'=>$conveniencegoods201710[0]->sum,
                'conveniencegoods201711'=>$conveniencegoods201711[0]->sum,
                'conveniencegoods201712'=>$conveniencegoods201712[0]->sum,
                'conveniencegoods2017total'=>$conveniencegoodstotal[0]->sum,
                'internet201701'=>$internet201701[0]->sum,
                'internet201702'=>$internet201702[0]->sum,
                'internet201703'=>$internet201703[0]->sum,
                'internet201704'=>$internet201704[0]->sum,
                'internet201705'=>$internet201705[0]->sum,
                'internet201706'=>$internet201706[0]->sum,
                'internet201707'=>$internet201707[0]->sum,
                'internet201708'=>$internet201708[0]->sum,
                'internet201709'=>$internet201709[0]->sum,
                'internet201710'=>$internet201710[0]->sum,
                'internet201711'=>$internet201711[0]->sum,
                'internet201712'=>$internet201712[0]->sum,
                'internet2017total'=>$internet2017total[0]->sum,
                'mobile201701'=>$mobile201701[0]->sum,
                'mobile201702'=>$mobile201702[0]->sum,
                'mobile201703'=>$mobile201703[0]->sum,
                'mobile201704'=>$mobile201704[0]->sum,
                'mobile201705'=>$mobile201705[0]->sum,
                'mobile201706'=>$mobile201706[0]->sum,
                'mobile201707'=>$mobile201707[0]->sum,
                'mobile201708'=>$mobile201708[0]->sum,
                'mobile201709'=>$mobile201709[0]->sum,
                'mobile201710'=>$mobile201710[0]->sum,
                'mobile201711'=>$mobile201711[0]->sum,
                'mobile201712'=>$mobile201712[0]->sum,
                'mobile2017total'=>$mobile2017total[0]->sum,
                'communicationcosts201701'=>$communicationcosts201701[0]->sum,
                'communicationcosts201702'=>$communicationcosts201702[0]->sum,
                'communicationcosts201703'=>$communicationcosts201703[0]->sum,
                'communicationcosts201704'=>$communicationcosts201704[0]->sum,
                'communicationcosts201705'=>$communicationcosts201705[0]->sum,
                'communicationcosts201706'=>$communicationcosts201706[0]->sum,
                'communicationcosts201707'=>$communicationcosts201707[0]->sum,
                'communicationcosts201708'=>$communicationcosts201708[0]->sum,
                'communicationcosts201709'=>$communicationcosts201709[0]->sum,
                'communicationcosts201710'=>$communicationcosts201710[0]->sum,
                'communicationcosts201711'=>$communicationcosts201711[0]->sum,
                'communicationcosts201712'=>$communicationcosts201712[0]->sum,
                'communicationcosts2017total'=>$communicationcoststotal[0]->sum,
                'lifeinsurance201701'=>$lifeinsurance201701[0]->sum,
                'lifeinsurance201702'=>$lifeinsurance201702[0]->sum,
                'lifeinsurance201703'=>$lifeinsurance201703[0]->sum,
                'lifeinsurance201704'=>$lifeinsurance201704[0]->sum,
                'lifeinsurance201705'=>$lifeinsurance201705[0]->sum,
                'lifeinsurance201706'=>$lifeinsurance201706[0]->sum,
                'lifeinsurance201707'=>$lifeinsurance201707[0]->sum,
                'lifeinsurance201708'=>$lifeinsurance201708[0]->sum,
                'lifeinsurance201709'=>$lifeinsurance201709[0]->sum,
                'lifeinsurance201710'=>$lifeinsurance201710[0]->sum,
                'lifeinsurance201711'=>$lifeinsurance201711[0]->sum,
                'lifeinsurance201712'=>$lifeinsurance201712[0]->sum,
                'lifeinsurance2017total'=>$lifeinsurance2017total[0]->sum,
                'insurance201701'=>$insurance201701[0]->sum,
                'insurance201702'=>$insurance201702[0]->sum,
                'insurance201703'=>$insurance201703[0]->sum,
                'insurance201704'=>$insurance201704[0]->sum,
                'insurance201705'=>$insurance201705[0]->sum,
                'insurance201706'=>$insurance201706[0]->sum,
                'insurance201707'=>$insurance201707[0]->sum,
                'insurance201708'=>$insurance201708[0]->sum,
                'insurance201709'=>$insurance201709[0]->sum,
                'insurance201710'=>$insurance201710[0]->sum,
                'insurance201711'=>$insurance201711[0]->sum,
                'insurance201712'=>$insurance201712[0]->sum,
                'insurance2017total'=>$insurancetotal[0]->sum,
                'hospital201701'=>$hospital201701[0]->sum,
                'hospital201702'=>$hospital201702[0]->sum,
                'hospital201703'=>$hospital201703[0]->sum,
                'hospital201704'=>$hospital201704[0]->sum,
                'hospital201705'=>$hospital201705[0]->sum,
                'hospital201706'=>$hospital201706[0]->sum,
                'hospital201707'=>$hospital201707[0]->sum,
                'hospital201708'=>$hospital201708[0]->sum,
                'hospital201709'=>$hospital201709[0]->sum,
                'hospital201710'=>$hospital201710[0]->sum,
                'hospital201711'=>$hospital201711[0]->sum,
                'hospital201712'=>$hospital201712[0]->sum,
                'hospital2017total'=>$hospital2017total[0]->sum,
                'medicine201701'=>$medicine201701[0]->sum,
                'medicine201702'=>$medicine201702[0]->sum,
                'medicine201703'=>$medicine201703[0]->sum,
                'medicine201704'=>$medicine201704[0]->sum,
                'medicine201705'=>$medicine201705[0]->sum,
                'medicine201706'=>$medicine201706[0]->sum,
                'medicine201707'=>$medicine201707[0]->sum,
                'medicine201708'=>$medicine201708[0]->sum,
                'medicine201709'=>$medicine201709[0]->sum,
                'medicine201710'=>$medicine201710[0]->sum,
                'medicine201711'=>$medicine201711[0]->sum,
                'medicine201712'=>$medicine201712[0]->sum,
                'medicine2017total'=>$medicine2017total[0]->sum,
                'medical201701'=>$medical201701[0]->sum,
                'medical201702'=>$medical201702[0]->sum,
                'medical201703'=>$medical201703[0]->sum,
                'medical201704'=>$medical201704[0]->sum,
                'medical201705'=>$medical201705[0]->sum,
                'medical201706'=>$medical201706[0]->sum,
                'medical201707'=>$medical201707[0]->sum,
                'medical201708'=>$medical201708[0]->sum,
                'medical201709'=>$medical201709[0]->sum,
                'medical201710'=>$medical201710[0]->sum,
                'medical201711'=>$medical201711[0]->sum,
                'medical201712'=>$medical201712[0]->sum,
                'medical2017total'=>$medicaltotal[0]->sum,
                'celebration201701'=>$celebration201701[0]->sum,
                'celebration201702'=>$celebration201702[0]->sum,
                'celebration201703'=>$celebration201703[0]->sum,
                'celebration201704'=>$celebration201704[0]->sum,
                'celebration201705'=>$celebration201705[0]->sum,
                'celebration201706'=>$celebration201706[0]->sum,
                'celebration201707'=>$celebration201707[0]->sum,
                'celebration201708'=>$celebration201708[0]->sum,
                'celebration201709'=>$celebration201709[0]->sum,
                'celebration201710'=>$celebration201710[0]->sum,
                'celebration201711'=>$celebration201711[0]->sum,
                'celebration201712'=>$celebration201712[0]->sum,
                'celebration2017total'=>$celebration2017total[0]->sum,
                'souvenir201701'=>$souvenir201701[0]->sum,
                'souvenir201702'=>$souvenir201702[0]->sum,
                'souvenir201703'=>$souvenir201703[0]->sum,
                'souvenir201704'=>$souvenir201704[0]->sum,
                'souvenir201705'=>$souvenir201705[0]->sum,
                'souvenir201706'=>$souvenir201706[0]->sum,
                'souvenir201707'=>$souvenir201707[0]->sum,
                'souvenir201708'=>$souvenir201708[0]->sum,
                'souvenir201709'=>$souvenir201709[0]->sum,
                'souvenir201710'=>$souvenir201710[0]->sum,
                'souvenir201711'=>$souvenir201711[0]->sum,
                'souvenir201712'=>$souvenir201712[0]->sum,
                'souvenir2017total'=>$souvenir2017total[0]->sum,
                'socialdisposition201701'=>$socialdisposition201701[0]->sum,
                'socialdisposition201702'=>$socialdisposition201702[0]->sum,
                'socialdisposition201703'=>$socialdisposition201703[0]->sum,
                'socialdisposition201704'=>$socialdisposition201704[0]->sum,
                'socialdisposition201705'=>$socialdisposition201705[0]->sum,
                'socialdisposition201706'=>$socialdisposition201706[0]->sum,
                'socialdisposition201707'=>$socialdisposition201707[0]->sum,
                'socialdisposition201708'=>$socialdisposition201708[0]->sum,
                'socialdisposition201709'=>$socialdisposition201709[0]->sum,
                'socialdisposition201710'=>$socialdisposition201710[0]->sum,
                'socialdisposition201711'=>$socialdisposition201711[0]->sum,
                'socialdisposition201712'=>$socialdisposition201712[0]->sum,
                'socialdisposition2017total'=>$socialdisposition2017total[0]->sum,
                'entertainmentexpenses201701'=>$entertainmentexpenses201701[0]->sum,
                'entertainmentexpenses201702'=>$entertainmentexpenses201702[0]->sum,
                'entertainmentexpenses201703'=>$entertainmentexpenses201703[0]->sum,
                'entertainmentexpenses201704'=>$entertainmentexpenses201704[0]->sum,
                'entertainmentexpenses201705'=>$entertainmentexpenses201705[0]->sum,
                'entertainmentexpenses201706'=>$entertainmentexpenses201706[0]->sum,
                'entertainmentexpenses201707'=>$entertainmentexpenses201707[0]->sum,
                'entertainmentexpenses201708'=>$entertainmentexpenses201708[0]->sum,
                'entertainmentexpenses201709'=>$entertainmentexpenses201709[0]->sum,
                'entertainmentexpenses201710'=>$entertainmentexpenses201710[0]->sum,
                'entertainmentexpenses201711'=>$entertainmentexpenses201711[0]->sum,
                'entertainmentexpenses201712'=>$entertainmentexpenses201712[0]->sum,
                'entertainmentexpenses2017total'=>$entertainmentexpensestotal[0]->sum,
                'amusement201701'=>$amusement201701[0]->sum,
                'amusement201702'=>$amusement201702[0]->sum,
                'amusement201703'=>$amusement201703[0]->sum,
                'amusement201704'=>$amusement201704[0]->sum,
                'amusement201705'=>$amusement201705[0]->sum,
                'amusement201706'=>$amusement201706[0]->sum,
                'amusement201707'=>$amusement201707[0]->sum,
                'amusement201708'=>$amusement201708[0]->sum,
                'amusement201709'=>$amusement201709[0]->sum,
                'amusement201710'=>$amusement201710[0]->sum,
                'amusement201711'=>$amusement201711[0]->sum,
                'amusement201712'=>$amusement201712[0]->sum,
                'amusement2017total'=>$amusement2017total[0]->sum,
                'hobby201701'=>$hobby201701[0]->sum,
                'hobby201702'=>$hobby201702[0]->sum,
                'hobby201703'=>$hobby201703[0]->sum,
                'hobby201704'=>$hobby201704[0]->sum,
                'hobby201705'=>$hobby201705[0]->sum,
                'hobby201706'=>$hobby201706[0]->sum,
                'hobby201707'=>$hobby201707[0]->sum,
                'hobby201708'=>$hobby201708[0]->sum,
                'hobby201709'=>$hobby201709[0]->sum,
                'hobby201710'=>$hobby201710[0]->sum,
                'hobby201711'=>$hobby201711[0]->sum,
                'hobby201712'=>$hobby201712[0]->sum,
                'hobby2017total'=>$hobby2017total[0]->sum,
                'recreationalexpenses201701'=>$recreationalexpenses201701[0]->sum,
                'recreationalexpenses201702'=>$recreationalexpenses201702[0]->sum,
                'recreationalexpenses201703'=>$recreationalexpenses201703[0]->sum,
                'recreationalexpenses201704'=>$recreationalexpenses201704[0]->sum,
                'recreationalexpenses201705'=>$recreationalexpenses201705[0]->sum,
                'recreationalexpenses201706'=>$recreationalexpenses201706[0]->sum,
                'recreationalexpenses201707'=>$recreationalexpenses201707[0]->sum,
                'recreationalexpenses201708'=>$recreationalexpenses201708[0]->sum,
                'recreationalexpenses201709'=>$recreationalexpenses201709[0]->sum,
                'recreationalexpenses201710'=>$recreationalexpenses201710[0]->sum,
                'recreationalexpenses201711'=>$recreationalexpenses201711[0]->sum,
                'recreationalexpenses201712'=>$recreationalexpenses201712[0]->sum,
                'recreationalexpenses2017total'=>$recreationalexpensestotal[0]->sum,


            ];
        }
        return view('deals.report',$data);
   }
}