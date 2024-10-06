<?php
namespace App\Traits;
use Illuminate\Http\Request;
use File;
trait ImageUploadTrait{
    public function uploadImage(Request $request, $inputName, $path)
    {
        if ($request->hasFile($inputName)) {
            $image = $request->file($inputName); 
            $extension = $image->getClientOriginalExtension(); 
            $imageName = 'media_' . uniqid() . '.' . $extension;
            $image->move(public_path($path), $imageName);
            return $path . '/' . $imageName;
        }
    }
    public function updadeImage(Request $request, $inputName, $path, $oldPth = null)
    {
        if ($request->hasFile($inputName)) {
          
            if ($oldPth && File::exists(public_path($oldPth))) {
                File::delete(public_path($oldPth));
            }

            $image = $request->file($inputName);
            $extension = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $extension;
            $image->move(public_path($path), $imageName);
            
            return $path . '/' . $imageName;
        }
        return $oldPth; 
    }
    private function multipleImgUpload(Request $request, $key, $path)
    {
        $imgPth = [];
    
        if($request->hasFile($key)) {
            foreach ($request->file($key) as $file) {
                $filename = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();
    
                $file->move(public_path($path), $filename);

                $imgPth[] = $filename;
            }
        }
        return $imgPth; 
    }
      
}
?>