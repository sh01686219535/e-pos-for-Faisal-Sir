<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemInfo;
use App\Models\ItemPrice;
use App\Models\backend\ItemCostInfo;

class ItemPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'item_price';
        $ItemPrice = ItemPrice::with('itemInfo','itemCost')->get();
        return view('backend.ItemPrice.index',compact('data','ItemPrice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'item_price';
        $itemInfo = ItemInfo::with('category','brand','color','size','supplier')->get();
        $itemInfoCost = ItemCostInfo::with('itemInfo')->get();
        return view('backend.ItemPrice.create',compact('data','itemInfo','itemInfoCost'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_info_id'=>'required',
            'item_cost_id'=>'required',
            'item_price'=>'required',
        ]);

        $ItemPrice = new ItemPrice();
        $ItemPrice->item_info_id = $request->item_info_id;
        $ItemPrice->item_cost_id = $request->item_cost_id;
        $ItemPrice->item_price = $request->item_price;
        $ItemPrice->save();
        toastr()->success('Item Cost Created Successfully');
        return redirect()->route('item_price.index');
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
        $data = array();
        $data['active_menu'] = 'item_price';
        $itemInfo = ItemInfo::with('category','brand','color','size','supplier')->get();
        $itemInfoCost = ItemCostInfo::with('itemInfo')->get();
        $ItemPrice = ItemPrice::findOrFail($id);
        return view('backend.ItemPrice.edit',compact('data','itemInfo','itemInfoCost','ItemPrice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'item_info_id'=>'required',
            'item_cost_id'=>'required',
            'item_price'=>'required',
        ]);

        $ItemPrice = ItemPrice::findOrFail($id);
        $ItemPrice->item_info_id = $request->item_info_id;
        $ItemPrice->item_cost_id = $request->item_cost_id;
        $ItemPrice->item_price = $request->item_price;
        $ItemPrice->save();
        toastr()->success('Item Cost Updated Successfully');
        return redirect()->route('item_price.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ItemPrice = ItemPrice::findOrFail($id);
        $ItemPrice->delete();
        toastr()->success('Item Cost Deleted Successfully');
        return back();
        
    }
}
