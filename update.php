<?php 
include 'connect.php';
$id = $_GET['updateId'];
$sql = "Select * from `crud` where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$contact = $row['contact'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $contact= $_POST['contact'];
    $password = $_POST['password'];

    $sql  = "update `crud` set id = $id, name = '$name', email = '$email', contact = '$contact', password = '$password' where id = $id "; 

    $result = mysqli_query($conn,$sql);


    if($result){
        header('location:display.php');
       
    }
    else{
        die(mysqli_error($conn));
    }
}

?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

 <div class="container m-5 p-5 ">

   <form method="POST">

      <div class="form-group">
         <label>Name</label>
         <input type="text" class="form-control"  placeholder="Enter your name" name = "name" autocomplete="off" value="<?php echo $name; ?>">
      </div>

      <div class="form-group">
        <label>Email</label>
         <input type="text" class="form-control"  placeholder="Enter your Email" name = "email" autocomplete="off" value="<?php echo $email; ?>">
       </div> 

      <div class="form-group">
        <label>Contact</label>
         <input type="text" class="form-control"  placeholder="Enter your Contact" name = "contact" autocomplete="off" value="<?php echo $contact; ?>">
      </div>

      <div class="form-group">
         <label>Password</label>
         <input type="password" class="form-control"  placeholder="Enter your password" name = "password" autocomplete="off" value="<?php echo $password; ?>">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

  </div>

  </body>
</html>