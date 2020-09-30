<!DOCTYPE html>
<html lang="en">

<head>

    <title>Corona Virus </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<!----------------  Jquery CDN  --------------------->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<!----------------  another --------------------->
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
			<!---------------- way pont link --------------------->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous"></script>
		
		
		<!---------------- counter link --------------------->
		
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="jquery.counterup.min.js"></script>
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" integrity="sha512-+/4Q+xH9jXbMNJzNt2eMrYv/Zs2rzr4Bu2thfvzlshZBvH1g+VGP55W8b6xfku0c0KknE7qlbBPhDPrHFbgK4g==" crossorigin="anonymous"></script>

	
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

<body>

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
                    <a class="nav-link" href="indialive.php">India Corona Live</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="daywise.php">India DayWise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" onkeyup="searchfun()" aria-label="Search" id="myInput">
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



<!---------------------------- About Covid-19 ---------------------------->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	
	<div class="section_header text-center mb-5 my-5">
		<h1> About Covid-19 </h1>	
	</div>
	
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5">
			<img src="images/8.jpg" height="800" width="400" class="img-fluid">
		</div>	
		
		<div class="col-lg-5 col-md-6 col-12">
			<h2> What is Covid-19 ( Corona Virus ) </h2>
			<p> Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. </p>
			<p> Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness. </p>
		</div>
		
	</div>
	

	
	<!---------------------------- Covid-19 Symtoms ---------------------------->

<div class="container-fluid pt-5 pb-5" id="symtomsid">
	
	<div class="section_header text-center mb-5 my-5">
		<h1> Corona Virus Symtoms </h1>	
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md--4 col-12 mt-5">
				<figure class="text-center"> 
					<img src="images/9.jpg" height="120" width="120" class="img-fluid">
					<figcaption> Fever </figcaption>
				</figure>
			</div>		

			<div class="col-lg-4 col-md--4 col-12 mt-5">
				<figure class="text-center"> 
					<img src="images/10.jpg" height="180" width="180" class="img-fluid">
					<figcaption> Cough </figcaption>
				</figure>
			</div>		

			<div class="col-lg-4 col-md--4 col-12 mt-5">
				<figure class="text-center"> 
					<img src="images/11.jpg" height="120" width="120" class="img-fluid">
					<figcaption> Sore Throat </figcaption>
				</figure>
			</div>		

			<div class="col-lg-4 col-md--4 col-12 mt-5">
				<figure class="text-center"> 
					<img src="images/12.jpg" height="120" width="120" class="img-fluid">
					<figcaption> Headache </figcaption>
				</figure>
			</div>		

			<div class="col-lg-4 col-md--4 col-12 mt-5">
				<figure class="text-center"> 
					<img src="images/13.jpg" height="200" width="200" class="img-fluid">
					<figcaption> Tiredness </figcaption>
				</figure>
			</div>		

			<div class="col-lg-4 col-md--4 col-12 mt-5">
				<figure class="text-center"> 
					<img src="images/15.jpg" height="120" width="120" class="img-fluid">
					<figcaption> Difficulty In Breathing </figcaption>
				</figure>
			</div>		
			
		</div>
	</div>
	
</div>	
	
</div>


	<!---------------------------- Prevention for COVID-19 ---------------------------->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	
	<div class="section_header text-center mb-5 my-5">
		<h1> Prevention Against Coronavirus </h1>	
	</div>
	
	<div class="container">
		<div class="row">
			<div class=" col-lg-5 col-md-5 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"> 
							<img src="images/16.jpg" height="90" width="90" class="img-fluid">
						</figure>
					</div>
					<div class=" col-lg-8 col-md-8 col-12">
						<p> Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub. </p>
					</div>
				</div>
			</div>
			
						<div class=" col-lg-5 col-md-5 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"> 
							<img src="images/17.jpg" height="90" width="90" class="img-fluid">
						</figure>
					</div>
					<div class=" col-lg-8 col-md-8 col-12">
						<p> Maintain at least 1 metre (3 feet) distance between yourself and others </p>
					</div>
				</div>
			</div>
			
						<div class=" col-lg-5 col-md-5 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"> 
							<img src="images/18.jpg" height="90" width="90" class="img-fluid">
						</figure>
					</div>
					<div class=" col-lg-8 col-md-8 col-12">
						<p> Avoid touching your face. </p>
					</div>
				</div>
			</div>
			
						<div class=" col-lg-5 col-md-5 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"> 
							<img src="images/19.jpg" height="90" width="90" class="img-fluid">
						</figure>
					</div>
					<div class=" col-lg-8 col-md-8 col-12">
						<p> Cover your mouth and nose</p>
					</div>
				</div>
			</div>
			
						<div class=" col-lg-5 col-md-5 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"> 
							<img src="images/21.jpg" height="110" width="110" class="img-fluid">
						</figure>
					</div>
					<div class=" col-lg-8 col-md-8 col-12">
						<p> Avoid Fake News of COVID-19 to Protect Yourself. </p>
					</div>
				</div>
			</div>
			
						<div class=" col-lg-5 col-md-5 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center"> 
							<img src="images/20.jpg" height="90" width="90" class="img-fluid">
						</figure>
					</div>
					<div class=" col-lg-8 col-md-8 col-12">
						<p> Stay home if you feel unwell. </p>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>

</div>
	
		<!---------------------------- Contact Us ---------------------------->

<div class="container-fluid sub_section pt-5 pb-5" id="contactid">
	
	<div class="section_header text-center mb-5 my-5">
		<h1> Contact Us </h1>	
	</div>
	


	<div class="col-lg-8 m-auto d-block">

	<br>

		<form action="dbcon.php" method="POST">
	
			<div class="form-group">
				<label for="na"> Enter Name: </label>
				<input type="text" id="name" name="na" placeholder="Enter Name" class="form-control"><br>
			</div>
	
			<div class="form-group">
				<label for="num"> Enter Phone Number: </label>
				<input type="varchar" id="phone" placeholder="Enter Phone Number" name="num" class="form-control"><br>
			</div>
	
	
			<div class="form-group">
				<label for="eid"> Enter Email ID: </label>
				<input type="text" id="eid" placeholder="Enter Email ID" name="eid"class="form-control"><br>	
			</div>
	
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="symp[]">
				<label class="form-check-label" for="inlineCheckbox1">Cold</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="symp[]">
				<label class="form-check-label" for="inlineCheckbox2">Fever</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option2" name="symp[]">
				<label class="form-check-label" for="inlineCheckbox3">Cough</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option2" name="symp[]">
				<label class="form-check-label" for="inlineCheckbox3">Difficulty In Breathing </label>
			</div>
		
			
			<div class="form-group">
				<br><label for="exampleFormControlTextarea1">Describe How You Are Feeling </label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="feel"></textarea>
			</div>
	
			<div class="form-group">
				<button type="submit" name="submit" id="submit" value="submit" class="btn btn-success" onclick="popUp()"> Submit </button>
			</div>
	
		</form>

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
	
		// for making search functionality
	
	const searchfun = () =>{

	let filter = document.getElementById('myInput').value.toUpperCase();
	let myTable = document.getElementById('tabval');
	
	let tr = myTable.getElementsByTagName('tr');
	
	for(var i=1;i<tr.length;i++){
	
	let td =tr[i].getElementsByTagName('td')[0];
	
		if(td){
		
		<!---------   we writing below line getting content of the field , we can get through textcontent --------->
		<!--------- 	but we are using  here inner html also bcz if textcontent not work then it should work 	---->
			let textvalue = td.textcontent || td.innerHTML;
			
			if(textvalue.toUpperCase().indexOf(filter) > -1){
				
				tr[i].style.display = "";
			}else{
			
				tr[i].style.display = "none";
			}
		}
	
	}
}


	
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

