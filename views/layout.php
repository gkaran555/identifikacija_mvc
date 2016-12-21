<DOCTYPE html>
<html lang="en">
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>TEST</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      
          <style type="text/css">
              #js, #flip {
                  text-align: center;
                  background-color: #e5eecc;
                  border: solid 1px #c3c3c3;
              }

              #js {
                width: 250px;
                margin: auto;
                  display: none;
              }

          </style>

          <script>
          $(document).ready(function(){
             $("button").click(function(){
               $("#js").slideToggle("slow");
               });
           
          });
          </script>
          
  </head>
  <body>
        <div class="container-fluid" > 
            <header >
                <h2>TEST</h2>
            </header>

            <?php require_once('routes.php'); ?>

            <footer class="row col-md-4 col-md-offset-4">
                <h5></h5>
            </footer>
        </div>
  <body>
<html>
    
    