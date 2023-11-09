<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){


        Paginator::useBootstrapFive();
       //または Paginator::useBootstrapFour();　　   公式ドキュメント
    }
}
