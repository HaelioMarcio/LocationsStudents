<!DOCTYPE html>
<head lang="pt">
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Location Students</title>
	<link rel="stylesheet" type="tex/css" href="theme/css/bootstrap.min.css">
	<style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
      .form-consulta{
        position: absolute;
        z-index: 1000;
        left: 15%;
        right: 15%;
        top: 3%;
        padding: 10px;
        background: #FFF;
      }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBMoYehAkIoo86OgFFDMr2vLjOIEzDKH2s&sensor=SET_TO_TRUE_OR_FALSE">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-34.397, 150.644),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
    </script>
</head>
<body onload="initialize()">
	<?php include 'autoload.php' ?>

  <?php 
    $connection->getOpenConnection();
   ?>
   <div class="form-consulta">
    <h3>Location Students</h3>
     <form class="form-inline">
      <div class="form-group">
          <select class="form-control" name="acao">
            <option value="nome">Selecione o tipo de consulta</option>
            <option value="nome">Nome</option>
            <option value="nome">Cpf</option>
            <option value="nome">Bairro</option>
          </select>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="nome" id="nome" />
        </div>
        <div class="form-group">
          <a href="Javascript:void(0);" id="consultar" class="btn btn-primary">Consultar</a>
        </div>
     </form>
   </div>
	<div id="map_canvas" style="width:100%; height:100%"></div>


	<!-- Bootstrap -->
  <script type="text/javascript" src="theme/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="theme/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
</body>
</html>