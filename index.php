  <?php
    include '../top.php'; 
  ?>

  <?php
    // Datos 
    $tpb = "Demo: Como funciona la Pseudo-Clase :focus-within de CSS";
    $pb = "https://blog.nubecolectiva.com/como-funciona-la-pseudo-clase-focus-within-de-css/";
    $gh = "https://github.com/collectivecloudperu/propiedad_css_focus_within/";
  ?>

  <title><?php echo $tpb ?></title>

  <style type="text/css">
    .ghbmd {
      /* display: none!important; */
    }
  </style>

  <link rel="stylesheet" type="text/css" href="css/estilos.css">   

  <?php
    include '../topb.php'; 
  ?>

  <?php
    include '../pub.php'; 
  ?>

    <main role="main">

        <div class="container text-center mt-5">

          <!-- Contenido -->

          <div class="row">

            <div class="col-md-12">

                <h1 style="font-size: 28px;" class="mb-4"><?php echo $tpb ?> </h1>

                <div class="fad text-center">
                  <?php
                    include '../fad.php'; 
                  ?> 
                </div>

                <?php
                  include '../mbtodt.php'; 
                ?>

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

                    <?php
                      include '../pub2.php'; 
                    ?>
                    
                  </div>

                </div>


            </div>

          </div> 

          <!-- Fin Contenido -->     

          <?php
           include '../hab.php'; 
          ?>           
          
        </div>

    </main>


    <?php
      include '../bottom.php'; 
    ?>
    
  </body>
</html> 
