<!DOCTYPE html>
<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Espacio para las fuentes -->
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
    <style>
      #chartdiv {
      width: 100%;
      height: 500px;
      }
    </style>
</head>
<body>

    <head>
        <h1 class="texto-principal">Tienda <span>Administrador</span></h1>
    </head>

    <section class="contenedor categorias">
        <div class="listado-bloques">

            <div class="blocke1">
                <h3>Usuarios: </h3>
                <p class="texto-centrado">2</p>
            </div>

            <div class="blocke2">
                <h3>Pedidos: </h3>
                <p class="texto-centrado">No se han Hecho Pedidos</p>
            </div>

            <div class="blocke3">
                <h3>Ingresos: </h3>
                <p class="texto-centrado">$0</p>
            </div>

        </div>

    </section>

    <div id="chartdiv"></div>

    <!-- Recursos de la grafica -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>


<script>
  alert("Bienvenido Administrador");
  am5.ready(function() {

  // Create root element
  // https://www.amcharts.com/docs/v5/getting-started/#Root_element
  var root = am5.Root.new("chartdiv");

  // Set themes
  // https://www.amcharts.com/docs/v5/concepts/themes/
  root.setThemes([
    am5themes_Animated.new(root)
  ]);

  // Create chart
  // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
  var chart = root.container.children.push(
    am5percent.PieChart.new(root, {
      endAngle: 270
    })
  );

  // Create series
  // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
  var series = chart.series.push(
    am5percent.PieSeries.new(root, {
      valueField: "value",
      categoryField: "category",
      endAngle: 270
    })
  );

  series.states.create("hidden", {
    endAngle: -90
  });

  // Set data
  // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
  series.data.setAll([{
  category: "Lithuania",
  value: 501.9
}, {
  category: "Czechia",
  value: 301.9
}, {
  category: "Ireland",
  value: 201.1
}, {
  category: "Germany",
  value: 165.8
}, {
  category: "Australia",
  value: 139.9
}, {
  category: "Austria",
  value: 128.3
}, {
  category: "UK",
  value: 99
}]);

series.appear(1000, 100);

}); 
</script>

</body>
</html>