<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class backend_model extends CI_Model
{
public function __construct()
    {
        parent::__construct();

    }

public function login() {
            $query = $this->db->query('select * 
            from admin 
            where admin_email="' . $this->input->post('admin_email') . '"
            and admin_pass="' . MD5($this->input->post('admin_pass')) . '" ;');
             if ($query->num_rows() > 0)
             return $query->row();
             else
                return FALSE;
}

public function view_admin() {
           $query = "SELECT * from admin";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function confirm_admin_pass() {
             
           $admin_pass=MD5($this->input->post('admin_pass'));
            $admin_id=$this->input->post('admin_id') ;
           
    $query = "SELECT * from admin where admin_pass='$admin_pass' and admin_id=$admin_id";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;

}
public function update_admin() {
             
           $admin_pass=MD5($this->input->post('admin_pass')) ;
             $admin_id=$this->input->post('admin_id') ;
           
    $query="UPDATE admin set admin_pass='$admin_pass' 
   where admin_id=$admin_id;";
            $sql=$this->db->query($query);

}
// category
public function add_area() {


 if(strpos($this->input->post('area'), "\n")){
    $entries = explode("\n", $this->input->post('area'));
     $entries;
  

 foreach($entries as $row) {
       $data = array(
 'city'  => $this->input->post('city') ,  
 
 'area'  => $row  , 
 

);
         $this->db->insert('add_area',$data);
}
}
else{
       $data = array(
 'city'  => $this->input->post('city') ,  
 
 'area'  => $this->input->post('area')  , 
 

);
         $this->db->insert('add_area',$data);
}
}


public function add_city() {


 if(strpos($this->input->post('city'), "\n")){
    $entries = explode("\n", $this->input->post('city'));
 foreach($entries as $row) {
       $data = array(
 'city'  => $row ,  
 'state'  => $this->input->post('state_name')  , 

 

);
         $this->db->insert('city',$data);
}
}
else{
          $data = array(
 'city'  => $this->input->post('city') ,  
 'state'  => $this->input->post('state_name')  , 

 

);
         $this->db->insert('city',$data);
}
}


public function view_state() {
           $query = "SELECT * from state";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}


public function view_city() {
           $query = "SELECT *  from city";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}
//area

public function view_area() {
           $query = "SELECT * from add_area";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}


public function edit_area($id) {
           $query = "SELECT * from add_area where area_id='$id'";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function edit_state($id) {
           $query = "SELECT * from state where state_name='$id'";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function update_area() {


    $area=$this->input->post('area') ;
     $city=$this->input->post('city') ;
          $state=$this->input->post('state_name') ;
      $area_id=$this->input->post('area_id') ;
    $query="UPDATE add_area set area='$area',city='$city',state='$state' where area_id=$area_id;";
    $sql=$this->db->query($query);
}

public function delete_area($id) {
           
            $query="DELETE FROM add_area WHERE area_id='$id';";
            $sql=$this->db->query($query);
}


public function delete_city($id) {
           
            $query="DELETE a.*, b.* FROM city as a left JOIN add_area as b ON a.city= b.city WHERE a.city_id = $id;";
            $sql=$this->db->query($query);
}
//add user 

public function view_user() {
           $query = "SELECT * from user";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

// terms & condition

public function view_terms_condition() {
           $query = "SELECT * from terms_condition";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function update_terms_condition() {
      $terms_condition=$this->input->post('terms_condition') ;
     $terms_id=$this->input->post('terms_id') ;
        
           
    $query="UPDATE terms_condition set terms_condition='$terms_condition'
    where terms_id=$terms_id;";
    $sql=$this->db->query($query);
}

public function view_contact() {
           $query = "SELECT * from contact_info";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}


//discount
public function view_discount() {
           $query = "SELECT * from discount";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}


public function add_discount() {
        $data = array(
 'discount_code'  => $this->input->post('discount_code') ,  
 'percentage'  => $this->input->post('percentage') , 
 

);
          $query = $this->db->insert('discount', $data);
        if ($query) {
         return $this->db->insert_id();
        } else {
         return FALSE;
       
}
}

public function delete_discount_code($id) {
           
            $query="DELETE FROM discount WHERE id='$id';";
            $sql=$this->db->query($query);
}

public function edit_contact($id) {
           $query = "SELECT * from contact_info where id='$id'";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function update_contact() {
             $contact_a=$this->input->post('contact_a') ;
     $contact_b=$this->input->post('contact_b') ;
          $contact_c=$this->input->post('contact_c') ;
           $contact_d=$this->input->post('contact_d') ;
            $contact_e=$this->input->post('contact_e') ;
             $address=$this->input->post('address') ;
      $id=$this->input->post('id') ;
    $query="UPDATE contact_info set contact_a='$contact_a',contact_b='$contact_b',contact_c='$contact_c',contact_d='$contact_d' , contact_e ='$contact_e' ,address='$address'
    where id=$id;";
    $sql=$this->db->query($query);
}

public function view_new_order() {
           $query = "select a.* ,b.* from booking_payment as a left join add_area as b on a.area_id=b.area_id  where a.status ='0' order by id desc";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}
public function view_history() {
           $query = "select a.* ,b.* from booking_payment as a left join add_area as b on a.area_id=b.area_id where a.status ='1' order by id desc"  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function delete_history($id) {
           
            $query="DELETE FROM booking_payment WHERE id='$id';";
            $sql=$this->db->query($query);
}

public function update_history() {
      $data=  $this->input->post('id');
      foreach($data as $row){     
    $query="UPDATE booking_payment set status='1'
    where id=$row;";
    $sql=$this->db->query($query);
      }
}
 public function get_state($country_id)  
   {  
        $this->db->select('*');  
      $this->db->from('add_area');  
      $this->db->where('city',$country_id);  
      $query = $this->db->get();  
      return $query->result();  
}


public function get_city($state_id)  
   {  
        $this->db->select('*');  
      $this->db->from('add_area');  
      $this->db->where('area_id',$state_id);  
      $query = $this->db->get();  
      return $query->result();  
}
//School function

public function add_school() {
  $first_school_id=0;
 $data = array(
 'school_name'  => $this->input->post('school_name') ,  
 'free_fuel'  => $this->input->post('free_fuel')  ,
 'driver'  => $this->input->post('driver')  ,  
 
 'highway_learning'  => $this->input->post('highway_learning')  , 
 'traffic_learning'  => $this->input->post('traffic_learning')  , 
'licence'  => $this->input->post('licence') , 
'license_fee'  => $this->input->post('license_fee') ,  
'published_date' =>$this->input->post('published_date') ,
 'duration'  => $this->input->post('duration')  , 
 'address_line'=>$this->input->post('address_line'),
 'contact_no_1'=>$this->input->post('contact_no_1'),
'contact_no_2'=>$this->input->post('contact_no_2'),
'landline'=>$this->input->post('landline'),
 'review'  => $this->input->post('review')  , 
); 

 $query = $this->db->insert('school', $data);
        if ($query) {
         return $this->db->insert_id();
        } else {
         return FALSE;
           
     }  


  return $first_school_id;
}


public function add_school_area($school_id) {
  $area= $this->input->post('area_id'); 

 for($i=0;$i<count($area);$i++){
   $data = array(
 'area'  => $this->input->post('area_id')[$i] ,
 'school_id'=>$school_id
);

      $this->db->insert('school_area',$data);
}

}



public function add_package($school_id,$image,$image_path,$vehical_name,$vehical_type,$tax,$fee,$trill) {

   $data = array(
 'vehical'  =>   $vehical_name,
 'vehical_type'  =>  $vehical_type,  
 'fee'  => $fee, 
 'tax'  => $tax, 
  'trill'=>$trill,
 'image'=> $image,
 'image_path'=>$image_path,
 'school_id'=>$school_id
);

      $this->db->insert('packages',$data);
}

public function last_insert_school() {
           $query = "select school_id from school order by school_id  desc limit 1"  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}


//user_signup

public function user_signup($otp,$txt_id) {
        $data = array(
 'user_name'  => $this->input->post('user_name') ,  
 'user_email'  => $this->input->post('user_email')  , 
 'user_phone'  => $this->input->post('user_phone')  , 
 'user_password' =>md5($this->input->post('user_password')),
 'otp'=>$otp,
 'is_confirm'=>'0',
 'txt_id'=>$txt_id

);
          $query = $this->db->insert('user', $data);
        if ($query) {
         return $this->db->insert_id();
        } else {
         return FALSE;
       
}
}


public function user_login() {
            $query = $this->db->query('select * 
            from user 
            where user_email="' . $this->input->post('user_name') . '"
            and user_password="' . md5($this->input->post('user_password')) . '"
            and is_confirm=1 ;');
             if ($query->num_rows() > 0)
             return $query->row();
             else
                return FALSE;
}


public function check_email_availablity()
{
     $user_phone = trim($this->input->post('email'));
  $user_phone = strtolower($user_phone);  
  
  $query = $this->db->query('SELECT * FROM user where user_phone="'.$user_phone.'"');
  
  if($query->num_rows() > 0)
  return false;
  else
  return true;
}

public function check_username_avalibility()
{
     $username = trim($this->input->post('username'));
  $username = strtolower($username);  
  
  $query = $this->db->query('SELECT * FROM user where user_name="'.$username.'"');
  
  if($query->num_rows() > 0)
  return false;
  else
  return true;
}

public function check_old_password_avalibility()
{
    $password=md5($this->input->post('old_password'));
     $user_id=$this->input->post('user_id');
       $query = "SELECT * FROM user where user_password='$password' and user_id='$user_id'"  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;

}

public function view_school() {
           $query = "select * from school"  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function edit_school($id) {
           $query = "SELECT a.*,c.*  FROM `school` as a left join  add_area as c on a.area=c.area_id where a.school_id=$id "  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function edit_package($id) {
           $query = "select * from packages where school_id = $id; "  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}
     public function delete_school($id) {
           
            $query="DELETE a.*, b.* 
            FROM school as a 
            left JOIN packages as  b 
            ON a.school_id= b.id 
            WHERE a.school_id = $id";
                        $sql=$this->db->query($query);
}

public function delete_package($id) {
           
            $query="DELETE FROM packages WHERE id='$id';";
            $sql=$this->db->query($query);
}

public function edit_user($id) {
           $query = "SELECT * from user where user_id='$id'";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function search_result() {


      $area=$this->input->post('area') ;
      $licence=$this->input->post('licence') ;
      $state=$this->input->post('date')  ;
      if($licence=='non_licence'){
  $query="select * from school LEFT join (select * from packages where fee = (select min(fee) from packages as f where f.school_id = packages.school_id)) packages on packages.school_id=school.school_id
left join (SELECT *, AVG(rating) FROM rating_star group by school_id) rating_star on rating_star.school_id=school.school_id
left join school_area on school_area.school_id=school.school_id 
left join add_area on school_area.area=add_area.area_id where school_area.area='$area' ORDER BY `AVG(rating)` DESC";
   $sql=$this->db->query($query);
            $data=$sql->result_array();
          }
      else{
  $query="select * from school LEFT join (select *
from packages
where fee = (select min(fee) from packages as f where f.school_id = packages.school_id)) packages on packages.school_id=school.school_id
left join (SELECT *, AVG(rating) FROM rating_star group by school_id) rating_star on rating_star.school_id=school.school_id
left join school_area on school_area.school_id=school.school_id 
left join add_area on school_area.area=add_area.area_id where school_area.area='$area' And school.licence='$licence' ORDER BY `AVG(rating)` DESC ;";
   $sql=$this->db->query($query);
            $data=$sql->result_array();
            }
          return $data;
}

// sorting rate and price
public function search_result_sorting_price($area_id,$licence) {

 
      if($licence=='non_licence'){
  $query="select * from school LEFT join (select *
from packages
where fee = (select min(fee) from packages as f where f.school_id = packages.school_id)) packages on packages.school_id=school.school_id
left join (SELECT *, AVG(rating) FROM rating_star group by school_id) rating_star on rating_star.school_id=school.school_id
left join school_area on school_area.school_id=school.school_id 
left join add_area on school_area.area=add_area.area_id where school_area.area='$area_id' ORDER BY `fee` ASC";
   $sql=$this->db->query($query);
            $data=$sql->result_array();
          }
      else{
  $query="select * from school LEFT join (select *
from packages
where fee = (select min(fee) from packages as f where f.school_id = packages.school_id)) packages on packages.school_id=school.school_id
left join (SELECT *, AVG(rating) FROM rating_star group by school_id) rating_star on rating_star.school_id=school.school_id
left join school_area on school_area.school_id=school.school_id 
left join add_area on school_area.area=add_area.area_id where school_area.area='$area_id' And school.licence='$licence' ORDER BY `fee` ASC;";
   $sql=$this->db->query($query);
            $data=$sql->result_array();
            }
          return $data;
}

public function search_result_sorting($area_id,$licence) {

 
      if($licence=='non_licence'){
  $query="select * from school LEFT join (select *
from packages
where fee = (select min(fee) from packages as f where f.school_id = packages.school_id)) packages on packages.school_id=school.school_id
left join (SELECT *, AVG(rating) FROM rating_star group by school_id) rating_star on rating_star.school_id=school.school_id
left join school_area on school_area.school_id=school.school_id 
left join add_area on school_area.area=add_area.area_id where school_area.area='$area_id' ORDER BY `AVG(rating)` DESC";
   $sql=$this->db->query($query);
            $data=$sql->result_array();
          }
      else{
  $query="select * from school LEFT join (select *
from packages
where fee = (select min(fee) from packages as f where f.school_id = packages.school_id)) packages on packages.school_id=school.school_id
left join (SELECT *, AVG(rating) FROM rating_star group by school_id) rating_star on rating_star.school_id=school.school_id
left join school_area on school_area.school_id=school.school_id 
left join add_area on school_area.area=add_area.area_id where school_area.area='$area_id' And school.licence='$licence' order by rating_star.rating desc ;";
   $sql=$this->db->query($query);
            $data=$sql->result_array();
            }
          return $data;
}
public function get_school($school_id) {

  $query="select * from packages where school_id='$school_id' order by fee ASC limit 1; ";
   $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function school_result($id,$area) {
           $query = "select a.*,b.*,c.*  from school as a left join school_area as b on a.school_id=b.school_id left join add_area as c on b.area=c.area_id  where  a.school_id='$id' and b.area='$area';";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function school_Package_result($id) {
           $query = "select * from packages  where school_id=$id; ";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function school_Package_result_limit($id) {
           $query = "select * from packages  where school_id=$id order by fee asc limit 1; ";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function view_review($id) {
           $query = "select * from rating_star join user on rating_star.user_id=user.user_id where rating_star.school_id=$id; ";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function verification() {
      $otp=$this->input->post('otpvalue') ;
      $user_id=$this->input->post('user_id') ;
      $user_phone=$this->input->post('user_phone') ;
      $query = "select * from user where otp = '$otp' and user_id='$user_id';";
      $sql=$this->db->query($query);
      $data=$sql->result_array();
      
      if($data==!null){
         $query = "UPDATE user set is_confirm='1'
            where user_id='$user_id;'";
            $sql=$this->db->query($query);
       $query = "select * from user  where user_id='$user_id';";
      $sql=$this->db->query($query);
      $data=$sql->result_array(); 
      return $data; 
      } 
     
      else
     {
       return false;
     }
   }

public function update_verification() {
           $otp=$this->input->post('otpvalue') ;
  $id=$this->input->post('id') ;
  
    $sql=$this->db->query($query);
} 
public function total_booking() {
           $query = "SELECT count(id) FROM `booking_payment`"  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function total_school() {
           $query = "SELECT count(school_id) FROM `school`"  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}


public function total_user() {
           $query = "SELECT count(user_id) FROM `user`"  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function check_discount_code($discount) {
          $query = "select *  from discount where discount_code='$discount'"  ;
             $sql=$this->db->query($query);
             $data=$sql->result_array();
            return $data;
            
}


public function forgot_password() {

  $phone=$this->input->post('user_phone') ;
  
           $query = "SELECT user_phone
            FROM user where user_phone='$phone'";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}            


public function update_password($rndno,$number) {
    $rndno=md5($rndno);
     $query="UPDATE user set user_password='$rndno' where user_phone=$number;";
    $sql=$this->db->query($query);
}

public function payment_cod($user_name,$user_phone,$user_id,$txtid) {

        $data = array(
 
 'school_id'  => $this->input->post('school_id'),  
 'school_name'  => $this->input->post('school_name'),
 'area_id'  => $this->input->post('area_id'),
 'school_id'  => $this->input->post('school_id'),
 'school_name'  => $this->input->post('school_name'),
 'prefred_time' =>$this->input->post('time'),
 'prefered_date' =>$this->input->post('date'),
 'actuall_price' =>$this->input->post('total_fee'),
 'discount_price' =>$this->input->post('discount'),
 'licence_fee' =>$this->input->post('license_fee'),
 'payment_mode' =>$this->input->post('payment_mode'),
 'package_id' =>$this->input->post('id'),
 'txt_id' =>$txtid,
 'user_id' =>$user_id,
 'user_name' =>$user_name,
 'user_phone' =>$user_phone,
 'trill_pack'=>$this->input->post('trill'),
 'status' =>'0',
 'address_line_1'=>$this->input->post('address1'),
 'address_line_2'=>$this->input->post('address2'),
 'delivery_city' =>$this->input->post('city'),
 'delivery_area'=>$this->input->post('area'),
 'contact'=>$this->input->post('contact'),
 

);
          $query = $this->db->insert('booking_payment', $data);
        if ($query) {
         return $this->db->insert_id();
        } else {
         return FALSE;
       
}
}

public function update_order($order_id,$id) {
             
          
    $query="UPDATE booking_payment set order_id='$order_id' where id=$id";
    $sql=$this->db->query($query);
}

public function add_user_address() {
             
            
     $address= $this->input->post('address');
     $user_id= $this->input->post('user_id');
     $order_id= $this->input->post('order_id');
    $query="UPDATE booking_payment set user_address='$address' where user_id=$user_id and id='$order_id';";
    $sql=$this->db->query($query);
}

  public function get_school_for_cod($id) {
           $query = "select school_name from school  where school_id=$id ; ";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

  public function purchase_history($id) {
           $query = "select a.*, b.* ,c.* ,d.* from booking_payment as a left join packages as b on a.package_id=b.id left join add_area as c on a.area_id=c.area_id left join school as d on a.school_id=d.school_id where a.user_id=$id order by a.id desc";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}
 public function view_school_rating($order_id,$id) {
           $query = "select * from booking_payment where user_id='$id' and order_id='$order_id';";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}


public function insert_star_rating($user_id,$school_id,$rating) {
        $data = array(
 'school_id'  => $school_id , 
 'user_id'  =>$user_id  ,  
 'rating'  => $rating  , 
 

);
          $query = $this->db->insert('rating_star', $data);
        if ($query) {
         return $this->db->insert_id();
        } else {
         return FALSE;
       
}
}

public function update_star_rating($user_id,$school_id,$rating) {
             
    $query="UPDATE booking_payment set rating='$rating' where user_id=$user_id and school_id='$school_id';";
    $sql=$this->db->query($query);
}

public function insert_review() {
                  
     $review= $this->input->post('review');
     $user_id= $this->input->post('user_id');
     $school_id= $this->input->post('school_id');       
    $query="UPDATE rating_star set review='$review' where user_id=$user_id and school_id='$school_id';";
    $sql=$this->db->query($query);
}

 public function get_star_rating($id) {
           $query = "SELECT * , AVG(rating)
            FROM rating_star where school_id='$id'";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

 public function view_rating($id) {
           $query = "SELECT review
            FROM rating_star where user_id='$id'";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function view_user_detail($id) {
           $query = "select * from user  where user_id=$id; ";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function upload_adhaar($image,$image_path) {
      $user_id= $this->input->post('id');        
    $query="UPDATE user set adhaar_image='$image' ,adhaar_image_path='$image_path' where user_id=$user_id;";
    $sql=$this->db->query($query);
} 


public function update_user() {
    $user_name=$this->input->post('user_name') ;
    $old_password=$this->input->post('old_password') ;
     $user_phone=$this->input->post('user_phone') ;
    $user_email=$this->input->post('user_email') ;
    $user_id=$this->input->post('user_id') ;
      $new_password=md5($this->input->post('new_password')) ;
    $query="UPDATE user set user_name='$user_name',user_email='$user_email',user_phone='$user_phone',user_password='$new_password'
    where user_id=$user_id and user_password='$old_password';";
    $sql=$this->db->query($query);
}

public function edit_school_area($id) {
           $query = "select a.*,b.* from school_area as a left join add_area as b on a.area=b.area_id where a.school_id=$id "  ;
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function update_school() {

$school_id  = $this->input->post('school_id') ;  
 $school_name  = $this->input->post('school_name') ;  
  
 $free_fuel  = $this->input->post('free_fuel')  ;
 $driver  = $this->input->post('driver')  ;  
  $air_conditioner  = $this->input->post('air_conditioner') ;  
 $highway_learning  = $this->input->post('highway_learning')  ; 
 $traffic_learning  = $this->input->post('traffic_learning')  ; 
$licence  = $this->input->post('licence') ; 
$license_fee  = $this->input->post('license_fee') ;  
$published_date =$this->input->post('published_date') ;
$duration  = $this->input->post('duration')  ; 
 $address_line=$this->input->post('address_line');
 $contact_no_1=$this->input->post('contact_no_1');
$contact_no_2=$this->input->post('contact_no_2');
$landline=$this->input->post('landline');
$review  = $this->input->post('review')  ; 
$query="UPDATE school set school_name='$school_name',free_fuel='$free_fuel',driver='$driver' , highway_learning ='$highway_learning' ,traffic_learning='$traffic_learning', licence ='$licence' ,license_fee='$license_fee', published_date ='$published_date' ,duration='$duration', address_line ='$address_line' ,contact_no_1='$contact_no_1', contact_no_2 ='$contact_no_2' ,landline='$landline', review ='$review' 
    where school_id=$school_id;";
    $sql=$this->db->query($query);
} 

public function delete_school_area($id) {
           
            $query="DELETE FROM school_area WHERE school_area_id='$id';";
            $sql=$this->db->query($query);
}
public function update_package($school_id,$vehical_name,$vehical_type,$tax,$fee,$trill,$package_id) {


$query="UPDATE packages set vehical='$vehical_name',vehical_type='$vehical_type',tax='$tax',fee='$fee' , trill ='$trill'  ,school_id='$school_id'
    where id=$package_id;";
    $sql=$this->db->query($query);
}

public function update_image_package_($school_id,$file_name ,$filepath,$vehical_name,$vehical_type,$tax,$fee,$trill,$package_id) {


$query="UPDATE packages set vehical='$vehical_name',vehical_type='$vehical_type',tax='$tax',fee='$fee' , trill ='$trill',image='$file_name',image_path='$filepath', school_id='$school_id'
    where id=$package_id;";
    $sql=$this->db->query($query);
}

public function add_rto() {
        $data = array(
 'name'  => $this->input->post('name') ,  
 'mobile'  => $this->input->post('contact')  , 
 'service_type'  => $this->input->post('service_type')  , 
 'message' =>$this->input->post('msg')
);
          $query = $this->db->insert('rto', $data);
        if ($query) {
         return $this->db->insert_id();
        } else {
         return FALSE;
       
}
}

 public function view_rto() {
           $query = "SELECT *
            FROM rto ";
            $sql=$this->db->query($query);
            $data=$sql->result_array();
            return $data;
}

public function delete_order($id) {
           
            $query="DELETE FROM booking_payment WHERE id='$id';";
            $sql=$this->db->query($query);
} 

public function delete_user($id) {
           
            $query="DELETE FROM user WHERE user_id='$id';";
            $sql=$this->db->query($query);
} 

}