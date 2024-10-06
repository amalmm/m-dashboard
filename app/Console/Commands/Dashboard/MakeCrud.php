<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Artisan;

class MakeCrud extends Command
{

    protected $signature = 'crud:crud {name}  {-m} {-r}';

    protected $description = 'generate dashboard crud  {-m} migration {-r} route';

    public function handle()
    {

        $name =  $this->argument('name');

        $this->info('start');
        $this->info('.');
        Artisan::call('crud:view ' . $name);
        $this->info('..');
        Artisan::call('crud:model ' . $name);
        $this->info('...');
        Artisan::call('crud:controller ' . $name);
        $this->info('....');
        Artisan::call('crud:model ' . $name);

        if ($this->option('-m')) {
         Artisan::call('crud:migration ' . $name);
        }

         if ($this->option('-r')) {
            Artisan::call('crud:route ' . $name);
        }

        $this->info('end');

    }


}
