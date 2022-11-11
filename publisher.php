<?php
require_once './actions/db_connect.php';

$publisher = $_GET['publisher'];


$sql = "SELECT * FROM media WHERE publisher_name = '$publisher'";
$result = mysqli_query($connect, $sql);
$tbody = '';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "<tr><td class='text-center'><img class='img-thumbnail' src='./pictures/" . $row['image'] . "'></td>
            <td class='text-center'>" . $row['title'] . "</td>
            <td class='text-center'>" . $row['ISBN_code'] . "</td>
            <td class='text-center'>" . $row['short_description'] . "</td>
            <td class='text-center'>" . $row['type'] . "</td>
            <td class='text-center'>" . $row['author_first_name'] . "</td>
            <td class='text-center'>" . $row['author_last_name'] . "</td>
            <td class='text-center'>" . $row['publisher_name'] . "</td>
            <td class='text-center'>" . $row['publisher_address'] . "</td>
            <td class='text-center'>" . $row['publish_date'] . "</td>
            <td class='text-center'>" . $row['status'] . "</td>
        </tr>";
    }
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
    <title>Publisher</title>
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
            <a href="index.php"><button class='btn btn-danger' type="button">Back to media</button></a>
        </div>
        <p class='h2'>Publisher</p>

        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
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
                </tr>
            </thead>
            <tbody>
                <?= $tbody; ?>
            </tbody>
        </table>
    </div>
</body>

</html>