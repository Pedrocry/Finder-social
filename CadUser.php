<?php
 include 'BD.php';
 class CadUser{
 	private $nome;
 	private $idade;
 	private $fone;
	private $local;
	private $genero;
	private $estv;
	private $interesse;
	private $descricao;
	private $email;
	private $senha;


	public function setreceberLogin($nome,$idade,$fone,$local,$genero,$estv,$interesse,$descricao,$email,$senha){


		$var1='';
		$var2='';

			$conn = getConnection();
/*
			$sql='SELECT* FROM usuarios WHERE email=? ' ;
             $stmt=$conn->prepare($sql);
             $stmt->bindParam(1,$email);
                $stmt->execute();
                $result=$stmt->fetchAll();
            foreach ($result as $value) {
          				$em=$value['email'];
          			}

                  if ($em!='' or $em!=null) {

                  echo "<script>back()</script>";
                  exit;


                  }
             */

$sql ='INSERT INTO usuarios (nome,idade,watts,local,genero,estv,interesse,descricao,url_img,email,senha,id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)';  //tm pode ser* : desc; : qtd;:valor

				$stmt = $conn->prepare($sql);    //´podemos passar apenas a value $pdo
				$stmt->bindParam(1,$nome);    // * pode ser tbm :desc
				$stmt->bindParam(2,$idade);
				$stmt->bindParam(3,$fone);   // * :qtd
				$stmt->bindParam(4,$local); 
				$stmt->bindParam(5,$genero);    // * pode ser tbm :desc
				$stmt->bindParam(6,$estv);   // * :qtd
				$stmt->bindParam(7,$interesse);
				$stmt->bindParam(8,$descricao);
				$stmt->bindParam(9,$var1);
				$stmt->bindParam(10,$email);    // * pode ser tbm :desc
				$stmt->bindParam(11,$senha);   // * :qtd   // * :qtd
				$stmt->bindParam(12,$var2);


			if ($stmt->execute()) {
				echo'Sucesso!!!';
			}else{echo'Falha!!!';}

 	}





}

?>