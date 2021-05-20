<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-size: 16px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #07095c;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: grey;
}

.active {
  background-color: blue;
}

</style>
</head>
<body>



<ul>
  <li><a class="active" href="admin_index.php" style="font-size: 28px;">Back </a></li>
  <li><a href="logup.php" style="font-size: 28px;">Log in</a></li>

</ul>
</body>
</html>