<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,intial-scale=1.0" />
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


  </head>
  <body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light" >Add User</a>

        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SI No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "select * from `crud` ";
    $result = mysqli_query($conn, $sql);

    if($result){

        while($row = mysqli_fetch_assoc($result)){

        $id =  $row['id'];
        $name =  $row['name'];
        $email =  $row['email'];
        $contact = $row['contact'];
        $password = $row['password'];
        echo '    <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$contact.'</td>
        <td>'.$password.'</td>
        <td>
        <button class = "btn btn-primary"><a href="update.php?updateId= '.$id.'" class = "text-light">Edit</a></button>
        <button class = "btn btn-danger"><a href="delete.php?deleteId='.$id.'" class = "text-light">Delete</a></button>
        </td>
                </tr>';
        }
    }
    ?>

    </div>

  </body>
</html>
