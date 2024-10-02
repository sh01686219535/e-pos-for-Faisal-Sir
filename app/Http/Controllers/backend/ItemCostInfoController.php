<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemInfo;
use App\Models\backend\ItemCostInfo;

class ItemCostInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'item_cost_info';
        $itemInfoCost = ItemCostInfo::with('itemInfo')->get();
        return view('backend.ItemCost.index',compact('data','itemInfoCost'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'item_cost_info';
        $itemInfo = ItemInfo::with('category','brand','color','size','supplier')->get();
        return view('backend.ItemCost.create',compact('data','itemInfo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_info_id'=>'required',
            'purchase_price'=>'required',
            'vat'=>'required',
        ]);
        $ItemCostInfo = new  ItemCostInfo();
        $ItemCostInfo->item_info_id = $request->item_info_id;
        $ItemCostInfo->purchase_price = $request->purchase_price;
        $ItemCostInfo->vat = $request->vat;
        $ItemCostInfo->additional_cost = $request->additional_cost;
        $ItemCostInfo->total_Purchase_cost = $request->total_Purchase_cost;
        $ItemCostInfo->save();
        toastr()->success('Item Cost Create Successfully');
        return redirect()->route('item_cost_info.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ItemCostInfo $itemCostInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = array();
        $data['active_menu'] = 'item_cost_info';
        $itemInfoCost = ItemCostInfo::with('itemInfo')->findOrFail($id);
        $itemInfo = ItemInfo::with('category','brand','color','size','supplier')->get();
        return view('backend.ItemCost.edit',compact('data','itemInfo','itemInfoCost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'item_info_id'=>'required',
            'purchase_price'=>'required',
            'vat'=>'required',
        ]);
        $ItemCostInfo = ItemCostInfo::findOrFail($id);
        $ItemCostInfo->item_info_id = $request->item_info_id;
        $ItemCostInfo->purchase_price = $request->purchase_price;
        $ItemCostInfo->vat = $request->vat;
        $ItemCostInfo->additional_cost = $request->additional_cost;
        $ItemCostInfo->total_Purchase_cost = $request->total_Purchase_cost;
        $ItemCostInfo->save();
        toastr()->success('Item Cost Updated Successfully');
        return redirect()->route('item_cost_info.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ItemCostInfo = ItemCostInfo::findOrFail($id);
        $ItemCostInfo->delete();
        toastr()->success('Item Cost Deleted Successfully');
        return back();
    }
}
