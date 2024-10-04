<?php

namespace App\Console\Commands\Dashboard\Support;

use Illuminate\Support\Facades\File;

class  FileGenerator
{

    public $name;
    public $stubPath;
    public $fileName;
    public $location;
    public $stubReplace;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setStubPath($stubPath)
    {
        $this->stubPath = $stubPath;
        return $this;
    }

    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    public function setLocation($location)
    {
        $this->location = $location;
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

    public function creatFolder()
    {
        $path =  $this->location . '/' . $this->name;
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
    }

    public function creatFile()
    {
        $path =  $this->location . '/' . $this->name . '/' . $this->fileName ;
        if (!File::exists($path)) {
            File::put( $path , str_replace( $this->stubReplace[0],  $this->stubReplace[1] ,  $this->getStubContent() ) );
        }
    }


    public function start()
    {
           $this->creatFolder();
           $this->creatFile();

    }
}



