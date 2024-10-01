<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SubModule;
use App\Models\Category;
use Illuminate\Http\Request;

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
        
        // Get the categories where parent_id matches the given category_id
        $categories = Category::where('parent_id', $category_id)->get();
        
        // Start building the HTML for subcategories
        $html = '<option value="">Select</option>'; 
        foreach ($categories as $value) {
            $html .= '<option value="' . $value->id . '">' . $value->category_name . '</option>'; 
        }
        
        // Return the HTML as a response
        return response()->json(['html' => $html], 200); // return JSON response with HTML
    }
    
    
}
