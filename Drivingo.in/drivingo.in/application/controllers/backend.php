<?php defined('BASEPATH') OR exit('No direct script access allowed');

class backend extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
          $this->load->model('backend_model');
      $this->load->model('image_model');
      
    }
    public function index(){

    
      $data['id']=$this->backend_model->total_booking();
            $data['school_id']=$this->backend_model->total_school();
                  $data['user_id']=$this->backend_model->total_user();
      $data['main_content'] = 'b/home/index';
        $this->load->view('b/include/template', $data);
    

    }
    
//login
   public function login()
    { 
        $this->load->view('b/home/login');
    }

      public function login_admin() {
           if ($user_details = $this->backend_model->login()) {
              $data = array(
                'fullname' => $user_details->admin_name,
                'last_name' => $user_details->admin_last_name,
                'admin_pass' => $user_details->admin_pass,
                 'id' => $user_details->admin_id,
                'email' => $user_details->admin_email,
                'is_logged_in' => TRUE
                );

                $this->session->set_userdata($data);

                $this->session->set_flashdata('msg', '<div class="alert   

                alert-success text-center">Welcome</div>');
                       
                redirect('backend/index');
}       else
{
            $this->session->set_flashdata('msg', '<div class="alert   
            alert-danger text-center">Invalid username and password!</div>');
            redirect('backend/login');

}
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
       redirect('backend/login');
}

//admin_login


	
//category
      public function manage_area(){
      $data['category'] = $this->backend_model->view_area();
      
   $data['main_content'] = 'b/home/area/manage_area';
        $this->load->view('b/include/template', $data);
    }

           public function add_area()

    {  $data['city'] = $this->backend_model->view_city();
      
     $data['main_content'] = 'b/home/area/add_area';
        $this->load->view('b/include/template', $data);
    }

    public function Manage_city()

    {  $data['category'] = $this->backend_model->view_city();
      
     $data['main_content'] = 'b/home/area/manage_city';
        $this->load->view('b/include/template', $data);
    }

       public function add_city()

    {  
      $data['state'] = $this->backend_model->view_state();
     $data['main_content'] = 'b/home/area/add_city';
        $this->load->view('b/include/template', $data);
    }

     public function insert_city()

    {  
      
      $data['id'] = $this->backend_model->add_city();
           $this->session->set_flashdata('msg', '<div class="alert   
      alert-success text-center">Add area successfully </div>');
       redirect('backend/Manage_city');
    }

     public function insert_area()
    {  
       $data['id'] = $this->backend_model->add_area();
           $this->session->set_flashdata('msg', '<div class="alert   
      alert-success text-center">Add area successfully </div>');
       redirect('backend/manage_area');
    }
           public function edit_area($id)
    { 
    $data['state'] = $this->backend_model->view_state();
      $data['area'] = $this->backend_model->edit_area($id);

     $data['main_content'] = 'b/home/area/edit_area';
        $this->load->view('b/include/template', $data);
    }

        public function update_area()
    { 

      $data['category'] = $this->backend_model->update_area();
        redirect('backend/manage_area');
    }

    public function delete_area($id)
    {  $data['id'] = $this->backend_model->delete_area($id);
         redirect('backend/manage_area');
    }


// user 

      public function manage_user(){
      $data['category'] = $this->backend_model->view_user();
     
        $data['main_content'] = 'b/home/manage_user';
        $this->load->view('b/include/template', $data);
    }

// admin


   public function manage_admin(){
      $data['admin'] = $this->backend_model->view_admin();
      $data['main_content'] = 'b/home/setting/edit_admin';
        $this->load->view('b/include/template', $data);
    }  

     public function update_admin(){
      $data['admin'] = $this->backend_model->confirm_admin_pass();
      if($data['admin']){

        $data['main_content'] = 'b/home/setting/new_password';
        $this->load->view('b/include/template', $data);
      }
      else{
          $this->session->set_flashdata('msg', '<div class="alert   
            alert-danger text-center">Invalid password!</div>');
          redirect('backend/manage_admin');
      }
     
    }

    public function confirm_update_admin(){
      $data['admin'] = $this->backend_model->update_admin();
        $this->session->set_flashdata('msg', '<div class="alert   

                alert-success text-center">Password Chanage Successfully..!!</div>');
                       
                redirect('backend/logout');
      }

      public function manage_terms_condition(){
      $data['category'] = $this->backend_model->view_terms_condition();
      $data['main_content'] = 'b/home/setting/manage_terms_condition';
        $this->load->view('b/include/template', $data);
    } 

       public function edit_terms_condition(){
      $data['terms'] = $this->backend_model->view_terms_condition();
      $data['main_content'] = 'b/home/setting/edit_term_condition';
        $this->load->view('b/include/template', $data);
    } 

     public function update_terms_condition(){

        $terms_condition=$this->input->post('terms_condition') ;
      $data['category'] = $this->backend_model->update_terms_condition();
    redirect('backend/manage_terms_condition');
    } 
   
      public function manage_contact(){
      $data['category'] = $this->backend_model->view_contact();
      $data['main_content'] = 'b/home/setting/manage_contact';
        $this->load->view('b/include/template', $data);
    } 

      public function edit_contact($id){
      $data['contact'] = $this->backend_model->edit_contact($id);
      $data['main_content'] = 'b/home/setting/edit_contact';
        $this->load->view('b/include/template', $data);
    } 

      public function update_contact(){
      $data['contact'] = $this->backend_model->update_contact();
      redirect('backend/manage_contact');
    } 
// discount


      public function manage_discount(){
      $data['category'] = $this->backend_model->view_discount();
      $data['main_content'] = 'b/home/discount_code/manage_discount';
        $this->load->view('b/include/template', $data);
    }  

       public function add_discount(){
   
      $data['main_content'] = 'b/home/discount_code/add_discount';
        $this->load->view('b/include/template', $data);
    }    

      public function insert_discount()

    {  
       $data['school'] = $this->backend_model->add_discount();
    redirect('backend/manage_discount');
    }
    
     public function delete_discount_code($id)

    {  
       $data['area'] = $this->backend_model->delete_discount_code($id);
       redirect('backend/manage_discount');
    
    }
//booking and payment
       public function new_order(){
      $data['user'] = $this->backend_model->view_new_order();
      $data['main_content'] = 'b/home/booking/new_order';
        $this->load->view('b/include/template', $data);
    }  


       public function order_history(){
      $data['user'] = $this->backend_model->view_history();
      $data['main_content'] = 'b/home/booking/order_history';
        $this->load->view('b/include/template', $data);
    }  
    
       public function add_histroy(){
        
     $data['user'] = $this->backend_model->update_history();
   redirect('backend/new_order');
    } 
    
       public function delete_history($id){
        
     $data['user'] = $this->backend_model->delete_history($id);
   redirect('backend/order_history');
    }  
    
    

     public function add_school()

    {  
       $data['area'] = $this->backend_model->view_city();
     $data['main_content'] = 'b/home/school/add_school';
        $this->load->view('b/include/template', $data);
    }

   public function edit_school($id)

    {        
     $data['area'] = $this->backend_model->view_city();
      $data['school'] = $this->backend_model->edit_school($id);
      $data['city'] = $this->backend_model->edit_school_area($id);
      $data['package'] = $this->backend_model->edit_package($id);
     $data['main_content'] = 'b/home/school/edit_school';
        $this->load->view('b/include/template', $data);
    }


  public function delete_city($id)

    {  
       $data['area'] = $this->backend_model->delete_city($id);
       redirect('backend/manage_city');
    
    }

        public function get_state()  
   {  
      //starts by running the query for the countries  
       $id_country = $this->input->post('id',TRUE);  
      $data['city'] = $this->backend_model->get_state($id_country);  
      //loads up the view with the query results  
       $output = null;  
      foreach ($data['city'] as $row)  
      {  
         //here we build a dropdown item line for each  
         
         $output .= "<option value='".$row->area_id."'>".$row->area."</option>";  
    
      }  
      echo $output;

      
   }  
  public function add_package()

    {  
       $data['area'] = $this->backend_model->view_area();
     $data['main_content'] = 'b/home/school/add_package';
        $this->load->view('b/include/template', $data);
    }

    public function insert_school()

    {  
      $row['id'] = $this->backend_model->add_school();
        $this->backend_model->add_school_area($row['id'] );
  
     $filepath="public/gallery/";
      $this->load->helper('form');
      $data = array();
      $data['title'] = 'Multiple file upload';
 
  if($this->input->post())
  {
    // retrieve the number of images uploaded;
    $number_of_files = sizeof($_FILES['image']['tmp_name']);
    // considering that do_upload() accepts single files, we will have to do a small hack so that we can upload multiple files. For this we will have to keep the data of uploaded files in a variable, and redo the $_FILE.
    $files = $_FILES['image'];
    $errors = array();
 
    // first make sure that there is no error in uploading the files
    for($i=0;$i<$number_of_files;$i++)
    {
      if($_FILES['image']['error'][$i] != 0) $errors[$i][] = 'Couldn\'t upload file '.$_FILES['image']['name'][$i];
    }
    if(sizeof($errors)==0)
    {
      // now, taking into account that there can be more than one file, for each file we will have to do the upload
      // we first load the upload library
      $this->load->library('upload');
      // next we pass the upload path for the images
      $config['upload_path'] = FCPATH . 'public/gallery/';
      // also, we make sure we allow only certain type of images
      $config['allowed_types'] = 'gif|jpg|png';
      for ($i = 0; $i < $number_of_files; $i++) {
        $_FILES['image']['name'] = $files['name'][$i];
        $_FILES['image']['type'] = $files['type'][$i];
        $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
        $_FILES['image']['error'] = $files['error'][$i];
        $_FILES['image']['size'] = $files['size'][$i];
        //now we initialize the upload library
        $this->upload->initialize($config);
        // we retrieve the number of files that were uploaded
        if ($this->upload->do_upload('image'))
        {
          //$data['id']=$this->backend_model->last_insert_school();

          $data['uploads'][$i] = $this->upload->data();
         $file_name=$_FILES['image']['name'];
         $vehical_name=$this->input->post('vehicle_name')[$i];
         $vehical_type=$this->input->post('vehicle_type')[$i];
         $tax=$this->input->post('tax')[$i];
         $fee=$this->input->post('fee')[$i];
        $trill=$this->input->post('trill')[$i];
          $this->backend_model->add_package($row['id'],$file_name ,$filepath,$vehical_name,$vehical_type,$tax,$fee,$trill);

        }

        else
        {
          $data['upload_errors'][$i] = $this->upload->display_errors();
        }
      }
        redirect('backend/manage_school');
      }
      else
      {
       print_r($errors);
      }
    
      }
      else
      {
       redirect('backend/add_school');
      }
}


      
  public function manage_school()

    {  
       $data['school'] = $this->backend_model->view_school();
     $data['main_content'] = 'b/home/school/manage_school';
        $this->load->view('b/include/template', $data);
    }

    public function delete_school($id)

    {  
       $data['school'] = $this->backend_model->delete_school($id);
       $data['package'] = $this->backend_model->delete_package($id);
    redirect('backend/manage_school');
    }
       public function view_school($id)

    {  
       $data['school'] = $this->backend_model->edit_school($id);
       $data['area'] = $this->backend_model->edit_school_area($id);
       $data['package'] = $this->backend_model->edit_package($id);
      $data['main_content'] = 'b/home/school/view_school';
        $this->load->view('b/include/template', $data);
    }
    
    
        public function update_school()

    {  
      $school_id  = $this->input->post('school_id') ; 
      $row['id'] = $this->backend_model->update_school();
 
       $data['area'] = $this->backend_model->view_city();
      $data['school'] = $this->backend_model->edit_school($school_id);
     $data['city'] = $this->backend_model->edit_school_area($school_id);
      $data['package'] = $this->backend_model->edit_package($school_id);
     $data['main_content'] = 'b/home/school/edit_school';
      $this->load->view('b/include/template', $data);

  }
  
         public function edit_update_area()

    {  
      $school_id  = $this->input->post('school_id') ; 
       $this->backend_model->add_school_area($school_id);
       $data['area'] = $this->backend_model->view_city();
      $data['school'] = $this->backend_model->edit_school($school_id);
     $data['city'] = $this->backend_model->edit_school_area($school_id);
      $data['package'] = $this->backend_model->edit_package($school_id);
     $data['main_content'] = 'b/home/school/edit_school';
      $this->load->view('b/include/template', $data);

  }
       public function delete_school_area($id,$school_id)

    {  
      
          $data['school_area'] = $this->backend_model->delete_school_area($id);
          $data['area'] = $this->backend_model->view_city();
          $data['city'] = $this->backend_model->edit_school_area($school_id);
          $data['school'] = $this->backend_model->edit_school($school_id);
          $data['package'] = $this->backend_model->edit_package($school_id);
          $data['message']= "Package Delete successfully..!!!";
          $data['main_content'] = 'b/home/school/edit_school';
          $this->load->view('b/include/template', $data);

    } 
    

             public function delete_package($id,$school_id)

    {  
       
        $data['package'] = $this->backend_model->delete_package($id);
        $data['area'] = $this->backend_model->view_city();
        $data['city'] = $this->backend_model->edit_school_area($school_id);
        $data['school'] = $this->backend_model->edit_school($school_id);
        $data['package'] = $this->backend_model->edit_package($school_id);
        $data['message']= "Package Delete successfully..!!!";
        $data['main_content'] = 'b/home/school/edit_school';
        $this->load->view('b/include/template', $data);

    } 
    
    //
       public function rto(){
      $data['category'] = $this->backend_model->view_rto();
      
   $data['main_content'] = 'b/home/rto';
        $this->load->view('b/include/template', $data);
    }
    
     public function delete_order($id)

    {  
       $data['order'] = $this->backend_model->delete_order($id);

    redirect('backend/new_order');
    }
    
    
        public function delete_user($id)

    {  
       $data['order'] = $this->backend_model->delete_user($id);

    redirect('backend/manage_user');
    }
    
     public function update_add_package()

{  
        
    $school_id=$this->input->post('school_id');
     $filepath="public/gallery/";
    $this->load->helper('form');
    $data = array();
    $data['title'] = 'Multiple file upload';
 
  if($this->input->post())
  {
    // retrieve the number of images uploaded;
    $number_of_files = sizeof($_FILES['image']['tmp_name']);
    // considering that do_upload() accepts single files, we will have to do a small hack so that we can upload multiple files. For this we will have to keep the data of uploaded files in a variable, and redo the $_FILE.
    $files = $_FILES['image'];
    $errors = array();
 
    // first make sure that there is no error in uploading the files
    for($i=0;$i<$number_of_files;$i++)
    {
      if($_FILES['image']['error'][$i] != 0) $errors[$i][] = 'Couldn\'t upload file '.$_FILES['image']['name'][$i];
    }
    if(sizeof($errors)==0)
    {
      // now, taking into account that there can be more than one file, for each file we will have to do the upload
      // we first load the upload library
      $this->load->library('upload');
      // next we pass the upload path for the images
      $config['upload_path'] = FCPATH . 'public/gallery/';
      // also, we make sure we allow only certain type of images
      $config['allowed_types'] = 'gif|jpg|png';
      for ($i = 0; $i < $number_of_files; $i++) {
        $_FILES['image']['name'] = $files['name'][$i];
        $_FILES['image']['type'] = $files['type'][$i];
        $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
        $_FILES['image']['error'] = $files['error'][$i];
        $_FILES['image']['size'] = $files['size'][$i];
        //now we initialize the upload library
        $this->upload->initialize($config);
        // we retrieve the number of files that were uploaded
        if ($this->upload->do_upload('image'))
        {
          //$data['id']=$this->backend_model->last_insert_school();

          $data['uploads'][$i] = $this->upload->data();
         $file_name=$_FILES['image']['name'];
         $vehical_name=$this->input->post('vehicle_name')[$i];
         $vehical_type=$this->input->post('vehicle_type')[$i];
         $tax=$this->input->post('tax')[$i];
         $fee=$this->input->post('fee')[$i];
          $trill=$this->input->post('trill')[$i];
          $this->backend_model->add_package($school_id,$file_name ,$filepath,$vehical_name,$vehical_type,$tax,$fee,$trill);

        }

        else
        {
          $data['upload_errors'][$i] = $this->upload->display_errors();
        }
      }
       
        $data['area'] = $this->backend_model->view_city();
        $data['school'] = $this->backend_model->edit_school($school_id);
        $data['city'] = $this->backend_model->edit_school_area($school_id);
        $data['package'] = $this->backend_model->edit_package($school_id);
        $data['main_content'] = 'b/home/school/edit_school';
      $this->load->view('b/include/template', $data);
      }
      else
      {
       print_r($errors);
      }
    
      }
      else
      {
       $row['id'] = $this->backend_model->update_school();
        $this->backend_model->add_school_area($school_id);
        $data['area'] = $this->backend_model->view_city();
        $data['school'] = $this->backend_model->edit_school($school_id);
        $data['city'] = $this->backend_model->edit_school_area($school_id);
        $data['package'] = $this->backend_model->edit_package($school_id);
        $data['main_content'] = 'b/home/school/edit_school';
      }
    }
   public function update_package(){
    $school_id=$this->input->post('school_id');
    // retrieve the number of images uploaded;
    $number_of_files = sizeof($this->input->post('vehicle_name'));
 
    // first make sure that there is no error in uploading the files
   
      // we first load the upload library
      for ($i = 0; $i < $number_of_files; $i++) {
        
       
        // we retrieve the number of files that were uploaded
      
          //$data['id']=$this->backend_model->last_insert_school();
        $package_id=$this->input->post('id')[$i];
         $vehical_name=$this->input->post('vehicle_name')[$i];
         $vehical_type=$this->input->post('vehical_type')[$i];
         $tax=$this->input->post('tax')[$i];
         $fee=$this->input->post('fee')[$i];
        $trill=$this->input->post('trill')[$i];
      echo  $image=$this->input->post('image')[$i];
        $this->backend_model->update_package($school_id,$vehical_name,$vehical_type,$tax,$fee,$trill,$package_id);
        }
        $data['area'] = $this->backend_model->view_city();
        $data['school'] = $this->backend_model->edit_school($school_id);
        $data['city'] = $this->backend_model->edit_school_area($school_id);
        $data['package'] = $this->backend_model->edit_package($school_id);
        $data['main_content'] = 'b/home/school/edit_school';
      $this->load->view('b/include/template', $data);
      }
}