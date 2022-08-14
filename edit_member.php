
<?php
include'condb.php';
$id=$_GET['id'];
$sql="SELECT * FROM member WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<body>
    <!--ให้อยู่ตรงกลาง-->
<div class="container">
<div class="row">
    <div class="col-sm-6">
<div class=" h4 text-center  alert alert-success mb-4 mt-4" role="alert">เเก้ไขข้อมูลสมาชิก</div>
    <form method="POST" action="updete_member.php">
    <tabel>รหัสสมาชิก:</tabel>
    <input type="text" name="id_mem" class="form-control form-control-lg" value=<?=$row['id']?> ><br>
    <form method="POST" action="insert_member.php">
    <tabel>ชื่อ:</tabel>
    <input type="text" name="fname" class="form-control form-control-lg" value=<?=$row['name']?> ><br>
    <tabel>นามสกุล:</tabel>
    <input type="text" name="lname" class="form-control form-control-lg" value=<?=$row['surname']?> ><br>
    <tabel>เบอร์โทรศัพท์:</tabel>
    <input type="member" name="telephone" class="form-control form-control-lg" value=<?=$row['telephone']?>><br>
    <input type="submit" value="Update" class="btn btn-success mb-4 mt-4">
    <a href="show_member.php" class="btn btn-danger mb-4 mt-4" >Cancel</a>


    </form>
    
</body>
</html>