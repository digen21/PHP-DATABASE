<?php


$id = $_POST['id']."<br>";
$sname = $_POST['sname']."<br>";

//------------------------------Connecting Data-------------------------------------------
$link = mysqli_connect("localhost","root","","std") or die("Error"); 



//------------------------------Inserting Multiple Values From The User-------------------------------------------
$sql = "INSERT INTO std VALUES ('$id', '$sname')";
if(mysqli_query($link, $sql))
{
    echo 'added';

}else
{
    echo 'not added';
}

//------------------------------Fetching All The Available Data From The Database-------------------------------------------
$que = "SELECT * FROM std";

$res = mysqli_query($link,$que);

$total = mysqli_num_rows($res);

echo "total rows: $total"."<br>";

if(mysqli_num_rows($res) > 0)
{
    while($row = mysqli_fetch_array($res))
    {
        echo $row['id']." ".$row['name']."<br> <br>";
    }
}
?>
