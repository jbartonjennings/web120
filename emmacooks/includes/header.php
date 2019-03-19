<!--Start top include file -->
<?php include 'emmacooks-config.php'?>
<!DOCTYPE html>
<html>
    
<head>
    <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link rel="stylesheet" href="css/glisse.css" />
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/emmacooks.css" />
        <link rel="stylesheet" href="css/form.css" />
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"> 
</head>

<body>
<div class="wrapper">
<header>
  <div id="logo">
  <h1><a href="index.php">Emma Cooks</a></h1></div>
    <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?>
      <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
    </ul>
    </nav>

<script>
    /* toggle between adding and removing the responsive class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
  
</header>
    
<!-- START LEFT COL -->    
 <h2 class="pageID"><?=$PageID?></h2>

    
<!-- END top Include File -->  