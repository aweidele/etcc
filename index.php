<?php
  function allUnique($str) {
    $chars = str_split($str);
    sort($chars);
    for($i=1;$i<sizeof($chars);$i++) {
      if($chars[$i] == $chars[$i-1]) {
        return false;
      }
    }
    return true;
  }
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Elevetated Third Code Challenges</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Code Challenges</h1>
  </header>
  <main class="main">
    <p><a href="challenge1">Challenge 1</a></p>
    <p><a href="challenge2">Challenge 2</a></p>
  </main>
</body>
</html>
