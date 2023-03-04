<?php

namespace Olakunlevpn\Mages;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class MagesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('mages', function ($command) {
            MagesPreset::install();

            $command->info('Mages preset scaffolding installed successfully.');

            if ($command->option('auth')) {
                MagesPreset::installAuth();

                $command->info('Auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your new assets.');
        });

        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}
