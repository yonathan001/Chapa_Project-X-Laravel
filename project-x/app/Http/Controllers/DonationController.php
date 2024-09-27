<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Chapa\Chapa\Facades\Chapa as Chapa;
use App\Models\Donation;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class DonationController extends Controller
{
  /**
   * 
   * @return void
   */

    protected $reference;
    public function __construct(){
        $this->reference = Chapa::generateReference ();
    }

    public function store(Request $request)
    {
        $reference =$this->reference;//generate ref
        $validator = Validator::make($request->all(),[
            'name'=>'required|string',
            'amount'=>'required|numeric|min:0',

        ]);
        if($validator->fails()){
            return redirect('/donate')->withErrors($validator)->withInput();
        }
           //initialization by yonathan
        $data = [
            'amount'=> $request-> amount,
            'tx_ref'=> $reference,
            'currency'=>"ETB",
            'callback_url'=> route('callback', $reference),
            'name'=>$request-> name,

        ];

        

        $payment = Chapa::initializePayment($data);
        $donation = Donation::create([
            'name'=>$request->name,
            'tx_ref'=>$reference,
            'amount'=> $request->amount,
            'status' =>($payment['status']==='success') ? 'pending' : 'fail' // status set by yo :)
        ]);
          if ($payment['status'] !== 'success'){
            return redirect('/')->with('error', 'sorry, payment not  successful ');
          }
          return redirect($payment['data']['checkout_url']);
    }
    public function callback($reference){
        $data = Chapa::verifyTransaction($reference);//verify

        if ($data['status'] == 'success'){
            $donation = Donation::where('tx_ref', $reference)->first();

            if ($donation){
                $donation->update(['status' => 'success']);
            } else{
                Log::error('record not found for reference:' . $reference);
            }
            $message= "payment is Successful";
            return redirect('/')->with('success', $message);
        } else {
            $message = "sorry, payment not successful";
            return redirect('/')->with('error',$message);
        }

    }
    
}
