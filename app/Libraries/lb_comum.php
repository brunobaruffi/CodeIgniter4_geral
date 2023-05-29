<?php 
 
namespace App\Libraries;
 
class lb_comum {
    public function __construct()
    {

    }
	public function teste(){
		echo "okokokok";
	}
    public function tipos_alertas($flag){
		if($flag == 'ok'){
			$cl = 'alert alert-success';
		}else if($flag == 'er'){
			$cl = 'alert alert-danger';
		}
		return $cl;
	}

	public function textos_alertas($av){
		if($av == 'logout'){
			$ret['mensagem'] = 'Saida concluida.';
			$ret['flag_mensagem'] = 'ok';
		}
		if($av == 'alt'){
			$ret['mensagem'] = 'Alterado com sucesso.';
			$ret['flag_mensagem'] = 'ok';
		}
		if($av == 'salv'){
			$ret['mensagem'] = 'Salvo com sucesso.';
			$ret['flag_mensagem'] = 'ok';
		}
		if($av == 'blanc'){
			$ret['mensagem'] = 'Campos em branco.';
			$ret['flag_mensagem'] = 'er';
		}
		if($av == 'err'){
			$ret['mensagem'] = 'Verifique o formulario e tente novamente.';
			$ret['flag_mensagem'] = 'er';
		}
		if($av == 'err_per'){
			$ret['mensagem'] = 'Erro de permissão ou de datas, verifique os dados cadastrados.';
			$ret['flag_mensagem'] = 'er';
		}
		if($av == 'err_sis'){
			$ret['mensagem'] = 'Erro. Entre em contato com seu administrador.';
			$ret['flag_mensagem'] = 'er';
		}
		if($av == 'err_login'){
			$ret['mensagem'] = 'Login ou senha incorreto, tente novamente.';
			$ret['flag_mensagem'] = 'er';
		}
		if($av == 'err_acao'){
			$ret['mensagem'] = 'Ação não permitida	.';
			$ret['flag_mensagem'] = 'er';
		}
		if($av == 'exec'){
			$ret['mensagem'] = 'Executada com sucesso.';
			$ret['flag_mensagem'] = 'ok';
		}		
		return $ret;
	}

	function data_br_ing($data){ //converte data br para data ing
		if($data != ""){
		$d = explode("/", $data);
		return $d[2] . "-" . $d[1] . "-" . $d[0];	
		}else{
			return "";
		}
	}

	function data_ing_br($data){ // converte data ing para br
		if($data != ""){
		$d = explode("-", $data);
		return $d[2] . "/" . $d[1] . "/" . $d[0];
		}else{
			return "";
		}	
	}

	function reindexar_vetor($vetor){
		$saida = array();
		$c = 0;
		foreach ($vetor as $valor) {
			$saida[$c] = $valor;
			$c++;
		}
		return $saida;
	}

	function comparar_permissoes($permissao){
		$array_permissoes = $_SESSION["job"]["permissoes"];
		$controle = 0;
		for($c=0;$c<count($array_permissoes);$c++){
			if($array_permissoes[$c] == $permissao){
				$controle = 1;
			}
		}
		if($controle == 1){
			return true;
		}else{
			return false;
		}
	}

}