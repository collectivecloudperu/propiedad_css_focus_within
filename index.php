
  <!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="shortcut icon" href="https://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />

    
  
  <title>Demo: Como funciona la Pseudo-Clase :focus-within de CSS</title>

  <style type="text/css">
    .ghbmd {
      /* display: none!important; */
    }
  </style>

  <link rel="stylesheet" type="text/css" href="css/estilos.css">   

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://nubecolectiva.com/blog/tutos/demos/enc.css">    

  </head>

  <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="https://nubecolectiva.com"><img src="https://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <a class="nav-link" href="https://nubecolectiva.com">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://blog.nubecolectiva.com" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li> 
            </ul>

            <div class="btn-group btodt" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reportarmodal">Reportar Error</button>
              <button type="button" onclick="window.open('https://paypal.me/nubecolectiva','_blank')" class="btn btn-warning">Donar</button>
              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#compartirmodal">Compartir</button>
              <button type="button" onclick="window.open('https://blog.nubecolectiva.com/formas-de-colocar-una-imagen-o-marcador-a-una-lista-desordenada-ul-con-css-3/','_blank')" class="btn btn-info">Post</button>
              <button type="button" onclick="window.open('https://github.com/collectivecloudperu/imagen_marcador_listas_desordenadas_css3/','_blank')" class="btn btn-secondary ghbmd">GitHub</button>
            </div>

          </div>
        </div>
      </nav>
    </header>
  
<div class="pccp mb-3 mtpnc" align="center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              
    <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-2390065838671224"
                   data-ad-slot="1441100372"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
    <main role="main">

        <div class="container text-center mt-5">

          <!-- Contenido -->

          <div class="row">

            <div class="col-md-12">

                <h1 style="font-size: 28px;" class="mb-4">Demo: Como funciona la Pseudo-Clase :focus-within de CSS </h1>

                <div class="fad text-center">
                  Actualizado: 26-02-2020 / 3:17 AM 
                </div>

                <div class="btn-group mbtodt" role="group" align="center">
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reportarmodal">Reportar Error</button>
    <button type="button" onclick="window.open('https://paypal.me/nubecolectiva','_blank')" class="btn btn-warning">Donar</button>
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#compartirmodal">Compartir</button>
    <button type="button" onclick="window.open('https://blog.nubecolectiva.com/formas-de-colocar-una-imagen-o-marcador-a-una-lista-desordenada-ul-con-css-3/','_blank')" class="btn btn-info">Post</button>
    <button type="button" onclick="window.open('https://github.com/collectivecloudperu/imagen_marcador_listas_desordenadas_css3/','_blank')" class="btn btn-secondary ghbmd">GitHub</button>
</div>
                <div class="row">

                  <div class="col-md-10"> 

                    <p>"Has clic sobre alguna parte del formulario o sobre una de las cajas de texto del formulario y el color de fondo cambiará a color rosado (pink)"</p> 

                    <form id="miformulario">

                      <div class="form-group">
                        <label for="nombre" class="negrita2">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" required> 
                      </div>

                      <div class="form-group">
                        <label for="precio" class="negrita2">Precio:</label>
                        <input type="precio" class="form-control" id="precio" required> 
                      </div>

                      <div class="form-group">
                        <label for="stock" class="negrita2">Stock:</label>
                        <input type="stock" class="form-control" id="stock" required> 
                      </div> 

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                      </div> 

                    </form>

                  </div>

                  <div class="col-md-2">

                    <div class="pccp mt-2" align="center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              
    <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-2390065838671224"
                   data-ad-slot="1441100372"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>                    
                  </div>

                </div>


            </div>

          </div> 

          <!-- Fin Contenido -->     

          <hr>

          <div class="row text-center">

            <div class="col-md-12">

              <p class="lead">En <a href="https://nubecolectiva.com/" target="_blank"> Nube Colectiva </a> hablamos sobre:</p>

            </div>

          </div>

          <div class="row text-center">

              <div class="col-md-3">
                <h3>Frontend</h3>
                <a href="https://blog.nubecolectiva.com/category/frontend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-11-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Backend</h3>                
                <a href="https://blog.nubecolectiva.com/category/backend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-8-300x169.png">
                </a>
              </div>              

              <div class="col-md-3">
                <h3>Android</h3>
                <a href="https://blog.nubecolectiva.com/category/android/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-9-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Otros</h3>
                <a href="https://blog.nubecolectiva.com/category/articulos/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/09/edit_img_destacada_blog_devs-300x169.png">
                </a>
              </div>

          </div>            
          
        </div>

    </main>


        <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por <a href="https://www.nubecolectiva.com" target="_blank">Nube Colectiva</a>
      </div> 
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    	
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d77ca750f8a618e"></script>

	<!-- Modal Compartir -->
	<div class="modal fade" id="compartirmodal" tabindex="-1" role="dialog" aria-labelledby="compartirmodallabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="compartirmodallabel">Comparte esta DEMO</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" align="center">

            <div class="addthis_inline_share_toolbox"></div>
            	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal Reportar error Demo -->
	<div class="modal fade" id="reportarmodal" tabindex="-1" role="dialog" aria-labelledby="reportarmodallabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="reportarmodallabel">Reportar error de esta DEMO</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

            Si esta DEMO esta fallando, por favor adjunta una captura de pantalla con el error al siguiente correo:
            <br>
            <strong>nubecolectiva@gmail.com</strong>

            <br><br>

            De esta manera estaremos ayudando a otros Desarrolladores.

            <br><br>

            <span style="color:red;"><strong>NOTA:</strong> No olvides adjuntar la URL de este tutorial para su inmediata reparación !</span>
            	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>

    
      
  </body>
</html> 
