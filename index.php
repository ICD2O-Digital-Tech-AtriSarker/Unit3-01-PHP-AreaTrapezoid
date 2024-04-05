<html>

<head>
  <!-- Meta data section -->
  <meta charset="utf-8">
  <meta name="description" content="Calculator for Area of Trapezoid, Using PHP">
  <meta name="keywords" content="immaculata, icd2o">
  <meta name="author" content="Atri Sarker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  <link rel="manifest" href="./fav_index/site.webmanifest">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Title -->
  <title>Area of a Trapezoid in PHP</title>
</head>

<body class="main_body">

  <!-- Header -->
  <h1>Area of a Trapezoid in PHP</h1>

  <!-- INPUT FORM -->
  <form method="post" action="calculations.php" target="resultFrame">
  <!-- Table For Layout -->
  <table>
    <tr>
      <td>
        <!-- INPUTS | Default Values of 3,4,2 -->
        <label for="base1Input">a (m):</label>
        <input id="base1Input" type="number" name="base1" value="3" min="0" />
        <br>
        <label for="base2Input">b (m):</label>
        <input id="base2Input" type="number" name="base2" value="4" min="0" />
        <br>
        <label for="height">h (m):</label>
        <input id="heightInput" type="number" name="height" value="2" min="0" />
      </td>
      <td>
        <!-- Image that displays the formula -->
        <img class="formulaImg" src="./images/trapezoid.PNG" alt="A Trapezoid">
        <br>
      </td>
    </tr>
  </table>
    <!-- Calculate Button -->
    <button id="CalculateBtn" type="submit" name = "submit" value="Calculate!">Calculate</button>
    <br>
  </form>

  <!-- Result -->
  <iframe name="resultFrame" src="./calculations.php">
  </iframe>

</body>

</html>