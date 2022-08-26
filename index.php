<?php require_once('include/db.php') ;?>
<?php require_once('include/config.php') ;?>
<?php require_once('include/session.php') ;?>
<?php require_once('include/header.php') ;?>

<main role="main" class="container">
  <div class="jumbotron mt-5">
    <h1>Welcome, HMS_admin</h1>
    <p class="lead">Hospital Management System brings together all the information and processes of a hospital, in a single platform. It presents you with a unified 360-degree view for managing patients, doctors, inventory, appointments, billing information, finances and much more.</p> 
    <p class="lead">The system automatically generates a highly-efficient process and makes it quick. Thereby, allowing hospitals to provide quality service in addition to professional medical care.</p>
    <p class="lead">In a nutshell, Hospital Management System (HMS) creates a frictionless approach towards managing the entire hospital and solves all complexities in the process.</p>
    <a class="btn btn-primary" href="appointments.php" role="button">Appointments </a>
   <a class="btn btn-danger" href="doctors.php" role="button">Doctors</a>
  </div>
</main>

<?php require_once('include/footer.php') ;?>