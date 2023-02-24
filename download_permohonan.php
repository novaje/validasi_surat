<?php
    if(!empty($_GET['upload_file'])) {
        $file_name = basename($_GET['upload_file']);
        $filePath  = "file_permohonan/".$file_name;

        if(!empty($file_name) && file_exists($filePath)) {
            //define header
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Type: application/pdf");
            header("Content-Transfer-Encoding: binary");

            //read file
            readfile($filePath);
            exit;
        } 
            else {
                echo "file not exit";
            }
    }
?>