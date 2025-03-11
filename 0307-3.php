<?php
$uName=$_GET["uName"];
$uID=$_GET["uID"];
$uPhone=$_GET["uPhone"];
$uEmail=$_GET["uEmail"];
$uGrade=$_GET["uGrade"];
$uInterest=$_GET["uInterest"];
$uFood=$_GET["uFood"];
$uLike=$_GET["uLike"];
$uComment=$_GET["uComment"];

echo "姓名:".$uName."<br>";
echo "學號:".$uID."<br>";
echo "聯絡電話:".$uPhone."<br>";
echo "Email:".$uEmail."<br>";
echo "年級:".$uGrade."<br>";
echo "飲食偏好:".$uFood."<br>";
echo "最期待的環節:".$uLike."<br>";

 $j="";
 foreach ($uInterest as $i){
    $j=$j.$i.",";
}
echo "興趣:".$j."<br>";

//$x=count($uInterest);
//if($x==0){
//}else{
//    for($i=0;$i<$x;$i++){
//        if($i==$x-1){
//            echo $uInterest[$i];
//        }else{
//            echo $uInterest[$i].",";
//        }
//    }
//}

echo "<br>";
echo "備註:".nl2br(htmlentities($uComment));

?>