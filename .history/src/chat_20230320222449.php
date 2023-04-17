<?php
  session_start();
  if (!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }

?>



<?php
include_once('header.php');
?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
          $user_id = $_GET['user_id'];
          $stmt3 = $pdo->query("SELECT * FROM users WHERE email = '$email'")

        ?>
        <i class="fa-solid fa-arrow-left"></i>
        <a href="#"></a>
        <img src="./assets/img/main03.jpg" alt="">
        <div class="details">
          <span>Coding Nepal</span>
          <p>Active now</p>
        </div>
      </header>
      
      <div class="chat-box">
        <div class="chat outgoing">
          <div class="details">
            <p>Lorem iseeeeeeeeee</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="./assets/img/main03.jpg" alt="">
          <div class="details">
            <p>Lorem iseeeeeeeeee</p>
          </div>
        </div>
      </div>
      <form action="#" class="typing-area">
        <input type="text" placeholder="Type message here…">
        <button><i class="fa-brands fa-telegram"></i></button>
      </form>
    </section>
  </div>
  <script src="./assets/javascript/chat.js"></script>
</body>
</html>