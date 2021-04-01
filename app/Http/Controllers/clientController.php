<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;
use Mail;
use Illuminate\Http\Request;
use App\blogpost;
use Session;
class clientController extends Controller
{
    
           public function sms()

    {
        $text = "hello";
        $receiver = "03035005501";
         $sender = "King Fabric";
$ok = '&';
 //return file_get_contents('http://csms.dotklick.com/api_sms/api.php?key=72097a90d0ac36af8a9ce42bc4c4c51a&receiver='.$receiver.'&sender='.$sender.'&msgdata='.$text.'');
 
//$url = "http://csms.dotklick.com/api_sms/api.php?key=72097a90d0ac36af8a9ce42bc4c4c51a&receiver=03035005501&sender=King Fabric&msgdata=hello";

 $cSession = curl_init(); 
    curl_setopt($cSession,CURLOPT_URL,"http://csms.dotklick.com/api_sms/api.php?key=72097a90d0ac36af8a9ce42bc4c4c51a&receiver=03035005501&sender=King Fabric&msgdata=hello");
    curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($cSession,CURLOPT_HEADER, false); 
    $result=curl_exec($cSession);
    curl_close($cSession);
    echo $result;

    }


    public function client_home()
    
    {
        $result = DB::select("select* from category  LIMIT 5 ");
            
            
        return view('client.client_home',compact('result'));
    }
    
    
     public function detail_blog($id)
    
    {
        $blog = blogpost::find($id);
        // return $blog;
        $ba = blogpost::all()->sortByDesc("id");
        return view('client.blogdetail',compact('blog','ba'));
    }
    public function blog()
    {
        $blog = blogpost::all()->sortByDesc("id");
       
        return view('client.blog',compact('blog'));
    }
    
    
    public function client_login_view() {
       
            return view('client.client_login');
        
        }

	public function verify_code($username,$code)
        {
            $result = DB::select("select* from reset_password where username= '$username' and verification_code= '$code' and TIMESTAMPDIFF(MINUTE,reset_password.created_at,NOW()) <=30 ");
            
            
            if(count($result)>0)
            {
                return view('client.change_password',compact('username'));
            }
            else
            return "The Verification code is expired";
        }
        public function password_change(Request $request,$username)
        {
            $password = md5($request->input('password'));
            DB::update("update client_details set password ='$password' where username='$username'");
            return redirect('/login')->with('message', 'Your Password has been changed Successfully');
        }
        public function reset_password_view() {
            
                 return view('client.password_reset');
             
             }

             public function reset_password(Request $request) {


                $username = $request->input('username');
                $result = DB::select("select* from client_details where username = '$username'");
                if(count($result)>0)
                {
                    $vcode = uniqid();
                    DB::insert("insert into reset_password (username,verification_code) values('$username','$vcode') ");
                    $customer_name= $result[0]->{'fname'};
                    $data = array(
                        'customer_name' =>$customer_name,
                        'customer_username'=> $username,
                        'customer_verification_code'=> $vcode,
                        
                        
                    );
                    // Mail::send('email_reset_password', $data, function ($message) use($username) {
                        
                    //             $message->from('kamran@kingfabrics.com','KING FABRICS' );
                               
                    //             $message->to($username)->subject('Password Reset Confirmation Link');
                        
                    //         });
                    return redirect()->back()->with('message', 'A Password reset link sent to your email');
                } 
                else
                {
                    return Redirect::back()->withErrors('Username not found');
                }

                

                    
                 
                 }
        public function client_order_now() {
       
            return view('client.order_now');
        
        }
        public function update_specific_view($id)
        {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            $c_id = session()->get('pk_id');
            $result2 = DB::select("select*  from client_details where pk_id = '$c_id' ");
            $result = DB::select("select*  from enquiry_submit where pk_id = '$id' ");
            $result1 = DB::select("select*  from enquiry_lastedit where pk_id = '$id' ");
            return view('client.update_specific_view',compact('result2', 'result1','result')); 
        }
        public function update_required_list_view()
        {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            if(session()->has('username'))
            {
            $value = session()->get('pk_id');
            
        $result = DB::select("select*  from enquiry_submit where c_id = '$value' and (status='2' or status='3') order by pk_id desc");
        return view('client.update_required',compact('result'));
    
            }
        }
        public function order_tracking_specific_view($id)
        {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            if(session()->has('username'))
            {
            $value = session()->get('pk_id');
            $result = DB::select("select*  from client_details where pk_id = '$value'");  
              
        $result1 = DB::select("select*  from enquiry_submit where pk_id = '$id'");
        return view('client.order_tracking_specific_view',compact('result1','result'));
    
            }
        }
        public function order_tracking_list_view()
        {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            if(session()->has('username'))
            {
            $value = session()->get('pk_id');
            
        $result = DB::select("select*  from enquiry_submit,order_tracking where order_tracking.e_id = enquiry_submit.pk_id and enquiry_submit.c_id = '$value' and order_tracking.status != '7'order by enquiry_submit.pk_id desc ");
        return view('client.order_tracking',compact('result'));
    
            }
            
        }
        public function order_history_list_view()
        {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            if(session()->has('username'))
            {
            $value = session()->get('pk_id');
            
        $result = DB::select("select*  from enquiry_submit,order_tracking where order_tracking.status= '7' and order_tracking.e_id = enquiry_submit.pk_id and enquiry_submit.c_id = '$value' order by enquiry_submit.pk_id desc ");
        return view('client.order_history',compact('result'));
    
            }
            
        }
        public function add_enquiry_view() {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }

            $result = DB::select("select* from sample");
            $result1 = DB::select("select* from category");
            $result2 = DB::select("select* from sub_category");
            return view('client.add_enquiry',compact('result','result1','result2'));
          
        
        }

        public function searchByCategory($main = '')
        {
            $a = "1";
            $b = "2";
            $c = "0";
            $f = "0";
    
            date_default_timezone_set("Asia/Karachi");
            $date = date('Y-m-d');
            $result = [];
          
    
            $result = DB::select(DB::raw("SELECT * FROM sample WHERE sample.main_category = :value ") , array(
               
                'value' => $main,
            ));
    
         
            $result2 = DB::select("select * from category");
            return view('client.sample', compact('result','result2', 'main_category', 'main'));
        }
    



        public function pre_order_list_view() {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            if(session()->has('username'))
            {
            $value = session()->get('pk_id');
            
        $result = DB::select("select*  from enquiry_submit where c_id = '$value' and status='0'order by pk_id desc ");
    //    return $result;
        return view('client.pre_order_list_view',compact('result'));
    
            }
       
            return view('client.pre_order');
        
        }

        public function about() {
       
            return view('client.about');
        
        }

        public function contact() {
       
            return view('client.contact');
        
        }

        public function create_client_view() {
       
            return view('client.create_client');
        
        }

        public function client_dashboard_view() {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            if(session()->has('username'))
            {
                $value = session()->get('pk_id');
            
                $result = DB::select("select count(*)  from enquiry_submit where c_id = '$value' and status='0' ");
                $pre_order =  $result[0]->{'count(*)'};


                $result = DB::select("select count(*) from enquiry_submit,order_tracking where order_tracking.e_id = enquiry_submit.pk_id and enquiry_submit.c_id = '$value' and order_tracking.status != '7' ");
                $order =  $result[0]->{'count(*)'};


                $result = DB::select("select count(*)  from enquiry_submit where c_id = '$value' and (status='2' or status='3') ");
                $update_required =  $result[0]->{'count(*)'};


                $result = DB::select("select count(*)  from enquiry_submit,order_tracking where order_tracking.status= '7' and order_tracking.e_id = enquiry_submit.pk_id and enquiry_submit.c_id = '$value' ");
                $order_completed =  $result[0]->{'count(*)'};
                
                return view('client.dashboard',compact('pre_order','order','update_required','order_completed'));
            }
            else
            {
                return redirect('/login');
            }
    

            
        }

        public function edit_profile_view() {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            if(session()->has('username'))
            {
                return view('client.edit_profile');
            }
        }

        public function edit_enquiry_view($id) {

            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            $result = DB::select("select*  from enquiry_submit where pk_id = '$id'");

            $result1 = DB::select("select*  from sample ");
            
            return view('client.edit_enquiry',compact('result','result1'));

        }

        public function edit_enquiry(Request $request,$id) {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }

           $value = $request->session()->get('pk_id');
        $product =$request->input('product');
        $category =$request->input('category');
        $weight =$request->input('weight');
        $weave =$request->input('weave');
        $reed =$request->input('reed');
        $weft =$request->input('weft');
        $quantity =$request->input('qty');
        $date =$request->input('date');
        $payment =$request->input('payment');
        $color =$request->input('color');
        $warp =$request->input('warp');
        $pick =$request->input('pick');
        $width =$request->input('width');
        $shipment =$request->input('shipment');
        $ntn =$request->input('ntn');
        $price =$request->input('price');
        $note =$request->input('note');
        $c_id = session()->get('pk_id');
        $wu = $request->input('unit');
        if($request->input('unit'))
        {
         $wu =$request->input('unit');
        }
        else
        {
        $wu= 'NA';
        }
         if($request->input('date')!='')
        {
         $date =$request->input('date');
        }
        else
        {
        $date= 'NA';
        }
        if($request->input('price'))
        {
         $price =$request->input('price');
        }
        else
        {
        $price = 0;
        }
        if($request->input('weight'))
        {
        $weight =$request->input('weight');
        }
        else
        {
        $weight = 0;
        }
        
        if($request->input('weave'))
        {
       $weave =$request->input('weave');
        }
        else
        {
         $weave = 0;
        }
        if($request->input('reed'))
        {
       $reed =$request->input('reed');
        }
        else
        {
         $reed = 0;
        }
         if($request->input('weft'))
        {
       $weft =$request->input('weft');
        }
        else
        {
         $weft = 0;
        }
         if($request->input('qty'))
        {
       $quantity =$request->input('qty');
        }
        else
        {
         $quantity = 0;
        }
        if($request->input('color'))
        {
       $color =$request->input('color');
        }
        else
        {
         $color = "NA";
        }
        if($request->input('warp'))
        {
        $warp =$request->input('warp');
        }
        else
        {
         $warp = 0;
        }
        if($request->input('pick'))
        {
        $pick =$request->input('pick');
        }
        else
        {
         $pick  = 0;
        }
        if($request->input('width'))
        {
        $width =$request->input('width');
        }
        else
        {
         $width  = 0;
        }
        if($request->input('ntn'))
        {
       $ntn =$request->input('ntn');
        }
        else
        {
         $ntn = 0;
        }
        if($request->input('note'))
        {
      $note =$request->input('note');
        }
        else
        {
         $note = "NA";
        }
           
           
           
            $status = 3;

            $results = DB::select("select*  from enquiry_submit where c_id = '$value' and pk_id = '$id'");
            if(count($results)>0)
            {    
                $result = DB::select("select*  from enquiry_lastedit where c_id = '$value' and pk_id = '$id'");
            if(count($result)>0)
            {

              DB::table('enquiry_lastedit')->where('pk_id', $id)->update(['product_name' =>$results[0]->{'product_name'},
              'category' => $results[0]->{'category'},'weight_GSM' => $results[0]->{'weight_GSM'},'weave' => $results[0]->{'weave'},
              'reed' => $results[0]->{'reed'},'weft' => $results[0]->{'weft'},'quantity' =>$results[0]->{'quantity'},
              'delivery_date' =>$results[0]->{'delivery_date'},'payments' => $results[0]->{'payments'},'color' => $results[0]->{'color'},
              'warp' =>$results[0]->{'warp'},'pick' => $results[0]->{'pick'},'width' => $results[0]->{'width'},'widthunit'=> $results[0]->{'widthunit'},
              'shipment' =>$results[0]->{'shipment'},'NTN_number' => $results[0]->{'NTN_number'},'price' => $results[0]->{'price'},'note' => $results[0]->{'note'},'status' => $results[0]->{'status'}]);
            }
            else {
               
               DB::insert("insert into enquiry_lastedit select*  from enquiry_submit where c_id = '$value' and pk_id = '$id'");
              
            }
        }

            DB::table('enquiry_submit')->where('pk_id', $id)->update(['product_name' => $product,
            'category' => $category,'weight_GSM' => $weight,'weave' => $weave,
            'reed' => $reed,'weft' => $weft,'quantity' => $quantity,
            'delivery_date' => $date,'payments' => $payment,'color' => $color,
            'warp' => $warp,'pick' => $pick,'width' => $width,'widthunit'=>$wu,
            'shipment' => $shipment,'NTN_number' => $ntn,'price' => $price,'note' => $note, 'status' => $status]);
            
            $result = DB::select("select*  from enquiry_submit where pk_id = '$id' ");
            $result1 = DB::select("select*  from enquiry_lastedit where pk_id = '$id' ");
           
            $data = array(
                'customer_name' => session()->get('fname'),
        'customer_email'=> session()->get('username'),
        'customer_city'=> session()->get('city'),
        'customer_phone_number'=> session()->get('phone'),
  'customer_company_name'=> session()->get('cname'),
  'customer_STN_No'=> session()->get('stn'),
  'customer_NTN_No'=> session()->get('ntn'),
  'customer_address'=> session()->get('address'),
  'customer_corresponding_address'=> session()->get('caddress'),
                'results1' => $result1[0],
                'results' => $result[0],
            );
            $o_id = $id;
                // Mail::send('email_order_update', $data, function ($message) use($o_id) {
            
                //     $message->from('kamran@kingfabrics.com','KING FABRICS' );
                //     $id = session()->get('username');
                //     $message->to($id)->subject('Enquiry ID# '.$o_id.' Order Updated');
                    
                // });

            return redirect('/dashboard/view/update/required/list');
            
        }

        public function pre_order_specific_view($id){
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            if(session()->has('username'))
            {
        $value = session()->get('pk_id');
        $result = DB::select("select*  from client_details where pk_id = '$value'");
  
        $result1 = DB::select("select*  from enquiry_submit where pk_id = '$id'");
        // return $result1;
        return view('client.specific_enquiry_view',compact('result','result1'));
    
            }     
         
             }

             public function pre_order_accept($id){
                if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
                if(session()->has('username'))
                {

            $value = session()->get('pk_id');
            $status = 1;
            DB::table('enquiry_submit')->where( 'pk_id', $id)->update(['status' => $status]);
            DB::insert("insert into order_tracking (e_id,updated_at) values (?,?)",array($id,Now()));
            $result = DB::select("select* from enquiry_submit where pk_id = '$id'");
            $data = array(
                'customer_name' => session()->get('fname'),
                'customer_email'=> session()->get('username'),
                'customer_city'=> session()->get('city'),
                'customer_phone'=> session()->get('phone'),
'customer_company_name'=> session()->get('cname'),
  'customer_STN_No'=> session()->get('stn'),
  'customer_NTN_No'=> session()->get('ntn'),
  'customer_address'=> session()->get('address'),
  'customer_corresponding_address'=> session()->get('caddress'),
                'product_name'=> $result[0]->{'product_name'},
                'product_id'=> $result[0]->{'pk_id'},
                'product_gsm'=> $result[0]->{'weight_GSM'},
                'product_color'=> $result[0]->{'color'},
                'product_weave'=> $result[0]->{'weave'},
                'product_warp'=> $result[0]->{'warp'},
                'product_reed'=> $result[0]->{'reed'},
                'product_pick'=> $result[0]->{'pick'},
                'product_weft'=> $result[0]->{'weft'},
                'product_width'=> $result[0]->{'width'},
                'product_quantity'=> $result[0]->{'quantity'},
                'product_date'=> $result[0]->{'delivery_date'},
                'product_shipment'=> $result[0]->{'shipment'},
                'product_payment'=> $result[0]->{'payments'},
            );
            $o_id = $result[0]->{'pk_id'};
                // Mail::send('email_order_confirm', $data, function ($message) use($o_id) {
            
                //     $message->from('kamran@kingfabrics.com','KING FABRICS' );
                //     $id = session()->get('username');
                //     $message->to($id)->subject('Enquiry ID# '.$o_id.' Confirmed');
            
                // });
                }     
             return redirect('/dashboard/view/order/tracking/list');
                 }


        public function client_login(Request $request)
        {
        
            $this->validate($request,['username' => 'required','password'=> 'required']);
            $username =$request->input('username');
            $password = md5($request->input('password'));
            $result = DB::select("select* from client_details where username = '$username' and password='$password' ");

            if(count($result)>0)
            {    
                $request->session()->put('pk_id',$result[0]->{'pk_id'});
                $request->session()->put('username',$username);
                $request->session()->put('type','client');
               // $request->session()->put('name',$result[0]->{'fname'});
                $request->session()->put('fname',$result[0]->{'fname'});
              //  $request->session()->put('lname',$result[0]->{'lname'});
                $request->session()->put('city',$result[0]->{'city'});
                $request->session()->put('phone',$result[0]->{'mobile_no'});
 $request->session()->put('cname',$result[0]->{'c_name'});
 $request->session()->put('ntn',$result[0]->{'ntn'});
 $request->session()->put('stn',$result[0]->{'stn'});
 $request->session()->put('address',$result[0]->{'address'});
 $request->session()->put('caddress',$result[0]->{'c_address'});
               // return Redirect::to('/login/dashboard');
               //return view('client.dashboard',compact('result'));

               return Redirect::to('/login/dashboard');
            }
            else {
                return view('client.client_login')->withErrors('username or password incorrect');
            }


           
        }

        public function edit_profile(Request $request)
        {
            if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
            $fname = $request->input('fname');
          //  $lname = $request->input('lname');
            $city = $request->input('city');
            $p = $request->input('p');
            $id = session()->get('pk_id');
            $password = md5($request->input('pass'));

 if($request->input('cname'))
        {
       $cname =$request->input('cname');
        }
        else
        {
         $cname = 'NA';
        }
   if($request->input('stn'))
        {
       $stn =$request->input('stn');
        }
        else
        {
         $stn = 'NA';
        }
   if($request->input('ntn'))
        {
       $ntn =$request->input('ntn');
        }
        else
        {
         $ntn = 'NA';
        }
   if($request->input('address'))
        {
       $address =$request->input('address');
        }
        else
        {
         $address = 'NA';
        }
   if($request->input('caddress'))
        {
       $caddress =$request->input('caddress');
        }
        else
        {
         $caddress = 'NA';
        }
            DB::update("update client_details set fname = '$fname',mobile_no='$p',city = '$city', password= '$password', c_name = '$cname', ntn = '$ntn', stn = '$stn', address = '$address', c_address = '$caddress' where pk_id='$id'");
 
    $result = DB::select("select* from client_details where pk_id ='$id' ");

            if(count($result)>0)
            {
      $request->session()->put('pk_id',$result[0]->{'pk_id'});
               // $request->session()->put('username',$username);
                $request->session()->put('type','client');
               // $request->session()->put('name',$result[0]->{'fname'});
                $request->session()->put('fname',$result[0]->{'fname'});
              //  $request->session()->put('lname',$result[0]->{'lname'});
                $request->session()->put('city',$result[0]->{'city'});
                $request->session()->put('phone',$result[0]->{'mobile_no'});
 $request->session()->put('cname',$result[0]->{'c_name'});
 $request->session()->put('ntn',$result[0]->{'ntn'});
 $request->session()->put('stn',$result[0]->{'stn'});
 $request->session()->put('address',$result[0]->{'address'});
 $request->session()->put('caddress',$result[0]->{'c_address'});
             return redirect('/login/dashboard');
}
        }


    public function order_submit(Request $request)
    {
    
        if($request->input('weight'))
        {
        $weight =$request->input('weight');
        }
        else
        {
        $weight = 0;
        }
        
        if($request->input('weave'))
        {
       $weave =$request->input('weave');
        }
        else
        {
         $weave = 0;
        }
        if($request->input('reed'))
        {
       $reed =$request->input('reed');
        }
        else
        {
         $reed = 0;
        }
         if($request->input('weft'))
        {
       $weft =$request->input('weft');
        }
        else
        {
         $weft = 0;
        }
         if($request->input('qty'))
        {
       $quantity =$request->input('qty');
        }
        else
        {
         $quantity = 0;
        }
        if($request->input('color'))
        {
       $color =$request->input('color');
        }
        else
        {
         $color = "NA";
        }
        if($request->input('warp'))
        {
        $warp =$request->input('warp');
        }
        else
        {
         $warp = 0;
        }
        if($request->input('pick'))
        {
        $pick =$request->input('pick');
        }
        else
        {
         $pick  = 0;
        }
        if($request->input('width'))
        {
        $width =$request->input('width');
        }
        else
        {
         $width  = 0;
        }
        if($request->input('ntn'))
        {
       $ntn =$request->input('ntn');
        }
        else
        {
         $ntn = 0;
        }
        if($request->input('note'))
        {
      $note =$request->input('note');
        }
        else
        {
         $note = "NA";
        }
        
        $product =$request->input('product');
        $category =$request->input('category');
        
        
        
        
        
        $date =$request->input('date');
        $payment =$request->input('payment');
       
       
        
        
        $shipment =$request->input('shipment');
        
        
       
       $c_id = session()->get('pk_id');
       
                      
      DB::insert("insert into enquiry_submit (product_name,category,weight_GSM,weave,reed,weft,quantity,
      delivery_date,payments,color,warp,pick,width,shipment,NTN_number,note) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
      array($product,$category,$weight,$weave,$reed,$weft,$quantity,$date,$payment,$color,$warp,$pick,$width,$shipment,$ntn,$note));

      $result = DB::select("select* from enquiry_submit where c_id = '$c_id' desc");
      return $result[0]->{'pk_id'};
      $data = array(
        'customer_name' => "Nouman Shoaib",
        'customer_email'=> "nice",
        'customer_city'=> "nice",
        'customer_phone'=> "nice",
   'customer_company_name' => "nice",
        'customer_STN_No'=> "nice",
        'customer_NTN_No'=> "nice",
        'customer_address'=> "nice",
'customer_corresponding_address'=> "nice",
        'product_name'=> $product,
        'product_id'=> "nice",
        'product_gsm'=> "nice",
        'product_color'=> "nice",
        'product_weave'=> "nice",
        'product_warp'=> "nice",
        'product_reed'=> "nice",
        'product_pick'=> "nice",
        'product_weft'=> "nice",
        'product_width'=> "nice",
        'product_quantity'=> "nice",
        'product_date'=> "nice",
        'product_shipment'=> "nice",
        'product_payment'=> "nice",
    );
        // Mail::send('email_enquiry_receive', $data, function ($message) {
    
        //     $message->from('kamran@kingfabrics.com', 'Learning Laravel');
        //     $id = session()->get('username');
        //     $message->to($id)->subject('Learning Laravel test email');
    
        // });
   
   
   
    }

    public function add_enquiry(Request $request)
    {
        if(!(session()->has('type') && session()->get('type')=='client'))
            {
                return redirect('/login');
            }
        if(session()->has('username'))
        {
        $value = $request->session()->get('pk_id');
        $product =$request->input('product');
        $category =urldecode($request->input('category'));
        $sub_category =urldecode($request->input('SubCategory'));
        $type =$request->input('type');
        $weight =$request->input('weight');
        $weave =$request->input('weave');
        $reed =$request->input('reed');
        $weft =$request->input('weft');
        $quantity =$request->input('qty');
        $date =$request->input('date');
        $payment =$request->input('payment');
        $color =$request->input('color');
        $warp =$request->input('warp');
        $pick =$request->input('pick');
        $width =$request->input('width');
        $shipment =$request->input('shipment');
        $ntn =$request->input('ntn');
        $price =$request->input('price');
        $note =$request->input('note');
        $c_id = session()->get('pk_id');
        $wu = $request->input('unit');
        if($request->input('unit'))
        {
         $wu =$request->input('unit');
        }
        else
        {
        $wu= 'NA';
        }
         if($request->input('date'))
        {
         $date =$request->input('date');
        }
        else
        {
        $date= 'NA';
        }
        if($request->input('price'))
        {
         $price =$request->input('price');
        }
        else
        {
        $price = 0;
        }
        if($request->input('weight'))
        {
        $weight =$request->input('weight');
        }
        else
        {
        $weight = 0;
        }
        
        if($request->input('weave'))
        {
       $weave =$request->input('weave');
        }
        else
        {
         $weave = 0;
        }
        if($request->input('reed'))
        {
       $reed =$request->input('reed');
        }
        else
        {
         $reed = 0;
        }
         if($request->input('weft'))
        {
       $weft =$request->input('weft');
        }
        else
        {
         $weft = 0;
        }
         if($request->input('qty'))
        {
       $quantity =$request->input('qty');
        }
        else
        {
         $quantity = 0;
        }
        if($request->input('color'))
        {
       $color =$request->input('color');
        }
        else
        {
         $color = "NA";
        }
        if($request->input('warp'))
        {
        $warp =$request->input('warp');
        }
        else
        {
         $warp = 0;
        }
        if($request->input('pick'))
        {
        $pick =$request->input('pick');
        }
        else
        {
         $pick  = 0;
        }
        if($request->input('width'))
        {
        $width =$request->input('width');
        }
        else
        {
         $width  = 0;
        }
        if($request->input('ntn'))
        {
       $ntn =$request->input('ntn');
        }
        else
        {
         $ntn = 0;
        }
        if($request->input('note'))
        {
      $note =$request->input('note');
        }
        else
        {
         $note = "NA";
        }
        
        
      DB::insert("insert into enquiry_submit (c_id,product_name,category,sub_category,type,weight_GSM,weave,reed,weft,quantity,
      delivery_date,payments,color,warp,pick,width,widthunit,shipment,NTN_number,price,note,created_at) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,CURDATE())",
      array($value,$product,$category,$sub_category,$type,$weight,$weave,$reed,$weft,$quantity,$date,$payment,$color,$warp,$pick,$width,$wu,$shipment,$ntn,$price,$note));
      
      $result = DB::select("select* from enquiry_submit where c_id = '$c_id' ORDER BY pk_id desc");
    
      $data = array(
        'customer_name' => session()->get('fname'),
        'customer_email'=> session()->get('username'),
        'customer_city'=> session()->get('city'),
        'customer_phone'=> session()->get('phone'),
'customer_company_name'=> session()->get('cname'),
  'customer_STN_No'=> session()->get('stn'),
  'customer_NTN_No'=> session()->get('ntn'),
  'customer_address'=> session()->get('address'),
  'customer_corresponding_address'=> session()->get('caddress'),
        'product_name'=> $product,
        'product_id'=> $result[0]->{'pk_id'},
        'product_gsm'=> $weight,
        'product_color'=> $color,
        'product_weave'=> $weave,
        'product_warp'=> $warp,
        'product_reed'=> $reed,
        'product_pick'=> $pick,
        'product_weft'=> $weft,
        'product_width'=> $width,
        'product_quantity'=> $quantity,
        'product_date'=> $date,
        'product_shipment'=> $shipment,
        'product_payment'=> $payment,
        
    );
    // $o_id = $result[0]->{'pk_id'};
        // Mail::send('email_enquiry_receive', $data, function ($message) use ($o_id) {
    
        //     $message->from('kamran@kingfabrics.com','KING FABRICS' );
        //     $id = session()->get('username');
        //     $message->to($id)->subject('Enquiry ID# '.$o_id.' Received');
    
        // });
   
      
      return redirect('/dashboard/view/preorder/list');
    }
}

public function logout()
{
    session()->flush();
        return redirect('/');
}

    public function create_client(Request $request)
    {
    
        if ($request->input('password') == $request->input('confirm'))
        {
            $username =$request->input('email');
    
            $result = DB::select("select* from client_details where username = '$username' ");
  
               if(count($result)>0)
               {
                return Redirect::back()->withErrors('Username already Exist');
               }
               else
               {
   if($request->input('cname'))
        {
       $cname =$request->input('cname');
        }
        else
        {
         $cname = 'NA';
        }
   if($request->input('stn'))
        {
       $stn =$request->input('stn');
        }
        else
        {
         $stn = 'NA';
        }
   if($request->input('ntn'))
        {
       $ntn =$request->input('ntn');
        }
        else
        {
         $ntn = 'NA';
        }
   if($request->input('address'))
        {
       $address =$request->input('address');
        }
        else
        {
         $address = 'NA';
        }
   if($request->input('caddress'))
        {
       $caddress =$request->input('caddress');
        }
        else
        {
         $caddress = 'NA';
        }
 DB::insert("insert into client_details (fname,username, password, mobile_no,city,c_name,stn,ntn,address,c_address ) values (?,?,?,?,?,?,?,?,?,?)",array($request->input('fname'),$request->input('email'),md5($request->input('password')),$request->input('tel'),$request->input('city'),$cname,$stn,$ntn,$address,$caddress));

                      
                  

                           return redirect('/login');
                }
                               
    
       
    }
    else{
        return redirect('/signup');
       }


}
public function add_guest_inq_view()
{

    $result = DB::select("select* from sample");
    $result1 = DB::select("select* from category");
    $result2 = DB::select("select* from sub_category");
    return view('client.add_guest_enquiry',compact('result','result1','result2'));
}


public function add_guest_inq(Request $request)
{
    $fname = $request->input('fname');
    $lname = $request->input('lname');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $address = $request->input('address');
    $name = $request->input('name');
    $type = $request->input('type');
    $q = $request->input('q');
    $color = $request->input('color');
    $warp = $request->input('warp');
    $reed = $request->input('reed');
    $pick = $request->input('pick');
    $weft = $request->input('weft');
    $unit = $request->input('unit');
    $dd = $request->input('dd');
    $mode = $request->input('mode');
    $STN = $request->input('STN');
    $payment = $request->input('payment');
    $GSM = $request->input('GSM');
    $Weave = $request->input('weave');
    $price = $request->input('price');
    $Width = $request->input('width');
    $note = $request->input('message');
   
    $main_category = urldecode($request->input('mainCategory'));

    $sub_category = urldecode($request->input('SubCategory'));

    DB::insert("insert into guest_enquiry (fname,lname,email,phone,address,name,type,q,color,warp,reed,pick,weft,
    unit,delivery_date,mode_of_ship,STN,payment,GSM,weave,price,width,note,main_category,sub_category) 
    values (?,?,?,?
    ,?,?,?,?
    ,?,?,?,?
    ,?,?,?,?,?,?,?,?,?,?,?,?,?)", 
    array(
        $fname ,
        $lname ,
        $email ,
        $phone ,
        $address,
        $name  ,
        $type ,
        $q ,
        $color ,
        $warp,
        $reed,
        $pick ,
        $weft ,
        $unit ,
        $dd   ,
        $mode ,
        $STN ,
        $payment,
        $GSM,
        $Weave ,
        $price,
        $Width,
        $note,
        $main_category ,
        $sub_category ,
       
      
    ));
    return Redirect::back()->withErrors('Enquiry Submitted');
}

public function sample()
    
{
    $result = DB::select("select* from sample  ");
    $result2 = DB::select("select* from category  ");

    return view('client.sample',compact('result','result2'));
}

public function view_wishlist()
{

    $username = session()->get('username');

    $result = DB::select("select* from wishlist,sample where wishlist.product_id=sample.pk_id");

    if (count($result) > 0)
    {
        return view('client.wishlist', compact('result'));
    }
    else
    {
        return Redirect::back()->withErrors('No result found');
    }
}

public function sample_detail($id)
    
{
    $result = DB::select("select* from sample where pk_id = '$id' ");
    $result2 = DB::select("select* from category  ");
    $result3 = DB::select("select* from sample ORDER BY pk_id DESC  LIMIT 1");
    

    return view('client.sample_detail',compact('result','result2','result3'));
}


public function add_wishlist($id)

{
    if (!(session()->has('type') && session()
        ->get('type') == 'client'))
    {
        return redirect('/login');
    }
    $username = session()->get('username');

    
    $result = DB::select("select* from wishlist where user_id = '$username' and product_id ='$id' ");

        if (count($result) > 0)
        {
            Session::flash('message','Already product is in wishlist');
    return redirect()->back();
        }
        else{    
        
        DB::insert("insert into wishlist (user_id,product_id) values (?,?)", array(
            $username,
            $id
        ));
        }
    

    Session::flash('message','Prodduct add to wishlist');
    return redirect()->back();
}


}
