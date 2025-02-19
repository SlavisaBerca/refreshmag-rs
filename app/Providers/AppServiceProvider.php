<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Service;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Language;
use App\Traits\CartItems;
use App\Models\AppSetting;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //cache()->forget('appsettings');
        View::composer('*', function ($view) {           
            $view->with('getCategories',cache()->remember('categories',60,function(){
                return Category::where('categories.status',1)->orderBy('categories.position','asc')->get();
            }));
            $view->with('getLanguages',cache()->remember('languages',60,function(){
                return Language::where('status',1)->get();
            }));
            $view->with('generalSettings',cache()->remember('generalsettings',60,function(){
                return GeneralSetting::find(1);
            }));
            $view->with('appSettings',cache()->remember('appsettings',60,function(){
                return AppSetting::find(1);
            }));
            $view->with('defaultLang',Session::has('language') ? Language::find(Session::get('language')) : Language::where('is_default',1)->first());
            $lang = Session::has('language') ? Language::find(Session::get('language')) : Language::where('is_default',1)->first();
            $getContent = file_get_contents('languages/'.strtolower($lang->name).'.json');
            $setContent = json_decode($getContent,true);
            $view->with('defaultContent',$setContent);
            $view->with('defaultCurrency',Session::has('currency') ? Currency::find(Session::get('currency')) : Currency::where('is_default',1)->first());
            $view->with('getCurrencies',Currency::all());
            $view->with('getServices',cache()->remember('services',60,function(){
                return Service::where('status',1)->orderBy('position','asc')->get();
            }));
            $view->with('mainMenu',cache()->remember('headermenu',60,function(){
                return Menu::with(['getItems.getSubmenuItems.getChildrens'])->where('is_default',1)->first();
            }));
            $view->with('footerMenu',cache()->remember('footermenu',60,function(){
                return Menu::with(['getItems.getSubmenuItems'])->where('view_position','footer')->where('is_default',1)->first();
            }));

            $view->with('cartTotal',CartItems::showInProvider()['cartTotal']);
            $view->with('cartCount',CartItems::showInProvider()['cartCount']);
        });
    }
}
