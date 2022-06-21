<?php

/**
 * @autores alf
 * @copyright 2022
 * @ver 1.0
 */

namespace classes\cms;
use classes\db\Database;
use classes\db\LayerDB;


ini_set("error_reporting", E_ALL);


class Article extends LayerDB{
 
  public $instrucaoSQL = array( "verArtigos" => 'SELECT `codArtigo`, artigos.`codCategoria`, `Resumo`, `Descricao`, `Titulo`, artigos.`createdStamp`, artigos.`owne`, 
                                                 artigos.`active` FROM `artigos` 
                                                 inner join artigosCategorias on artigosCategorias.codCategoria=artigos.codCategoria 
                                                 WHERE artigosCategorias.codCategoria=:cat and artigos.`active`=1',
                              "verArtigos2" => 'SELECT `codArtigo`, artigos.`codCategoria`, `Resumo`, `Descricao`, `Titulo`, artigos.`createdStamp`, artigos.`owne`, 
                                                artigos.`active` FROM `artigos` 
                                                inner join artigosCategorias on artigosCategorias.codCategoria=artigos.codCategoria 
                                                WHERE artigosCategorias.codCategoria=:cat and artigos.`active`=1',
                              );

  
  
 
 public function doAction($accao, $parameters=""){
    switch ($accao){
      case "adicionarAlbum":
            $this->execQuery($accao, $parameters);
            break;
      case "verArtigos":
            $this->getQuery($accao, $parameters);
            break;
      default:
            $this->autoQuery($accao, $parameters);
            break;
    }
  }
  
  
  
  
  
}
  
   
?>
