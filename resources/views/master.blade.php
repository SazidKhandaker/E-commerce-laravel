<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
@include('header');
@yield('content');



</body>



<style>
    .h1, .h2, .h3, h1, h2, h3 {
        margin-top: 20px;
        margin-bottom: 30px;
    }
    .loginpage{

        height: 450px;
        padding-top: 120px;

    }

    img.slider-photo{

        height: 400px !important; ;

    }
    .custom-product{

        height: 700px;
    }
    .slider-text{

        background-color: #718096 !important;
    }
    .product-img{

        height: 170px;
    }
    .product-item{

    }
    .product-item{

        float: left;
        width: 25%;
    }
    .wrape{

        margin: 30px;
    }
    .detail-img{
        padding: 10px;

        height: 220px;
    }
    .search-box{
        width: 500px !important;

    }
    .list-divider{

        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .footer {
       text-align: center;
        padding: 10px;
    }
    .dop{
   margin-bottom: 20px;

    }
 .passd{

     margin-bottom: 20px;

 }
 .center{
     margin-left: 53px;

     margin-top: 10px;
 }
    h1{
       color: #cccccc;
        text-align: center;
    }
</style>

<footer>
    <div class="footer">
        <p>Sazid Khandaker @2021</p>
    </div>
</footer>
</html>
