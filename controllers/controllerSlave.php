<?php
//require_once("models/ClassConexao.php");

/******************************************
 Verifica se houve uma solicitação AJAX, 
 verificando se o parâmetro "method" existe.
******************************************/
if(isset($_REQUEST['method'])) {

    $temperatura = rand(0, 100);
    $umidade = rand(0, 100);
	$luminosidade = rand(0, 100);
	$ph = rand(0, 100);
	$o2 = rand(0, 100);
	$ce = rand(0, 100);
	$method = $_REQUEST['method'];
	$param = $_REQUEST['param'];

	$obj = new Controller();

	if ($method == 'insertDB') {
		$obj->insertDB($temperatura, $umidade, $luminosidade, $ph, $o2, $ce);
	} elseif($method == 'selectDB') {
		$obj->selectDB($param);
	}
	
}

class Controller {
	
	private $con;
	
	public function __construct() {
		
		// Cria uma instância para realizar a conexão com o banco.
		$this->con = new Models\ClassConexaoSlave();
    }
    
	/************************************************
	* Nome: insertDB
	* Descrição: Realiza a inserção das informação do 
	* 	usuário Temperatura, Umidade e Luminosidade no banco de Dados.
	* 	Também foi definida o comando SQL de inserção.
	* Retorno: JSON
	************************************************/
	public function insertDB($temperatura, $umidade, $luminosidade, $ph, $o2, $ce) {
		
		$json;
		$sql = "INSERT INTO ambient(temperatura, umidade, luminosidade, ph, o2, ce) VALUES (". $temperatura .",". $umidade .", ". $luminosidade .",". $ph .",". $o2 .",". $ce .")";
		if($this->con->execute($sql)) {
			$json = array(
				'error' => 'false',
				'msg' => 'Inserido com Sucesso!'
			);
		}
		else {
			$json = array(
				'error' => 'true',
				'msg' => 'Não Pode ser Cadastrado!'
			);
		}
		
		echo json_encode($json);
	}
	
	/************************************************
	* Nome: selectDB
	* Descrição: Seleciona as informações de todos os
	* 	dados dos usuários cadastrados no banco.
	* 	Também monta o html das linhas da tabela contendo
	* 	as informações do usuário.
	* Retorno: String (html)
	************************************************/
	public function selectDB($param=null) {
		
		if($param == null) {
			$sql = "SELECT * FROM ambient ORDER BY data DESC LIMIT 10";
			
			$result = $this->con->execute($sql);
			
			$array = array();

			if ($result->num_rows > 0) {
				
				while($row = $result->fetch_assoc()) {
					
					$array[] = array(
						'error' => 'false',
						'data' => $row['data'],
						'temperatura' => $row['temperatura'],
						'umidade' => $row['umidade'],
						'luminosidade' => $row['luminosidade'],
						'o2' => $row['o2'],
						'ph' => $row['ph'],
						'ce' => $row['ce'],
						'msg' => 'Foi'
					);
					
				}
			} 
			else {
				$array[] = array(
					'error' => 'true',
					'msg' => 'Não pode ser buscado'
				);
			}
			
			echo json_encode($array);
		}
		else {
			$sql = "SELECT $param, data FROM ambient ORDER BY data DESC LIMIT 10";

			$result = $this->con->execute($sql);
			
			$array = array();
			if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {

					$array[] = array(
						'error' => 'false',
						'data' => $row['data'],
						'variavel' => $row[$param],
						'msg' => 'Foi'
					);

				}
			} 
			else {
				$array[] = array(
					'error' => 'true',
					'msg' => 'Não pode ser buscado'
				);
			}

			echo json_encode($array);
		}
	}
}
?>