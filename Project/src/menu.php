<?php   
   
 session_start();  
 //$connect = mysqli_connect("localhost", "root", "", "test");  
 //session_start();
 global $conn;
 include_once 'includes/dbh.inc.php';
 
 function adding_burger() {
   error_reporting(0);
   global $conn;
                                
                                $bgname = $_POST['hidden_name2'];
                                $bgprice = $_POST['hidden_price2'];
                                $bgimage = $_POST['hidden_image2'];
                                $query = "INSERT INTO cart_table (name, price, image) VALUES('$bgname', '$bgprice', '$bgimage')";
                                mysqli_query($conn, $query);
                                
 }

   function removing_burger() {
   error_reporting(0);
   global $conn;

                                $rmname = $_POST['hidden_name3']; 
                                $query = "DELETE FROM cart_table WHERE name='$rmname';";
                                mysqli_query($conn, $query);
                                
 }
 
   /* 

function addBurger(){

global $conn;

// receive all input values from the form
echo "Hello";
$bname        =  $_POST['bname'];
$value       =  $_POST['value'];
$image  =  $_POST['image'];
 

// form validation: ensure that the form is correctly filled
/* if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
            } 



// add burger if there are no errors in the form

//$password = md5($password_1);//encrypt the password before saving in the database


$query = "INSERT INTO cart_table (name, price, image) VALUES('$bname', '$value','$image')";
mysqli_query($conn, $query);
// $_SESSION['success']  = "New user successfully created!!";
//header('location: InicioDeSesion.php');
                

} */


 if(isset($_POST["add_burger"])) 
 {
    adding_burger();
  
 } 

if(isset($_POST["remove_burger"])) 
 {
    removing_burger();
  
 }
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="admin_cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="admin_cart.php"</script>';  
                }  
           }  
      }  
 }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="icon" href="images/5.png">
    <link rel="stylesheet" type="text/css" href="css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="menu-header-container">
            <header>
                <div class="container container-flex">
                    <div id="logo">
                        <img src="images/5.png" alt="">
                    </div>
                    <nav>
                        <ul class="nav-links">
                            <li><a href="home.html">INICIO</a></li>
                            <hr>
                            <li><a href="aboutUs.html">SOBRE NOSOTROS</a></li>
                            <hr>
                            <li class="current"><a href="menu.html">MENU</a></li>
                            <hr>
                            <li><a href="http://npk8851.uta.cloud/blog/">BLOG</a></li>
                            <hr>
                            <li><a href="contact.html">CONTACTO</a></li>
                            <hr>
                            <li><a id="register-modal-btn">REGISTRO</a></li>
                            <hr>
                            <li><a id="login-modal-btn">INICIAR SESION</a></li>
                            <hr>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart" style="font-size: 30px;"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </header>
            <div class="zigzag-triangle"></div>
            <div class="menu-message-container"> 
                <p>LAS MEJORES DE LA CIUDAD</p>
                <h1>Menú</h1>
            </div>
        </div>
        
        <div class="menu-container">
            <div class="zigzag-triangle2"></div>
            <div class="menu-content">
                <h1>Elija su Hamburguesa</h1>
                
                <div class="menu-row">
                    <div class="hamburger-pic">
                      <img src="images/burguer1.png" alt="">
                      <p>Mixta</p>
                      <h2>$11.90</h2>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer2.png" alt="">
                      <p>Pollo</p>
                      <h2>$11.90</h2>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer3.png" alt="">
                      <p>Carne</p>
                      <h2>$11.90</h2>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer2.png" alt="">
                      <p>Pollo</p>
                      <h2>$11.90</h2>
                    </div>
                  </div>

                  <div class="menu-list-row">
                    <div class="menu-list-column">
                      <?php  
                               $query = "SELECT * FROM cart_table ORDER BY id ASC";  
                               $result = mysqli_query($conn, $query);  
                               if(mysqli_num_rows($result) > 0)  
                               { $row = mysqli_fetch_array($result);  
                               while($row) 
                               {
                               ?>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/burguer2.2.png" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p><?php echo $row["name"]; ?></p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa18.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Crane</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa13.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>De todito</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa10.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Crane</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12</p>
                            </div>
                        </div>
                        <?php  
                                 } 
                                }  
                                ?> 
                    </div>
                    <div class="menu-list-column">
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa20.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Mixta</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$20</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa16.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Pollo</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$6</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa12.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Mixta</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$20</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa4.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Pollo</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$6</p>
                            </div>
                        </div>

                    </div>
                  </div>
            </div>
        </div>


        <div class="footer-container">
            <footer>
                <div class="zigzag-triangle3"></div>
                <div class="container">
                    <div id="footer-logo">
                        <img src="images/5.png" alt="">
                    </div> 
                    <div class="footer-content">
                        <p class="footer-key">Habla a:</p>
                        <p class="footer-value">Av. Inetercomunal, sectro la Mora, calle 8</p>
                    </div>
                    <div class="footer-content">
                        <p class="footer-key">Telefono:</p>
                        <p class="footer-value">+58 251 261 00 01</p>
                    </div>
                    <div class="footer-content">
                        <p class="footer-key">Correo:</p>
                        <p class="footer-value">yourmail@gmail.com</p>
                    </div>
                    <div class="footer-content">
                        <a href="https://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a>
                        <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
                        <a href="https://dribbble.com/" target="_blank" class="fa fa-dribbble"></a>
                        <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
                        <a href="https://vimeo.com/" target="_blank" class="fa fa-vimeo"></a>
                    </div>
                    <div class="footer-content">
                        <p>Copyright &#169;2020 Todos los derechos reservados | Este sitio esta hecho con por<i class='fa fa-heart'></i>DiazApps</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- <div class="login-modal" id="login-modal">
        <div class="login-modal-content">
            <div class="login-header">
                <div>
                    <img class="burger-img spanning" src="images/Burguer.png" alt="">
                    <h1 class="spanning">Iniciar Sesion
                    </h1>
                </div>
                <div class="close-btn-container spanning">
                    <a href="" class="modal-close">&times;</a>
                </div>
            </div>
            <div >
                <form action="action_page.php" method="post">
                    <hr>
                    <div class="login-container">
                      <label for="uname"><p>Usuario</p></label>
                      <input type="text" name="uname" required>
                      <label for="psw"><p>Contraseña</p></label>
                      <input type="password" name="psw" required>
                    </div>
                    <hr>
                    <div class="login-button-div">
                        <button type="submit" class="login-button">Entrar</button>
                    </div>
                  </form>

            </div>
        </div>
    </div>

    <div class="register-modal" id="register-modal">
        <div class="register-modal-content">
            <div class="register-header">
                <div>
                    <img class="burger-img spanning" src="images/Burguer.png" alt="">
                    <h1 class="spanning">Registro de Usuario
                    </h1>
                </div>
                <div class="close-btn-container spanning">
                    <a href="" class="modal-close">&times;</a>
                </div>
            </div>
            <div>
                <form action="action_page.php" method="post">
                    <hr>
                    <div class="register-container">
                      <label for="uname"><p>Nombre y apellido:</p></label>
                      <input type="text" name="uname" required>
                      <label for="psw"><p>Correo:</p></label>
                      <input type="password" name="psw" required>
                      <label for="uname"><p>Contraseña:</p></label>
                      <input type="text" name="uname" required>
                      <label for="psw"><p>Repetir Contraseña:</p></label>
                      <input type="password" name="psw" required>
                      <label for="psw"><p>Direccion:</p></label>
                      <textarea  name="psw" required></textarea>
                    </div>
                    <hr>
                    <div class="register-button-div">
                        <button type="submit" class="register-button">Cargar</button>
                    </div>
                  </form>

            </div>
        </div>
    </div> -->

    
    <div id="my-register-modal" class="register-modal">
        <div class="register-modal-content">
          <div class="modal-header">
            <span class="register-close-modal spanning">&times;</span>
            <img class="burger-img spanning" src="images/Burguer.png" alt="">
            <h1 class="spanning">Registro de Usuario
          </div>
          <div class="modal-body">
              <hr>
            <div class="register-container">
                <form action="action_page.php" method="post">
                <label for="uname"><p>Nombre y apellido:</p></label>
                <input type="text" name="uname" required>
                <label for="email"><p>Correo:</p></label>
                <input type="email" name="email" required>
                <label for="psw"><p>Contraseña:</p></label>
                <input type="text" name="psw" required>
                <label for="psw"><p>Repetir Contraseña:</p></label>
                <input type="password" name="psw" required>
                <label for="address"><p>Direccion:</p></label>
                <textarea name="psw" required></textarea>
                </form>
              </div>
              <hr>
          </div>
          <div class="modal-footer">
            <button type="submit" class="register-button">Cargar</button>
        </div>
        </div>
      </div>

    <div id="my-login-modal" class="login-modal">
        <div class="login-modal-content">
          <div class="modal-header">
            <span class="login-close-modal spanning">&times;</span>
            <img class="burger-img spanning" src="images/Burguer.png" alt="">
            <h1 class="spanning">Iniciar Sesion
          </div>
          <div class="modal-body">
              <hr>
            <div class="login-container">
                <form action="action_page.php" method="post">
                <label for="uname"><p>Usuario</p></label>
                <input type="text" name="uname" required>
                <label for="psw"><p>Contraseña</p></label>
                <input type="password" name="psw" required>
                </form>
              </div>
              <hr>
          </div>
          <div class="modal-footer">
            <button type="submit" class="login-button">Entrar</button>
        </div>
        </div>
      </div>

    <script src="main.js"></script>
</body>

</html>