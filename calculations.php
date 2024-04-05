<!-- CSS -->
<link rel="stylesheet" href="./css/style.css">
<p>The Area is 
  <b id="AreaResult">
    <?php
      // Code
      if(isset($_POST['submit'])) 
      {
        $base1 = floatval($_POST['base1']);
        $base2 = floatval($_POST['base2']);
        $height = floatval($_POST['height']);

        $area = ($base1 + $base2) * $height * 0.5;
        echo number_format($area,2) . "m<sup>2</sup>";
      }
      else {
        echo "?";
      }
    ?>
  </b> 
</p>