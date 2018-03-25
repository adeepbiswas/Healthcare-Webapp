<?php
if(isset($_POST['submit']))
{

    //checking for file size of the uploaded file
    //max 2 MB allowed
    $upload=0;
    $directory = "upload/";
    $finalfile = $directory.basename($_FILES['fileupload']['name']);
    $filesize=$_FILES['fileupload']['size'];
    if($filesize>5097152)
    {
        echo "file size is greater than 5 MB";
        $upload=1;
    }

    //checking for file extension - only docx files allowed

    $fileextension="pdf";
    $filename=$_FILES['fileupload']['name'];
    $filetype=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    if($filetype!=$fileextension)
    {
        echo "Only pdf files are allowed";
        $upload=1;
    }

    //checking if file already exists

    if(file_exists($finalfile))
    {
        echo "Sorry File Already Exists";
        $upload=1;
    }

    //uploading file to directory on the server
    if($upload==0)
    {
        if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$finalfile))
        {
            echo "File Upload Successful";
            if (isset($_POST['submit']))
            {
                $type=$_POST['type'];
                $id=$_POST['id'];
                $report=$_POST['report'];

                include 'dbconnection.php';

                $conn=openconn();

                $sql="insert into".$type."(user_id,prescription_path) values('".$id."','".$report."')";

                if(mysql_query($sql)==TRUE)
                {
                    echo "Record Inserted Successfully";
                }
                else
                {
                    echo "Error: ".mysql_error($conn);
                }

                closeconn($conn);
            }
        }
    }

}

?>
