<?php
/**
 * Created by PhpStorm.
 * User: Emal Isuranga
 * Date: 2018-02-11
 * Time: 10:43 PM
 */

class modelUser extends CI_Model
{
        function insertData(){

            $data= array(

                'fname'=>$this->input->post('fname',TRUE),
                'lname'=>$this->input->post('lname',TRUE),
                'email'=>$this->input->post('email',TRUE),
                'password'=>$this->input->post('pass',TRUE),
            );
                   return $this->db->insert('testPHP',$data);

        }

        public function checkUser()
        {
            $email =$this->input->post('email');
            $password =$this->input->post('pass');

            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $respons = $this->db->get('testphp');

            if($respons->num_rows()==1){
                return $respons->row(0);
            }
            else{
                echo "error";
            }
        }
}