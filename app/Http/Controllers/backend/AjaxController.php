<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SubModule;
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
            $html .= '<option value="' . $value->id . '">' . $value->subModuleName . '</option>'; 
        }
        return response()->json($html, 200);
    }
}
