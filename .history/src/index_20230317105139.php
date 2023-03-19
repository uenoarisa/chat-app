<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Realtime chat app  |  codineNepal</title>
  <link rel="stylesheet" href="assets/styles/style.css">
  <link rel="stylesheet" href="assets/styles/login-signup.css">
  <link rel="stylesheet" href="assets/styles/users.css">
  <link rel="stylesheet" href="assets/styles/chat.css">
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous" defer></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous" defer></script> 
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-text">This is error message</div>
        <div class="name-details input">
          <div class="field input">
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="First Name">
          </div>
          <div class="field input">
            <label for="">Last Name</label>
            <input type="text" name="fname"  placeholder="Last Name">
          </div>
        </div>
          <div class="field input">
            <label for="">E-mail Address</label>
            <input type="text" placeholder="Enter your email address">
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" placeholder="Enter new password">
            <i class="fa-solid fa-eye"></i>
          </div>
          <div class="field input">
            <label for="">Select Image</label>
            <input type="file">
          </div>
          <div class="field button">
            <input type="submit" value="Continue to chat">
          </div>
      </form>
      <div class="link">already signd up?<a href="#">Login now</a></div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="assets/javascript/pass-show-hide.js"></script>
</body>
</html>