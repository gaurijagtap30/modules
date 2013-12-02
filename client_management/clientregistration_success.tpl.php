<?php
/*$query = db_select('applications', 'u');
    $query->fields('u', array('appid','applicationname','applicationcategory','tracktype','applicationdescription'));
    $result = $query->execute();

 
echo "<html><body><table class='table table-bordered'><tr>
<th>Application Id</th>
<th>Application Name</th>
<th>Tier</th>
<th>Callback URL</th>
<th>Version</th>
<th>Description</th>
<th colspan=\"2\">Actions</th>
</tr>";

  while($record = $result->fetchAssoc()) {
  
   echo "<tr>"
. "<td>".$record['appid']."</td> " 
. "<td>".$record['applicationname']."</td> " 
. "<td>".$record['applicationcategory']."</td> " 
. "<td>".$record['tracktype']."</td> " 
. "<td>".$record['applicationname']."</td> " 
. "<td>".$record['applicationdescription']."</td> " 
. "<td><a href=".">edit</a></td><td><a href=".">delete</a></td>"."</tr> ";

}

echo "</table></body></html> "; */

echo "success";
?>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function () {
    $("div#Exportdiv").hide();
	$("div#Clonediv").hide();
	$("div#Importdiv").show();

  $("li#sitemaintenance").click(function(){
    $("div#sitemaintenancediv").show();
	$("div#backupdiv").hide();
	$("li#backups").removeAttr("class");
	$("li#sitemaintenance").attr("class", "selected");
  });
  $("li#backups").click(function(){
    $("div#sitemaintenancediv").hide();
	$("div#backupdiv").show();
	$("li#sitemaintenance").removeAttr("class");
	$("li#backups").attr("class", "selected");
  });
  
  $("li#Importli").click(function(){
    $("div#Exportdiv").hide();
	$("div#Clonediv").hide();
	$("div#Importdiv").show();
  });
  
  $("li#Exportli").click(function(){
    $("div#Exportdiv").show();
	$("div#Clonediv").hide();
	$("div#Importdiv").hide();
	
  });
  
  $("li#Cloneli").click(function(){
    $("div#Exportdiv").hide();
	$("div#Clonediv").show();
	$("div#Importdiv").hide();
	
  });
  
 });
</script>

<style>
{
   background-color: #f2f2f2;
   padding: 20px 10px;
   overflow: auto;
}
#tab-container
{
   float: left;
   margin: 50px 0 0 0;
   width: 126px;
}
#tab-container ul
{
   list-style: none;
   text-align: center;
}
#tab-container ul li
{
   border-top: 1px solid #666;
   border-right: 1px solid #666;
   border-bottom: 1px solid #666;
   border-left: 8px solid #666;
   background-color: #ddd;
   margin: 8px 0;
}
#tab-container ul li a,
#tab-container ul li a:visited
{
   text-decoration: none;
   color: #666;
   display: block;
   padding: 15px 5px;
}
#tab-container ul li:hover
{
   border-left: 8px solid #333;
}
#tab-container ul li a:hover
{
   color: #000;
}
#tab-container ul li.selected
{
   border-right: none;
   background-color: #fff;
   border-left: 8px solid #006699;
}
#main-container
{
   min-height: 400px;
   margin: 0 0 0 125px;
   padding: 20px;
   background-color: #fff;
   border: 1px solid #888;
}
ul {
    margin: 0;
    padding: 0;
}
li {
    list-style-type: none;
}
#nav {
    display: table;
    table-layout: fixed;
    text-align: center;
}
#nav li {
    display: table-cell;
    width: 25%;
    padding-right: 1px;
    height: auto;
    vertical-align: bottom;
}
#nav a {
    display: block;
    min-height: 100%;
    padding: 4px 10px;
    background-color: #222;
    color: white;
    border-radius: 6px 6px 0 0;
}
</style>
</head>
<body>
    <div>
		<ul id="nav">
			<li><a href="#">PreProduction</a></li>
			<li><a href="#">Production</a></li>
		</ul>
	</div>
    <div id="content">
    <div id="tab-container">
      <ul>
         <li id="sitemaintenance"><a href="#">Site Maintenance</a></li>
         <li id="backups"><a href="#">Backups</a></li>
         <li id="security"><a href="#">Security</a></li>
      </ul>
   </div>
   <div id="main-container">
       <div id="sitemaintenancediv">
		<ul id="nav">
			<li id="Importli"><a href="#">Import</a></li>
			<li id="Exportli"><a href="#">Export</a></li>
			<li id="Cloneli"><a href="#">Clone</a></li>
		</ul>
					<div id="Importdiv">
					<form name="importform">
					MySql Database Archieve: <input type="text" name="user">
                      <input type="submit" value="Upload">
					</form>
					</div>
					<div id="Exportdiv">
					<form name="exportform">
					Export: <input type="submit" value="Export Database">
					</form>
					</div>
					<div id="Clonediv">
					<form name="cloneform">
					Clone: 
					<input type="submit" value="Clone from Production"><br>
					<input type="checkbox" name="vehicle" value="Database">Database
					<input type="checkbox" name="vehicle" value="Files">Files
					</form>
					</div>
    	</div>
	   <div id="backupdiv">
		</div>
   </div>
</div>
</body>
</html>


 
