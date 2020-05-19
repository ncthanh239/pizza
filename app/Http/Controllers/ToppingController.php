<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topping;
class ToppingController extends Controller
{
    public function myTopping()
    {

        return view('toppings.myTopping');
    }

    public function index()
    {
        $toppings = Topping::latest()->paginate(5);

        return response()->json($toppings);
    }

    public function store(Request $request)

    {

        $toppings = Topping::create($request->all());

        return response()->json($toppings);

    }

    public function update(Request $request, $id)

    {

        $toppings = Topping::find($id)->update($request->all());

        return response()->json($toppings);

    }

    public function destroy($id)

    {

        Topping::find($id)->delete();

        return response()->json(['done']);

    }
}
