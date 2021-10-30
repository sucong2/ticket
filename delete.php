<?php



header("Content-Type:text/html;charset=utf-8");


$booker_grade =  $_COOKIE['grade'];
$booker_class =  $_COOKIE['class'];
$booker_classnum =  $_COOKIE['classnum'];
$booker_festivaltype =  $_COOKIE['festival_num'];
$booker_usercode1=  $_COOKIE['user_code1'];
$booker_usercode2=  $_COOKIE['user_code2'];
$booker_festivalname=  "2021 군성제";//공연명 조작가능
$festival_sttime=  "11:30"; //공연시작시작 조작가능

function alert1(){

  echo '<script>alert("[ 경고! ] 모든 예매가 초기화됩니다. 이전에 예매에 성공한 티켓도 취소 됩니다.");</script>';
  }
  




function alert2(){

  echo '<script>alert("오류발생! 팀담쟁이숲으로 연락해주세요!");</script>';
  }
  



require("dbset.php");
$connect = mysqli_connect($address,$conId,$password,$dbName); 
mysqli_set_charset($connect,"utf8");


$sql = "DELETE FROM booker_table WHERE booker_code1='$booker_usercode1' OR booker_code2='$booker_usercode2' order by booker_time desc limit 1";




if (mysqli_query($connect, $sql)) { 
  alert1();
  echo "<script>location.href='https://ticket.ivyforest.kr'</script>";
} else {
  alert2(); 


  
}





?>
<html>
