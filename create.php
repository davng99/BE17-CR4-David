<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php require_once 'components/boot.php'?>
       <title>Add Media</title>
       <style>
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }      
       </style>
   </head>
   <body>
       <fieldset>
           <legend class='h2'>Add Media</legend>
           <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
               <table class='table'>
                   <tr>
                       <th>Title</th>
                       <td><input class='form-control' type="text" name="title"  placeholder="Title" /></td>
                   </tr>   
                   <tr>
                       <th>ISBN</th>
                       <td><input class='form-control' type="text" name= "isbn" placeholder="ISBN (13 digits maximum)" /></td>
                   </tr>
                   <tr>
                       <th>Image</th>
                       <td><input class='form-control' type="file" name="image" /></td>
                   </tr>
                   <tr>
                       <th>Description</th>
                       <td><input class='form-control' type="text" name="description"  placeholder="Description" /></td>
                   </tr>  
                   <tr>
                       <th>Type</th>
                       <td><input class='form-control' type="text" name="type"  placeholder="Type" /></td>
                   </tr>  
                   <tr>
                       <th>Author Firstname</th>
                       <td><input class='form-control' type="text" name="afname"  placeholder="First Name" /></td>
                   </tr>  
                   <tr>
                       <th>Author Lastname</th>
                       <td><input class='form-control' type="text" name="alname"  placeholder="Last Name" /></td>
                   </tr>  
                   <tr>
                       <th>Publisher</th>
                       <td><input class='form-control' type="text" name="publisher"  placeholder="Publisher" /></td>
                   </tr>  
                   <tr>
                       <th>Publisher Address</th>
                       <td><input class='form-control' type="text" name="publisheraddress"  placeholder="Publisher Address" /></td>
                   </tr> 
                   <tr>
                       <th>Publish Date</th>
                       <td><input class='form-control' type="text" name="publishdate"  placeholder="Publish Date" /></td>
                   </tr> 
                   <tr>
                       <th>Status</th>
                       <td><input class='form-control' type="text" name="status"  placeholder="Status" /></td>
                   </tr> 
                   <tr>
                       <td><button class='btn btn-success' type="submit">Insert Media</button></td>
                       <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>