<?php
            
   

                $consultaDetalle  = "SELECT id_receta FROM detalle_categoria WHERE id_categoria = 4";
                $queryDetalle = $conn->prepare($consultaDetalle);
                $queryDetalle->execute();
                while($registroDetalle = $queryDetalle->fetch()){
                  $numeroId = $registroDetalle["id_receta"];
                  // echo "<script>console.log($numeroId)</script>";
                  $consulta  = "SELECT * FROM Receta WHERE id_receta = $numeroId ORDER BY rating_receta";
                  

                  $query = $conn->prepare($consulta);
                  $query->execute();
                  
                  while($registro = $query->fetch())
                  {
              
                    $idRegistro = $registro["id_usuario"];
                    // $nombreUsuario = "SELECT nombre_usuario FROM Usuario WHERE id_usuario = 1 LIMIT 1"  ;                 
                    
  
               
                    $stmt = $conn->prepare("SELECT nombre_usuario FROM Usuario WHERE id_usuario = $idRegistro LIMIT 1");
                    $stmt->execute();
                    $userName;
                    while($row = $stmt->fetch()){ 
                     
                        $userName = $row["nombre_usuario"];
                  
                    };
                
                 
            ?>
            <div class="recipe-card popular-recipe-card">
            <div class="card-img">
    
              <img
                src="<?=$registro["foto_1_receta"]?>"    

                
                alt="imagen de unos deliciosos pancakes"
              />
            </div>
            <div class="card-description">
              <a href="#" class="card-chef-name"><?=$userName?></a>
              <h3 class="card-recipe-name"><?=$registro["nombre_receta"]?></h3>
              <ul class="card-recipe-summary">
                <li class="card-rating">
                  <p>
                    <i class="fa-regular fa-star" style="color: #ec6a2e"></i>
                    Rating: <span class="span-rating"><?=$registro["rating_receta"]?></span>
                  </p>
                </li>
                <li class="card-time">
                  <p>
                    <i
                      class="fa-regular fa-hourglass"
                      style="color: #ec6a2e"
                    ></i>
                    Tiempo de preparacion:
                    <span class="span-time"><?=$registro["tiempo_receta"]?>min</span>
                  </p>
                </li>
                <li class="card-difficulty">
                  <p>
                    <i
                      class="fa-regular fa-lightbulb"
                      style="color: #ec6a2e"
                    ></i
                    >Dificultad: <span class="span-difficulty"><?=$registro["dificultad_receta"]?></span>
                  </p>
                </li>
              </ul>
              <div class="card-more-info" data-cardvalue="<?=$registro["id_receta"]?>">
                <i class="fa-solid fa-ellipsis-vertical"></i>
                <div class="more-info-side hidden" data-cardvalue="<?=$registro["id_receta"]?>">
                  <ul>
                    <li>
                      <p>
                        <i class="fa-solid fa-floppy-disk"></i>Guardar para ver
                        mas tarde
                      </p>
                    </li>
                    <li>
                      <p><i class="fa-solid fa-share"></i>Compartir</p>
                    </li>
                    <li>
                      <p>
                        <i class="fa-solid fa-bookmark"></i>Guardar en una
                        coleccion
                      </p>
                    </li>
                    <li>
                      <p><i class="fa-solid fa-exclamation"></i>Denunciar</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php 
          }          
        } 
        ?>