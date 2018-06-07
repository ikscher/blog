<?php

namespace App\Http\Controllers\Test;
use App\Model\BidInfo as BidInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BidController extends Controller
{
    //
    public function index(){
    	$bidinfos=BidInfo::all();
    	// $bidinfos = BidInfo::where('id','=',3380)
     //           ->orderBy('id', 'desc')
     //           ->take(10)
     //           ->get();
  //       BidInfo::chunk(100, function ($bidinfos) {
		//     foreach ($bidinfos as $bidinfo) {
		//         echo $bidinfo->borrow_name;
		//     }
		// });
		// foreach ($bidinfos as $bidinfo) {
		//     echo $bidinfo->borrow_name;
		// }
		//(3)
        // $bid =  BidInfo::find(3386);
        // $bid->fill(['borrow_uid'=>'2222','borrow_name'=>'短期借款'])->save();
        
		// $bid = BidInfo::create(['borrow_name' => 'Flight 10','borrow_uid'=>'23']);
        
		$flight = BidInfo::updateOrCreate(
		    ['id'=>3386],
		    ['borrow_money'=>200] //必须在fillable里面设置borrow_money
		);
    }

}
