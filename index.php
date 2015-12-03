<!doctype html>

<html ng-app="mhcApp" lang="en">
<head>
  <meta charset="utf-8">

  <title>MHC Dashboard</title>
  <meta name="description" content="Home contro">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Load Angular -->
  <script src="https://code.angularjs.org/1.4.7/angular.min.js"></script>

  <!-- Load Angular App -->
  <script src="js/app.js"></script>

</head>

<body ng-controller="MainCtrl">
  <script src="js/scripts.js"></script>
  <h1>MHC (Mutari Home Control)</h1>
  <p>Welcome to the MHC dashboard</p>
  <p>The current temperature is: {{currentTemp}}</p>
  <form action="https://api.particle.io/v1/devices/54ff72066667515144481467/getsetpoint?access_token=74d27e66285a2889d791a3bdd6d2aa230395c28b" method="POST">
    <label>Set thermostat to:</label>
    <input type="number" name="args" value="">
    <input type="submit" value="Send">
  </form>
</body>
</html>
