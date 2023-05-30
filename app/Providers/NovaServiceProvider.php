<?php

namespace App\Providers;

use App\Nova\Dashboards\Main;
use App\Nova\Loan;
use App\Nova\Project;
use App\Nova\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Pktharindu\NovaPermissions\Nova\Role;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request){
            return[
                MenuSection::dashboard(Main::class)->icon('chart-bar'),
                MenuSection::make(__('Users'), [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Role::class),
                ])->icon('user')->collapsable(),

                MenuSection::make(__('Projects'),[
                    MenuItem::resource(Project::class)
                ]),

                MenuSection::make(__('Loans'),[
                    MenuItem::resource(Loan::class)
                ]),
            ];

        });

        Nova::footer(function (){
            return Blade::render('
               <p class="mt-8 text-center text-xs text-80">
                 <a href="https://badrbanque.dz" class="text-primary dim no-underline">تسيير القروض الفلاحية</a>
                 <span class="px-1">&middot;</span>
                   &copy; 2023
                 <span class="px-1">&middot;</span>
                 v1.0.0
             </p>

            ');
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new \Badinansoft\LanguageSwitch\LanguageSwitch(),
            new \Pktharindu\NovaPermissions\NovaPermissions(),

        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
