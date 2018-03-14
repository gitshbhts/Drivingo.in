<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
       $this->load->library('Instamojo'); 
      
      $this->load->model('backend_model');
      $this->load->model('image_model');
       
    }
    public function index()
    {
           if( $this->session->userdata('user_email')==NULL){
        $data['city'] = $this->backend_model->view_city();
      
       $data['main_content'] = 'a/home/index';
        $this->load->view('a/include/template', $data);
        
    }
        else{
         $data['city'] = $this->backend_model->view_city();
        

          $data['main_content'] = 'a/home/index';
        $this->load->view('a/include/template1', $data);
        
        
    }
  }
      public function contact()
    {
      if( $this->session->userdata('user_email')!==NULL){
  
       $data['main_content'] = 'a/home/contact';
        $this->load->view('a/include/template', $data);
        
    }
     else{
        $data['main_content'] = 'a/home/contact';
        $this->load->view('a/include/template1', $data);
    }
  }

       public function setting()
    {
        $id=$this->session->userdata('id');
        $data['user']= $this->backend_model->view_user_detail($id);
        $data['main_content'] = 'a/home/my_account';
        $this->load->view('a/include/template1', $data);
        
    }

 public function search()
    {
     
       
        $data['area'] = $this->backend_model->view_city();
       $data['main_content'] = 'a/home/search';
        $this->load->view('a/include/template', $data);
  

    }


     public function search_a()
    {
  
       $data['area'] = $this->backend_model->view_city();
       $data['main_content'] = 'a/home/search';
        $this->load->view('a/include/template1', $data);
        
    }

     public function about()
    {
     if( $this->session->userdata('user_email')==NULL){    
       $data['main_content'] = 'a/home/about';
        $this->load->view('a/include/template', $data);
        
    }
      else{
       
          $data['main_content'] = 'a/home/about';
        $this->load->view('a/include/template1', $data);
        
        
    }
    }
     public function condition()
    {
   if( $this->session->userdata('user_email')==NULL){  
       $data['terms']=$this->backend_model->view_terms_condition();
       $data['main_content'] = 'a/home/condition';
        $this->load->view('a/include/template', $data);
        
    }
     else{
        $data['terms']=$this->backend_model->view_terms_condition();
          $data['main_content'] = 'a/home/condition';
        $this->load->view('a/include/template1', $data);
        
        
    }
    }
    public function result()
    {
      
       $data['main_content'] = 'a/home/result';
        $this->load->view('a/include/template1', $data);
        
    }

    //login
          public function user_login() {
           if ($user_details = $this->backend_model->user_login()) {
              $data = array(
                'name' => $user_details->user_name,
                'user_email' => $user_details->user_email,
                'user_pass' => $user_details->user_password,
                 'user_phone' => $user_details->user_phone,
                 'id' => $user_details->user_id,
              
                'is_logged_in' => TRUE
                );
    
                $this->session->set_userdata($data);
                $a =$this->session->userdata('name');
                $this->session->set_flashdata('msg', '<div class="alert   

                alert-success text-center">Welcome</div>');
                       
                redirect('home/index');
}       else
{           

            $this->session->set_flashdata('msg', '<div class="alert   
            alert-danger text-center">Invalid username and password!</div>');
            redirect('home/login');

}
}


    public function insert_purchase_histroy(){
        $data['date']=$this->input->post('date');
        $data['area_id']=$this->input->post('area_id');
        $data['time']=$this->input->post('time');
        $data['school_name']=$this->input->post('school_name');
        $data['school_id']=$this->input->post('school_id');
        $data['address_line']=$this->input->post('address_line');
        $data['area']=$this->input->post('area');
        $data['city']=$this->input->post('city');
        $data['licence']=$this->input->post('licence');
        $data['license_fee']=$this->input->post('license_fee');
        $data['vehical']=$this->input->post('vehical');
        $data['vehical_type']=$this->input->post('vehical_type');
        $data['fee']=$this->input->post('fee');
        $data['tax']=$this->input->post('tax');
         $data['id']=$this->input->post('id');
         $data['total']=$this->input->post('total');
         $data['trill']='3 days package';
       $data['main_content'] = 'a/home/payment';
       $this->load->view('a/include/template1', $data);
        

  }
    
  
   
public  function logout()
{
        $user_data = $this->session->all_userdata();
         foreach ($user_data as $key => $value) {
         if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
         $this->session->unset_userdata($key);
           
}
}
       $this->session->set_flashdata('msg', '<div class="alert   
       alert-info text-center">Logout successfully</div>');
       redirect('home');
}


public function check_email_avalibility()  
      {  
    $get_result = $this->backend_model->check_email_availablity();
   $data= trim($this->input->post('email'));
if(!$get_result )
   echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Number Already register</label>';  
    else
    echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Number Available</label>';  
  }  

public function check_old_password_avalibility()  
      {  
          $password=$this->input->post('old_password');
    $user_id=$this->input->post('user_id');
$data['get_data'] = $this->backend_model->check_old_password_avalibility();

if($data['get_data']==!null ){
        $data['main_content'] = 'a/home/new_password';
        $this->load->view('a/include/template1', $data);
      }
    else{
      $this->session->set_flashdata('msg', '<div class="alert   
       alert-info text-center">Try Again</div>');
    redirect('home/edit_user/'.$user_id);
  }  
      }
  public function check_username_avalibility()  
      {  
      
    $get_result = $this->backend_model->check_username_avalibility();
    
    if(!$get_result )
   echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Username Already register</label>';  
    else
    echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Username Available</label>';  
    
  }  
       

      public function edit_user($id)
    {
        $data['id']=$this->backend_model->edit_user($id);
       $data['main_content'] = 'a/home/edit_user';
        $this->load->view('a/include/template1', $data);
        
    }

          public function search_result()
    {
         $data['date']=$this->input->post('date') ;
         $data['time']=$this->input->post('time') ;

         $data['city']=$this->input->post('area') ;
        $data['a1']=$this->input->post('area_id') ;

       $data['licence']=$this->input->post('licence') ;

       
       $data['result']=$this->backend_model->search_result();
       
      if($data['result']==!null){
    //  $data['result']=$this->backend_model->search_result();
  
      $data['a']=$this->backend_model->edit_area( $data['city']);
  
      $data['main_content'] = 'a/home/result';
        $this->load->view('a/include/template', $data);
        
    }
    else{
        $data['data']='No driving schools found in the specified area. Please try again later.';
       $data['main_content'] = 'a/home/result1';
        $this->load->view('a/include/template', $data);
    }
    }
// s    
    
          public function sort_rating($date,$time,$city,$area_id,$licence)
    {
         $data['date']=$date;
         $data['time']=$time ;
         $data['city']=$city ;
        $data['a1']=$area_id ;
        $data['licence']=$licence ;

       
       $data['result']=$this->backend_model->search_result_sorting($city,$licence);
      
      if($data['result']==!null){
     //$data['result']=$this->backend_model->search_result();
  
      $data['a']=$this->backend_model->edit_area( $data['city']);
  
        $data['main_content'] = 'a/home/result';
        $this->load->view('a/include/template', $data);
        
    }
    else{
        $data['data']='No driving schools found in the specified area. Please try again later.';
       $data['main_content'] = 'a/home/result1';
        $this->load->view('a/include/template', $data);
    }
    }
    
         public function sort_price($date,$time,$city,$area_id,$licence)
    {
         $data['date']=$date;
         $data['time']=$time ;
         $data['city']=$city ;
        $data['a1']=$area_id ;
        $data['licence']=$licence ;

       
       $data['result']=$this->backend_model->search_result_sorting_price($city,$licence);
      
      if($data['result']==!null){
     //$data['result']=$this->backend_model->search_result();
  
      $data['a']=$this->backend_model->edit_area( $data['city']);
  
        $data['main_content'] = 'a/home/result';
        $this->load->view('a/include/template', $data);
        
    }
    else{
        $data['data']='No driving schools found in the specified area. Please try again later.';
       $data['main_content'] = 'a/home/result1';
        $this->load->view('a/include/template', $data);
    }
    }

 public function school_result()
    {
    if( $this->session->userdata('user_email')==NULL){
      $id =$this->input->post('school_id');
   
      $area =$this->input->post('area_id');
       $data['licence'] =$this->input->post('licence');

        $data['result']=$this->backend_model->school_result($id,$area);
        $data['date'] =$this->input->post('date');
        $data['time'] =$this->input->post('time');
        $data['package']=$this->backend_model->school_package_result($id);
         $data['review']=$this->backend_model->view_review($id);
       $data['main_content'] = 'a/home/result_a';
        $this->load->view('a/include/template', $data);
        
    }
    else {

      $id =$this->input->post('school_id');
   
      $area =$this->input->post('area_id');
      $data['licence'] =$this->input->post('licence');
      $data['result']=$this->backend_model->school_result($id,$area);
      $data['date'] =$this->input->post('date');
      $data['time'] =$this->input->post('time');
    $data['package']=$this->backend_model->school_package_result($id);
       $data['main_content'] = 'a/home/result_a';
        $this->load->view('a/include/template1', $data);
    }
  }
 public function submit_package()
      {
       if( $this->session->userdata('user_email')!==NULL){
        $data['date']=$this->input->post('date');
        $data['area_id']=$this->input->post('area_id');
        $data['time']=$this->input->post('time');
       $data['school_name']=$this->input->post('school_name');
        $data['school_id']=$this->input->post('school_id');
        $data['address_line']=$this->input->post('address_line');
        $data['area']=$this->input->post('area');
        $data['city']=$this->input->post('city');
        $data['licence']=$this->input->post('licence');
        $data['license_fee']=$this->input->post('license_fee');
        $data['vehical']=$this->input->post('vehical');
        $data['vehical_type']=$this->input->post('vehical_type');
        $data['fee']=$this->input->post('fee');
        $data['tax']=$this->input->post('tax');
         $data['id']=$this->input->post('id');
         $data['total']=$data['tax']+$data['license_fee']+$data['fee'];
    
      $data['main_content'] = 'a/home/payment';
        $this->load->view('a/include/template', $data);
        
    }
    else{

        $data['date']=$this->input->post('date');
        $data['area_id']=$this->input->post('area_id');
        $data['time']=$this->input->post('time');
        $data['school_name']=$this->input->post('school_name');
        $data['school_id']=$this->input->post('school_id');
        $data['address_line']=$this->input->post('address_line');
        $data['area']=$this->input->post('area');
        $data['city']=$this->input->post('city');
        $data['licence']=$this->input->post('licence');
        $data['license_fee']=$this->input->post('license_fee');
        $data['vehical']=$this->input->post('vehical');
        $data['vehical_type']=$this->input->post('vehical_type');
        $data['fee']=$this->input->post('fee');
        $data['tax']=$this->input->post('tax');
        $data['id']=$this->input->post('id');
        $data['total']=$data['tax']+$data['license_fee']+$data['fee'];
        $data['main_content'] = 'a/home/payment';
        $this->load->view('a/include/template1', $data);
        
        
    }
  }
  
  //payment cod
  


       public function user_signup()
      {
          
       
          $user_phone=$this->input->post('user_phone');
//Your authentication key
            $authKey = "179396A4m1rZ6xqm59e23c00";

            //Multiple mobiles numbers separated by comma

            $mobileNumber = $user_phone;
            $rndno=rand(1000, 9999);

            //Sender ID,While using route4 sender id should be 6 characters long.
            $senderId = "drivgo";

            //Your message to send, Add URL encoding here.
            $message = urlencode("otp number.".$rndno);

            //Define route 
            $route = "4";
            //Prepare you post parameters
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => $mobileNumber,
                'message' => $message,
                'sender' => $senderId,
                'route' => $route
            );

            //API URL
            $url="http://api.msg91.com/api/sendhttp.php";

            // init the resource
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
                //,CURLOPT_FOLLOWLOCATION => true
            ));


            //Ignore SSL certificate verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


            //get response
            $output = curl_exec($ch);

            //Print error if any
            if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }

            curl_close($ch);

             $output;
          $data['id']=$this->backend_model->user_signup($rndno,$output); 
          $this->session->set_flashdata('msg', '<div class="alert   
          alert-info text-center">Verify Your Otp</div>');
          $data['main_content'] = 'a/home/verification';
          $this->load->view('a/include/template', $data);
       
    }





      public function verification_opt()
    {

    $user = $this->backend_model->verification();

    if($user==!null){
    $this->session->userdata('total_fee');
    if( $this->session->userdata('total_fee')==!NULL){
        $opt  =$this->input->post('otpvalue');
         $a  ='hello';  
         $this->session->set_flashdata('msg', 'OTP Confirm Please Login.');
          redirect('home/cod_payment/'.$opt.'/'.$a);        
    }
              
 else{
        $this->session->set_flashdata('msg', 'OTP Confirm Please Login.');
          redirect('home/login');
      
    } 
    }
  else{
       
      $data['id'] = $this->input->post('user_id');
      $data['message'] = "OTP Invalid Please Try Again..!";
                    
     $data['main_content'] = 'a/home/verification';
      $this->load->view('a/include/template', $data);
      } 
          exit();
  }

// submit payment
 
    
    
    public function cod()
    {   
        
      if( $this->session->userdata('user_email')==NULL){
      $data['date']=$this->input->post('date');
     $data['cod']=$this->input->post('cod');
        $data['area_id']=$this->input->post('area_id');
        $data['time']=$this->input->post('time');
        $data['school_name']=$this->input->post('school_name');
        $data['school_id']=$this->input->post('school_id');
        $data['address_line']=$this->input->post('address_line');
        $data['area']=$this->input->post('area');
        $data['city']=$this->input->post('city');
        $data['licence']=$this->input->post('licence');
        $data['license_fee']=$this->input->post('license_fee');
        $data['vehical']=$this->input->post('vehical');
        $data['vehical_type']=$this->input->post('vehical_type');
        $data['fee']=$this->input->post('fee');
        $data['tax']=$this->input->post('tax');
        $data['id']=$this->input->post('id');

        $data['discount']=$this->input->post('discount');
        $data['total']=$this->input->post('total_fee');
      $data['main_content'] = 'a/home/login1';
      $this->load->view('a/include/template', $data);
 
    }
     else{
        $user_id=$this->session->userdata('id');
      $user_name=$this->session->userdata('name');
      $phone=$this->session->userdata('user_phone');
      $authKey = "179396A4m1rZ6xqm59e23c00";
      $data['date']=$this->input->post('date');
      $data['area_id']=$this->input->post('area_id');
      $data['time']=$this->input->post('time');
      $data['school_name']=$this->input->post('school_name');
      $data['school_id']=$this->input->post('school_id');
      $data['address_line']=$this->input->post('address_line');
      $data['area']=$this->input->post('area');
      $data['city']=$this->input->post('city');
      $data['licence']=$this->input->post('licence');
      $data['license_fee']=$this->input->post('license_fee');
      $data['vehical']=$this->input->post('vehical');
      $data['vehical_type']=$this->input->post('vehical_type');
      $data['fee']=$this->input->post('fee');
      $data['tax']=$this->input->post('tax');
      $data['id']=$this->input->post('id');
      $data['payment_mode']=$this->input->post('payment_mode');
      $data['discount']=$this->input->post('discount');
      $data['total']=$this->input->post('total_fee');
       $data['trill']=$this->input->post('trill');
      $data['main_content'] = 'a/home/success';
      $this->load->view('a/include/template1', $data);
        
    }
    }
    
     public function confirm_address()
    {
        $authKey = "179396A4m1rZ6xqm59e23c00";
        $user_id=$this->session->userdata('id');
        $user_name=$this->session->userdata('name');
        $phone=$this->session->userdata('user_phone');
        $mobileNumber = $phone;
       
       $txtid= bin2hex(openssl_random_pseudo_bytes(10));

        $id=$this->backend_model->payment_cod($user_name,$phone,$user_id,$txtid);
         $data = '100'.$id;
       $id=$this->backend_model->update_order($data,$id);
    
            //Sender ID,While using route4 sender id should be 6 characters long.
            $senderId = "drivgo";

            //Your message to send, Add URL encoding here.
            $message = urlencode("Your Order Has Confirm..!!.".$data);

            //Define route 
            $route = "4";
            //Prepare you post parameters
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => $mobileNumber,
                'message' => $message,
                'sender' => $senderId,
                'route' => $route
            );

            //API URL
            $url="http://api.msg91.com/api/sendhttp.php";

            // init the resource
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
                //,CURLOPT_FOLLOWLOCATION => true
            ));


            //Ignore SSL certificate verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


            //get response
            $output = curl_exec($ch);

            //Print error if any
            if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }

            curl_close($ch);

           $output;
      
          redirect('home/successfully/'.$id);
     // 
    }
    
          public  function successfully()
{
        $newdata = $this->session->all_userdata();
        foreach ($newdata as $key => $value) {
        if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
        $this->session->unset_userdata($key);
           

}
        $this->session->set_flashdata('msg', '<div class="alert   

                alert-success text-center">Your Order has Confirm..!!!</div>');
       redirect('home/order_confirm');
}
}
    public function order_confirm(){
                $data['main_content'] = 'a/home/order_confirm';
        $this->load->view('a/include/template1', $data);
    }

         public function insert_user_address()
    {
      $this->backend_model->add_user_address();
    
        $newdata = $this->session->all_userdata();
         foreach ($newdata as $key => $value) {
         if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
         $this->session->unset_userdata($key);
           
       
    }
    }

    }
    
    
     
    
    public function user_login_cod() {
        if ($user_details = $this->backend_model->user_login()) {
              $data = array(
                'name' => $user_details->user_name,
                'user_email' => $user_details->user_email,
                'user_pass' => $user_details->user_password,
                 'user_phone' => $user_details->user_phone,
                 'id' => $user_details->user_id,
              
                'is_logged_in' => TRUE
                );
    
                $this->session->set_userdata($data);
                  $a =$this->session->userdata('name');
                  $data['date']=$this->input->post('date');
                  $data['area_id']=$this->input->post('area_id');
                  $data['time']=$this->input->post('time');
                  $data['school_name']=$this->input->post('school_name');
                  $data['school_id']=$this->input->post('school_id');
                  $data['address_line']=$this->input->post('address_line');
                  $data['area']=$this->input->post('area');
                  $data['city']=$this->input->post('city');
                  $data['licence']=$this->input->post('licence');
                  $data['license_fee']=$this->input->post('license_fee');
                  $data['vehical']=$this->input->post('vehical');
                  $data['vehical_type']=$this->input->post('vehical_type');
                  $data['fee']=$this->input->post('fee');
                  $data['tax']=$this->input->post('tax');
                  $data['id']=$this->input->post('id');
                  $data['total']=$this->input->post('total_fee');
                  $data['discount']=$this->input->post('discount');
                  $data['m1']="LOGIN SUCCESSUFULLY..!!!";
                  $data['main_content'] = 'a/home/payment';
                  $this->load->view('a/include/template1', $data);
  }       else
  {           

            $this->session->set_flashdata('msg', '<div class="alert   
            alert-danger text-center">Invalid username and password!</div>');
             $data['date']=$this->input->post('date');
            $data['area_id']=$this->input->post('area_id');
            $data['time']=$this->input->post('time');
            $data['school_name']=$this->input->post('school_name');
            $data['school_id']=$this->input->post('school_id');
            $data['address_line']=$this->input->post('address_line');
            $data['area']=$this->input->post('area');
            $data['city']=$this->input->post('city');
            $data['licence']=$this->input->post('licence');
            $data['license_fee']=$this->input->post('license_fee');
            $data['vehical']=$this->input->post('vehical');
            $data['vehical_type']=$this->input->post('vehical_type');
            $data['fee']=$this->input->post('fee');
            $data['tax']=$this->input->post('tax');
           $data['id']=$this->input->post('id');
            $data['total']=$this->input->post('total_fee');
          $data['discount']=$this->input->post('discount');
          $data['mesaage']=$this->input->post('mesaage');
          $data['m1']="Invalid Username & password....!!!";
        $data['main_content'] = 'a/home/login1';
        $this->load->view('a/include/template', $data);

  }
  }
   public function cod_signup()
    {
                $newdata = array(
                   'area_id'  => $this->input->post('area_id'),
                   'school_name'     => $this->input->post('school_name'),
                   'total_fee' => $this->input->post('total_fee'),
                   'date'=> $this->input->post('date'),
                   'discount' => $this->input->post('discount'),
                  'time'=>$this->input->post('time'),
                  'school_id'=> $this->input->post('school_id'),
                  'address_line'=> $this->input->post('address_line'),
                  'area'=> $this->input->post('area'),
                  'city'=> $this->input->post('city'),
                  'licence'=> $this->input->post('licence'),
                  'license_fee'=> $this->input->post('license_fee'),
                  'vehical'=> $this->input->post('vehical'),
                  'vehical_type'=> $this->input->post('vehical_type'),
                  'fee'=> $this->input->post('fee'),
                  'tax'=> $this->input->post('tax'),
                  'id'=> $this->input->post('id'),
                 
               );
            
                $this->session->set_userdata($newdata);
            redirect('home/confirm_cod_signup/');
          }


   public function confirm_cod_signup(){

            
                  $this->load->view('a/home/signup1');
                  
      
             
  }


 
    public function cod_payment(){

                  $a =$this->session->userdata('name');
                   $data['date']=$this->session->userdata('date');
                  $data['area_id']=$this->session->userdata('area_id');
                  $data['time']=$this->session->userdata('time');
                  $data['school_name']=$this->session->userdata('school_name');
                  $data['school_id']=$this->session->userdata('school_id');
                  $data['address_line']=$this->session->userdata('address_line');
                  $data['area']=$this->session->userdata('area');
                  $data['city']=$this->session->userdata('city');
                  $data['licence']=$this->session->userdata('licence');
                  $data['license_fee']=$this->session->userdata('license_fee');
                  $data['vehical']=$this->session->userdata('vehical');
                  $data['vehical_type']=$this->session->userdata('vehical_type');
                  $data['fee']=$this->session->userdata('fee');
                  $data['tax']=$this->session->userdata('tax');
                  $data['id']=$this->session->userdata('id');
                  $data['total']=$this->session->userdata('total_fee');
                  $data['discount']=$this->session->userdata('discount');
                 $data['main_content'] = 'a/home/login1';
                  $this->load->view('a/include/template', $data);
                  
      
             
  }
             

    public function instamojo()
    {
      
      if( $this->session->userdata('user_email')==NULL){
        $data['date']=$this->input->post('date');
        $data['area_id']=$this->input->post('area_id');
        $data['time']=$this->input->post('time');
        $data['school_name']=$this->input->post('school_name');
        $data['school_id']=$this->input->post('school_id');
        $data['address_line']=$this->input->post('address_line');
        $data['area']=$this->input->post('area');
        $data['city']=$this->input->post('city');
        $data['licence']=$this->input->post('licence');
        $data['license_fee']=$this->input->post('license_fee');
        $data['vehical']=$this->input->post('vehical');
        $data['vehical_type']=$this->input->post('vehical_type');
        $data['fee']=$this->input->post('fee');
        $data['tax']=$this->input->post('tax');
        $data['id']=$this->input->post('id');
        $data['total']=$this->input->post('total_fee');
        $data['discount']=$this->input->post('discount');
        $data['main_content'] = 'a/home/login1';
        $this->load->view('a/include/template', $data);
 
    }
     else{
      $user_id=$this->session->userdata('id'); 
      $user_name=$this->session->userdata('name');
     $phone=$this->session->userdata('user_phone');
     $user_id=$this->session->userdata('id');
      $user_name=$this->session->userdata('name');
      $phone=$this->session->userdata('user_phone');
      $authKey = "179396A4m1rZ6xqm59e23c00";
      $data['date']=$this->input->post('date');
      $data['area_id']=$this->input->post('area_id');
      $data['time']=$this->input->post('time');
      $data['school_name']=$this->input->post('school_name');
      $data['school_id']=$this->input->post('school_id');
      $data['address_line']=$this->input->post('address_line');
      $data['area']=$this->input->post('area');
      $data['city']=$this->input->post('city');
      $data['licence']=$this->input->post('licence');
      $data['license_fee']=$this->input->post('license_fee');
      $data['vehical']=$this->input->post('vehical');
      $data['vehical_type']=$this->input->post('vehical_type');
      $data['fee']=$this->input->post('fee');
      $data['tax']=$this->input->post('tax');
      $data['id']=$this->input->post('id');
      $data['discount']=$this->input->post('discount');
      $data['payment_mode']=$this->input->post('payment_mode');
      $data['total']= $data['total']=$this->input->post('total_fee');
       $data['trill']=$this->input->post('trill');
      $data['main_content'] = 'a/home/success1';
      $this->load->view('a/include/template1', $data);
}
}

public function online_payment(){
      $user_id=$this->session->userdata('id');
      $user_name=$this->session->userdata('name');
     $phone=$this->session->userdata('user_phone');
      $authKey = "179396A4m1rZ6xqm59e23c00"; 
    $mobileNumber = $phone;
      $txtid= bin2hex(openssl_random_pseudo_bytes(10));
      $id=$this->backend_model->payment_cod($user_name,$phone,$user_id,$txtid);
       $data = '100'.$id;
       $id=$this->backend_model->update_order($data,$id);
       
            //Sender ID,While using route4 sender id should be 6 characters long.
            $senderId = "drivgo";

            //Your message to send, Add URL encoding here.
            $message = urlencode("Your Order Has Confirm..!!.".$data);

            //Define route 
            $route = "4";
            //Prepare you post parameters
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => $mobileNumber,
                'message' => $message,
                'sender' => $senderId,
                'route' => $route
            );

            //API URL
            $url="http://api.msg91.com/api/sendhttp.php";

            // init the resource
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
                //,CURLOPT_FOLLOWLOCATION => true
            ));


            //Ignore SSL certificate verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


            //get response
            $output = curl_exec($ch);

            //Print error if any
            if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }
            curl_close($ch);
      $output;
      $fee = $this->input->post('total_fee');
   // $user_details = $this->backend_model->payment();
      $api = new Instamojo('0fab065c4c8c5adbf1c1a5c2fe1abd12', '59c1c410be655fe43aaeef12056a7a75'
        , 'https://www.instamojo.com/api/1.1/');
      try {
      $response = $api->paymentRequestCreate(array(
        "id"=> $txtid,
        "phone"=> $phone,
        "buyer_name" => $user_name,
        "amount" => $fee,
        "purpose" => "Drivingo",
        "status" => "Pending",
        "send_sms" => true,
  
        "redirect_url" => "http://www.example.com/handle_redirect.php"
        ));
   
    
  redirect($response['longurl']);
  }
  catch (Exception $e) {
    print('Error: ' . $e->getMessage());
  }
    
    
  }
  

        public function rto()
    {
         if( $this->session->userdata('user_email')==NULL){
       $data['main_content'] = 'a/home/rto';
        $this->load->view('a/include/template', $data);
    }
     else{
       
          $data['main_content'] = 'a/home/rto';
        $this->load->view('a/include/template1', $data);
        
        
    }
  }
      public function login()
    {
   
       $data['main_content'] = 'a/home/login';
        $this->load->view('a/include/template', $data);
        
  
}
    //check discount code


   public function check_discount_code()
    {
        
    
             $data['date']=$this->input->post('date');
                  $data['area_id']=$this->input->post('area_id');
                  $data['time']=$this->input->post('time');
                  $data['school_name']=$this->input->post('school_name');
                  $data['school_id']=$this->input->post('school_id');
                  $data['address_line']=$this->input->post('address_line');
                  $data['area']=$this->input->post('area');
                  $data['city']=$this->input->post('city');
                  $data['licence']=$this->input->post('licence');
                  $data['license_fee']=$this->input->post('license_fee');
                  $data['vehical']=$this->input->post('vehical');
                  $data['vehical_type']=$this->input->post('vehical_type');
                  $data['fee']=$this->input->post('fee');
                  $data['tax']=$this->input->post('tax');
                  $data['id']=$this->input->post('id');
            $b =   $data['license_fee']+$data['fee']+$data['tax'];
            $data['discount_code']=$this->input->post('discount_code');
            $row['discount']=$this->backend_model->check_discount_code($data['discount_code']);
           if($row['discount']==!null){
            foreach($row['discount'] as $data){
             $a=$data['percentage'];
            $a= $a/100;
            $data['discount']=$a * $b;
            $discount_total= $data['discount'];
            $data['total_after_discount']= $b - $data['discount'];
            $data['total']= $data['total_after_discount'];
             $percentage=  $data['percentage'];
                  $data['message']="discount code matched";
                  $data['date']=$this->input->post('date');
                  $data['area_id']=$this->input->post('area_id');
                  $data['time']=$this->input->post('time');
                  $data['school_name']=$this->input->post('school_name');
                  $data['school_id']=$this->input->post('school_id');
                  $data['address_line']=$this->input->post('address_line');
                  $data['area']=$this->input->post('area');
                  $data['city']=$this->input->post('city');
                  $data['licence']=$this->input->post('licence');
                  $data['license_fee']=$this->input->post('license_fee');
                  $data['vehical']=$this->input->post('vehical');
                  $data['vehical_type']=$this->input->post('vehical_type');
                  $data['fee']=$this->input->post('fee');
                  $data['tax']=$this->input->post('tax');
                  $data['id']=$this->input->post('id');
                 
     $data['message']="Congratulation You have got  ".$percentage."% Discount!!"; 
                 $data['main_content'] = 'a/home/payment';
                  $this->load->view('a/include/template',  $data);
                  
        }
         }
           else{
               $data['message']="discount code Dosen't matched";
                   $data['date']=$this->input->post('date');
                  $data['area_id']=$this->input->post('area_id');
                  $data['time']=$this->input->post('time');
                  $data['school_name']=$this->input->post('school_name');
                  $data['school_id']=$this->input->post('school_id');
                  $data['address_line']=$this->input->post('address_line');
                  $data['area']=$this->input->post('area');
                  $data['city']=$this->input->post('city');
                  $data['licence']=$this->input->post('licence');
                  $data['license_fee']=$this->input->post('license_fee');
                  $data['vehical']=$this->input->post('vehical');
                  $data['vehical_type']=$this->input->post('vehical_type');
                  $data['fee']=$this->input->post('fee');
                  $data['tax']=$this->input->post('tax');
                  $data['id']=$this->input->post('id');
                  $data['total']=$data['fee']+$data['license_fee']+$data['tax'];
                  $data['message']='Your Discount code Doesnt  matched..!!'; 
                 $data['main_content'] = 'a/home/payment';
                  $this->load->view('a/include/template',  $data);
             }   

  
    
  }

    
        public function view_forgot_password()
    {
  
       $data['main_content'] = 'a/home/forgot_password';
        $this->load->view('a/include/template', $data);
        
    }


          public function forgot_password()
      {
       $data['number']=$this->backend_model->forgot_password();
      if($data['number']!==null){
     foreach($data['number'] as $row){
          $number=$row['user_phone'];
     
    
       
      $authKey = "179396A4m1rZ6xqm59e23c00";

            //Multiple mobiles numbers separated by comma

          
            $rndno=rand(1000, 9999);

            //Sender ID,While using route4 sender id should be 6 characters long.
            $senderId = "drivgo";

            //Your message to send, Add URL encoding here.
            $message = urlencode("New Password is.".$rndno);

            //Define route 
            $route = "4";
            //Prepare you post parameters
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => $number,
                'message' => $message,
                'sender' => $senderId,
                'route' => $route
            );

            //API URL
            $url="http://api.msg91.com/api/sendhttp.php";

            // init the resource
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
                //,CURLOPT_FOLLOWLOCATION => true
            ));


            //Ignore SSL certificate verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


            //get response
            $output = curl_exec($ch);

            //Print error if any
            if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }

            curl_close($ch);

             $output;
            $data['id']=$this->backend_model->update_password($rndno,$number);
            $this->session->set_flashdata('msg', '<div class="alert   
             alert-info text-center">Try Your New Password</div>');
      redirect('home/login');

       }
       
      }
      else{
          $this->session->set_flashdata('msg', '<div class="alert   
             alert-danger text-center">Try Again</div>');
      redirect('home/login');
      }
        
    }


    public function insert_rto()
    {
        $data['id']=$this->backend_model->add_rto();
         $this->session->set_flashdata('msg', '<div class="alert   
                alert-success text-center">Thank You for your query.Our Team will call you back shortly..!</div>');
                redirect('home/rto');
        
    }
    public function upload_adhaar()
    {
        $field_name = 'image';
        $image_path = 'public/adhaar/images';

        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $file_name = $this->image_model->upload_image($field_name, $image_path);
        } else {
            
            $file_name = $this->image_model->upload_image($field_name, $image_path);
        }
        $this->backend_model->upload_adhaar($file_name,$image_path);

               $this->session->set_flashdata('msg', '<div class="alert   
                  alert-success text-center">Adhaar Upload  Successfully </div>');
            redirect('home/setting');  
           
           
    }   
    
    	      public function purchase_history()
    { 
      $id=$this->session->userdata('id');
        $data['payment'] = $this->backend_model->purchase_history($id);
         $data['review'] = $this->backend_model->view_rating($id);
       
        $data['main_content'] = 'a/home/purchase_history';
       $this->load->view('a/include/template2', $data);
       
        
       
    }
    
             public function insert_rating_star()
    { 
        echo $user_id=$this->session->userdata('id');
        echo $$school_id = $school_id=$this->input->post('id') ;
      echo $rating =$this->input->post('rating') ;    
       $data['result'] = $this->backend_model->insert_star_rating($user_id,$school_id,$rating);
        $data['result'] = $this->backend_model->update_star_rating($user_id,$school_id,$rating);
       $data['main_content'] = 'a/home/purchase_history';
      $this->load->view('a/include/template2', $data);
       
        
       
    }
    
      public function insert_review()
    {
        $data['result']= $this->backend_model->insert_review(); 
          $this->session->set_flashdata('msg', '<div class="alert   
      alert-success text-center">Review send successfully</div>');
     redirect('home/purchase_history');
       
        
       
    }
    
        
        public function policy()
    {
  
       $data['main_content'] = 'a/home/privacy_policy';
        $this->load->view('a/include/template', $data);
        
    }
    
    
      public function update_user()
    {
        
        $data['result']= $this->backend_model->update_user(); 
        $this->session->set_flashdata('msg', '<div class="alert   
    alert-success text-center"> Password Change Successfully </div>');
        redirect('home/setting');
       
    }
    
     public function ratingstar($order_id,$id)

    {  
     // $data['result'] = $this->backend_model->view_school_rating($id); 
      $data['result'] = $this->backend_model->view_school_rating($order_id,$id);
     $data['main_content'] = 'a/home/ratingstar';
    $this->load->view('a/include/template2', $data);
    }
    
      public function trill_pack()

    {  
     // $data['result'] = $this->backend_model->view_school_rating($id); 
      //$data['result'] = $this->backend_model->view_school_rating($order_id,$id);
     //
     
        $data['area_id']=$this->input->post('area_id');
    
     
        $data['school_name']=$this->input->post('school_name');

        $data['school_id']=$this->input->post('school_id');
     
        $data['address_line']=$this->input->post('address_line');

        $data['area']=$this->input->post('area_id');

        $data['city']=$this->input->post('city');

        $data['licence']=$this->input->post('licence');

        $data['license_fee']=$this->input->post('license_fee');

        $data['vehical']=$this->input->post('vehical');
  
        $data['vehical_type']=$this->input->post('vehical_type');
     
        $data['fee']=$this->input->post('fee');

        $data['tax']=$this->input->post('tax');
    
        $data['id']=$this->input->post('id');

        $data['discount']=$this->input->post('discount');
   
        $data['total']=$this->input->post('total_fee');
        $data['trill']=$this->input->post('trill');
        $data['main_content'] = 'a/home/trill_pack';
    $this->load->view('a/include/template1', $data);
 
    }
    
        public function trill_date()

    {  
     // $data['result'] = $this->backend_model->view_school_rating($id); 
      //$data['result'] = $this->backend_model->view_school_rating($order_id,$id);
     //
     
        $data['area_id']=$this->input->post('area_id');
    
     
        $data['school_name']=$this->input->post('school_name');

        $data['school_id']=$this->input->post('school_id');
     
        $data['address_line']=$this->input->post('address_line');

        $data['area']=$this->input->post('area_id');

        $data['city']=$this->input->post('city');

        $data['licence']=$this->input->post('licence');

        $data['license_fee']=$this->input->post('license_fee');

        $data['vehical']=$this->input->post('vehical');
  
        $data['vehical_type']=$this->input->post('vehical_type');
     
        $data['fee']=$this->input->post('fee');

        $data['tax']=$this->input->post('tax');
    
        $data['id']=$this->input->post('id');

        $data['discount']=$this->input->post('discount');
   
        $data['total']=$this->input->post('total_fee');
        $data['trill']=$this->input->post('trill');
         $data['payment_mode']=$this->input->post('payment_mode');
        $data['main_content'] = 'a/home/trill_date';
    $this->load->view('a/include/template1', $data);
 
    }
  
  

}