<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
     <div class="row">
       <div class="col-md-12 mt-5">
         <div class="card">
           <div class="card-header">
             <h2>
              PHP - CRUD
              <a href="register.php" class="btn btn-secondary float-right">Register/add</a>

             </h2>
           </div>
           <div class="card-body">
            <?php
              session_start();
             $con = mysqli_connect("localhost","root","","frontend");
             $register = "SELECT * FROM register";
             $regidter_run = mysqli_query($con,$register);
             if(mysqli_num_rows($regidter_run) > 0)
             { 
              ?>
             <table class="table table-bordered">
        <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Confirm Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php

     while($reg_row = mysqli_fetch_array($regidter_run))
              {

    ?>
    <tr>
      <th><?php  echo $reg_row['id'];?></th>
      <td><?php  echo $reg_row['fname'];?></td>
      <td><?php  echo $reg_row['Lname'];?></td>
      <td><?php  echo $reg_row['number'];?></td>
       <td><?php  echo $reg_row['email'];?></td>
      <td><?php  echo $reg_row['password'];?></td>
      <td>
        <a href="register-edit.php?id=<?php  echo $reg_row['id'];?>" class="btn btn-info">Edit</a> 
      </td>
      <td>
           <form action="code.php" method="POST">
             <input type="hidden" name="delete_id" value="<?php echo $reg_row['id'];?>">
             <button type="submit" name="register_delete_btn" class="btn btn-danger">Delete</button>
           </form>
      </td>
      <td>
        <input type="hidden" class="delete_id_value" value="<?php echo $reg_row['id'];?>">
        <a href="javascript:void(0)" class="delete_btn_ajax btn btn-warning">Confirm Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
            <?php

             } 
             else
             {
              echo "No Record Found";
             }
            ?>
           </div>
         </div>
       </div>
     </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{ 
   ?>
   <script>
  swal({
  title: "<?php echo $_SESSION['status'];?>",
  //text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_code'];?>",
  button: "Ohk Done!",
});
</script>
<?php
   unset($_SESSION['status']);
}

?>
<script type="text/javascript">
 $(document).ready(function(){
    $('.delete_btn_ajax').click(function(e) {
        e.preventDefault();
        // Add your AJAX delete logic here
        var deleteid =$(this).closest("tr").find('.delete_id_value').val();
        swal({
       title: "Are you sure?",
       text: "Once deleted, you will not be able to recover this imaginary Data!",
        icon: "warning",
        buttons: true,
       dangerMode: true,
})
      .then((willDelete) => {
      if (willDelete) {
      
      }
    });
   
}); 
    });


    
  
</script>

  </body>
</html> 