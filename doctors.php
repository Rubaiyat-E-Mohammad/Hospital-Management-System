<?php require_once('include/db.php') ;?>
<?php require_once('include/config.php') ;?>
<?php require_once('include/session.php') ;?>
<?php require_once('include/header.php') ;?>
<?php 
$docQuery = 'SELECT * FROM doctors';
$docLists = $mysqli->query($docQuery);
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $speciality = $_POST['speciality'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $query  = "INSERT INTO doctors (name,speciality,phone,address) values ('$name','$speciality','$phone','$address')";
    $res = $mysqli->query($query);
    if($res){
        echo 'Doctor added sucessfully!';
        header('Location: '.ROOT_URL.'doctors.php');
    }else{
        echo 'Something Went Wrong';
    }
}


?>


<div class="container mt-5  bg-transparent-dark p-4" style="border-radius:3px;">
    <div class="row">
        <div class="col-lg-6">
            <h2 class="font-weight-bold text-white">Add Doctor</h2>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="" style="color: white">Doctors Name :</label>
                    <input type="text" class="form-control" placeholder="Enter Doctor Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="" style="color: white">Speciality :</label>
                    <input type="text" class="form-control" placeholder="Speciality" name="speciality" required>
                </div>
                <div class="form-group">
                    <label for="" style="color: white">Phone Number :</label>
                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="" style="color: white">Address :</label>
                    <input type="text" class="form-control" placeholder="Enter Valid Address" name="address" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit" name="submit">Add</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h2 class="font-weight-bold text-white">Doctors List</h2>
            <?php  if($docLists->num_rows > 0) :  $docRows = $docLists->fetch_all(MYSQLI_ASSOC); ?>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <tr>
                        <th bgcolor="#3CB371"><font color="#fff">Name</font></th>
                        <th bgcolor="#3CB371"><font color="#fff">Speciality</font></th>
                        <th bgcolor="#3CB371"><font color="#fff">Phone</font></th>
                        <th bgcolor="#3CB371"><font color="#fff">Delete</font></th>
                    </tr>
                    <?php foreach($docRows as $doc):?>
                        <tr>
                            <td><font color="#fff"><?php echo $doc['name']; ?></font></td>
                            <td><font color="#fff"><?php echo $doc['speciality']; ?></font></td>
                            <td><font color="#fff"><?php echo $doc['phone']; ?></font></td>
                            <td><font color="#fff"><a href="doc_delete.php?id=<?php echo $doc['id'] ;?>" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            
           
            <?php else: ?>
                <div class="bg-light text-center py-3 font-italic text-secondary"> No doctors Found!</div>
             <?php  endif ; ?>
        </div>
    </div>
    
</div>

<?php require_once('include/footer.php') ;?>