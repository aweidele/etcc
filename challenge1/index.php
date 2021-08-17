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
    <h1>String contains only one of each character</h1>
    <code>
<pre>
function allUnique($str) {
  $chars = str_split($str);
  sort($chars);
  for($i=1;$i&lt;sizeof($chars);$i++) {
    if($chars[$i] == $chars[$i-1]) {
      return false;
    }
  }
  return true;
}
</pre>
    </code>
  </header>
  <main class="main">
    <?php $str = "hydropneumatics"; ?>
    <section>
      <h2>Sample 1</h2>
      <p><strong>String: <?php echo $str; ?></strong></p>
      <p><strong>Result:</strong> <?php echo allUnique($str) ? "True" : "False"; ?></p>
    </section>
    <?php $str = "atmosphere"; ?>
    <section>
      <h2>Sample 2</h2>
      <p><strong>String: <?php echo $str; ?></strong></p>
      <p><strong>Result:</strong> <?php echo allUnique($str) ? "True" : "False"; ?></p>
    </section>
    <?php $str = "gabfcfed"; ?>
    <section>
      <h2>Sample 3</h2>
      <p><strong>String: <?php echo $str; ?></strong></p>
      <p><strong>Result:</strong> <?php echo allUnique($str) ? "True" : "False"; ?></p>
    </section>
    <?php $str = "abcdefg"; ?>
    <section>
      <h2>Sample 4</h2>
      <p><strong>String: <?php echo $str; ?></strong></p>
      <p><strong>Result:</strong> <?php echo allUnique($str) ? "True" : "False"; ?></p>
    </section>
  </main>
</body>
</html>
