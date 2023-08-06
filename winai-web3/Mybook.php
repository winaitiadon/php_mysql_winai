<?php
// Assuming you have a database connection established
include('connection.php');

// Fetch data from the database
$query = "SELECT * FROM books"; // Modify this query according to your database structure
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WINAI TIANDON WEBSITE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>085 xxx xxxx</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>65130271@dpu.ac.th</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php 
        include ('navbar.php');
    ?>
    <!-- Navbar END -->

    <div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
      <h2>Mybook</h2>
      <form method="post" action="add.php">
        <button class="btn btn-success" >Add books</button>
      </form>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php // Check if data was fetched successfully
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>        
        <tr>
          <th scope="row"><?php echo $row['id'] ?></th>
        
          <td><?php echo $row['bname'] ?></td>
          <td><?php echo $row['bdescription'] ?></td>
          <td>
            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
       <?php
        }
      }
       ?>
        <!-- Add more rows for additional products -->
      </tbody>
    </table>



    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>CITE</h1>
                    </a>
                    <p class="m-0">CITE วิทยาลัยนวัตกรรมด้านเทคโนโลยีและวิศวกรรมศาสตร์</p>
                </div> 
            </div>
           
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>