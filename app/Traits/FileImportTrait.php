<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Str;

trait FileImportTrait
{
    public function importFile($file,$resource_name){
     
            $name =str_replace(' ','',$resource_name).'_'.(string)Str::orderedUuid(). '.' .$file->getClientOriginalExtension();
            $content = file_get_contents($file->getRealPath());
            Storage::disk('public')->put('' . $name, $content);
            return $name;
          
    }
}
