
<?php require_once('views/navigation.php'); ?>
<section>
    <div>
      <div class="panel panel-default">
        <div class="panel-body">
        <?php if(isset($_SESSION['user_session'])) { ?>
          <p>Hello <?php echo $user_name; ?>!<p>

            <button id="flip">Show List of all Users</button>
            <div id="js">
            <?php
             foreach($results as $result) { 
             echo $result['email']. "<br />";
             }
            ?>
            </div>
                  
        <?php } else if(isset($_SESSION['new_user'])){ ?>
          <p><p>
          <p>You are now a registered member. Go end Login!</p>

        <?php  } else { ?>
             <p>You are not logged in<p>     
        <?php  } ?>

        </div>
      </div>
    </div>
</section>