<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 50%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("PIC/1307256.jpg"); }
.img2 { background-image: url("PIC/1307260.jpg"); }
.img3 { background-image: url("PIC/3558149.jpg"); }
.img4 { background-image: url("PIC/amanwella-beach-tangalle-luxury-hotel-sri-lanka (1).jpeg"); }
.img5 { background-image: url("PIC/sri-lankan-leopard-76281.jpg"); }
.img6 { background-image: url("PIC/elephant-rock.jpg"); }

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 1000px;
  padding: 20px;
  text-align: center;
}
  a {
      color: white; /* Change link color */
      text-decoration: none;/*remove underline*/
    }

    a:hover {
      color: white; /* Change color when hovered */
    }
</style>
</head>
<body>
 <?php include"./Indexheader.php"; ?>
<a href="logging.php"><div class="bg-image img1"></div></a>
<a href="logging.php"></a><div class="bg-image img2"></div></a>
<a href="logging.php"></a><div class="bg-image img3"></div></a>
<a href="logging.php"></a><div class="bg-image img4"></div></a>
<a href="logging.php"></a><div class="bg-image img5"><div></a>
<a href="logging.php"></a><div class="bg-image img6"></div></a>

<div class="bg-text"><a href="logging.php">Welcome to Trava</a><div>


</body>
</html>

