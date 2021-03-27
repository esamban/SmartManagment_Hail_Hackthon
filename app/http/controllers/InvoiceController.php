<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\income;
use Illuminate\Http\Request;
use DB;
class InvoiceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = DB::table('Invoice')->sum('total_price');
        $item = DB::table('Invoice')->sum('items_number');
        $personal = DB::table('Invoice')->count('invoice_number');
        $totSing=DB::table('Invoice')->where('sales_field','=','single')->sum('total_price');
        $totOcc=DB::table('Invoice')->where('sales_field','=','Occasions')->sum('total_price');
        $incom=Invoice::all();
        $incoming=income::all();

        $salesFiled;
        if($totSing === $totOcc){
            $salesFiled="Profits blanced Between Singles and Occasions";
        }elseif($totSing > $totOcc){
            $salesFiled="Profits of Singles greater than Occasions";
        }else{
            $salesFiled="Profits of Occasions  greater than Singles";

        }
        
       
        return view('dashboard')->with(['income'=>$incom,
        'invoice'=>$invoice,'incoming'=>$incoming,'item'=>$item,'personal'=>$personal,'sales'=>$salesFiled
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $savedata = new Invoice;
        $savedata -> items_number = $request->item;
        $savedata -> VAT = $request->VAT;
        $savedata -> price_befor_VAT = $request->PBVAT;
        $savedata -> discount = $request->discount;
        $savedata -> total_price = $request->total_price;
        $savedata -> sales_field = $request->sales_field;
        $savedata -> data = $request->date;
        $savedata->save();
        return view('invoices.create')->with('submit Done',$savedata);
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
        $income=Invoice::where('id',$id)->first();
        return view('invoices.update',compact('incame'));
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
        $savedata -> items_number = $request->item;
        $savedata -> VAT = $request->VAT;
        $savedata -> price_befor_VAT = $request->PBVAT;
        $savedata -> discount = $request->income;
        $savedata -> total_price = $request->total_price;
        $savedata -> sales_field = $request->sales_field;
        $savedata -> Date = $request->date;
        $savedata->save();
        
        $id->update($savedata);   
        return redirect('/invoices')->with('completed', 'company updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Constracter  $constracter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $income=Invoice::where('items_number',$id);
        $income->delete();
        return redirect()->route('invoices.index')->with('completed', 'company deleted');
    }
}
