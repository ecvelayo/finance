<?php

namespace Increment\Finance\FundTransferCharge\Models;

use Illuminate\Database\Eloquent\Model;
use App\APIModel;

class FundTransferCharge extends APIModel
{
    protected $table = 'fund_transfer_charges';
    protected $fillable = ['scope','charge','currency','destination'];
}