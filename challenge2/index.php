<?php
  function isPermutation($str1,$str2) {
    $chars1 = str_split($str1);
    $chars2 = str_split($str2);
    sort($chars1);
    sort($chars2);

    foreach($chars1 as $i => $char) {
      if($char != $chars2[$i]) {
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
    <h1>String 1 is permutation of String 2</h1>
    <code>
<pre>
function isPermutation($str1,$str2) {
  $chars1 = str_split($str1);
  $chars2 = str_split($str2);
  sort($chars1);
  sort($chars2);

  foreach($chars1 as $i =&gt; $char) {
    if($char != $chars2[$i]) {
      return false;
    }
  }

  return true;
}
</pre>
    </code>
  </header>
  <main class="main">
    <?php
      $str1 = "newyorktimes";
      $str2 = "monkeyswrite";
    ?>
    <section>
      <h2>Sample 1</h2>
      <p><strong>String 1: <?php echo $str1; ?></strong></p>
      <p><strong>String 2: <?php echo $str2; ?></strong></p>
      <p><strong>Result:</strong> <?php echo isPermutation($str1,$str2) ? "True" : "False"; ?></p>
    </section>
    <?php
      $str1 = "abcdefg";
      $str2 = "agbfced";
    ?>
    <section>
      <h2>Sample 2</h2>
      <p><strong>String 1: <?php echo $str1; ?></strong></p>
      <p><strong>String 2: <?php echo $str2; ?></strong></p>
      <p><strong>Result:</strong> <?php echo isPermutation($str1,$str2) ? "True" : "False"; ?></p>
    </section>
    <?php
      $str1 = "abcdefg";
      $str2 = "agbffed";
    ?>
    <section>
      <h2>Sample 3</h2>
      <p><strong>String 1: <?php echo $str1; ?></strong></p>
      <p><strong>String 2: <?php echo $str2; ?></strong></p>
      <p><strong>Result:</strong> <?php echo isPermutation($str1,$str2) ? "True" : "False"; ?></p>
    </section>
    <?php
      $str1 = "dog";
      $str2 = "cat";
    ?>
    <section>
      <h2>Sample 4</h2>
      <p><strong>String 1: <?php echo $str1; ?></strong></p>
      <p><strong>String 2: <?php echo $str2; ?></strong></p>
      <p><strong>Result:</strong> <?php echo isPermutation($str1,$str2) ? "True" : "False"; ?></p>
    </section>
    <?php
      $str1 = "live";
      $str2 = "evil";
    ?>
    <section>
      <h2>Sample 5</h2>
      <p><strong>String 1: <?php echo $str1; ?></strong></p>
      <p><strong>String 2: <?php echo $str2; ?></strong></p>
      <p><strong>Result:</strong> <?php echo isPermutation($str1,$str2) ? "True" : "False"; ?></p>
    </section>
  </main>
</body>
</html>
