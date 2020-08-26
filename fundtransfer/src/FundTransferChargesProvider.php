<?php

namespace Increment\Finance\FundTransfer;

use Illuminate\Support\ServiceProvider;

class FundTransferChargesProvider extends ServiceProvider{

  public function boot(){
    $this->loadMigrationsFrom(__DIR__.'/migrations');
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
  }

  public function register(){
  }
}