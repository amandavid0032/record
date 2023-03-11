<?php
include "Database.php";
$conn = mysqli_connect("localhost", "root", "", "record");
if (isset($_POST['add'])) {
  $phone = $db->filterPostData($_POST['number']);
  $first = $db->filterPostData($_POST['name']);
  $location = $db->filterPostData($_POST['location']);
  $shift = $db->filterPostData($_POST['businessType1']);
  $insert = "INSERT  into basic_record(phone,first_name,location,shift)value('$phone','$first','$location','$shift') ";
  $view = mysqli_query($conn, $insert);
?> <center><?php
              if ($view) {
                header('location:record.php?message=added');
              } else {
                echo "No";
              }
            } ?>
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
          <li class="nav-item active">
            <a class="nav-link" href="record.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_record.php">View</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- from start -->
    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit="return confirm('Are you sure you want to add Record ?')">
      <div class="container">
        <div class="form-group">
          <label for="exampleFormControlInput1">Phone Number</label>
          <input type="number" name="number" class="form-control" placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Full Name</label>
          <input type="name" name="name" class="form-control" placeholder="Full Name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Clint</label><br>
          <select name="location">
            <option class="form-control">Gurgaon</option>
            <option class="form-control">Palam</option>
            <option class="form-control">Dwarka</option>
            <option class="form-control">Samauli</option>
            <option class="form-control">Bhiwadi</option>
          </select>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="businessType1" value="Morning" checked>
          <label class="form-check-label" for="exampleRadios1">
            Morning
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="businessType1" value="Evening">
          <label class="form-check-label" for="exampleRadios2">
            Evening
          </label>
        </div><br>
        <button type="submit" name="add" class="btn col-4 btn-primary">submit</button>
      </div>
      </div>
    </form>

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