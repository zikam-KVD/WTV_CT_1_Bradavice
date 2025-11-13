<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    //ziskani koleji
    public function showHouses(): View
    {
        $koleje = House::all();

        return View('houses', ['houses' => $koleje]);
    }

    //upravu koleje
    public function editHouse(Request $request, $id) {
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|string|max:32|unique:houses,nazev',
            'points' => 'required|integer|min:0|max:355',
            'color' => 'required|hex_color'
        ]);

        try {
            $kolej = House::findOrFail($id);

            $kolej->nazev = $validated['name'];
            $kolej->body = $request->input('points');
            $kolej->barva = $validated['color'];
            $kolej->save();

        } catch (\Throwable $th) {
            dd("Chyba:" . $th->getMessage());
        }

        return back()->withMessage('Kolej $validated[name] upravena.');
    }

    //mazani
}
