!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Language Selection</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: linear-gradient(to bottom right, #9BE4FF, #3C95F7);
      background-size: 100% 100%;
    }
    .container {
      text-align: center;
    }
    .btn {
      margin: 20px;
      padding: 20px 40px;
      font-size: 24px;
      border-radius: 15px;
      cursor: pointer;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      transition: transform 0.2s ease-in-out;
    }
    .btn:hover {
      transform: scale(1.05);
    }
    .btn-english {
      background-color: #337ab7;
      color: #ffffff;
    }
    .btn-japanese {
      background-color: #5cb85c;
      color: #ffffff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 style="margin-bottom: 50px;">Select a Language</h1>
    <a href="#" class="btn btn-english" onclick="LanguageRedirect('English')">English</a>
    <a href="#" class="btn btn-japanese" onclick="LanguageRedirect('Japanese')">Japanese</a>
  </div>
  <script>
    function LanguageRedirect(language) {
      var currentTime = new Date().getHours();
      if (currentTime < 16) {
        if (language === "English") {
          window.location.href = "Lunch-set.php";
        } else if (language === "Japanese") {
          window.location.href = "Lunch-set.php";
        }
      } else {
        if (language === "English") {
          window.location.href = "Dinner-set.php";
        } else if (language === "Japanese") {
          window.location.href = "Dinner-set.php";
        }
      }
    }
  </script>
</body>
</html>
