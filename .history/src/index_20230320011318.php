<?php 

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-text"></div>
        <div class="name-details input">
          <div class="field input">
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="First Name">
          </div>
          <div class="field input">
            <label for="">Last Name</label>
            <input type="text" name="lname"  placeholder="Last Name">
          </div>
        </div>
          <div class="field input">
            <label for="">E-mail Address</label>
            <input type="text" name="email"  placeholder="Enter your email address">
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter new password">
            <i class="fa-solid fa-eye"></i>
          </div>
          <div class="field input">
            <label for="">Select Image</label>
            <input type="file" name="image">
          </div>
          <div class="field button">
            <input type="submit" value="Continue to chat">
          </div>
      </form>
      <div class="link">already signd up?<a href="login.php">Login now</a></div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="assets/javascript/pass-show-hide.js"></script>
  <script src="assets/javascript/signup.js"></script>
</body>
</html>
