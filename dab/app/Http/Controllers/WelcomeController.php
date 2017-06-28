<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $deals = $user->deals()->orderBy('created_at', 'desc')->paginate(10);
            $sum = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('attribute', '収入')->get();
            $esum = \DB::table('deals')->select( \DB::raw('SUM(amount) as sum' ))->where('user_id',$user->id)->where('attribute', '支出')->get();
            $data = [
                'user' => $user,
                'deals' => $deals,
                'sum'=>$sum[0]->sum,
                'esum'=>$esum[0]->sum,
            ];
        }
        return view('welcome', $data);
        
    }
}