<?php namespace App\Controllers;

use App\Libraries\lb_comum; //importa uma lib externa.

class TesteSaida extends BaseController
{
	public function index()
	{
		//session_start();
		//$uri = service('uri');
		//$id = $uri->getSegment(3);

		$comum = new lb_comum(); // roda uma lib externa que pode ser importada no use
		//$comum->teste();
		
		echo "teste Saida";
		//var_dump($_SESSION);
		
		$a = model('AgendaModel');
		$x = $a->findAll();
		var_dump($x);

		$y = $a->funcao_teste();
		var_dump($y);
		
		//$retorno = $a->funcao_teste();
		//$data["retorno1"] = $retorno; // para retornar para o view qualquer variavel.
		$data = [];
		return view('teste',$data);
	}

	public function teste2()
	{
		$a = model('AgendaModel');
		$x =
		[
			"Nome" => "BARUFFI",
			"Endereco" => "XYT",
			"Telefone" => "12312312"
		];
		$a->save($x);
		var_dump($a->findAll());
		//var_dump($_SESSION);
	}
	//--------------------------------------------------------------------

}
