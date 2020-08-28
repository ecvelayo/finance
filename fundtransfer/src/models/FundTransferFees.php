<?php

namespace Increment\Finance\Models;

use Illuminate\Database\Eloquent\Model;
use App\APIModel;

class FundTransferFees extends APIModel
{
    protected $table = 'fund_transfer_charges';
    protected $fillable = ['scope','charge','currency','destination'];
}