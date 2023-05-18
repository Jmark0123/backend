<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CarouselItems;
use App\Http\Requests\CarouselItemsReques;


class CarouselItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    return CarouselItems:: all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarouselItemsReques $request)
    {
        $validated = $request -> validated();
        $carouselItems = CarouselItems::create($validated);
        return $carouselItems;

}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return CarouselItems::findOrFail($id); 
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(CarouselItemsReques $request, string $id)
    {
        $validated = $request -> validated();

        $CarouselItems = CarouselItems::findOrFail($id);
        $CarouselItems->update($validated);
        return $CarouselItems;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carouselItems = CarouselItems::findOrFail($id);
        $carouselItems -> delete();
        return $carouselItems;
 }
}