<?php
    $num=$_POST["num"];
    $pwd=$_POST["pwd"];
//  echo $num," ",$pwd;

    $conn = mysqli_connect("localhost", "edu", "1234", "sqldb") or die("MySQL 접속 실패 !!");
    $sql = "delete from board where num=".$num." and pwd='".$pwd."'";
    $ret = mysqli_query($conn, $sql);    

    if(mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('삭제되었습니다.'); location.href='list.php'</script>";
    }else{
        echo "<script>alert('비밀번호가 틀렸습니다.'); history.back();</script>";
    }
    mysqli_close($conn);
?>