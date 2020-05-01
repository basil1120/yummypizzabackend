<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PizzaResource;
use App\Http\Resources\StatusResource;
use App\Pizza;
use App\Status;
use App\Http\Requests;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $piz = Pizza::all();
        return PizzaResource::collection($piz);
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
        //'pizzatype','size','price','img','deliveryfee','pizzadesc'
        $piz = new Pizza();
        $piz->pizzatype = $request->input('pizzatype');
        $piz->size = $request->input('size');
        $piz->price = $request->input('price');
        $piz->img = $request->input('img');
        $piz->deliveryfee = $request->input('deliveryfee');
        $piz->pizzadesc = $request->input('pizzadesc');
        $piz->save();
        $stat = Status::find(1);
        return new StatusResource($stat);
        //return new PizzaResource($piz);

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
        $article = Pizza::find($id);
        $stat = Status::find(3);
        if($article){
            return new PizzaResource($article);
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
        //['pizzatype','size','price','img','deliveryfee','pizzadesc'];
        $piz = Pizza::find($id);
        $piz-> pizzatype = $request->input('pizzatype');
        $piz-> size = $request->input('size');
        $piz-> price = $request->input('price');
        $piz-> img = $request->input('img');
        $piz-> deliveryfee = $request->input('deliveryfee');
        $piz-> pizzadesc = $request->input('pizzadesc');
        $piz->save();

        $stat = Status::find(1);
        return new StatusResource($stat);
        //return new PizzaResource($piz);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $piz = Pizza::findOrfail($id);
        if($piz->delete()){
            $stats = Status::find(1);
            return new StatusResource($stats);
            //return new PizzaResource($piz);
        }
        $stat = Status::find(2);
        return new StatusResource($stat);
        //return "Error while deleting";
    }
}
