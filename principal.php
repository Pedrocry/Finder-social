<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Limer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"></a>
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

          <!-- 
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>  -->
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
        <div class="carousel-inner" > <!-- style="height: 300px" -->
          <div class="carousel-item active">
              
              
<?php
@ob_start();
@session_start();

          $email=$_SESSION['email'];
         $senha=$_SESSION['senha'];
          $nome=$_SESSION['nome'];
          include 'BD.php';

              $conn = getConnection();
              $sql="SELECT* FROM usuarios WHERE email= '$email' " ;
              $stmt=$conn->prepare($sql);
            //  $stmt->bindValue(1,30);
                $stmt->execute();
                $result=$stmt->fetchAll();

             
               foreach ($result as $value) {
          $img1=$value['url_img'];
           $img2=$value['url_img1'];
          $img3=$value['url_img2'];
          $eml=$value['email'];
          $name=$value['nome'];


        }

?>



            <div class="containe">
              <img class="img-responsive" src="<?php  echo $img1 ;?>" height="400px" width="100%" alt="Second slide">
              <div class="carousel-caption text-left">
                
               <?php  echo "<h2>".$name."</h2>" ;?>
              </div>
            </div>
          </div>

      






          <div class="carousel-item">
            <img class="second-slide" src="<?php  echo $img2 ;?>" height="400px" width="100%" alt="Second slide" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
               
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php  echo $img3 ;?>" height="400px" width="100%" alt="Second slide" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                
                
              </div>
            </div>
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
          


<?php

               //  $var_t=5;
               //   if (is_real($var_t/2))
                //{$var_t=$var_t+1;}
             
             function randon(&$v1,&$v2){
                 $v1=  rand(1, 2);
               //  $v2=  rand(1,100);
               }
               
                randon($rand, $rand2);
/*
                do{

                    randon($rand2, $rand);
                }while ($rand==$rand2); 
                  echo"Ramdom 1:  ".$rand."<br>  Ramdom2: ".$rand2;
               */ 


               // echo "<br><br>ramdom1  ".$rand;
                // echo "<br>ramdom2  ".$rand2;
                      //WHERE id IN(?,?) 

        


              $sql="SELECT* FROM usuarios";
              $stmt=$conn->prepare($sql);
             // $stmt->bindParam(1,$rand);
             // $stmt->bindParam(2,$rand2);
                $stmt->execute();
                $result=$stmt->fetchAll();

               foreach ($result as $value) {
                  $id=$value['id'];
            echo "<a href='perf.php?ident=$id'>
            <div class='col-lg-4'> 
            <img class='rounded-circle' src='".$value['url_img']."'"."alt='Generic placeholder image' width='140' height='140'>";

            echo " <h2>".$value['nome'].",".$value['idade']."</h2>  <p>"/*  ----   */;
            echo " ".$value['estv'].",".$value['interesse']." ".$value['idade']."<p>  <p>
            ";

           //   echo"<a class='btn btn-secondary' href='#' role=button'>View details &raquo;</a></p>
        //  </div></a>";


             }
?>

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
