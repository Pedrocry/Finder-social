<script type="text/javascript">
function back() {
	alert('Pedido enviado!!! :-)')
window.history.go(-1);


}

function back_2() {
	alert('Pedido aceito!!! :-)')
window.history.go(-1);


}

</script>

<?php
 include 'BD.php';
 $conn = getConnection();
@$email=$_GET['email'];// ela
@$con=$_GET['con'];    // amnada  // outro send
@$email2=$_GET['email2']; // eu
@$nome=$_GET['nome'];

$req=false;
		
echo $email2."  ".$email."  ".$nome."  ".$con; 

if ($con!=5) {   /// pedir
	
		 $sql="SELECT* FROM request WHERE de=? " ;
              $stmt=$conn->prepare($sql);
             $stmt->bindValue(1,$email2);
                $stmt->execute();
                $result=$stmt->fetchAll();

               foreach ($result as $value) {
                  $de=$value['de'];
                  $para=$value['para'];

                  if ($de==$email2 and $para==$email) {
                  echo"Requisição ja enviada!!!";
                  $req=true;
                  }
              }
			

		$var2='nao';
	if ($req==false) {
		$sql ='INSERT INTO request (de,para,status,nome,id) VALUES(?,?,?,?,?)';

				$stmt = $conn->prepare($sql);   //´podemos passar apenas a value $pdo
				$stmt->bindParam(1,$email2); 
				$stmt->bindParam(2,$email); 
				$stmt->bindParam(3,$var2);    // * pode ser tbm :desc
				$stmt->bindParam(4,$nome); 
				$stmt->bindParam(5,$var2);   // * :qtd 


			if ($stmt->execute()) {
				// echo'Sucesso!!!';
			}else{echo'Falha!!!';}
	}	
 // echo"Requisição ja enviada!!!";

 echo "<script>back()</script>";

}



if ($con==5){  // ceder watts

$sql="UPDATE request SET status=? WHERE de=? and para=?"; 
$stmt = $conn->prepare($sql);   //´podemos passar apenas a value $pdo
				$stmt->bindValue(1,"sim");
				$stmt->bindParam(2,$email); 
				$stmt->bindParam(3,$email2); 

				if ($stmt->execute()) {
				// echo'Sucesso_2!!!';
				 echo "<script>back_2()</script>";
			}else{echo'Falha!!!';}




}



?>