<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PizzaorderResource;
use App\Http\Resources\StatusResource;
use App\Pizzaorder;
use App\Status;
use App\Http\Requests;

class PizzaorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $odr = Pizzaorder::all();
        return PizzaorderResource::collection($odr);
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
        //
        $odr = new Pizzaorder();
        $odr->customername = $request->input('customername');
        $odr->customerlocation = $request->input('customerlocation');
        $odr->customerphone = $request->input('customerphone');
        $odr->pizzatype = $request->input('pizzatype');
        $odr->pizzasize = $request->input('pizzasize');
        $odr->quantity = $request->input('quantity');
        $odr->price = $request->input('price');
        $odr->deliveryfee = $request->input('deliveryfee');
        $odr->totalprice = $request->input('totalprice');
        $odr->additionaldetails = $request->input('additionaldetails');
        $odr->save();
        $stat = Status::find(1);
        return new StatusResource($stat);
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
        $article = Pizzaorder::find($id);
        $stat = Status::find(3);
        if($article){
            return new PizzaorderResource($article);
        }
        return new StatusResource($stat);//"Pizza Not Found";
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
        $odr = Pizzaorder::find($id);
        $odr->customername = $request->input('customername');
        $odr->customerlocation = $request->input('customerlocation');
        $odr->customerphone = $request->input('customerphone');
        $odr->pizzatype = $request->input('pizzatype');
        $odr->pizzasize = $request->input('pizzasize');
        $odr->quantity = $request->input('quantity');
        $odr->price = $request->input('price');
        $odr->deliveryfee = $request->input('deliveryfee');
        $odr->totalprice = $request->input('totalprice');
        $odr->additionaldetails = $request->input('additionaldetails');
        $odr->save();
        $stat = Status::find(1);
        return new StatusResource($stat);
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
        $odr = Pizzaorder::findOrfail($id);
        if($odr->delete()){
            $stats = Status::find(1);
            return new StatusResource($stats);
            //return new PizzaResource($odr);
        }
        $stat = Status::find(2);
        return new StatusResource($stat);
    }
}
