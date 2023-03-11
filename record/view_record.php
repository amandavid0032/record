<?php
include 'Database.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ADD Details</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="record.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view.php">View</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Record</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Shift</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "record");
            $data = "SELECT *from basic_record";
            $view = mysqli_query($conn, $data);
            $num = 0;
            while ($c = mysqli_fetch_array($view)) :
            ?>

                <tbody>
                    <tr>
                        <td><?= ++$num; ?></td>
                        <td><?php echo $c['phone'] ?></td>
                        <td><?php echo $c['first_name'] ?></td>
                        <td><?php echo $c['location'] ?></td>
                        <td><?php echo $c['shift'] ?></td>
                        <td> <?php echo' <a href="delete.php?id='.$c[0].'">Delete</a>'; ?></td>
                    </tr>
                    <tr>
                    <?php endwhile; ?>
                </tbody>
        </table>
        </table>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">