<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
<<<<<<< HEAD
    public function uniqidReal($lenght = 13) {
=======
    function uniqidReal($lenght = 13) {
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }

<<<<<<< HEAD
    public function addProject($id=null){
        if(isset($_SESSION['usersId'])){
            if($id===null){
                $id=$_SESSION['usersId'];
            }

        $this->load->model('usersModel');
        $result=$this->usersModel->getUser($id);

        $output['id']=$result[0]['usersId'];
        
=======
    public function addProject(){
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
        $data = array();
		$data = $this->input->post();
        
		if(isset($data) && $data != null){
            if(isset($_FILES) && $_FILES!= null){
               
                $file = $_FILES['serviceImage'];
                $fileName = $_FILES['serviceImage']['name'];
                $fileTmpName = $_FILES['serviceImage']['tmp_name'];
                $fileSize = $_FILES['serviceImage']['size'];
                $fileError = $_FILES['serviceImage']['error'];
                $fileType = $_FILES['serviceImage']['type'];
                
    
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                
                $allowed = array('jpg', 'jpeg', 'png' , 'jfif');
                
                if(in_array($fileActualExt, $allowed)){
                    if($fileError === 0){
                        if($fileSize < 500000){
                            $uniqID = $this->uniqidReal();
                            $fileNewName = $uniqID.".".$fileActualExt;
                            $fileDestination = $_SERVER['DOCUMENT_ROOT']."./php/public/uploads/serviceImage/".$fileNewName;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            //$serviceImage = base64_encode(file_get_contents(addslashes($serviceImage)));
                            //$data['serviceImage'] = $serviceImage;
                            //$_SESSION['info']['serviceImage'] = $data['serviceImage'];
                            $_SESSION['info']['serviceImage'] = base_url()."public/uploads/serviceImage/".$fileNewName;
                            
                        }
                        else{
                            echo "File too big";
                        }
                    }
                    else{
                        echo "Error uploading file!";
                    }
                }
                else{
                    echo "Not allowed file type!";
                }
        }

        $this->load->model('projectModel');
<<<<<<< HEAD
        $this->projectModel->addProject($data, $_SESSION['info'], $id);
=======
        $this->projectModel->addProject($data, $_SESSION['info']);
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971

        
    }
    $this->load->view('users/seller/addProject');
}
<<<<<<< HEAD
    }

=======
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
}