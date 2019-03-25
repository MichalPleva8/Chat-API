<?php
  require 'navigation.php';
 ?>

  <main>
    <?php
    if (isset($_SESSION['uidUsers'])) {
      echo '
      <div class="message-wrap"></div>

      <div class="chatbox-wrap">
        <form action="includes/send.inc.php" method="post">
          <input type="text" name="chatbox" placeholder="Enter your messege">
          <button type="submit" name="send-text"><i class="fas fa-image"></i></button>
          <button type="submit" name="send-text"><i class="fab fa-telegram-plane"></i></button>
        </form>
      </div>';
    } else {
      echo '
      <div class="welcome-text">
        <h1>Welcome on this website Chat-API 🙋🏼💻🙋🏼‍♂️</h1>
      </div>';
    }

    ?>

  </main>


      <script type="text/javascript">
        $(document).ready(function() {
          var chat = document.querySelector('.message-wrap');
          chat.scroll(0, chat.scrollHeight);
          $(".message-wrap").load("includes/load.inc.php");
          var interval = setInterval(function() {
            $(".message-wrap").load("includes/load.inc.php");
            chat.scroll(0, chat.scrollHeight);
          }, 1500);


        });
      </script>
  </body>
</html>
