<!DOCTYPE html>
<html lang="en">
<!--HEADER -->
<?php include("header.php") ?>
<!--HEADER -->

<body>

  <!-- Navigation -->
  <?php include("navbar.php") ?>
  <!-- Navigation -->

  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row mx-auto">

      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
           
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

      <div class="row">


        <?php
        $conn = oci_connect("proyecto", "1", "localhost:1521/xe");
        if (!$conn) {
          $e = oci_error();
          trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        $curs = oci_new_cursor($conn);
        
        $stid = oci_parse($conn, "begin :cursor := F_Function(2); end;");
        oci_bind_by_name($stid, ":cursor", $curs, -1, OCI_B_CURSOR);
        oci_execute($stid);

        oci_execute($curs); 


        $counter = 0;

        while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
          $JEJE =  '<div class="col-lg-4 col-md-6 mb-4">';
          $JEJE .= '<div class="card h-100">';
          $JEJE .=    '<a href="#"><img class="card-img-top" src="' . $row['IMG'] . '" width="300" height="400" alt=""></a>';
          $JEJE .=    '<div class="card-body">';
          $JEJE .= '<h4 class="card-title">';
          $JEJE .=   ' <a href="#">' . $row['NOMBRE'] . '</a>';
          $JEJE .=      '</h4>';
          $JEJE .=  '<h4 class="card-title">';
          $JEJE .=     '<button id="comprar" onclick="agregar(this)"  data-value="' . $row['NOMBRE'] . '-' . $row['NO_ARTICULO'] . '-A' . $counter . '-' . $row['PRECIO'] . '">comprar</button>';
          $JEJE .=       '<input id="A' . $counter . '" type="number"   min="1" value="1" size="2">';
          $JEJE .=   '</h4>';
          $JEJE .=  '<h5>$' . $row['PRECIO'] . '</h5>';
          $JEJE .=     ' <p class="card-text">' . $row['DESCRIP'] . '</p>';
          $JEJE .=   '</div>';
          $JEJE .=    '<div class="card-footer">';
          $JEJE .=   '   <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>';
          $JEJE .= '  </div>';
          $JEJE .= ' </div>';
          $JEJE .=  '</div>';
          echo $JEJE;
          $counter++;
        }

        ?>


       
      </div>
      <!-- /.row CARDS-->

    </div>
    <!-- /.row CONTENIDOS-->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("footer.php") ?>
  <!-- Footer -->

  <!-- Modal -->
  <?php include("modal.php") ?>
  <!-- Modal -->
</body>

</html>