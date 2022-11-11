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
    $id = $_POST['id'];
    
    //variable for upload pictures errors is initialised
    $uploadError = '';
 
    $picture = file_upload($_FILES['picture']);//file_upload() called  
 
    if($picture->error===0){
        ($_POST["picture"]=="books.jpg")?: unlink("../pictures/$_POST[picture]");          
        $sql = "UPDATE media SET title = '$title', image = '$picture->fileName', ISBN_code = '$isbn', short_description = '$description', type = '$type', author_first_name = '$authorfname', author_last_name = '$authorlname', publisher_name = '$publisher', publisher_address = '$publisheraddress', publish_date = '$publishdate', status = '$status' WHERE id = {$id}";
    }else{
        $sql = "UPDATE media SET title = '$title', ISBN_code = '$isbn', short_description = '$description', type = '$type', author_first_name = '$authorfname', author_last_name = '$authorlname', publisher_name = '$publisher', publisher_address = '$publisheraddress', publish_date = '$publishdate', status = '$status' WHERE id = {$id}";
    }   

    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);    
}
else {
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
               <h1>Update request response</h1>
           </div>
           <div class="alert alert-<?php echo $class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? ''; ?></p>
               <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
               <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
           </div>
       </div>
   </body>
</html>
