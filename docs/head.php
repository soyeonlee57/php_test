<?php
if ( $pageCode == "home" ) {
  $title = "홈";
}
else if ( $pageCode == "pf" ) {
  $title = "포트폴리오";
}
else if ( $pageCode == "aboutMe" ) {
    $title = "자기소개";
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title><?=$title?></title>

  <style>
  .active {
    color:red;
    font-weight:bold;
  }
</style>

  <?php
$navItemHomeClass = "";
$navItempfClass = "";
$navItemaboutMeClass = "";

if ( $pageCode == "home" ) {
  $navItemHomeClass = "active";
}
else if ( $pageCode == "pf" ) {
  $navItempfClass = "active";
}
else if ( $pageCode == "aboutMe" ) {
  $navItemaboutMeClass = "active";
}
?>
  <!-- tailwind -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
  <script src="common.js"></script>
  <link rel="common.css"></script>
</head>
<body>
<div class="site-wrap min-h-screen flex flex-col">
  <header class="top-bar h-20 flex-shrink-0 bg-black text-white">
    <div class="container h-full mx-auto px-2 flex">
      <a href="#" class="logo flex items-center">로고</a>
      
      <div class="flex-grow"></div>
      
      <ul class="flex -mr-2">
        <li><a class="h-full flex items-center px-2 <?=$navItemHomeClass?>" href="index.php">홈</a></li>
        <li><a class="h-full flex items-center px-2 <?=$navItempfClass?>" href="pf.php">포트폴리오</a></li>
        <li><a class="h-full flex items-center px-2 <?=$navItemaboutMeClass?>" href="aboutMe.php">자기소개</a></li>
        <li><a class="h-full flex items-center px-2" href="./">유튜브</a></li>
      </ul>
    </div>
  </header>
