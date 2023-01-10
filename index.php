<?php
require_once './actions/db_connect.php';

$sql = "SELECT * FROM media";
$result = mysqli_query($connect, $sql);
$tbody = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    //     $tbody .= "<tr>

    //     <td class='text-center'><img class='img-thumbnail' src='pictures/" . $row['image'] . "'</td>
    //    <td class='text-center'>" . $row['title'] . "</td>
    //    <td class='text-center'>" . $row['ISBN_code'] . "</td>
    //    <td class='text-center'>" . $row['short_description'] . "</td>
    //    <td class='text-center'>" . $row['type'] . "</td>
    //    <td class='text-center'><a href='publisher.php?publisher=". $row['publisher_name'] ."'>" . $row['publisher_name'] . "</a></td>
    //    <td class='text-center'>" . $row['publisher_address'] . "</td>
    //    <td class='text-center'>" . $row['publish_date'] . "</td>
    //    <td class='text-center'>
    //    <a href='details.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Show Details</button></a>
    //    <a href='update.php?id=" . $row['id'] . "'><button class='btn btn-success btn-sm' type='button'>Edit</button></a>
    //    <a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
    //     </tr>";
    
        $tbody .= "<tr>
            <td class='text-center'><img class='img-thumbnail' src='pictures/" . $row['image'] . "'</td>
           <td class='text-center'>" . $row['title'] . "</td>
           <td class='text-center'>" . $row['ISBN_code'] . "</td>
           <td class='text-center'>" . $row['short_description'] . "</td>
           <td class='text-center'>" . $row['type'] . "</td>
           <td class='text-center'>" . $row['author_first_name'] . "</td>
           <td class='text-center'>" . $row['author_last_name'] . "</td>
           <td class='text-center'><a href='publisher.php?publisher=". $row['publisher_name'] ."'>" . $row['publisher_name'] . "</a></td>
           <td class='text-center'>" . $row['publisher_address'] . "</td>
           <td class='text-center'>" . $row['publish_date'] . "</td>
           <td class='text-center'>" . $row['status'] . "</td>
           <td class='text-center'>
           <a href='details.php?id=" . $row['id'] . "'><button style='width: 100%;' class='btn btn-primary btn-sm' type='button'>Show Details</button></a>
           <a href='update.php?id=" . $row['id'] . "'><button style='width: 100%;' class='btn btn-success btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" . $row['id'] . "'><button style='width: 100%;' class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='9'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR4</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        .manageProduct {
            margin: auto;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }

        td {
            text-align: left;
            vertical-align: middle;

        }

        tr {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="manageProduct w-75 mt-3">
        <div class='mb-3'>

            <a href="create.php"><button class='btn btn-primary' type="button">Add media</button></a>
        </div>
        <p class='h2'>Media library</p>

        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                    <!-- <th>Image</th>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Publisher_name</th>
                    <th>Publisher_address</th>
                    <th>Publish_date</th>
                    <th>Action</th> -->

                    <th>Image</th>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Author_first_name</th>
                    <th>Author_last_name</th>
                    <th>Publisher_name</th>
                    <th>Publisher_address</th>
                    <th>Publish_date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?= $tbody; ?>
            </tbody>
        </table>
    </div>
</body>

</html>