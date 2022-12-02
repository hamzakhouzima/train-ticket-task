<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="wrapper">

            <div class="card text-center">

                <div class="image">


                    <img src="train1.jpg" width="300">
                    
                </div>


                <div class="about-product text-center">

                    <h3>COX Headphone</h3>

                    <h4>$99.<small>99</small></h4>

                    <button class="btn btn-success buy-now">Buy Now</button>

                    
                </div>
                
            </div>
            
        </div>

<footer>
  <p>Author: Hege Refsnes</p>
  <p><a href="mailto:hege@example.com">hege@example.com</a></p>
</footer>

<style>
body{

background-color:#B71C1C;
}

.wrapper{

width: 100%;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
}


.card{

height: 420px;
width: 320px;
background-color:#C62828;
border-radius: 10px;
position: relative;
overflow: hidden;
cursor: pointer;
text-align: center!important;

}

.card::before{
position: absolute;
width: 100%;
height: 100%;
content: "";
top:-50%;
background-color:#EF5350;
transform: skewY(345deg);
transition:2s ease-in;

}


.card:hover::before{
top:-70%;
transform: skewY(390deg);
}

.card .image{

position: absolute;

width: 100%;    
display: flex;
justify-content: center;
align-items: center;
}


.card .image img{

max-width: 100%;
transition: 2s ease-in;
}

.card:hover .image img{

width: 80%;
}

.about-product{

position: absolute;
color: #fff;
bottom: -50px !important;
text-align: center;
left: 20%;
transition: 2s ease-in;
}


.card:hover .about-product{

bottom: 20px !important;
}


.buy-now{

color: #fff;
background-color: #ef5350 !important;
border-color: #ef5350 !important;
width: 160px;
margin-top: 20px;
}


.buy-now:focus{

box-shadow: none;
}

.buy-now:hover{
color: #fff;
background-color: #e84040 !important;
border-color: #e84040 !important;

}

</style>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">




</body>
</html>