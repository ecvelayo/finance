<?php

namespace Increment\Finance\FundTransferCharge\Http;

use Illuminate\Http\Request;
use App\Http\Controllers\APIController;
use Increment\Finance\FundTransfer\Models\FundTransferCharge;

class FundTransferChargeController extends Controller
{
    function __construct(){
        $this->model = new FundTransferCharge();
    }

    public function generateCode(){
        $code = 'ftc_'.substr(str_shuffle($this->codeSource), 0, 60);
        $codeExist = FundTransferCharge::where('code', '=', $code)->get();
        if(sizeof($codeExist) > 0){
          $this->generateCode();
        }else{
          return $code;
        }
    }

    public function create(Request $request){
        $data = $request->all();
        $data['code'] = $this->generateCode();
        $this->model = new FundTransferCharge();
        $this->insertDB($data);
        return $this->response();
    }
    
}
