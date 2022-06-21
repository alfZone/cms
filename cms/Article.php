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
 
  public $instrucaoSQL = array( "seeArticlesOfCategorie" => 'SELECT `codArticle`, cmsArticles.`codCategorie`, `resume`, `description`, `title`, cmsArticles.`createdStamp`, cmsArticles.`owne`, cmsArticles.`active` FROM `cmsArticles` 
                                                             inner join cmsArticlesCategorie on cmsArticlesCategorie.codCategorie=cmsArticles.codCategorie 
                                                             WHERE cmsArticlesCategorie.codCategorie=:cat and cmsArticles.`active`=1',
                              "verArtigos2" => 'SELECT `codArticle`, cmsArticles.`codCategorie`, `resume`, `description`, `title`, cmsArticles.`createdStamp`, cmsArticles.`owne`, cmsArticles.`active` FROM `cmsArticles` 
                                                inner join cmsArticlesCategorie on cmsArticlesCategorie.codCategorie=cmsArticles.codCategorie 
                                                WHERE cmsArticlesCategorie.codCategorie=:cat and cmsArticles.`active`=1',
                              );

  
  
 
 public function doAction($accao, $parameters=""){
    switch ($accao){
      case "adicionarAlbum":
            $this->execQuery($accao, $parameters);
            break;
      case "seeArticlesOfCategorie":
            $this->getQuery($accao, $parameters);
            break;
      default:
            $this->autoQuery($accao, $parameters);
            break;
    }
  }
  
  
  
  
  
}
  
   
?>
