<?php

namespace Admin\Providers;

use Directory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName = basename(dirname(__DIR__ ,1 ));
        ////////////// add dynamic prefix in config routes.php file////////
        config([
            $moduleName => File::getRequire(loadModuleConfigFile('routes',$moduleName))
        ]);
        /////////////// load module routes/////////////
        $this->loadRoutesFrom(loadModuleRoutes('routes',$moduleName));

        ////// load module views////////////////
        $this->loadViewsFrom(loadModuleViews($moduleName), $moduleName);

        ///////////// load module migrations files////////// 
        $this->loadMigrationsFrom(loadModuleMigrations($moduleName));
        
        ////// load module lang files////////////////
        $this->loadTranslationsFrom(loadModuleLangs($moduleName), $moduleName);
    }
}
