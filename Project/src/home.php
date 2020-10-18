<?php
include 'includes/register.inc.php';
include 'includes/login.inc.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="icon" href="images/5.png">
    <link rel="stylesheet" type="text/css" href="css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="home-header-container">
            <header>
                <div class="container container-flex">
                    <div id="logo">
                        <img src="images/5.png" alt="">
                    </div>
                    <nav>
                        <ul class="nav-links">
                            <li class="current"><a href="home.html">INICIO</a></li>
                            <hr>
                            <li><a href="aboutUs.html">SOBRE NOSOTROS</a></li>
                            <hr>
                            <li><a href="menu.html">MENU</a></li>
                            <hr>
                            <li><a href="http://npk8851.uta.cloud/blog/">BLOG</a></li>
                            <hr>
                            <li><a href="contact.html">CONTACTO</a></li>
                            <hr>
                            <?php if(!isset($_SESSION['email'])):?>
                            <li><a id="register-modal-btn">REGISTRO</a></li>
                            <hr>
                            <li><a id="login-modal-btn">INICIAR SESION</a></li>
                            <hr>
                            <?php endif; ?>	
                            <?php if(isset($_SESSION['email'])):?>
                            <li><a href="logout.php">LOGOUT</a></li>
                            <hr>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart" style="font-size: 30px;"></i></a></li>
                            <?php endif; ?>	

                        </ul>
                    </nav>
                </div>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </header>
            <div class="zigzag-triangle">      
            </div>
            <div class="home-message-container"> 
                <p>LAS MEJORES DE LA CIUDAD</p>
                <h1>Hamburguesas</h1>
                <button type="button" class="button-class home-add-padding-top">VER MENÚ HOY</button>
            </div>
        </div>
        <div class="history-container">
            <div class="zigzag-triangle4"></div>
            <div class="history-content">
                <img class="burger-img" src="images/Burguer.png" alt="">
                <h1>Nuestra historia</h1>
                <div class="paragraph-container">
                    <p class="paragraph-one">Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la Hamburgueseria “Soy Yo” con una  inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</p>
                    <p class="paragraph-two">A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.</p>
                </div>
            </div>
        </div>
        <div class="best-seller-container">
            <div class="best-seller-items">
                <img class="burger-img" src="images/Burguer.png" alt="">
                <h1>Las más vendidos</h1>
                <div class="row">
                    <div class="hamburger-pic">
                      <img src="images/burguer1.png" alt=""><div class="home-offer-button"></div>
                      <p>Mixta</p>
                      <p>$11.90</p>
                      <button class="burger-order-button" type="button">Ordenar ahora</button>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer2.png" alt="">
                      <p>Pollo</p>
                      <p>$11.90</p>
                      <button class="burger-order-button" type="button">Ordenar ahora</button>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer3.png" alt="">
                      <p>Carne</p>
                      <p>$11.90</p>
                      <button class="burger-order-button" type="button">Ordenar ahora</button>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer1.png" alt=""><div class="home-offer2-button"></div>
                      <p>Mixta</p>
                      <p>$11.90</p>
                      <button class="burger-order-button" type="button">Ordenar ahora</button>
                    </div>
                  </div>
                  <div class="row" style="padding-bottom: 40px;">
                    <div class="hamburger-pic">
                      <img src="images/burguer2.png" alt="">
                      <p>Pollo</p>
                      <p>$11.90</p>
                      <button class="burger-order-button" type="button">Ordenar ahora</button>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer3.png" alt="">
                      <p>Carne</p>
                      <p>$11.90</p>
                      <button class="burger-order-button" type="button">Ordenar ahora</button>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer1.png" alt=""><div class="home-offer3-button"></div>   
                      <p>Mixta</p>
                      <p>$11.90</p>
                      <button class="burger-order-button" type="button">Ordenar ahora</button>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer2.png" alt="">
                      <p>Pollo</p>
                      <p>$11.90</p>
                      <button class="burger-order-button" type="button">Ordenar ahora</button>
                    </div>
                  </div>
                  <button type="button" class="button-class">Ver Menu Hoy</button>
            </div>
        </div>

        
        <div class="list-menu-container">
            <div class="zigzag-triangle5"></div>
            <div class="list-menu-content">
                <img class="burger-img" src="images/Burguer.png" alt="">
                <h1>Nuestro menú</h1>
                <div class="nav-list">
                    <div class="red-color">TODOS</div>
                    <div>Pollo </div>
                    <div>Carne</div>
                    <div>Mixta</div>
                    <div>De Todito</div>
                </div>
                <hr class="red-color">
                <div class="menu-list-row">
                    <div class="menu-list-column">
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa1.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>hamburguesa de pollo</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12.00</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa3.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>hamburguesa carne</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12.00</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa5.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>hamburguesa de todito</p>
                            </div>
                            <div class="menu-list-price">
                                <p>12.00</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa7.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>hamburguesa de todito</p>
                            </div>
                            <div class="menu-list-price">
                                <p>12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="menu-list-column">
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa2.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>hamburguesa carne</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$20.00</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa4.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>hamburguesa mixta</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$6.00</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa6.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>hamburguesa pollo</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$20.00</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa8.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>hamburguesa carne</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$6.00</p>
                            </div>
                        </div>

                    </div>
                  </div>

                <button type="button" class="button-class">VER MENÚ HOY</button>
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
                        <p class="footer-value">Av. Intercomunal, sector la Mora, calle 8</p>
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

    <?php include 'register.php'; ?>
    <!-- <div id="my-register-modal" class="register-modal">
        <div class="register-modal-content">
        <form action="#" method="POST" name="register">

          <div class="modal-header">
            <span class="register-close-modal spanning">&times;</span>
            <img class="burger-img spanning" src="images/Burguer.png" alt="">
            <h1 class="spanning">Registro de Usuario
          </div>
          <div class="modal-body">
              <hr>
            <div class="register-container">
                <div class="form-status-div">
                
      			</div>
                <label for="full_name"><p>Nombre y apellido:</p></label>
                <input type="text" name="full_name" pattern="[A-Za-z]{1,}" required>
                <label for="email"><p>Correo:</p></label>
                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                <label for="password"><p>Contraseña:</p></label>
                <input type="password" name="password" pattern="[A-Za-z0-9]{3,}" required>
                <label for="re_password"><p>Repetir Contraseña:</p></label>
                <input type="password" name="re_password" pattern="[A-Za-z0-9]{3,}" required>
                <label for="address"><p>Direccion:</p></label>
                <textarea name="address" required></textarea>
              </div>
              <hr>
          </div>
          <div class="modal-footer">
          <button type="submit" name="register" class="register-button">Cargar</button>
        </div>
        </form>

        </div>
      </div> -->

      <?php include 'login.php'; ?>

    <!-- <div id="my-login-modal" class="login-modal">
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
      </div> -->

    <script src="js/main.js"></script>
    <script src="js/validation.js"></script>

</body>

</html>