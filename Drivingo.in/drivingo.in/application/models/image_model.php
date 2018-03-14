<?php

class image_model extends CI_Model {

   

    function upload_image1($field_name1,$image_path1) {
        $path1 = './' . $image_path1;
        $thumb_path = $image_path1 . '/thumbs';

        if (!is_dir($path1)) { //create the folder if it's not already exists
            mkdir($path1, 0755, TRUE);
        }
        if (!is_dir($thumb_path)) { //create the folder if it's not already exists
            mkdir($thumb_path, 0755, TRUE);
        }

        $this->path = realpath(APPPATH . '.' . $path1);
        $this->path_url = base_url() . $image_path1;

        $config = array(
            'allowed_types' => 'pdf|odf|rtf|html|txt',
            'upload_path' => $this->path,
            'max_size' => 5,242,880,
            'encrypt_name' => TRUE,
            'overwrite' => false,
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload($field_name1);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
        }

        $image_data = $this->upload->data();

        $config = array(
            'source_image' => $image_data['full_path'],
            'new_image' => $this->path . '/thumbs',
            'maintain_ration' => true,
            'width' => 640,
            'height' => 480,
            'overwrite' => true,
        );
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $file_name1 = $image_data['file_name'];

        return $file_name1;
    }
 function upload_image($field_name2,$image_path2) {
       $path2 = './' . $image_path2;
        $thumb_path = $image_path2 . '/thumbs';

        if (!is_dir($path2)) { //create the folder if it's not already exists
            mkdir($path2, 0755, TRUE);
        }
        if (!is_dir($thumb_path)) { //create the folder if it's not already exists
            mkdir($thumb_path, 0755, TRUE);
        }

        $this->path = realpath(APPPATH . '.' . $path2);
        $this->path_url = base_url() . $image_path2;

        $config = array(
            'allowed_types' => 'jpg|jpeg|png|',
            'upload_path' => $this->path,
            'max_size' => 5120,
            'encrypt_name' => TRUE,
            'overwrite' => false,
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload($field_name2);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
        }

        $image_data = $this->upload->data();

        $config = array(
            'source_image' => $image_data['full_path'],
            'new_image' => $this->path . '/thumbs',
            'maintain_ration' => true,
            'width' => 640,
            'height' => 480,
            'overwrite' => true,
        );
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $file_name2 = $image_data['file_name'];

        return $file_name2;
    }

    function upload_resume($field_name, $image_path){
        $path = './' . $image_path;
        $thumb_path = $image_path . '/thumbs';

        if (!is_dir($path)) { //create the folder if it's not already exists
            mkdir($path, 0755, TRUE);
        }
        if (!is_dir($thumb_path)) { //create the folder if it's not already exists
            mkdir($thumb_path, 0755, TRUE);
        }

        $this->path = realpath(APPPATH . '.' . $path);
        $this->path_url = base_url() . $image_path;

        $config = array(
            'allowed_types' => 'doc|docx|csv|pdf|odf|rtf|html|txt',
            'upload_path' => $this->path,
            'max_size' => 2048,
            'encrypt_name' => TRUE,
            'overwrite' => false,
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload($field_name);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
        }

        $image_data = $this->upload->data();

        $file_path = $image_data['full_path'];

        return $file_path;
    }
}
