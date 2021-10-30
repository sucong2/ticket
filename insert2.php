      <?php


header("Content-Type:text/html;charset=utf-8");


$booker_grade =  $_COOKIE['grade'];
$booker_class =  $_COOKIE['class'];
$booker_classnum =  $_COOKIE['classnum'];
$booker_festivaltype =  $_COOKIE['festival_num'];
$booker_usercode=  $_COOKIE['user_code2'];
$booker_seat=  $_COOKIE['seat_num'];
$booker_festivalname=  "2021 군성제"; //공연명 조작가능
$festival_sttime=  "13:30"; //공연시작시작 조작가능


function alert2(){

  echo '<script>alert("이미 발급된 티켓이 있거나 오류가 발생했습니다!");</script>';
  }

function alert3(){

echo '<script>alert("예매가 완료되었습니다! 다음으로 이동하셔야 정상적으로 티켓이 발급됩니다");</script>';
}


require("dbset.php");
$connect = mysqli_connect($address,$conId,$password,$dbName); 
mysqli_set_charset($connect,"utf8");


$sql = "INSERT INTO booker_table (booker_grade, booker_class, booker_classnum, booker_festivaltype,booker_code2,booker_seat,festival_name,festival_sttime) 
VALUES('$booker_grade', '$booker_class', '$booker_classnum', '$booker_festivaltype', '$booker_usercode', '$booker_seat','$booker_festivalname','$festival_sttime')";



if (mysqli_query($connect, $sql)) { 
 
  echo "<script>location.href='https://ticket.ivyforest.kr/finalcheck'</script>";
} else {
  alert2();
  echo "<script>location.href='https://ticket.ivyforest.kr'</script>";
  
}





?>
       