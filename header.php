<head>
  <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Bob's Burgers</title>
  <!-- Compiled and minified CSS -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

  <style type="text/css">
     body{
       color:#a6a6a6;
     }
     .brand{
       background: #cbb09c !important;
     }
     .brand-text{
       color: #cbb09c !important;
     }
     .title-brand{
       font-size: 31px;
     }
     form{
       max-width: 460px;
       margin: 20px auto;
       padding: 20px;
     }
     .burgers{

       height:350px;

     }
     .nav-top{
       display:flex;
       justify-content: space-between;
       align-content: center;
       padding:15px;
       flex-wrap:wrap;
     }
     .btn{
       color:white;
       height:40px;
     }
     .btn:hover{
       color:white;
     }
     .card-body ul{
       list-style-type: none;
       padding-top:-40px;
     }
     .cards{
       margin:25px 0;
     }
     .order_form{
       display:flex;
       flex-direction: column;
       padding:55px;
     }
     .order_form label{
       font-size: 12px;
     }
     .order_form input{
       border-top:none;
       border-right: none;
       border-left: none;
       border-bottom:solid gray 1px;
       margin-bottom: 20px;

     }
     .order_form .btn{
       margin: 0 auto;
       border:none;
     }
     .err{
       margin-bottom:10px;
     }

  </style>
</head>
<body class="bg-light">
  <nav class="bg-white">
    <div class="container nav-top">
      <a href="index.php" class="title-brand brand-text">Bobs Burger's</a>
      <a href="add.php" class = "btn brand">ADD A BURGER</a>
    </div>
  </nav>
