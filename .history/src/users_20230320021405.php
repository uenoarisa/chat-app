<?php
  session_start();
  if(!isset($_SESSION['unique_id'])){
    // 別のルートでこのページに遷移してきたときにログインページに飛ばすためにセッションidと確認をする
    header("location: login.php");
  }
?>

<?php
  include_once('header.php');
?>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
            include_once('assets/php/config.php');
            $stmt4 = $pdo->prepare('select * from users where unique_id = :unique_id');
            // 値をバインド
            $stmt4->bindValue(':unique_id', $_SESSION['unique_id']);
            $stmt4->execute();
            $row_cnt = $stmt4->rowCount();
            $result = $stmt4->fetch(PDO::FETCH_ASSOC);
          ?>
          <img src="./assets/php/img/<?= $result['img'] ?>" alt="">
          <div class="details">
            <span><?= $result['fname'].$result['lname']?></span>
            <p><?= $result[] ?></p>
          </div>
        </div>
        <a href="#" class="logout">logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search…" class="">
        <button>
          <i class="fa-solid fa-search"></i>
        </button>
      </div>
      <div class="users-list">
        <a href="#">
          <div class="content">
            <img src="./assets/img/main03.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
            <div class="status-dot">
              <i class="fa-solid fa-circle"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./assets/img/main03.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
            <div class="status-dot">
              <i class="fa-solid fa-circle"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./assets/img/main03.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
            <div class="status-dot">
              <i class="fa-solid fa-circle"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./assets/img/main03.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
            <div class="status-dot">
              <i class="fa-solid fa-circle"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./assets/img/main03.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
            <div class="status-dot">
              <i class="fa-solid fa-circle"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="content">
            <img src="./assets/img/main03.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
            <div class="status-dot">
              <i class="fa-solid fa-circle"></i>
            </div>
          </div>
        </a>
      </div>
    </section>
  </div>
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="./assets/javascript/users.js"></script>
</body>
</html>