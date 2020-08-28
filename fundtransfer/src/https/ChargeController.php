<?php

namespace Increment\Finance\FundTransfer\Http;

use Illuminate\Http\Request;
use App\Http\Controllers\APIController;
use Increment\Finance\FundTransfer\Models\FundTransferFees;

class ChargesController extends Controller
{
    //
    function __construct(){
        $this->model = new FundTransferFees();
        // $this->notRequired = array(
        //     'name', 'address', 'prefix', 'logo', 'website', 'email'
        // );
    }

    public function generateCode(){
        $code = 'del_'.substr(str_shuffle($this->codeSource), 0, 60);
        $codeExist = FundTransferFees::where('code', '=', $code)->get();
        if(sizeof($codeExist) > 0){
          $this->generateCode();
        }else{
          return $code;
        }
    }

    public function create(Request $request){
        $data = $request->all();
        $data['code'] = $this->generateCode();
        $this->model = new FundTransferFees();
        $this->insertDB($data);
        return $this->response();
    }
    
}
