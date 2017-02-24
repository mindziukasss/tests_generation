<?php include 'db.php'; ?>
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
      <h2>Test Your PHP Knowledge</h2>
      <p>This is a multiple choice quiz test your knowledge of PHP</p>
      <ul>
        <li><strong>Number of Questions: </strong>5</li>
        <li><strong>Type: </strong>Multiple Choice</li>
        <li><strong>Estimated Time: </strong>4 Minutes</li>
      </ul>
      <a href="question.php?n=1" class="start">Start Quiz</a>
    </div>
  </main>
  <footer>
    <div class="container">
      <h3>Copyrigth &copy;2017, PHP Quizzer</h3>
    </div>
  </footer>
</body>
</html>