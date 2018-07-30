
<?php
 include 'BD.php';
 class CadUser{
 	private $nome;
 	private $idade;
	private $local;
	private $genero;
	private $estv;
	private $interesse;
	private $email;
	private $senha;


	public function setreceberLogin($nome,$idade,$local,$genero,$estv,$interesse,$email,$senha){


		$var1='';
		$var2='';

			$conn = getConnection();

		$sql ='INSERT INTO usuarios (nome,idade,local,genero,estv,interesse,url_img,email,senha,id) VALUES(?,?,?,?,?,?,?,?,?,?)';  //tm pode ser* : desc; : qtd;:valor

				$stmt = $conn->prepare($sql);    //´podemos passar apenas a value $pdo
				$stmt->bindParam(1,$nome);    // * pode ser tbm :desc
				$stmt->bindParam(2,$idade);   // * :qtd
				$stmt->bindParam(3,$local); 
				$stmt->bindParam(4,$genero);    // * pode ser tbm :desc
				$stmt->bindParam(5,$estv);   // * :qtd
				$stmt->bindParam(6,$interesse);
				$stmt->bindParam(7,$var1);
				$stmt->bindParam(8,$email);    // * pode ser tbm :desc
				$stmt->bindParam(9,$senha);   // * :qtd   // * :qtd
				$stmt->bindParam(10,$var2);


			if ($stmt->execute()) {
				echo'Sucesso!!!';
			}else{echo'Falha!!!';}

 	}

}

?>