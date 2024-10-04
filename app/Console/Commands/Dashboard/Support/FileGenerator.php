<?php

namespace App\Console\Commands\Dashboard\Support;

use Illuminate\Support\Facades\File;

class  FileGenerator
{

    public $stubPath;
    public $stubReplace;



    public function setStubPath($stubPath)
    {
        $this->stubPath = $stubPath;
        return $this;
    }

    public function setStubReplace($stubReplace)
    {
        $this->stubReplace = $stubReplace;
        return $this;
    }

    public function getStubContent()
    {
        if (File::exists($this->stubPath)) {
              return File::get($this->stubPath);
        }
    }

    public function creatFolder($path)
    {
         if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
        return $this; // Return $this to allow chaining

    }

    public function creatFile($path)
    {
         if (!File::exists($path)) {
            File::put( $path , str_replace( $this->stubReplace[0],  $this->stubReplace[1] ,  $this->getStubContent() ) );
        }
    }



}



