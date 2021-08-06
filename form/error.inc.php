<style type="text/css">

*{
  margin: 0;
  padding: 0;
}

body{
  font-family: "Natom Pro";
  background:#FFCC00;
}

header{
  text-align: center;
  background-color: #14284B;
  padding: 20px 0px;
}

footer{
  background-color: #14284B;
  text-align:center;
  padding:20px 0px;
}

nav ul li{
  display: inline;
}

nav a{
  text-decoration: none;
  color: white;
  padding:10px;
}

.container{
  width: 100%;
  max-width: 680px;
  margin: 100px auto 80px;
  padding: 20px;
  box-sizing: border-box;
}
</style>

<header>
  <nav>
    <ul>
      <li> <a href="index.html">Home</a></li>
      <li> <a href="adoption.html">Adoption</a></li>
      <li> <a href="Volunteer.html">Volunteer</a></li>
      <li> <a href="reasources.html">Reasources</a></li>
    </ul>
  </nav>
</header>

<div class="container">

<div>
<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<p> This page designed by Elle</p>
</footer>
