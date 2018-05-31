<!DOCTYPE html>
<head>
      <title>Go LNG</title>
      <link rel="stylesheet" type="text/css" href="homememstyle.css">
      
     
</head>

<body>
  <div class="wrapper">
      <header>
        <nav>
          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i> 
          </div>
<!-- lng photo as LOGO -->
          <div class="logo">
            LOGO
          </div>

          <div class="menu">
            <ul>
              <!-- <li><a href="#">Home</a></li> -->
              <li><a href="#">About</a></li>
              <li><a href="buyersandsellers.php">buyers&sellers</a></li>
              <li><a href="system.php">Buisiness</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </nav>
        <div class="golng">
          <h1>Welcome Member    <?php
          session_start();
          echo $_SESSION['username'];
          ?></h1>
       
           <a class="btn" href="membersellerinfo.html">Seller</a>  

            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <a class="btn" href="memberbuyerinfo.html">Buyer</a>  

        </div>  


      </header>
   </div>

</body>
</html>