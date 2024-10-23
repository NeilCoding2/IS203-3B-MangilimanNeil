<!DOCTYPE html>
<html lang="en" dir="ltr"> 
<head>
    <meta charset="UTF-8">
    <title>Send Email</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="gmail.css">
</head>

<body>
    <br><br><br><br><br><br><br><br><br><br>
<div class="container">
<form class="form" method="POST" action="send.php">
      <div class="descr">Message for banning</div>
      <div class="input">
          <input type="email" class="input" name="email"  required>
          <label for="name">Gmail</label>
      </div>

      <div class="input">
          <input type="text" class="input" name="subject"  required>
          <label for="email">Reason</label>
      </div>

      <div class="input">
          <input type="text" class="input" name="message"  required>
          <label for="email">Message</label>
      </div>

      
      <button type="submit" name="send">Send</button>
      <button class="btn btn-dark back-button" onclick="window.location.href='admin.php';">Back</button>
    </form>
</div>

    
</body>
</html>