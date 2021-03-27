<?php

namespace App\Http\Controllers;

use App\Models\income;
use App\Models\Invoice;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $population = Invoice::select(
            DB::raw("year(data) as year"),
            DB::raw("SUM(total_price) as Total_income")
        ->orderBy(DB::raw("year(data)"))->groupBy(DB::raw("year(data)")))->get();

        $res[] = ['Year', 'Total_income'];
        foreach ($population as $key => $val) {
            $res[++$key] = [$val->year, (int)$val->total_price];
        }
        return view('dashboard')->with('population', json_encode($res));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Constracter  $constracter
     * @return \Illuminate\Http\Response
     */
    public function show(Constracter $constracter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Constracter  $constracter
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Constracter  $constracter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Constracter  $constracter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    }
}
