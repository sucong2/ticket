      <?php


header("Content-Type:text/html;charset=utf-8");


$booker_grade =  $_COOKIE['grade'];
$booker_class =  $_COOKIE['class'];
$booker_classnum =  $_COOKIE['classnum'];
$booker_festivaltype =  $_COOKIE['festival_num'];
$booker_usercode1=  $_COOKIE['user_code1'];
$booker_usercode2=  $_COOKIE['user_code2'];
$booker_seat=  $_COOKIE['seat_num'];
$booker_festivalname=  $_COOKIE['festival_name'];


function alert2(){

  echo '<script>alert("앗! 이미좌석이 예약되었거나 오류가 발생했습니다.");</script>';
  }
  

function alert3(){

echo '<script>alert("예매가 성공적으로 완료되었습니다!");</script>';
}


require("dbset.php");
$connect = mysqli_connect($address,$conId,$password,$dbName); 
mysqli_set_charset($connect,"utf8");


$sql = "UPDATE booker_table SET booker_seat='$booker_seat' WHERE booker_code1='$booker_usercode1' OR booker_code2='$booker_usercode2' order by booker_time desc limit 1 ";


if (mysqli_query($connect, $sql)) { 
  alert3(); 
  echo "<script>location.href='https://ticket.ivyforest.kr/checkmyseat'</script>";
} else {
  alert2(); 
  echo "<script>location.href='https://ticket.ivyforest.kr'</script>";
  
}





?>
       