<!doctype html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


    <title>Mercadona </title>
  </head>
  
    <body>
        <header>
            <div id="uno">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <img id="imglogo" src="imagenes/foto.png"  alt="mercadona">
                        </div>    

                        <div class="col-md-3">
                        <form action= "https://www.mercadona.es/ns/entrada.php">
                            <button id="rojo" type="submit" class="btn btn-danger"> <i class="fas fa-shopping-cart"></i> Compra online</button>
                        </form>    
                        </div>
                    </div>
                </div>
            </div>
<br>
            <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" >Conocenos</a>
  
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="navbar-brand" >Supermercados </a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" >Servicios</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" >Consejos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="navbar-brand" > Actualidad </a>
        </li>
        <li class="nav-item">
        <a class="navbar-brand" >Atencion al Cliente</a>
      </li>
        
      
    </ul>
  </div>
</nav>
</header>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes\foto2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes\cachorros.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes\foto6.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
       

        



<br><br>
        <div> 
        <h1>Actualidad Mercadona<h1> 
        </div>
<br><br>
        <div id="dos">
            <div class="container" >
                <div class="row">
                    <div class="col-md-4" id=columnas>
                        <img src = "imagenes\foto3.jpg"  width="100%">
                         <span>Vacantes de empleo Logística y Mantenimiento en Mercadona</span> 
                      <div class="date">17 de abril de 2018</div> 
                      <form action= "https://www.mercadona.es/es/actualidad/empleo-1/new-tag">
                            <button  id="conjunto" type="submit" class="btn btn-outline-secondary">Empleo</button>
                      </form>
                    </div>
                    <div class=col-md-4 id=columnas>
                        <img src = "imagenes\foto4.jpg"  width="100%">
                          <span>Mercadona dona 27.000 litros de leche Hacendado a los Bancos de Alimentos de Tarragona y Lleida</span> 
                        <div class="date">16 de abril de 2018</div>
                        <form action= "https://www.mercadona.es/es/actualidad/rsc/new-tag">
                            <button   id="conjunto" type="submit" class="btn btn-outline-secondary">Responsabilidad Social</button>
                      </form>
                      <form action= "https://www.mercadona.es/es/actualidad/donaciones-de-alimentos/new-tag">
                            <button  id="conjunto" type="submit" class="btn btn-outline-secondary">Donaciones de alimentos</button>
                      </form>
                        
                    </div>
                    <div class="col-md-4" id=columnas>
                        <img src = "imagenes\foto5.jpg"  width="100%"> 
                        <span>Vacantes de empleo para el Departamento de Informática en Mercadona</span> 
                        <div class="date">12 de abril de 2018</div>
                        <form action= "https://www.mercadona.es/es/actualidad/empleo-1/new-tag">
                            <button  id="conjunto" type="submit" class="btn btn-outline-secondary">Empleo</button>
                      </form>
                    </div>

                </div>
            </div>
        </div>
        <br><br>
                        <p class="texto">
                            
                            <a href="https://www.mercadona.es/es/actualidad" target=""> Ver todos</a>
                        </p>
                        <br><br> <br><br> 



<div id="supermercadosApp">
    <div class="primerBloque">
        <div style="">
            <h2 class="supermercadosTitulo">Mercadona cuenta con 1.626 supermercados.<br> Encuentra tu Mercadona más cercano y su horario</h2>
            <div class="inputBusquedaBloque">
                <div class="inputBusqueda">
                    <input placeholder="Ciudad, código postal o dirección" id="busquedaInput" class="busquedaInput" type="text">
                    <button id="medio"  type="submit" class="busquedaBoton" ><i class="fas fa-search"></i> Buscar</button>
                </div>
                
            </div>
        </div>
        </div>
        <br>
        <div id="ver">
       <a id="ubicacion" href="http://www.google.es/" target="_blank"><i class="fas fa-location-arrow"></i> Usar mi localización actual</a>
   </div>
        </div>
                            <br>
        <h1 class="title">Consejos</h1>
        <br>
        <div id="tres">
            <div class="container" >
                <div class="row">
                    <div class="col-md-4" id=columnas>
                        <img src = "imagenes\foto6.jpg"  width="100%"> 
                        <br><br>
                        <h3>Alimentacion</h3>
                        <p class="consejo">Descubre todas nuestras novedades y consejos para darle sabor y alegría a tus platos, siempre con productos que garantizan la máxima calidad y frescura. ¡Dale un capricho a tu paladar!</p>
                           
                      
                    </div>
                    <div class=col-md-4 id=columnas>
                        <img src = "imagenes\foto7.jpg"  width="100%">
                        <br><br>
                        <h3>Perfumeria</h3>
                        <p class="consejo">Todo lo que necesitas para tu cuidado y el de los tuyos: novedades, consejos y trucos sobre nuestros productos de perfumería, puericultura, cosmética y belleza. ¡Siéntete bien!</p>
                        
                    </div>
                    <div class="col-md-4" id=columnas>
                        <img src = "imagenes\foto8.jpg"  width="100%"> 
                        <br><br>
                        <h3>Hogar</h3>
                        <p class="consejo">Aquí encontrarás todo lo necesario para el cuidado diario de tu casa: productos para la limpieza y mantenimiento del hogar y de la ropa, que cuentan con la máxima garantía de calidad y eficacia. ¡Hogar, dulce hogar!</p>
                    </div>

                </div>
            </div>
        </div>







        
        <br><br>
                        <p class="texto">
                            
                            <a href="https://www.mercadona.es/es/actualidad" target=""> Ver todos</a>
                        </p>
                        <br><br> <br><br> 









                    <div class="block-half-bg"><div class="row block-item">

<div class="col1-xs-12 col-sm-6">
    <a href="/es/atencion-al-cliente" class="block-content">
    <div class="icon"><span class="icon-fmd-bullhorn" aria-hidden="true">

    </span>
    <br>
</div>
<h1 id="blanco"> <i class="fas fa-bullhorn"></i> <br>Atención al Cliente</h1>
<div>
    <p  class="atencion">Puedes realizar cualquier comentario o&nbsp;consulta&nbsp;llamándonos&nbsp;a nuestro&nbsp;<strong>teléfono gratuito de Atención al Cliente</strong>, enviando&nbsp;un&nbsp;<strong>Correo Electrónico</strong>&nbsp;o si lo prefieres contacta&nbsp;con nosotros a través de nuestras&nbsp;<strong>Redes Sociales</strong>.</p>
</div>
</a>
</div>

<div class="col2-xs-12 col-sm-6">
    <a href="/es/conocenos/sala-de-prensa" class="block-content salaPrensaHome">
   
    <h1 id="blanco" class="salaPrensaHome"> <i class="fas fa-clipboard-list"></i><br> Sala de Prensa</h1>
    <div class="salaPrensaHome"><p>Notas de prensa, estudios, informes, memorias anuales y otro material corporativo.</p>
</div>
</a>
</div>
</div>
     </div>                  
<br><br>
<h1  >Ofertas de empleo</h1>
<p id="ofertas">Mercadona dispone de un Modelo de Recursos Humanos reconocido<br> por ofrecer puestos de trabajo estables y de calidad.</p>

<form id="centrate" action= "https://www.mercadona.es/es/conocenos/empleo">
                            <button id="total" type="submit" class="btn btn-outline-secondary "class="fload-center">Ofertas de Empleo</button>
                      </form>
                    <br>
                    <br>
                    <br>
                    <br>
                      <div id="mercadona">
                      <img id="logo" src="imagenes/foto.png"  alt="mercadona">
</div>
<br><br>
<footer>
    <br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col">
                    <nav class="nav flex-column">
                        <a id="negrita" class="nav-link active"> Lo mas buscado </a>
                        <a class="nav-link " href="https://www.mercadona.es/es/supermercados">Localizar Supermercados</a>
                        <a class="nav-link" href="https://www.mercadona.es/es/conocenos/empleo">Trabaja con nosotros</a>
                        <a class="nav-link" href="https://www.mercadona.es/es/conocenos/sala-de-prensa">Sala de Prensa</a>
                        <a class="nav-link " href="https://www.mercadona.es/es/conocenos">Conoce Mercadona</a>
                        <a class="nav-link " href="https://www.mercadona.es/es/consejos">Consejos</a>

                    </nav>
                    </div>
                    <div class="col">
                    
                    <nav class="nav flex-column">
                        <a id="negrita" class="nav-link active"> Enlaces de interés </a>
                        <a class="nav-link " href="https://www.mercadona.es/ns/entrada.php">Compra online</a>
                        <a class="nav-link" href="https://www.tarjetamercadona.es/local_tlaf/login_tlaf_mercadona_CAS.html">Tarjeta Mercadona</a>
                        <a class="nav-link" href="https://www.portalcliente.mercadona.es/pclie/web/op.htm?operation=pclie.flow.inicio&fwk.locale=es_ES">Factura Clientes</a>
                        <a class="nav-link " href="https://www.portaltrabajador.mercadona.es/ptrab/web/ope.htm?operation=fwk.flow.portal.mainPage">Portal Trabajador</a>
                        <a class="nav-link " href="https://www.facturas.mercadona.es/PortalWeb/Acceso.do">E-factura proveedores</a>
                        <a class="nav-link " href="https://www.portaltrinidad.es/PortalWeb/Acceso.do"> Portal Trinidad</a>
                    </nav>
                    </div>
                    <div class="col">
                    <nav class="nav flex-column">
                        <a id="negrita" class="nav-link active" > Consejos </a>
                        <a class="nav-link " href="https://www.mercadona.es/es/consejos/alimentacion">Consejos de Alimentación</a>
                        <a class="nav-link" href="https://www.mercadona.es/es/consejos/perfumeria">Consejos de Perfumería</a>
                        <a class="nav-link" href="https://www.mercadona.es/es/consejos/hogar">Consejos de Hogar</a>
                        <a class="nav-link " href="https://www.mercadona.es/es/consejos/mascotas">Consejos de Mascotas</a>
                        

                    </nav>
                    </div>
                    <div class="col">
                    <nav class="nav flex-column">
                        <a id="negrita" class="nav-link active"> Atencion al cliente </a>
                        <a class="nav-link " href="https://www.mercadona.es/es/atencion-al-cliente" > <i class="fas fa-envelope"></i> Contacto</a>
                        <a class="nav-link"> <i class="fas fa-phone"></i> 900 500 103</a> <br>
                        <a class="nav-link" id="negrita" > Redes Sociales<br> 
                        <nav class="nav" >
                            <a class="nav-link" id="iconos" class="reducir" href="https://www.facebook.com/mercadona"><i class="fab fa-facebook-square"></i></a>
                            <a class="nav-link" id="iconos"  href="https://twitter.com/mercadona"><i class="fab fa-twitter"></i></a>
                            <a class="nav-link" id="iconos"  href="https://www.youtube.com/mercadona"><i class="fab fa-youtube"></i></a>  
                            <a class="nav-link" id="iconos" href="https://www.instagram.com/mercadona/"><i class="fab fa-instagram"></i></a>
                        </nav>
                        
                    </div>
                    <div class="col">
                    <img src = "imagenes\foto10.jpg"  width="100%">
                        
                    </div>
                    
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=""imagenes\foto1.jpg"" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=""imagenes\foto1.jpg"" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=""imagenes\foto1.jpg"" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
        </footer>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

       

        

                          
    
    
    
    
   



        
    
     



    
       






 
 





 