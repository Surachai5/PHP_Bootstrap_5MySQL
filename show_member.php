<?php
include 'condb.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class=" h4 text-center  alert alert-success mb-4 mt-4" role="alert">เเสดงข้อมูลสมาชิก</div>

    <a href="fr_member.php" class="btn btn-success mb-4">Add+</a>
    <table class="table table-striped">
        <tr>
            <th>รหัส</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์โทรศัทพ์</th>
            <th>Edit</th>
            <th>Delete</th>     
        </tr>
    <?php
$sql = "SELECT * FROM member";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>
        <tr>
            <th><?=$row["id"]?></th>
            <th><?=$row["name"]?></th>
            <th><?=$row["surname"]?></th>
            <th><?=$row["telephone"]?></th>
            <th><a href="edit_member.php?id=<?=$row["id"]?> " class="btn btn-warning">Edit</a></th>
            <th><a href="delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger">Delete</th>

        </tr>
<?php
}
mysqli_close($conn); //ปิดการเชื่อมฐานข้อมูล
?>
    </table>
    </div>
</body>
</html>

<script language="JavaScript">
    function Del(mypage){
        var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
        if(agree){
            window.location=mypage;
        }
    }

</script>