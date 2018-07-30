<head>
  <title>Imagem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 
     <link href="css/navbar-top.css" rel="stylesheet">
  

  <script src="js/bootstrap.min.js"></script>


<script type="text/javascript">
function img_2() {
  alert('Nos envie agora a segunda imagem :-)')
}

function img_3() {
  alert('E agora a terceira e utima imagem :-)')
}


</script>




</head>
  
<?php
@ob_start();
@session_start();

@$_SESSION['img'];

  if (isset($_SESSION['img'])) {

      if ($_SESSION['img']==1) {
        
   echo "<script>img_2()</script>";
      }
        if ($_SESSION['img']==2) {
        
   echo "<script>img_3()</script>";
      }

  }else{echo"";}


?>


  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4" style="height: 80px">
      <a class="navbar-brand" href="#">Limer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1 style="font-size: 30px; text-align:center;">Envie uma foto para o perfil</h1>

    </main>




          <form style=" margin-top:20px;" name="form_cad" onSubmit="return enviar();" action="img-perf.php"  method="post" enctype="multipart/form-data">
<center><input style="margin-left:0px; BACKGROUND: #9fbfef; border: 0px #000000 solid; WIDTH: auto; COLOR: #000000; HEIGHT: 80px"  type="file" name="image"></center> <br>



<center>
<input style="border:2px;background-color:#cc3; height:50px; width:70%; margin-top: 10px" class="form_submit" style=" " type="submit" value="cadastrar"/>
</form>
</center>





  </body>
</html>
