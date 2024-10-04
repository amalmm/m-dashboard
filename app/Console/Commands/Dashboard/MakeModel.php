<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Console\Command;
use App\Console\Commands\Dashboard\Support\FileGenerator;
use Illuminate\Support\Str;

class MakeModel extends Command
{

    protected $signature = 'crud:model {name}';

    protected $description = 'generate dashboard crud application';

    protected $stubPath =   __DIR__ . '/stubs/model.stub';

    // location file generation
    protected function location () {
       return  app_path("Models/Dashboard");
    }

    // replace content
    protected function stubReplace ($name) {
        return  [
                [
                    '{{name}}',
                    '{{route}}',
                    '{{namePlural}}'
                 ],
                 [
                    $name,
                    strtolower($name),
                    strtolower(Str::plural($name))
                ]
        ];
     }


    public function handle()
    {

        $name =  $this->argument('name');

               (new FileGenerator)
                ->setStubPath(  $this->stubPath )
                ->setStubReplace( $this->stubReplace($name) )
                ->creatFile( $this->location() . '/' . $name . '.php' );
                 $this->info($name . 'model generated successfully.');

    }


}
