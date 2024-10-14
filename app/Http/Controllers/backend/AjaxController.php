<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SubModule;
use App\Models\Category;
use App\Models\ItemPrice;
use Illuminate\Http\Request;
use App\Models\backend\ItemCostInfo;

class AjaxController extends Controller
{
    //getSubModule
    public function getSubModule(Request $request)
    {
        $moduleId = $request->moduleId;
        $subModules = SubModule::where('module_id', $moduleId)->get(); 
        $html = '<option value="">Select Module</option>'; 
        foreach ($subModules as $value) {
            $html .= '<option value="' . $value->id . '">' . $value->sub_module_name . '</option>'; 
        }
        return response()->json($html, 200);
    }
    // getCategory
    public function getCategory(Request $request) {
        $category_id = $request->moduleId;
    
        $categories = Category::where('parent_id', $category_id)->get();
        

        $html = '<option value="">Select</option>'; 
        foreach ($categories as $value) {
            $html .= '<option value="' . $value->id . '">' . $value->category_name . '</option>'; 
        }

        return response()->json(['html' => $html], 200); 
    }
    //getSubCost
    public function getSubCost(Request $request){
        $InfoId = $request->InfoId;
        $ItemCostInfo = ItemCostInfo::where('item_info_id',$InfoId)->get();
        $html = '<option value="">Select Cost</option>';
        foreach ($ItemCostInfo as $value) {
            $html .= '<option value="'.$value->id.'">'.$value->total_Purchase_cost.'</option>';
        }
        return response()->json($html,200);
    }
    //getItemAllInfo
    public function getItemAllInfo(Request $request){
        $InfoId = $request->InfoId;
        $ItemCostInfo = ItemPrice::where('item_info_id',$InfoId)->get();
        $html = '<option value="">Select Cost</option>';
        foreach ($ItemCostInfo as $value) {
        }
        $html = '<option value="">Select Price</option>';
        foreach ($ItemCostInfo as $value) {
            $html .= '<option value="'.$value->id.'">'.$value->total_Purchase_cost.'</option>';
        }
        return response()->json($html,200);
    }
}
