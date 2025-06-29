<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Header with Sign In and Sign Up</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color:black;
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .header-buttons a {
      color: white;
      text-decoration: none;
      padding: 8px 16px;
      margin-left: 10px;
      border: 1px solid white;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }

    .header-buttons a:hover {
      background-color: white;
      color: #333;
    }
  </style>
</head>
<body>

  <header>
    <div class="header-buttons">
      <a href="logging.php">Sign In</a>
      <a href="signup.php">Sign Up</a>
    </div>
  </header>

</body>
</html>
