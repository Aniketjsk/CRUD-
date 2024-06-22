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
      <div class="col-md-10">
        <div class="card mt-5">
          <div class="card-header">
            <h2>Register Now</h2>
          </div>
          <div class="card-body">
           <form action="code.php" method="POST">
            <div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="first name">
  </div>
   <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="last name">
  </div>
  <div class="mb-3">
    <label class="form-label">Phone number</label>
    <input type="number" name="phonenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="phone number">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Email">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required placeholder="Password">
  </div>
     <a href="index.php" class="btn btn-danger">Cancel</a>
  <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>