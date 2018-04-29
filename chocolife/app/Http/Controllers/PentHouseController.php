<?php
namespace App\Http\Controllers;
use App\sales;
use Illuminate\Support\Facades\Input;
use App\feedback;
use Illuminate\Http\Request;


class PentHouseController extends Controller{

	public function show(){
		$show=sales::paginate(3);
		return view('index',compact('show'));
	}
 public function addFeedbacks(){
		$addFeed=new feedback();
		$addFeed-> feedback=Input::get("message");
		$addFeed-> id_sales=Input::get("id_sale");
		$addFeed-> id_user=Input::get("id_user");
		$addFeed-> name_user=Input::get("name");
		$addFeed->save();
		 return response()->json($addFeed);

	}
	public function showItem($id_sales){
		$showItem=sales::find($id_sales);
		$show=feedback::all();
		return view('detail',compact('showItem'),compact('show'));
	}
	   public function sort(Request $request) {
        $order = $request->get('order');
        $var = sales::orderBy('price', $order)->get();
        return view('sort', ['var' => $var])->render();
//        
      }

      /*public function register(){
		return view('register');
	}*/
}

?>
