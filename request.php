<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

<?php
@ob_start();
@session_start();
          $email=$_SESSION['email'];
         $senha=$_SESSION['senha'];
          $nome=$_SESSION['nome'];

          ?>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><?php echo $nome?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="logout.php">Sair <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

      <div style="margin:80px 0 20px 0;"></div>

      
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->


        <?php
          include 'BD.php';
        
              $conn = getConnection();
              $sql="SELECT* FROM request WHERE para=? ORDER BY id DESC;" ;
              $stmt=$conn->prepare($sql);
              $stmt->bindValue(1,$email);
                $stmt->execute();
                $result=$stmt->fetchAll();

      foreach ($result as $value) {
          $de=$value['de'];
          $name=$value['nome'];
          $status=$value['status'];

          if($status=="sim"){
            $var="Cedido";
            }else{
              $var="Dar Wattsapp";
            }
            
        

        if($status==null){
            $var="Pedir Wattsapp";
            }

            $sql="SELECT* FROM usuarios WHERE email=? " ;
              $stmt=$conn->prepare($sql);
             $stmt->bindValue(1,$de);
                $stmt->execute();
                $result=$stmt->fetchAll();   // usuarios que me querem

               foreach ($result as $value) {
                  $id=$value['id'];
                  $emai=$value['email'];



                          echo "
                           <div class='container marketing'>
                   <div class='row'>      
            <a href='perf.php?ident=$id'>
            <div class='col-lg-4'> 
            <img class='rounded-circle' src='".$value['url_img']."'"."alt='Generic placeholder image' width='140' height='140'>";

            echo " <h2>".$value['nome'].",".$value['idade']."</h2>  <p>"/*  ----   */;
            echo " ".$value['estv'].",".$value['interesse']." ".$value['idade']."<p>  <p><a class='btn btn-primary btn-lg' href='requestwt.php?email=$emai&con=5&email2=$email' role=button>$var</a></p>
          </div></a></div></div>";



             }

        }

            ?>


<br>
      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          

        </div>

     


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2018 Mendax, Inc. &middot; <a href="#"></a> &middot; <a href="#">Termos</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
  </body>
</html>
