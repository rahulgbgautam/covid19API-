<!DOCTYPE html>
<html lang="en">

<head>

    <title>Corona Virus </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<!----------------  Jquery CDN  --------------------->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
			<!---------------- way pont link --------------------->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous"></script>
		
		
		<!---------------- counter link --------------------->
		
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		
			
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!---------------- Google Font --------------------->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <?php include 'style.php' ?>
	
	<!---------------- Font Awesome --------------------->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!---------------- waypoints --------------------->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>	


</head>

<body onload="fetch()">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand pl-2" href="#">Covid-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto pl-4">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#symtomsid">Symtoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preventid">Prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="main_header">
        <div class="row" w-100 h-100>

            <div class="col-lg-5 col-md-5 col-12 order-lg-1 oder-2 p-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/3.jpg" height="300" width="530">
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-12 order-lg-2 oder-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1> Lets Stay Safe And Fight Against Cor<span class="corona_rotate"> <img src=" images/7.jpg" height="60" width="70"> </span>na Virus </h1>
                </div>
            </div>

        </div>

    </div>
	
	<!-------------------------- Corona Latest Update --------------------------------------->

<div class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">Covid-19 Updates </h3>
	</div>
	
	<div class="table-responsive">
		<table class=" table table-bordered table-striped text-center" id="tabval">
			<tr>
				<th> Country </th>
				<th> NewConfirmed </th>
				<th> TotalConfirmed </th>
				<th> NewDeaths </th>
				<th> TotalDeaths </th>
				<th> NewRecovered </th>
				<th> TotalRecovered </th>			
			</tr>
			
			
<?php

$data = file_get_contents('https://api.covid19api.com/summary');

$coronadata = json_decode($data,true);

//echo "<pre>";

//print_r($coronadata);

//echo $coronadata['Countries'][0]['TotalConfirmed'];

$tc = count($coronadata['Countries']); // total countries

$i=1;

while($i<$tc){
	
	?>
	
	<tr>
		<td> <?php echo $coronadata['Countries'][$i]['Country']; ?></td>
		<td> <?php echo $coronadata['Countries'][$i]['NewConfirmed']; ?></td>
		<td> <?php echo $coronadata['Countries'][$i]['TotalConfirmed']; ?></td>
		<td> <?php echo $coronadata['Countries'][$i]['NewDeaths']; ?></td>
		<td> <?php echo $coronadata['Countries'][$i]['TotalDeaths']; ?></td>
		<td> <?php echo $coronadata['Countries'][$i]['NewRecovered']; ?></td>
		<td> <?php echo $coronadata['Countries'][$i]['TotalRecovered']; ?></td>
	</tr>

	<?php
	
	$i++;
}


?>

			
		</table>
	</div>

</div>




	




<!------------------------  Top Cursor  -------------------------------->
	
	<div class=" container scrolltop float-right pr-5">
		<i class=" fa fa-arrow-up" onclick="TopBtn()" id="tpbtn"></i>
	</div>
	
	
	<!------------------- footers --------------------->
	
	<footer class="mt-5 ml-2" style="background-color: black";>
		<div class="footer_style text-white text-center container-fluid">
			<p> Made By Rahul GB </p>
		</div>
	</footer>
	
	<script type="text/javascript">
	
	// for counting
	
	$('.count').counterUp({
		delay: 10,
		time: 1000
	});
	
	//we did this arrow bcz when we just slight down cursor that time button should show us
	
	mybutton = document.getElementById("tpbtn");
	
	window.onscroll = function(){scrollfunction()};
	
	function scrollfunction(){
		if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
			mybutton.style.display = "block";
		}
		else{
			mybutton.style.display = "none";
		}
	}
	
	
	// by using this part only our cursor will move on top
	
		function TopBtn(){
			document.body.scrollTop=0;
			document.documentElement.scrollTop=0;
		}
		

	

	</script>

</body>

</html>

