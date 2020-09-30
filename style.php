<style>
	
	html{
		scroll-behaviour:smooth;
	}

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Open Sans', sans-serif;
    }

    .main_header{
        height: 450px;
        width: 100%;
    }

	.rightside h1{
		font-size:3rem;
	}
	
	.corona_rotate img{
		animation:corona 3s linear infinite;
	}
	
	@keyframes corona{
		0%{ transform:rotate(0);}
		100%{ transform:rotate(360deg);}
	}
	
	.leftside img{
		animation:discorona 5s linear infinite;
	}
	
		@keyframes discorona{

		0%{
			transform:scale(.75);
		}
		
		20%{
			transform:scale(1);
		}
		
		40%{
			transform:scale(.75);
		}
		
		
		60%{
			transform:scale(1);
		}
		
		80%{
			transform:scale(.75);
		}
		
		100%{
			transform:scale(.75);
		}
	}
	
	
	
	
	<!----------------------------corona update ------------------------->
	
	.corona_update{
		margin:0 0 30px 0;
	}
	
	.corona_update h3{
		color:#2196f3;
	}
	
	.corona_update h1{
		font-size:2rem;
		text-align:center
	}
	
	
	<!---------------------------- Top Scroll ------------------------->

	#tpbtn{
		
		display:none;
		position:fixed;
		bottom:30px;
		right:40px;
		z-index:99;
		border:none;
		outline:none;
		background-color:black;
		color:white;
		cursor:pointer;
		padding:10px;
		border-radius:10px;
	}
	
	#tpbtn:hover{
		background-color:#aaa;
	}
	
		<!---------------------------- Responsive ------------------------->
		
		@media(max-width:768px){
			
			.main_header{
				height:700px;
				text-align:center;
			}
			
			.main_header h1{
				
				text-align:center;
				padding:0;
				width:100%;
				font-size:30px;
			}
			
		}
		
		
	
</style>