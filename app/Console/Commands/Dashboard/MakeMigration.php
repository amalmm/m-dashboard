<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Console\Command;
use App\Console\Commands\Dashboard\Support\FileGenerator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;

class MakeMigration extends Command
{

    protected $signature = 'crud:migration {name}';

    protected $description = 'generate dashboard crud application';

    protected $stubPath =   __DIR__ . '/stubs/migration.stub';

    // location file generation
    protected function location () {
       return  base_path("database/migrations");
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

        $timestamp = date('Y_m_d_His');
        $migrationFileName = $timestamp . '_create_' . Str::snake(Str::plural($name)) . '_table.php';

               (new FileGenerator)
                ->setStubPath(  $this->stubPath )
                ->setStubReplace( $this->stubReplace($name) )
                ->creatFile( $this->location() . '/' . $migrationFileName );
                 $this->info($name . 'migration generated successfully.');

    }


}
