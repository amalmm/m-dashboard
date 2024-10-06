<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Console\Command;
use App\Console\Commands\Dashboard\Support\FileGenerator;

class MakeController extends Command
{

    protected $signature = 'crud:controller {name}';

    protected $description = 'generate dashboard crud controller';

    protected $stubPath =   __DIR__ . '/stubs/controller.stub';

    // location file generation
    protected function location () {
       return  app_path("Http/Controllers/Dashboard");
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

               (new FileGenerator)
                ->setStubPath(  $this->stubPath )
                ->setStubReplace( $this->stubReplace($name) )
                ->creatFile( $this->location() . '/' . $name . 'Controller.php' );
                 $this->info($name . 'Controller generated successfully.');

    }


}
