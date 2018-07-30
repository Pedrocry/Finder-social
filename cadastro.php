<head>
  <title>Locadora</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 
     <link href="css/navbar-top.css" rel="stylesheet">
  

  <script src="js/bootstrap.min.js"></script>
</head>
  

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4" style="height: 80px">
      <a class="navbar-brand" href="#">Finde</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1 style="font-size: 30px">Digite seus dados</h1>

    </main>



<form method="post" action="Cadastrausuario.php" >
  <div class="row">
    <div class="col">
      <h4 style="margin-left: 20px;">Nome</h4>
      <input style="margin: 0 20;" type="text" class="form-control" name="nome" placeholder="Nome">
    </div><br>
     </div>

       <div class="row">
    <div class="col">
      <h4 style="margin: 20 20;">Idade</h4>
      <input  style="margin: 0 20;" type="text" class="form-control" name="idade" placeholder="Anos">
    </div>

  </div>

    <div class="row">
    <div class="col">
      <h4 style="margin: 20 20;">Wattsap/telefone</h4>
      <input  style="margin: 0 20;" type="text" class="form-control" name="fone" placeholder="Numero">
    </div>

  </div>


    <div class="row">
     <div class="col">
      <h4 style="margin-left: 20px;">Inserir localização</h4>
      <input style="margin: 0 20;" type="text" class="form-control" name="local" placeholder="Estado/Bairro">
    </div><br>
     </div>

<br>

  <h4 style="margin-left: 20px;">Eu sou</h4><br>
  <div class="row">
     <div class="col">
      <h5 style="margin: 0 0 0 20;">Homem</h5>
<input style="margin: 10 0 10 30;float:left;" style=" " type="radio" name="genero" value="Homem">
    </div>

      <div class="col">
      <h5 style="margin: 0 0;">Mulher</h5>
<input style="margin: 10 0 10 10;float:left;" style=" " type="radio" name="genero" value="Mulher">
    </div>


</div>

<br>

     <h4 style="margin-left: 20px;">Estado civil</h4><br>
  <div class="row">
     <div class="col">
      <h5 style="margin: 0 0 0 20;">Solteiro</h5>
<input style="margin: 10 0 10 30;float:left;" style=" " type="radio" name="estv" value="Solteiro">
    </div>

      <div class="col">
      <h5 style="margin: 0 0;">Namorando</h5>
<input style="margin: 10 0 10 10;float:left;" style=" " type="radio" name="estv" value="Namorando">
    </div>

      <div class="col">
      <h5 style="margin: 0 0;">Casado</h5>
<input style="margin: 10 0 10 10;float:left;" style=" " type="radio" name="estv" value="Casado">
    </div>

</div>




     <h4 style="margin-left: 20px;">Interesses</h4>
  <div class="row">


     <div class="col">
      <h5 style="margin: 0 0 0 20;">Conversar</h5>
<input style="margin: 10 0 10 30;float:left;" style=" " type="radio" name="interesse" value="Conversar">
    </div>

      <div class="col">
      <h5 style="margin: 0 0;">Namorar</h5>
<input style="margin: 10 0 10 10;float:left;" style=" " type="radio" name="interesse" value="Namorar">
    </div>

      <div class="col">
      <h5 style="margin: 0 0;">Amizade</h5>
<input style="margin: 10 0 10 10;float:left;" style=" " type="radio" name="interesse" value="Amizade">
    </div>

</div>

 <div class="row">
    <div class="col">
      <h4 style="margin-left: 20px;">Descreva você em poucas palavras</h4>
      <input style="margin: 0 20;" type="text" class="form-control" name="desc" placeholder="Descrição">
    </div><br>
     </div>
       <div class="row">
    <div class="col">
      <h4 style="margin: 20 20;">Email</h4>
      <input style="margin: 20 20;" type="text" class="form-control" name="email" placeholder="Email">
    </div>
     <div class="col">
      <h4 style="margin: 20 20 ;">Senha</h4>
      <input style="margin: 20 20;" type="text" class="form-control" name="senha" placeholder="Senha">
    </div><br>
     </div>


          <div class="row">
            <center>
    <input style="border:2px;background-color:#cc3; height:50px; width:70%; margin: 15px 0 0 130px" class="form_submit" style=" " type="submit" value="cadastrar"/></center>
  </div>
  </form>


  </body>
</html>
