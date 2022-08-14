
<?php
include'condb.php'
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
<div class=" h4 text-center  alert alert-success mb-4 mt-4" role="alert">เพิ่มข้อมูลสมาชิก</div>
    <form method="POST" action="insert_member.php">
    <tabel>ชื่อ:</tabel>
    <input type="text" name="fname" class="form-control form-control-lg" placeholder="..ชื่อ"> required<br>
    <tabel>นามสกุล:</tabel>
    <input type="text" name="lname" class="form-control form-control-lg" placeholder="..นามสกุล">required<br>
    <tabel>เบอร์โทรศัพท์:</tabel>
    <input type="member" name="telephone" class="form-control form-control-lg"placeholder="..เบอร์โทรศัพท์">required<br>
    <input type="submit" value="submit" class="btn btn-success mb-4 mt-4">
    <a href="" class="btn btn-danger mb-4 mt-4" >Cancel</a>


    </form>
    
</body>
</html>