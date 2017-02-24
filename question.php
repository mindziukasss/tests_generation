<!DOCTYPE html>
<html>
<head>
  <title>PHP Quizzer</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <header>
    <div class="container">
      <h1>PHP Quizzer</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="current">Questtion 1 of 5</div>
      <p class="question">What does PHP stand for?</p>
      <form method="post" action="process.php">
        <ul class="choices">
          <li><input name="choice" type="radio" value="1"/>PHP: Hypertext Preprocessor</li>
          <li><input name="choice" type="radio" value="1"/>Private Homep Page</li>
          <li><input name="choice" type="radio" value="1"/>Personal Home Page</li>
          <li><input name="choice" type="radio" value="1"/>Personal Hypertext Preprocessor</li>
        </ul>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
  </main>
  <footer>
    <div class="container">
      <h3>Copyrigth &copy;2017, PHP Quizzer</h3>
    </div>
  </footer>
</body>
</html>