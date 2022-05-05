<?php

namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


trait StorageImageTrait{
    public function storageTraitUpload($request, $fileName, $forderName)
    {
        if ($request->hasFile($fileName)) {
            $file = $request->$fileName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $request->file($fileName)->storeAs('public/'.$forderName.'/'.auth()->id(),$fileNameHash);
            $dataUpdateTrait = [
                'fileName' => $fileNameOrigin,
                'filePath' => Storage::url($path),
            ];
            return $dataUpdateTrait;
        }
        else{
            return null;
        }
    }
}
