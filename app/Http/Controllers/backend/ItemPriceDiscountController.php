<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemInfo;
use App\Models\ItemPrice;
use App\Models\backend\ItemCostInfo;

class ItemPriceDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'item_price_discount';
        return view('backend.ItemDiscount.index',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'item_price_discount';
        $itemInfo = ItemInfo::all();
        $itemInfoCost = ItemCostInfo::all();
        $ItemPrice = ItemPrice::all();
        return view('backend.ItemDiscount.create',compact('data','itemInfo','itemInfoCost','ItemPrice'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
