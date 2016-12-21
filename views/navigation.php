

<nav class="navbar navbar-default" >
    <div class="container-fluid">
        <div class="row">  
            <?php 
            if(isset($_SESSION['user_session'])){ ?>
                <div class="col-md-2">
                    <a href='?controller=users&action=logout'>Logout</a>
                </div>
                
            <?php }else{ ?>
                <div class="col-md-1 col-md-offset-6">
                <a href='?controller=users&action=login'>Login</a>
                </div>
                <div class="col-md-1">
                    <a href='?controller=users&action=register'>Register</a>
                </div>
            <?php } ?>  
        </div>
    </div>
</nav>