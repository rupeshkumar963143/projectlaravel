<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\datasignup;
class usercontroller extends Controller
{
    public function login(Request $request)
    {
       // dd($request->all());
        
        //velidetion
        $this->validate($request,[
           "email"=>"required",
           "password"=>"required",

        ]);
       
        $email=$request->get('email');
        $password=$request->get('password');
            // $users=datasignup::selectRaw("COUNT('useremail') AS email")->where('useremail',$email)->first();
        
        $verified=datasignup::select('id','email','password')->where('email',$email)->first();
        
        if($verified !=null){
            
            if (password_verify($request->get('password'), $verified->password)){
                
                $request->session()->put('login','96314Ru@$');
                $request->session()->put('email',$verified->useremail);
                return redirect()->to('/figma');
            }
            else{
                $request->session()->flash('error',"email or password is incrorrect");
                return redirect()->to('/login');
            }
               
        }
    }
         //second public function
       public function signup(Request $request)
       {
            //dd($request->all());
            //echo "SINUP SUCESSFULL";
         //velidetion
         $this->validate($request,[
             "username"=>"required",
             "mobile_no"=>"required",
             "useremail"=>"required|email",
             "password"=>"required",
             
 
         ]);
            //create veriable ,name htmlfile name
         $name=$request->get('username');
         $mobile_no=$request->get('mobile_no');
         $email=$request->get('useremail');
         $password=$request->get('password');
         
        
             //database name ,import veriable
             
             $pass=new datasignup([
                 
                "name"=>$name,
                "email"=>$email,
                "password"=>password_hash($request->get('password'),PASSWORD_BCRYPT),
                "phonenumber"=>$mobile_no,
                
            ]);
             
             $data=$pass->save();
          
            
       }

}
