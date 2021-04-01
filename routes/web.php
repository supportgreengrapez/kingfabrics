<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin-blog','adminController@bloglist');
Route::get('/admin-create-a-post','adminController@create_blog_post_view');
Route::post('/admin-create-a-post','adminController@create_blog_post');
Route::get('/admin-blog-edit/{id}','adminController@edit_blog_view');
Route::post('/admin-blog-edit/{id}','adminController@edit_blog');
Route::get('/admin-delete-blog-post/{id}','adminController@delete_blog_post');

Route::get('/admin','adminController@admin_login_view');
Route::get('/admin/home','adminController@admin_home');


Route::get('/admin/verify/{username}/{verfication_code}','adminController@verify_code');
Route::get('/admin/password/reset','adminController@reset_password_view');

Route::post('/admin/password/reset','adminController@admin_reset_password');


Route::post('/admin/password/change/{username}','adminController@password_change');

Route::get('/admin/home/view/sample/list','adminController@view_sample_list');
Route::get('/admin/home/view/sample/detail/view/{id}','adminController@view_sample_detail');
Route::get('/admin/home/edit/sample/view/{id}','adminController@edit_sample_view');
Route::post('/admin/home/edit/sample/{id}','adminController@edit_sample');
Route::get('/admin/home/delete/sample/{id}','adminController@delete_sample');


Route::get('/admin/home/add/sample/view','adminController@add_sample_view');
Route::post('/admin/home/add/sample','adminController@add_sample');
Route::get('/admin/home/view/category/list','adminController@view_category_list');
Route::get('/admin/home/add/category/view','adminController@add_category_view');
Route::post('/admin/home/add/category','adminController@add_category');
Route::get('/admin/home/delete/category/{id}','adminController@delete_category');
Route::get('/admin/home/view/sub_category/list','adminController@view_sub_category_list');
Route::get('/admin/home/add/sub_category/view','adminController@add_sub_category_view');
Route::post('/admin/home/add/sub_category','adminController@add_sub_category');
Route::get('/admin/home/delete/sub_category/{id}','adminController@delete_sub_category');


Route::get('/ajax-subcat','adminController@sub');
Route::get('/admin/home/edit/main/category/view/{id}','adminController@edit_category_view');
Route::post('/admin/home/edit/main/category/{id}','adminController@edit_category');


Route::get('/admin/home/edit/sub/category/view/{id}','adminController@edit_sub_category_view');
Route::post('/admin/home/edit/sub/category/{id}','adminController@edit_sub_category');




Route::get('/admin/home/view/preorder','adminController@tracking_preorder_view');
Route::get('/admin/home/view/preorder/view/enquiry/{id}/{c_id}','adminController@enquiry_view');
Route::post('/admin/home/view/preorder/view/enquiry/accept/enquiry/{id}/{c_id}','adminController@enquiry_accept');
Route::get('/admin/home/view/preorder/view/enquiry/accept/enquiry/{id}/{c_id}','adminController@enquiry_accept');
Route::get('/admin/home/view/preorder/view/enquiry/edit/enquiry/{id}/{c_id}','adminController@edit_enquiry_view');
Route::post('/admin/home/view/preorder/view/enquiry/submit/enquiry/{id}/{c_id}','adminController@edit_enquiry');

Route::get('/admin/home/order/tracking/specific/view/{id}','adminController@order_tracking_specific_view');
Route::get('/admin/home/create/admin','adminController@create_admin_view');

Route::get('/admin/home/view/user','adminController@user_list_view');
Route::get('/admin/home/view/user/{id}','adminController@user_detail_view');

Route::get('/admin/home/view/admin','adminController@admin_list_view');
Route::get('/admin/logout','adminController@logout');
Route::get('/admin/home/view/admin/{id}','adminController@admin_specific_view');
Route::get('/admin/home/view/admin/edit/admin/{id}','adminController@edit_admin_view');
Route::post('/admin/home/view/admin/edit/admin/{id}','adminController@edit_admin');

Route::get('/admin/home/view/update','adminController@required_update');
Route::get('/admin/home/view/update/{id}/{c_id}','adminController@update_specific_view');

Route::get('/admin/home/view/order','adminController@tracking_view');
Route::post('/admin/home/order/update/status','adminController@update_order_status');
Route::get('/admin/home/view/history','adminController@history_view');

Route::get('/admin/home/view/guest/enquiry','adminController@guest_enquiry_view');

Route::get('/admin/home/view/guest/enquiry/detail/{id}','adminController@guest_enquiry_detail');

Route::post('admin/login','adminController@index');

Route::post('admin/home/create/admin','adminController@create_admin');




Route::get('/','clientController@client_home');

Route::get('/aboutus', function () {
    return view('client.aboutus');
});
Route::get('/contact', function () {
    return view('client.contactus');
});

Route::get('/blogs', 'clientController@blog');


Route::post('/add/to/sample/{id}','clientController@add_wishlist');


Route::get('/view/wishlist','clientController@view_wishlist');

Route::get('/sample','clientController@sample');

Route::get('/sample/detail/view/{id}','clientController@sample_detail');

Route::get('/add/guest/inquiry/view','clientController@add_guest_inq_view');

Route::post('/add/guest/inquiry','clientController@add_guest_inq');

Route::get('/login/dashboard','clientController@client_dashboard_view');
Route::get('/login','clientController@client_login_view');
Route::post('/login','clientController@client_login');

Route::get('dashboard/add/enquiry/view','clientController@add_enquiry_view');
Route::post('dashboard/add/enquiry','clientController@add_enquiry');


Route::get('/sample/{main?}','clientController@searchByCategory');

Route::get('/dashboard/view/preorder/list','clientController@pre_order_list_view');
Route::get('/dashboard/view/update/required/list','clientController@update_required_list_view');
Route::get('/dashboard/view/order/tracking/list','clientController@order_tracking_list_view');
Route::get('/dashboard/view/order/history/list','clientController@order_history_list_view');
Route::get('/dashboard/view/update/required/specific/{id}','clientController@update_specific_view');

Route::get('/dashboard/preorder/specific/view/{id}','clientController@pre_order_specific_view');
Route::get('/dashboard/preorder/accept/{id}','clientController@pre_order_accept');

Route::get('/dashboard/order/tracking/specific/view/{id}','clientController@order_tracking_specific_view');

Route::get('/dashboard/preorder/edit/enquiry/{id}','clientController@edit_enquiry_view');
Route::post('/dashboard/preorder/edit/enquiry/{id}','clientController@edit_enquiry');


Route::get('/dashboard/edit/profile','clientController@edit_profile_view');
Route::post('/dashboard/edit/profile','clientController@edit_profile');

Route::get('/ordernow','clientController@client_order_now');


Route::get('/logout','clientController@logout');


Route::get('/blog', 'clientController@blog');

Route::get('/read-detail-blog/{id}','clientController@detail_blog');



Route::get('/blog/article',function()
{

return view('client.blog-single');
});

Route::get('/signup','clientController@create_client_view');
Route::post('/signup','clientController@create_client');







Route::get('/verify/{username}/{verfication_code}','clientController@verify_code');
Route::get('/password/reset','clientController@reset_password_view');

Route::post('/password/reset','clientController@reset_password');


Route::post('/password/change/{username}','clientController@password_change');



Route::get('/sms/test', 'clientController@sms');