<?php
  $str = $_POST['text1'];
  if ($str != null){ 
    $result = "당신은 '{$str}'이라고 썼습니다."; 
  } else { 
    $result = "아무것도 쓴 것이 없습니다."; 
  } 
?>

<!doctype html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>예제 목록 화면</title>
</head>
<body>
  <h3>예제 목록</h3>
  <ul>
    <li><a href="imagemap_sample/imgmap.html"> 이미지 맵 샘플 </a>  </li>
  </ul>


  <h1>Hello PHP!</h1> 
  <div><?php echo $result; ?></div> 
  <form method="post" action="index.php"> 
    <input type="text" name="text1"> 
    <input type="submit"> 
  </form> 

</body>
</html>