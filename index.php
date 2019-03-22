<?php
  require 'navigation.php';
 ?>

   <main>
         <div class="message-wrap">
         <?php
         // if (isset($_SESSION['uidUsers'])) {
         //   require 'includes/config.inc.php';
         //
         //   $messegeUid = $_SESSION['uidUsers'];
         //   $sql = "SELECT * FROM messages";
         //   $result = mysqli_query($conn, $sql);
         //
         //   if (mysqli_num_rows($result) > 0) {
         //     while ($row = mysqli_fetch_assoc($result)) {
         //       if ($row["uid"] != $messegeUid) {
         //         echo '<div class="host-message">';
         //       } else {
         //         echo '<div class="message">';
         //       }
         //       echo '<h4>'. $row["uid"] .'</h4>'.'<p>'
         //      . $row["message"] .'</p>'.'</div>';
         //     }
         //   }
         //  } else {
         //    echo '<div class="welcome-text"><h1>Welcome on Chat API official site 🙋‍💻🙋‍♂️</h1></div>';
         //  }
         ?>
         </div>

      <div class="chatbox-wrap">
        <form action="includes/send.inc.php" method="post">
          <input type="text" name="chatbox" placeholder="Enter your messege">
          <button type="submit" name="send-text">Send it</button>
        </form>
      </div>

      <script type="text/javascript">
        $(document).ready(function() {
          $(".message-wrap").load("includes/load.inc.php");
          var interval = setInterval(function() {
            $(".message-wrap").load("includes/load.inc.php");
          }, 3000);
        });
      </script>
   </main>
  </body>
</html>
