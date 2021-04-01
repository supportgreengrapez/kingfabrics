<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;
use Mail;
use Illuminate\Http\Request;
use App\blogpost;
use Response;
class adminController extends Controller
{
    
        public function delete_blog_post($id)
{
    blogpost::find($id)->delete();

    return redirect('admin-blog');
}



public function sub(Request $request)
{
    $value = $request->Input('cat_id');

    $subcategories = DB::select(DB::raw("SELECT * FROM sub_category WHERE main_category = :value") , array(
        'value' => $value,
    ));

    return Response::json($subcategories);

}

public function reset_password_view()
    {

        return view('admin.password_reset');

    }

    public function admin_reset_password(Request $request)
    {

        $username = $request->input('username');
        $result = DB::select("select* from admin_details where username = '$username'");
        if (count($result) > 0)
        {
            $vcode = uniqid();
            DB::insert("insert into admin_reset_password (username,verification_code) values('$username','$vcode') ");
            $customer_name = $result[0]->{'fname'};
            $data = array(
                'customer_name' => $customer_name,
                'customer_username' => $username,
                'customer_verification_code' => $vcode,

            );
            // Mail::send('admin_email_reset_password', $data, function ($message) use ($username)
            // {

            //     $message->from('kamran@kingfabrics.com','KING FABRICS' );

            //     $message->to($username)->subject('Password Reset Confirmation Link');

            // });
            return redirect()
                ->back()
                ->with('message', 'A Password reset link sent to your email');
        }
        else
        {
            return Redirect::back()
                ->withErrors('Username not found');
        }

    }

    public function verify_code($username, $code)
    {
        $result = DB::select("select* from admin_reset_password where username= '$username' and verification_code= '$code' and TIMESTAMPDIFF(MINUTE,admin_reset_password.created_at,NOW()) <=30 ");

        if (count($result) > 0)
        {
            return view('admin.change_password', compact('username'));
        }
        else return "The Verification code is expired";
    }

    public function password_change(Request $request, $username)
    {
        $password = md5($request->input('password'));
        DB::update("update admin_details set password ='$password' where username='$username'");
        return redirect('/admin')->with('message', 'Your Password has been changed Successfully');
    }

    public function edit_blog_view($id)
    {
        
       
        $p = blogpost::find($id);
    
        $page_name = "edit blog post";
        return view('admin.edit_blog',compact('p','page_name'));
    }
    public function edit_blog(Request $request,$id)
    {
        $thumbnail = "";
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            
            $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
            
               $image->storeAs('public/images',$uniqueFileName);
                $thumbnail=$uniqueFileName;
        }
        $blogpost = blogpost::find($id);
    if(!empty($thumbnail))
        $blogpost->image = $thumbnail;
        $blogpost->body = $request->input('body');
        $blogpost->title = $request->input('title');
   
        $blogpost->save();

        return redirect('admin-blog');
    }
    public function create_blog_post(Request $request)
    {
        $thumbnail = "";
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            
            $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
            
               $image->storeAs('public/images',$uniqueFileName);
                $thumbnail=$uniqueFileName;
        }

        $blogpost = new blogpost();
        $blogpost->image = $thumbnail;
        $blogpost->body = $request->input('body');
        $blogpost->title = $request->input('title');
    
        $blogpost->save();

        return redirect('admin-blog');
    }
    public function bloglist()
    {
        $result = blogpost::all();
        $page_name = "Blog Posts";
        return view('admin.bloglist',compact('result','page_name'));
    }
    public function create_blog_post_view()
    {
        $page_name = "Create Blog Posts";
        return view('admin.add_blog',compact('page_name'));
    }

    /*
        VIEW FUNCTIONS ONLY
    */
    public function logout()
    {
        session()->flush();
        return redirect('/admin');
    }
    public function checkSession()
    {
        
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
    }
    public  function admin_login_view() {
        if(session()->has('username') && session()->get('type')=='admin')
        {
            return redirect('admin/home');
        }
        else
        {
            return view('admin.login');
        }
    }
    public function admin_home() {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        if(session()->has('username'))
        {
            $result = DB::select("select count(*) from order_tracking where order_tracking.status = '7' ");
                $sales =  $result[0]->{'count(*)'};
                $result = DB::select("select count(*) from order_tracking ");
                $members =  $result[0]->{'count(*)'};
                $result = DB::select("select*  from enquiry_submit,order_tracking where order_tracking.e_id = enquiry_submit.pk_id order by enquiry_submit.pk_id desc");
            return view('admin.home',compact('sales','members','result'));
        }
        else
        {
            return redirect('/admin');
        }
       
    }
     
       
    
    public function create_admin_view() {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        if(session()->has('username'))
        {
            return view('admin.create_admin');
        }
        else
        {
            return redirect('/admin');
        }

        
    }

    public function edit_admin_view($id) {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        if(session()->has('username'))
        {
            $result = DB::select("select*  from admin_details where pk_id = '$id'");
            return view('admin.edit_admin_profile',compact('result'));
        }
        else
        {
            return redirect('/admin');
        }

        
    }

    public function edit_admin($id, Request $request) {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        if(session()->has('username'))
        {
            $admin_management = 0;
            $enquiry_management = 0;
            $livechat_management = 0;
            if($request->input('admin_management'))
            {
                $admin_management = 1;
            }
            if($request->input('enquiry_management'))
            {
                $enquiry_management = 1;
            }
            if($request->input('livechat_management'))
            {
                $livechat_management = 1;
            }
            if($admin_management == 0 && $enquiry_management==0 && $livechat_management==0)
            {
                return "atleast you neeed to select one permission";
            }
    }
    if (is_null($request->input('password')) && is_null($request->input('confirm'))){
    DB::table('admin_details')->where('pk_id', $id)->update(['fname' =>$request->input('fname'),'lname' =>$request->input('lname'),'admin_management' =>$admin_management,'enquiry_management' =>$enquiry_management,'livechat_management' =>$livechat_management]);
              
    return redirect('/admin/home/view/admin');
    }
        elseif ($request->input('password') == $request->input('confirm'))
        {
                       
            DB::table('admin_details')->where('pk_id', $id)->update(['fname' =>$request->input('fname'),'lname' =>$request->input('lname'),'password' =>md5($request->input('password')),'admin_management' =>$admin_management,'enquiry_management' =>$enquiry_management,'livechat_management' =>$livechat_management]);
              
            return redirect('/admin/home/view/admin');
                 }
    else{
        return Redirect::back()->withErrors('Password does not match');
       }


}

    public function tracking_preorder_view(){

        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }

        
    $result = DB::select("select*  from enquiry_submit where status = '0' order by pk_id desc");
    // return $result;
    return view('admin.tracking_preorder',compact('result'));



    }


    public function required_update(){
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
      
        $status = 3;
        $result = DB::select("select*  from enquiry_submit where status = '$status' or status = '2' order by pk_id desc ");
        return view('admin.required_update_list',compact('result'));
    
    
    
        }
        public function update_order_status(Request $request)
        {
            if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
            $id = $request->input('id');
            $result1 = DB::select("select* from order_tracking where e_id = '$id'");
            DB::table('order_tracking')->where('e_id', $request->input('id'))->update(['status' =>$request->input('status')]);
            $result = DB::select("select* from enquiry_submit,client_details where enquiry_submit.pk_id = '$id' and enquiry_submit.c_id = client_details.pk_id");
            $pre = "";
            $cur = "";
            if($result1[0]->{'status'}==1)
            {
                $pre = "accepted";
            }
          if($result1[0]->{'status'}==2)
          {
            $pre ="production";
          }
        if($result1[0]->{'status'}==3)
        {
            $pre ="dying";
        }
      if($result1[0]->{'status'}==4)
      {
        $pre ="folding";
      }
    if($result1[0]->{'status'}==5)
    {
        $pre ="packing";
    }
  if($result1[0]->{'status'}==6)
  {
    $pre ="dispatch";
  }

  if($request->input('status')==1)
            { $cur = "accepted";
            }
          if($request->input('status')==2)
          {
            $cur="production";
          }
        if($request->input('status')==3)
        {
            $cur="dying";
        }
      if($request->input('status')==4)
      {
        $cur ="folding";
      }
    if($request->input('status')==5)
    {
        $cur ="packing";
    }
  if($request->input('status')==6)
  {
    $cur ="dispatch";
  }
            $data = array(
                'customer_name' => $result[0]->{'fname'},
                'customer_email'=> $result[0]->{'username'},
                'customer_city'=> $result[0]->{'city'},
                'customer_phone'=> $result[0]->{'mobile_no'},
   'customer_company_name' => $result[0]->{'c_name'},
                'customer_STN_No'=> $result[0]->{'stn'},
                'customer_NTN_No'=> $result[0]->{'ntn'},
                'customer_address'=> $result[0]->{'address'},
  'customer_corresponding_address'=> $result[0]->{'c_address'},
                'product_previous_status' => $pre,
                'product_current_status' => $cur,
                
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
            $o_id = $id;
            $id = $result[0]->{'username'};
                // Mail::send('email_status_update', $data, function ($message) use($o_id,$id) {
            
                //     $message->from('kamran@kingfabrics.com','KING FABRICS' );
            
                //     $message->to($id)->subject('Enquiry ID# '.$o_id.'Status Updated');
                    
                // });
                    
                return URL('/')."/admin/home/view/order";

        }


        public function tracking_view(){
            if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        
        
        $result = DB::select("select*  from enquiry_submit,order_tracking where order_tracking.e_id = enquiry_submit.pk_id order by enquiry_submit.pk_id desc");
            return view('admin.order_tracking_view',compact('result'));
        
            }

            public function order_tracking_specific_view($id)
            {
                
                $result = DB::select("select*  from client_details where pk_id = (select c_id from enquiry_submit where pk_id = '$id')");    
            $result1 = DB::select("select*  from enquiry_submit,order_tracking where order_tracking.e_id = enquiry_submit.pk_id and order_tracking.e_id = '$id'");
            return view('admin.order_tracking_specific_view',compact('result1','result'));
            }
        public function history_view(){
            if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
            
            $status = 1;
            $result = DB::select("select*  from enquiry_submit,order_tracking where order_tracking.status= '7' and order_tracking.e_id = enquiry_submit.pk_id order by order_tracking.e_id desc");
            return view('admin.history_view',compact('result'));
        
        
        }

        public function update_specific_view($id,$c_id){
            if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }

      
            $result2 = DB::select("select*  from client_details where pk_id = '$c_id' ");
            $result = DB::select("select*  from enquiry_submit where pk_id = '$id' ");
            $result1 = DB::select("select*  from enquiry_lastedit where pk_id = '$id' ");
            return view('admin.update_specific_view',compact('result2', 'result1','result')); 
        
            }

    public function enquiry_view($id,$c_id){

        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        // return $c_id;
       $result = DB::select("select*  from client_details where pk_id = '$c_id' ");
      
        $result1 = DB::select("select*  from enquiry_submit where pk_id = '$id' ");
        // return $result1;

        return view('admin.enquiry_view',compact('result','result1'));
    
    
    
        }


    public function enquiry_accept($id,$c_id){
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }

        $status = 1;
        DB::table('enquiry_submit')->where('pk_id', $id)->update(['status' => 1]);
        DB::insert("insert into order_tracking (e_id,updated_at) values (?,?)",array($id,Now()));
        $result = DB::select("select* from enquiry_submit where pk_id = '$id'");
        $result1 = DB::select("select* from client_details where pk_id = '$c_id'");
        $data = array(
            'customer_name' => $result1[0]->{'fname'},
                'customer_email'=> $result1[0]->{'username'},
                'customer_city'=> $result1[0]->{'city'},
                'customer_phone'=> $result1[0]->{'mobile_no'},
   'customer_company_name' => $result1[0]->{'c_name'},
                'customer_STN_No'=> $result1[0]->{'stn'},
                'customer_NTN_No'=> $result1[0]->{'ntn'},
                'customer_address'=> $result1[0]->{'address'},
  'customer_corresponding_address'=> $result1[0]->{'c_address'},
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
        $id = $result1[0]->{'username'};
            // Mail::send('email_order_confirm', $data, function ($message) use($o_id,$id) {
        
            //     $message->from('kamran@kingfabrics.com','KING FABRICS' );
        
            //     $message->to($id)->subject('Enquiry ID# '.$o_id.' Confirmed');
        
            // });
            
        return redirect('/admin/home/view/order');
         }


        public function edit_enquiry_view($id) {
            if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }

         
            $result = DB::select("select*  from enquiry_submit where pk_id = '$id'");
            $result3 = DB::select("select*  from sample ");
            
            return view('admin.enquiry_edit',compact('result','result3'));

        }

    public  function admin_list_view() {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        if(session()->has('username'))
        {
            $result = DB::select("select* from admin_details");
         
            return view('admin.view_admin_list',compact('result'));

         
        }
        else
        {
            return redirect('/admin');
        }
       

    }


    public  function user_list_view() {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        if(session()->has('username'))
        {
            $result = DB::select("select* from client_details order by pk_id desc");
         
            return view('admin.view_user_list',compact('result'));

         
        }
        else
        {
            return redirect('/admin');
        }
       

    }

    public  function user_detail_view($id) {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        if(session()->has('username'))
        {
            $result = DB::select("select* from client_details where pk_id = '$id' ");
         
            return view('admin.user_detail_view',compact('result'));

         
        }
        else
        {
            return redirect('/admin');
        }
       

    }



    /*

    CORE FUNCTIONS

    */

    public function edit_enquiry(Request $request,$id,$c_id) {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }


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
        $note = $request->input('note');
        $wu = $request->input('unit');
        $status = 2;
        if($request->input('date')!='')
        {
         $date =$request->input('date');
        }
        else
        {
        $date= 'NA';
        }
        $results = DB::select("select*  from enquiry_submit where c_id = '$c_id' and pk_id = '$id'");
        if(count($results)>0)
        {    
            $result = DB::select("select*  from enquiry_lastedit where c_id = '$c_id' and pk_id = '$id'");
        if(count($result)>0)
        {

          DB::table('enquiry_lastedit')->where('pk_id', $id)->update(['product_name' =>$results[0]->{'product_name'},
          'category' => $results[0]->{'category'},'weight_GSM' => $results[0]->{'weight_GSM'},'weave' => $results[0]->{'weave'},
          'reed' => $results[0]->{'reed'},'weft' => $results[0]->{'weft'},'quantity' =>$results[0]->{'quantity'},
          'delivery_date' =>$results[0]->{'delivery_date'},'payments' => $results[0]->{'payments'},'color' => $results[0]->{'color'},
          'warp' =>$results[0]->{'warp'},'pick' => $results[0]->{'pick'},'width' => $results[0]->{'width'},'widthunit'=>$results[0]->{'widthunit'},
          'shipment' =>$results[0]->{'shipment'},'NTN_number' => $results[0]->{'NTN_number'},'price' => $results[0]->{'price'},'note' => $results[0]->{'note'},'status' => $results[0]->{'status'}]);
        }
        else {
           
           DB::insert("insert into enquiry_lastedit select*  from enquiry_submit where c_id = '$c_id' and pk_id = '$id'");
          
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
        $result2 = DB::select("select* from client_details where pk_id = '$c_id'");
        $data = array(
            'customer_name' => $result2[0]->{'fname'},
            'customer_email'=> $result2[0]->{'username'},
            'customer_city'=> $result2[0]->{'city'},
            'customer_phone_number'=> $result2[0]->{'mobile_no'},
   'customer_company_name' => $result2[0]->{'c_name'},
                'customer_STN_No'=> $result2[0]->{'stn'},
                'customer_NTN_No'=> $result2[0]->{'ntn'},
                'customer_address'=> $result2[0]->{'address'},
  'customer_corresponding_address'=> $result2[0]->{'c_address'},
            'results1' => $result1[0],
            'results' => $result[0],
        );
        $o_id = $id;
        $id = $result2[0]->{'username'};
            // Mail::send('email_order_update', $data, function ($message) use($o_id,$id) {
        
            //     $message->from('kamran@kingfabrics.com','KING FABRICS' );
        
            //     $message->to($id)->subject('Enquiry ID# '.$o_id.'Order Updated');
                
            // });
        return redirect('/admin/home/view/update');
        
    }
    public function admin_specific_view($id)
    {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from admin_details where pk_id = '$id'");
        return view('admin.view_admin_profile',compact('result'));
    }
    public function index(Request $request)
    {
       
        $this->validate($request,['username' => 'required','password'=> 'required']);
        $password= md5($request->input('password'));
         $username= $request->input('username');
         $result = DB::select("select* from admin_details where username = '$username' and password='$password'");
        if(count($result)>0){
            $request->session()->put('username',$username);
            $request->session()->put('name',$result[0]->{'fname'}.' '.$result[0]->{'lname'});
            $request->session()->put('type','admin');
            $request->session()->put('admin_management',$result[0]->{'admin_management'});
            $request->session()->put('enquiry_management',$result[0]->{'enquiry_management'});
            $request->session()->put('livechat_management',$result[0]->{'livechat_management'});
            return Redirect::to('admin/home');
        }
        else
        {
            return Redirect::back()->withErrors('Username or Password is incorrect');
        }
    }


    public function create_admin(Request $request)
    {
        if(!(session()->has('type') && session()->get('type')=='admin'))
        {
            return redirect('/admin');
        }
    
        $admin_management = 0;
        $enquiry_management = 0;
        $livechat_management = 0;
        if($request->input('admin_management'))
        {
            $admin_management = 1;
        }
        if($request->input('enquiry_management'))
        {
            $enquiry_management = 1;
        }
        if($request->input('livechat_management'))
        {
            $livechat_management = 1;
        }

        if($admin_management == 0 && $enquiry_management==0 && $livechat_management==0)
        {
            return "atleast you neeed to select one permission";
        }
    
        if ($request->input('password') == $request->input('confirm'))
        {
            $username =$request->input('email');
    
            $result = DB::select("select* from admin_details where username = '$username' ");
  
               if(count($result)>0)
               {
                   
                return Redirect::back()->withErrors('Username already Exist');
               }
               else
               {
                      
                           DB::insert("insert into admin_details (fname,lname, username, password, admin_management,enquiry_management, livechat_management ) values (?,?,?,?,?,?,?)",array($request->input('fname'),$request->input('lname'),$request->input('email'),md5($request->input('password')),$admin_management,$enquiry_management,$livechat_management));

                            return redirect('/admin/home/view/admin');
                 }
                               
    
       
    }
    else{
        return Redirect::back()->withErrors('Password does not match');
       }


}

public function view_sample_list()
{
    $result = DB::select("select* from sample ");
return view('admin.sample_list',compact('result'));
}
public function view_sample_detail($id)
{
    $result = DB::select("select* from sample where pk_id = '$id'");
return view('admin.sample_detail',compact('result'));
}
public function edit_sample_view($id)
{
    $result = DB::select("select* from sample where pk_id = '$id'");
    $result1 = DB::select("select* from category");
    $result2 = DB::select("select* from sub_category");

    // return $result;

return view('admin.edit_sample',compact('result','result1','result2'));
}

public function add_sample_view()
{
    $result2 = DB::select("select* from category ");
        $result3 = DB::select("select* from sub_category where sub_category IS NOT NULL");

return view('admin.add_sample',compact('result2', 'result3'));
}

public function view_category_list()
{
    $result = DB::select("select* from category  ");
    // return $result;
return view('admin.category_list',compact('result'));
}
public function add_category_view()
{
return view('admin.add_category');
}
public function add_category(Request $request)
{
    if (!(session()->has('type') && session()
    ->get('type') == 'admin'))
{
    return redirect('/admin');
}
$cat = $request->input('category');
$thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }

        DB::insert("insert into category (category,thumbnail) values (?,?)", array(
          
            $cat,
          
            $thumbnail
        ));

        return redirect('/admin/home/view/category/list');
    }
public function edit_category_view($id)
{
    $result = DB::select("select* from category where pk_id= '$id'  ");
    // return $result;
return view('admin.edit_category',compact('result'));
}
public function edit_category(Request $request,$id)
{
    // return "hgg";
    $cat = $request->input('category');
    $thumbnail = "";
            if ($request->hasFile('file'))
            {
                $image = $request->file('file');
                $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
                $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
                $image->storeAs('public/images', $uniqueFileName);
                $thumbnail = $uniqueFileName;
            }
            DB::table('category')
            ->where('pk_id', $id)->update(['category' => $cat, 'thumbnail' => $thumbnail ]);    
// return "edited";
            return redirect('/admin/home/view/category/list');
}

public function view_sub_category_list()
{
    $result = DB::select("select* from sub_category   ");

return view('admin.sub_category_list',compact('result'));
}
public function add_sub_category_view()
{
    if (!(session()->has('type') && session()
    ->get('type') == 'admin'))
{
    return redirect('/admin');
}

$result = DB::select("select* from category");
return view('admin.add_sub_category', compact('result'));
// return view('admin.add_sub_category');
}

public function add_sub_category(Request $request)
{
    if (!(session()->has('type') && session()
    ->get('type') == 'admin'))
{
    return redirect('/admin');
}

$category = $request->input('mainCategory');

$cat = $request->input('sub_category');

$result = DB::select(DB::raw("SELECT * FROM sub_category WHERE sub_category = :value and main_category= :value2") , array(
    'value' => $cat,
    'value2' => $category,
));

//     $result = DB::select("select* from sub_category where sub_category = '$cat' and main_category='$category'  ");
if (count($result) > 0)
{
    return Redirect::back()->withErrors('Subcategory already Exist');

}
else

{
   
    $category = $request->input('mainCategory');

    DB::insert("insert into sub_category (main_category,sub_category) values (?,?)", array(
        $category,
        $request->input('sub_category') 
      
    ));
    return redirect('/admin/home/view/sub_category/list');


}
}



public function edit_sub_category_view($id)
{
    if (!(session()->has('type') && session()
        ->get('type') == 'admin'))
    {
        return redirect('/admin');
    }
// return "jk";
    $result = DB::select("select* from category");

    $result1 = DB::select("select* from sub_category where pk_id = '$id'");

    return view('admin.edit_sub_category', compact('result', 'result1'));

}

public function edit_sub_category(Request $request, $id)
{
    if (!(session()->has('type') && session()
        ->get('type') == 'admin'))
    {
        return redirect('/admin');
    }
    $main_category = $request->input('mainCategory');
    $cat = $request->input('sub_category');

    $result = DB::select(DB::raw("SELECT * FROM sub_category WHERE sub_category = :value and main_category= :value2") , array(
        'value' => $cat,
        'value2' => $main_category,
    ));

    if (count($result) > 0)
    {
        return Redirect::back()->withErrors('Subcategory already Exist');

    }
    else

    {

        DB::table('sub_category')
            ->where('pk_id', $id)->update(['main_category' => $main_category, 'sub_category' => $cat]);
        return redirect('/admin/home/view/sub_category/list');

    }
}

public function add_sample(Request $request)
{
    if (!(session()->has('type') && session()
        ->get('type') == 'admin'))
    {
        return redirect('/admin');
    }

    $name = $request->input('name');

    $type = $request->input('type');

    $GSM = $request->input('GSM');
    $Weave = $request->input('Weave');
    $referance = $request->input('referance');
    $price = $request->input('price');
    $Width = $request->input('Width');
    $finishing = $request->input('finishing');
    $desc = $request->input('desc');
   
    $main_category = urldecode($request->input('mainCategory'));

    $sub_category = urldecode($request->input('SubCategory'));
    
    $thumbnail = "";
    if ($request->hasFile('file1'))
    {
        $image = $request->file('file1');
        $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
        $image->storeAs('public/images', $uniqueFileName);
        $thumbnail = $uniqueFileName;
    }
    $thumbnail2 = "";
    if ($request->hasFile('file2'))
    {
        $image = $request->file('file2');
        $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
        $image->storeAs('public/images', $uniqueFileName);
        $thumbnail2 = $uniqueFileName;
    }

    $thumbnail3 = "";
    if ($request->hasFile('file3'))
    {
        $image = $request->file('file3');
        $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
        $image->storeAs('public/images', $uniqueFileName);

        $thumbnail3 = $uniqueFileName;
    }

   

    DB::insert("insert into sample (name,main_category,sub_category,type,GSM,weave,refrence,price,
    width,finishing,description, thumbnail,thumbnail2,thumbnail3) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
        $name ,
        $main_category ,
        $sub_category ,
        $type ,
    
        $GSM,
        $Weave,
        $referance ,
        $price ,
        $Width ,
        $finishing ,
        $desc ,
        $thumbnail,
        $thumbnail2,
        $thumbnail3
      
    ));
    return redirect('/admin/home/view/sample/list');

 

}




public function edit_sample(Request $request , $id)
{
    if (!(session()->has('type') && session()
        ->get('type') == 'admin'))
    {
        return redirect('/admin');
    }
    $result = DB::select("select * from sample where pk_id = '$id'");

    $name = $request->input('name');

    $type = $request->input('type');

    $GSM = $request->input('GSM');
    $Weave = $request->input('Weave');
    $referance = $request->input('referance');
    $price = $request->input('price');
    $Width = $request->input('Width');
    $finishing = $request->input('finishing');
    $desc = $request->input('desc');
   
    $main_category = urldecode($request->input('mainCategory'));

    $sub_category = urldecode($request->input('SubCategory'));
    
    $thumbnail = $result[0]->thumbnail;
    if ($request->hasFile('file1'))
    {
        $image = $request->file('file1');
        $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
        $image->storeAs('public/images', $uniqueFileName);
        $thumbnail = $uniqueFileName;
    }
    $thumbnail2 = $result[0]->thumbnail2;
    if ($request->hasFile('file2'))
    {
        $image = $request->file('file2');
        $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
        $image->storeAs('public/images', $uniqueFileName);
        $thumbnail2 = $uniqueFileName;
    }

    $thumbnail3 = $result[0]->thumbnail3;
    if ($request->hasFile('file3'))
    {
        $image = $request->file('file3');
        $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
        $image->storeAs('public/images', $uniqueFileName);

        $thumbnail3 = $uniqueFileName;
    }

   

   
  DB::table('sample')
        ->where('pk_id', $id)->update(['name' => $name , 'main_category' => $main_category ,
         'sub_category' => $sub_category , 'type' => $type, 'GSM' => $GSM, 'weave' => $Weave, 
         'refrence' => $referance , 'price' => $price, 'width' => $Width, 'finishing' => $finishing, 
         'description' => $desc, 'thumbnail' => $thumbnail, 'thumbnail2' => $thumbnail2, 
         'thumbnail3' => $thumbnail3  ]);

     
    return redirect('/admin/home/view/sample/list');

 

}




public function delete_sample($id)
{

    if (!(session()->has('type') && session()
        ->get('type') == 'admin'))
    {
        return redirect('/admin');
    }

    DB::delete("delete from sample where pk_id = '$id'");

    return redirect()->back();
}

public function delete_category($id)
{

    if (!(session()->has('type') && session()
        ->get('type') == 'admin'))
    {
        return redirect('/admin');
    }

    DB::delete("delete from category where pk_id = '$id'");

    return redirect()->back();
}

public function delete_sub_category($id)
{

    if (!(session()->has('type') && session()
        ->get('type') == 'admin'))
    {
        return redirect('/admin');
    }

    DB::delete("delete from sub_category where pk_id = '$id'");

    return redirect()->back();
}

public function guest_enquiry_view()
{

    if (!(session()->has('type') && session()
        ->get('type') == 'admin'))
    {
        return redirect('/admin');
    }

   
    $result = DB::select("select * from guest_enquiry ");

    return view('admin.guest_enquiry',compact('result'));
}


public function guest_enquiry_detail($id)
{

    if (!(session()->has('type') && session()
        ->get('type') == 'admin'))
    {
        return redirect('/admin');
    }

   
    $result = DB::select("select * from guest_enquiry where pk_id = '$id' ");

    return view('admin.guest_enquiry_detail',compact('result'));
}

}