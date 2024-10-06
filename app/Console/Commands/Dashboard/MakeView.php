<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Console\Command;
use App\Console\Commands\Dashboard\Support\FileGenerator;

class MakeView extends Command
{

    protected $signature = 'crud:view {name}';

    protected $description = 'generate dashboard crud views';

    // key :stub  value:generated file name
    protected $file =   [
                 'index.stub'  => 'index.blade.php',
                 'create.stub' => 'create.blade.php',
                 'edit.stub'   => 'edit.blade.php',
                 'table.stub'  => 'table.blade.php'
    ];

    // location file generation
    protected function location () {
       return  base_path("resources/views/dashboard");
    }

    // replace content
    protected function stubReplace ($name) {
        return  [
                [
                    '{{name}}',
                    '{{route}}'
                 ],
                 [
                    $name,
                    strtolower($name)
                ]
        ];
     }


    public function handle()
    {

        $name =  $this->argument('name');

        foreach ($this->file as $stubPath => $fileName) {
              (new FileGenerator)
                ->setStubPath( __DIR__ . '/stubs/' . $stubPath )
                ->setStubReplace( $this->stubReplace($name) )
                ->creatFolder(  $this->location() .'/'. strtolower($name) )
                ->creatFile( $this->location() . '/' . $name . '/' . $fileName );
                $this->info($fileName . 'views generated successfully.');
          }

    }


}
