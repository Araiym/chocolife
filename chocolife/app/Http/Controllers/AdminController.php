<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\sales;
use App\categories;
use App\pictures;
use Auth;
use Session;
class AdminController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->input();
    		if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
    				return redirect('/admin/index');
    		}else{
    			return redirect('adminpanel/admin')->with('message_error','Invalid email or password');
    		}
    	}
    	return view('admin.login' );
    }
      public function index(){
     return view('admin.index');    
    }
       public function logout(){
     Session::flush();
     return redirect('adminpanel/admin')->with('message_success','You logged out');    
   }
   public function categories(){
    $var=categories::all();
    $last=sales::all();
    return view('admin.index',compact('last'),compact('var'));
   }
   public function store(Request $request)
    {
     $add= new sales();
     $add-> name_sales= Input::get("name");
     $add-> description= Input::get("description");
     $add-> price=Input::get("price");
     $add-> category_id=Input::get("category");
     $add->save();
     return response()->json($add);
    }
    
       public function addPicture(Request $request){
        if($request->hasFile('image')){
            //$add= DB::table('sales')->orderBy('id_sales', 'desc')->first();
            $add=sales::all()->last();
            $filename=$request->file('image')->getClientOriginalName();
             $request->file('image')->storeAs('public/img',$filename);
             $picture=new pictures();
             $picture->name=$filename;
             //$picture->id_sales=Input::get("id");
            $add->pictures()->save($picture);
             return redirect('admin/index');
        }
         
   }
}
