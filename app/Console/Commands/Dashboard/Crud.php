<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Console\Command;
use App\Console\Commands\Dashboard\Support\FileGenerator;

class Crud extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dashboard:crud {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate dashboard crud application';

    protected $stubPath = __DIR__ . '/stubs/index.stub';

    protected $fileName =   'index.blade.php';

    protected function location () {
       return  base_path("resources/views/dashboard");
    }

    protected function stubReplace () {
        return  [
                ['{{name}}'],
                [$name ]
        ];
     }

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $name =  $this->argument('name');

        return (new FileGenerator)
                         ->setName( $name )
                         ->setFileName( $this->fileName )
                         ->setStubPath( $this->stubPath )
                         ->setStubReplace( $this->stubReplace() )
                         ->setLocation( $this->location() )
                         ->start();
        }


}
