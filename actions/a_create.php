<?php 
    require_once 'db_connect.php';
    require_once 'file_upload.php';

    if ($_POST) {
        $title = $_POST['title'];
        $isbn = $_POST['isbn'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        $authorfname = $_POST['afname'];
        $authorlname = $_POST['alname'];
        $publisher = $_POST['publisher'];
        $publisheraddress = $_POST['publisheraddress'];
        $publishdate = $_POST['publishdate'];
        $status = $_POST['status'];
        $uploadError = '';

        $picture = file_upload($_FILES['image']);

        $sql = "INSERT INTO media (`title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES ('$title','$picture->fileName', '$isbn', '$description', '$type', '$authorfname', '$authorlname', '$publisher', '$publisheraddress', '$publishdate', '$status')";

        if (mysqli_query($connect, $sql) === true) {
            $class = "success";
            $message = "The entry below was successfully created <br>
                 <table class='table w-50'>
                 <tr><td>Title: $title </td></tr>
                 <tr><td>ISBN: $isbn €</td></tr>
                 <tr><td>Description: $description </td></tr>
                 <tr><td>Type: $type </td></tr>
                 <tr><td>Author Firstname: $authorfname </td></tr>
                 <tr><td>Author Lastname: $authorlname </td></tr>
                 <tr><td>Publisher: $publisher </td></tr>
                 <tr><td>Publisher Address: $publisheraddress </td></tr>
                 <tr><td>Publishdate: $publishdate </td></tr>
                 <tr><td>Status: $status </td></tr>
                 </table><hr>";
            $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
        } else {
            $class = "danger";
            $message = "Error while creating record. Try again: <br>" . $connect->error;
            $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
        }
        mysqli_close($connect);
    } else {
        header("location: ../error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Update</title>
       <?php require_once '../components/boot.php'?>
   </head>
   <body>
       <div class="container">
           <div class="mt-3 mb-3">
               <h1>Create request response</h1>
           </div>
           <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? ''; ?></p>
               <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
           </div>
       </div>
   </body>
</html>