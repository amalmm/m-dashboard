<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Console\Command;
use App\Console\Commands\Dashboard\Support\FileGenerator;
use Illuminate\Support\Str;

class MakeRoute extends Command
{

    protected $signature = 'crud:route {name}';

    protected $description = 'generate dashboard crud application';

    protected $stubPath =   __DIR__ . '/stubs/route.stub';

    // location file generation
    protected function location () {
       return  base_path("routes/dashboard");
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
                ->creatFolder(  $this->location())
                ->creatFile( $this->location() . '/' .  strtolower($name) . '.php' );
                 $this->info($name . 'route generated successfully.');

    }


}
