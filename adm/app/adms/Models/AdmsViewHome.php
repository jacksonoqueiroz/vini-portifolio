<?php

namespace App\adms\Models;

if(!defined('R4F5CC')){
    header("Location: /");    
    die("Erro: Página não encontrada!");
}

/**
 * Class
 */
class AdmsViewHome extends Conn
{
	private object $conn;
	private $dados;

	public function viewHome()
	{
			$this->conn = $this->connect();
			$this->viewCabecalho();
			$this->viewTopo();
			$this->viewSobre();
			$this->viewSoft();
			$this->viewCompetencias();
			$this->viewFormacao();
			$this->viewSocias();
			$this->viewCursos();
			$this->viewGaleriaProf();
			$this->viewContato();
			return $this->dados;
	}

	private function viewCabecalho(){
		$query_cabecalho = "SELECT titulo_pagina, img_favicon FROM homes_cabecalho LIMIT 1";
			$result_cabecalho = $this->conn->prepare($query_cabecalho);
			$result_cabecalho->execute();
			$this->dados['cabecalho'] = $result_cabecalho->fetch();
	}

	private function viewTopo(){
			$query_home_topo = "SELECT titulo_topo, frase, autor_frase, imagem_topo, imagem_topo_sm, imagem_topo_lt FROM homes_topos LIMIT 1";
			$result_home_topo = $this->conn->prepare($query_home_topo);
			$result_home_topo->execute();
			$this->dados['topo'] = $result_home_topo->fetch();
	}

	private function viewSobre(){
			$query_home_sobre = "SELECT titulo_sobre, nome, descric_sobre, imagem_sobre, criado_em FROM  homes_sobre LIMIT 1";
			$result_home_sobre = $this->conn->prepare($query_home_sobre);
			$result_home_sobre->execute();
			$this->dados['sobre'] = $result_home_sobre->fetch();
	}
	private function viewSoft(){
			$query_home_soft = "SELECT titulo_softwares, icone_soft_1, desc_soft_1, icone_soft_2, desc_soft_2, icone_soft_3, desc_soft_3, icone_soft_4, desc_soft_4 FROM  homes_sotwares LIMIT 1";
			$result_home_soft = $this->conn->prepare($query_home_soft);
			$result_home_soft->execute();
			$this->dados['softwares'] = $result_home_soft->fetch();
	}
	private function viewCompetencias(){
			$query_home_comp = "SELECT titulo_competencia, desc_comp_1, desc_comp_2, desc_comp_3, desc_comp_4, desc_comp_5 FROM homes_competencias LIMIT 1";
			$result_home_comp = $this->conn->prepare($query_home_comp);
			$result_home_comp->execute();
			$this->dados['competencias'] = $result_home_comp->fetch();
	}
	private function viewFormacao(){
			$query_home_formacao = "SELECT titulo_formacao, ano_1, curso_1, ano_2, curso_2, ano_3, curso_3, ano_4, curso_4 FROM homes_formacao LIMIT 1";
			$result_home_formacao = $this->conn->prepare($query_home_formacao);
			$result_home_formacao->execute();
			$this->dados['formacao'] = $result_home_formacao->fetch();
	}
	private function viewSocias(){
			$query_home_sociais = "SELECT titulo_sociais, icone_sociais_1, link_sociais_1, icone_sociais_2, link_sociais_2, icone_sociais_3, link_sociais_3, icone_sociais_4, link_sociais_4 FROM homes_sociais LIMIT 1";
			$result_home_sociais = $this->conn->prepare($query_home_sociais);
			$result_home_sociais->execute();
			$this->dados['sociais'] = $result_home_sociais->fetch();
	}
	private function viewCursos(){
			$query_home_cursos = "SELECT titulo_curso, desc_curso_1, desc_curso_2, desc_curso_3, desc_curso_4, desc_curso_5 FROM homes_cursos LIMIT 1";
			$result_home_cursos = $this->conn->prepare($query_home_cursos);
			$result_home_cursos->execute();
			$this->dados['cursos'] = $result_home_cursos->fetch();
	}
	private function viewGaleriaProf(){
			$query_galeria_profissional = "SELECT titulo_gal_prof, img_gal_prof_1, desc_gal_prof_1, img_gal_prof_2, desc_gal_prof_2, img_gal_prof_3, desc_gal_prof_3, img_gal_prof_4, desc_gal_prof_4, img_gal_prof_5, desc_gal_prof_5, img_gal_prof_6, desc_gal_prof_6 FROM galeria_profissional";
			$result_galeria_profissional = $this->conn->prepare($query_galeria_profissional);
			$result_galeria_profissional->execute();
			$this->dados['galeria_profissional'] = $result_galeria_profissional->fetch();		
			
	}
	private function viewContato(){
			$query_contato = "SELECT titulo_contato, subtitulo_contato, email_contato, telefone_contato, observacao_contato FROM homes_contato";
			$result_contato = $this->conn->prepare($query_contato);
			$result_contato->execute();
			$this->dados['contato'] = $result_contato->fetch();		
			
	}
	
	
}