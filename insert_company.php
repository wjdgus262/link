<?php

$path = "./static/link_company_logo/";

$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
$data   = array(); 
$data['success'] = false;
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_FILES['service_image']['name'];
    $size = $_FILES['service_image']['size'];
     
     
    if(strlen($name))
    {       
        list($txt, $ext) = explode(".", $name);
        
                $actual_image_name = generateRandomString(10).time()."-image.".$ext;
                $tmp = $_FILES['service_image']['tmp_name'];
                if(move_uploaded_file($tmp, $path.$actual_image_name))
                {       
                    $data['success'] = true;
                 //    $logo_url = "static/link_company_logo/".$actual_image_name;
                    $data['url']  = "static/link_company_logo/".$actual_image_name; 
                }
                else
                {
                    $data['success'] = false;
                    $data['error'] = "error";
                }
    }
    else
        $data['error'] = "Please select image..!";
}
 
echo json_encode($data);
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>