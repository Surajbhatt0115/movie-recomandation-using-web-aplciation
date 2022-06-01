<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css" type="text/css">

</head>
<body>
    
<div class="main developer">
 <h1>LIST OF MOVIES <h1>

<div class="center-div">
<div class="table-responsive">
    <table >
        <thead>
        <tr>
            <th>MOVIENAME</th>
            <th>PRICE</th>
            <th>GENRE</th>
        </tr>

    </thead>
<tbody>
<?php
//echo"hello";
$username="root";
$password="";
$server='localhost';
$database='movie';

$con=mysqli_connect($server,$username,$password,$database);


if($con){
?>     <script>
    alert("conncection esatblish");    </script> <?php
}
else{
    ?>     <script>
    alert("conncection esatblish");    </script> <?php
}

if(isset($_POST['Submit'])){
$age=$_POST['age'];
$genre=$_POST['genre'];
$price=$_POST['price'];

$category=-1;
if($age>=13 && $age<=17){
    $category=0;
}
else{
    $category=1;
}

$selectquery= "select * from moviedataset where genre='$genre' AND (price>=100 AND price<='$price') AND category<='$category' ORDER BY RAND() limit 4;";

$query =mysqli_query($con,$selectquery);
//$num=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query))
{    
//echo $res['moviename']."->".$res['price']."<br>";
?>
<tr>
<td><?php echo $res['moviename'];?></td>
<td><?php echo $res['price']; ?></td>
<td><?php echo $genre  ?></td>
</tr>
<?php
}
// if(flag==0){
// echo"no movie for you age category";

// }
}



?>
  

</tbody>
</table>

</div>
</div>


</div>    

</div>
</body>
</html>