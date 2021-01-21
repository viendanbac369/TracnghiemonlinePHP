
<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
//echo date_default_timezone_get();
?>

<?php
$conn=new PDO('mysql:host=localhost; dbname=quiz', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
     $id=uniqid();
    $name=$_FILES['photo']['name'];
    $size=$_FILES['photo']['size'];
    $type=$_FILES['photo']['type'];
    $temp=$_FILES['photo']['tmp_name'];
    $date = date('Y-m-d H:i:s');
    $info = pathinfo($name, PATHINFO_EXTENSION);
    $caption1=$_POST['caption'];
    $link=$_POST['link'];
    
    move_uploaded_file($temp,"files/".$name);
    $fileSize = FormatSizeUnits($size);
    $query=$conn->query("INSERT INTO upload (id,name,date,size,txt) VALUES ('$id','$name','$date','$fileSize','$info')");
    if($query){
        header("location:dash.php?q=6");
    }
    else{
        die(mysql_error());
    }
}
function FormatSizeUnits($bytes)
{
    if ($bytes >= 1073741824)
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    elseif ($bytes >= 1048576)
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    elseif ($bytes >= 1024)
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    elseif ($bytes > 1)
        $bytes = $bytes . ' bytes';
    elseif ($bytes == 1)
        $bytes = $bytes . ' byte';
    else
        $bytes = '0 bytes';
    return $bytes;
}

function humanFilesize($size, $precision = 2)
{
    if ($size > 0) {
        $size = (int) $size;
        $base = log($size) / log(1024);
        $suffixes = array(' bytes', ' KB', ' MB', ' GB', ' TB');

        return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
    }
    else {
        return $size;
    }
}
?>