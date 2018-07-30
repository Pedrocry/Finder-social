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
              <a class="nav-link" href="request.php">Requisições <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="principal.php">Home <span class="sr-only">(current)</span></a>
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

      <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        		   	 <?php
          include 'BD.php';

              $conn = getConnection();
              $ident=$_GET['ident'];
              $var="";
              $status=null;

              $sql="SELECT* FROM usuarios WHERE id= '$ident' " ;
              $stmt=$conn->prepare($sql);
            //  $stmt->bindValue(1,30);
                $stmt->execute();
                $result=$stmt->fetchAll();

             
               foreach ($result as $value) {
					$img1=$value['url_img'];
					 $img2=$value['url_img1'];
					$img3=$value['url_img2'];
					$name=$value['nome'];
          $watts=$value['watts'];
					$eml=$value['email'];
					$idade=$value['idade'];
          $descricao=$value['descricao'];
					$interesse=$value['interesse'];

				}

				 $sql="SELECT* FROM request WHERE de=? AND para=?" ;
              $stmt=$conn->prepare($sql);
              $stmt->bindParam(1,$email);
                $stmt->bindParam(2,$eml);
                $stmt->execute();
                $result=$stmt->fetchAll();

             
               foreach ($result as $value) {
					$de=$value['de'];
					$para=$value['para'];
					$status=$value['status'];
					
				}

				if(@$de==$email and $para==$eml){
					if($status=="nao" or $status==''){
						 $var="Pedido pendente";
						}
					if($status=="sim"){
						$var=$watts;
						}
						
				}

				if($status==null){
						$var="Pedir Wattsapp";
						}

					
            ?>


        <div class="carousel-inner" > <!-- style="height: 300px" -->
          <div class="carousel-item active">


            <div class="container">
              <img class="img-responsive" src="<?php  echo $img1 ;?>" height="100%" width="100%" alt="Second slide">
              <div class="carousel-caption text-left">
                
               <?php  echo "<h2>".$name."</h2>" ;?>
              </div>
            </div>
          </div>

      

          <div class="carousel-item">
            <img class="second-slide" src="<?php  echo $img2 ;?>" alt="Second slide">
        
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php  echo $img3 ;?>" alt="Third slide">

          </div>


          
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          

<div class="jumbotron"  style="width: 90%">
        <div class="container">
          <h2 class="display-6"><?php  echo $name ;?></h2>
          <p><strong>Descrição:</strong> <?php  echo $descricao ;?></p>
          <p><strong>Interesses:</strong> <?php  echo $interesse ;?></p>
          <p><strong>Idade: </strong> <?php  echo $idade ;?></p>
          <?php  ?>
          <p> <?php echo" <a class='btn btn-primary btn-lg' href='requestwt.php?email=$eml&email2=$email&nome=        urlencode(urlencode($nome)) ' role='button'>   $var  </a> "; ?>  </p>
        </div>
      </div>


        </div>

     


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2018 Mendax, Inc. &middot; <a href="#"></a> &middot; <a href="#">Terms</a></p>
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
