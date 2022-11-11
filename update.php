<?php
require_once './actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);

        $title = $data['title'];
        $picture = $data['image'];
        $isbn = $data['ISBN_code'];
        $description = $data['short_description'];
        $type = $data['type'];
        $authorfname = $data['author_first_name'];
        $authorlname = $data['author_last_name'];
        $publisher = $data['publisher_name'];
        $publisheraddress = $data['publisher_address'];
        $publishdate = $data['publish_date'];
        $status = $data['status'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>CR4 | Edit media</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><input class='form-control' type="text" name="title" placeholder="Title" value="<?php echo $title ?>" /></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><input class='form-control' type="text" name="isbn" placeholder="ISBN" value="<?php echo $isbn ?>" /></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description" placeholder="Description" value="<?php echo $description ?>" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class='form-control' type="text" name="type" placeholder="Type" value="<?php echo $type ?>" /></td>
                </tr>
                <tr>
                    <th>Author Firstname</th>
                    <td><input class='form-control' type="text" name="afname" placeholder="First Name" value="<?php echo $authorfname ?>" /></td>
                </tr>
                <tr>
                    <th>Author Lastname</th>
                    <td><input class='form-control' type="text" name="alname" placeholder="Last Name" value="<?php echo $authorlname ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher</th>
                    <td><input class='form-control' type="text" name="publisher" placeholder="Publisher" value="<?php echo $publisher ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher Address</th>
                    <td><input class='form-control' type="text" name="publisheraddress" placeholder="Publisher Address" value="<?php echo $publisheraddress ?>" /></td>
                </tr>
                <tr>
                    <th>Publish Date</th>
                    <td><input class='form-control' type="text" name="publishdate" placeholder="Publish Date" value="<?php echo $publishdate ?>" /></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><input class='form-control' type="text" name="status" placeholder="Status" value="<?php echo $status ?>" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

                    <input type="hidden" name="picture" value="<?php echo $data['image'] ?>" />
                    <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>