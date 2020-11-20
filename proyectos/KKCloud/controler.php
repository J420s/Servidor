<?php
    
    
    function handleErrors($file_error){
        switch($file_error){
            case '0':
                return "Succes!";
                break;
            case '13':
                return "File type error!";
                break;
        }
    }

    function saveFile(){
        $path=pathinfo($file);
        $file_name = $path['filename'];
        $file_ext = $path['extension'];
        $file_type = $_FILES['file']['type'];
        $file_tmp_name = $_FILES['file']['tmp_name'];

        if(handleType()!=13){
            $new_path = "./media/".handleType().$file_name.".".$file_ext;
            move_uploaded_file($file_tmp_name, $new_path);
            return true;
        }
        return false;
    }
    
    function handleType($type){
        switch($type){
            case 'image/png':
                return "image";
                break;
            case 'audio/mpeg':
                return "audio";
                break;
            case 'video/mp4':
                return "video";
                break;
            default: return "13";
        }
    }

    function handleUploadRequest(){
        $file = $_FILES['file']['name'];
        $file_tmp_name = $_FILES['file']['tmp_name'];
        $file_error = $_FILES['file']['error'];

        if (is_uploaded_file($file_tmp_name)===true){
            return saveFile() ? saveFile() : "";
        }
        else{
            handleErrors($file_error);
        }
    }

    if(isset($_REQUEST['upload'])){
        handleUploadRequest();
        header("Location: index.php");
    }
    else{
        header("Location: index.php");
    }
    
?>