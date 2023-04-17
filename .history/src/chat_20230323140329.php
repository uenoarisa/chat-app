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
          include_once('assets/php/config.php');
          $user_id = $_GET['user_id'];
          $users = $pdo->query("SELECT * FROM users WHERE unique_id = {$user_id}");
          $row_cnt = $users->rowCount();
          if ($row_cnt > 0){
            $users = $users->fetch(PDO::FETCH_ASSOC);
          }
        ?>
        <a href="users.php"><i class="fa-solid fa-arrow-left"></i></a>
        <img src="./assets/php/img/<?= $users['img']?>" alt="">
        <div class="details">
          <span><?= $users['fname'] . ' '. $users['lname']?></span>
          <p><?= $users['status']?></p>
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
      <form action="#" class="typing-area" autocomplete="off">
        <input type="text" name="outgoing_id" value="<?= $_SESSION['unique_id']?>">
        <input type="text" name="incoming_id" value="<?= $user_id?>">
        <input type="text" placeholder="Type message here…">
        <input type="text" name="incoming_id" placeholder="Type message here…">
        <button><i class="fa-brands fa-telegram"></i></button>
      </form>
    </section>
  </div>
  <script src="./assets/javascript/chat.js"></script>
</body>
</html>