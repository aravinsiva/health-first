
<title>Personalized Fitness Program</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">



<header class="masthead text-center text-white d-flex">
<div class="container my-auto">
<div class="row">
<div class="col-lg-10 mx-auto">
<h1 class="text-uppercase">
<strong>Input  Information To Start Calculating</strong>
</h1>
<hr>
</div>
<div class="col-lg-8 mx-auto">

<h2>



<?php
    
    
    
    
    if (isset ($_POST["weight"]) && isset ($_POST["height"])){
        
        $bmi= ($_POST["weight"]/$_POST["height"])/$_POST["height"] ;
        echo "Your BMI:  " .$bmi. "<br /><br />";
        
        
        if ($bmi<=18){
            echo "Your Body Analysis: Underweight";
        }
        
        elseif ($bmi<=24){
            echo "Your Body Analysis: Normal";
        }
        
        elseif ($bmi<=29){
            echo "Your Body Analysis: Overweight";
        }
        
        
        elseif ($bmi<=39){
            echo "Your Body Analysis: Obese";
        }
        
        elseif ($bmi>39){
            echo "Your Body Analysis: Extermely Obese";
        }
        
        
       
    
        
        
        
        

        
        
    }
    
    
    
    
    
    
    ?>

</h2><br /><br />

<form method="get" action="wwww.google.com">
<button type="submit">Find A Perfect Diet And Excercise Plan For You</button>
</form>


</div>
</div>
</div>

</h2>


</header>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>

</body>

</html>


















