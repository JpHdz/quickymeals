<?php 




    $consultaDetalle  = "SELECT id_receta FROM detalle_categoria WHERE id_categoria = 3 LIMIT 3";
    $queryDetalle = $conn->prepare($consultaDetalle);
    $queryDetalle->execute();
    while($registroDetalle = $queryDetalle->fetch()){

      $numeroId = $registroDetalle["id_receta"];
      $consulta  = "SELECT * FROM Receta WHERE id_receta = $numeroId ORDER BY rating_receta";
      $query = $conn->prepare($consulta);
      $query->execute();
      
      while($registro = $query->fetch())
      {
  

?>
              <div class="carousel-item">
                <div class="info-fav-recipe">
                  <h3><?=$registro["nombre_receta"]?></h3>
                  <p class="rating-fav rating-fav-1"><?=$registro["rating_receta"]?></p>
                  <a href="#" class="go-fav">Ir a la receta</a>
                </div>
                <img
                  src="<?=$registro["foto_1_receta"]?>"
                  class="d-block w-100"
                  alt=""
                />
              </div>             
<?php 
    } 
  }
?>