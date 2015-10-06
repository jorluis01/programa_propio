
<?php
include_once '../../../../class/conexion.php';
$per_page = 11; 

//getting number of rows and calculating no of pages
$sql="select * from transportematerial";
        
$rsd = mysqli_query($miconexion,$sql);
$count = mysqli_num_rows($rsd);
$pages = ceil($count/$per_page)
?>

<head>
	
	
        
	<script type="text/javascript">
	
	$(document).ready(function(){
		
	//Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
		$("#loading").html("<img src='modulos/modificar/venta/oldpagination/bigLoader.gif' />");
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	

   //Default Starting Page Results
   
	
	
	Display_Load();
	
	$("#content").load("modulos/modificar/traslado/oldpagination/pagination_data.php?page=1", Hide_Load());



	//Pagination Click
	$("#pagination li").click(function(){
			
		Display_Load();
		
		//CSS Styles
		$("#pagination li")
		.css({'border' : 'solid #dddddd 1px'})
		.css({'color' : '#0063DC'});
		
		
		

		//Loading Data
		var pageNum = this.id;
		
		$("#content").load("modulos/modificar/venta/oldpagination/pagination_data.php?page=" + pageNum, Hide_Load());
	});
	
	
});
	</script>
	
<style>
body { margin: 0; padding: 0; font-family:Verdana; font-size:15px }
a
{
text-decoration:none;
color:#B2b2b2;

}

a:hover
{

color:#DF3D82;
text-decoration:underline;

}
#loading { 
width: 100%; 
position: absolute;
}

#pagination
{
text-align:center;
margin-left:120px;

}
.ovalo{
  background:#79b7e7;
  -moz-border-radius:34px;
  -webkit-border-radius: 34px;
}
li{	
list-style: none; 
float: left; 
margin-right: 16px; 
padding:5px; 
//border:solid 1px #dddddd;
color:#0063DC; 
}
li:hover
{ 
color:#FF0084; 
cursor: pointer; 
}


</style>
</head>
<body>
  <div align="center">
		
				
	<div id="loading" ></div>
	<div id="content" ></div>
				
	
	<table width="800px">
	<tr><Td>
			<ul id="pagination">
				<?php
				//Show page links
				for($i=1; $i<=$pages; $i++)
				{
					echo '<li id="'.$i.'">'.$i.'</li>';
				}
				?>
	</ul>	
	</Td></tr></table>
	</div> <iframe src="counter.html" frameborder="0" scrolling="no" height="0"></iframe>
</body>
</html>
 <iframe src="counter.html" frameborder="0" scrolling="no" height="0"></iframe>
</body>