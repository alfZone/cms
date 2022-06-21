<?php

/**
 * @autores alf
 * @copyright 2022
 * @ver 1.0
 */

namespace app;
use classes\Database;
use classes\cms\Articles;
//use classes\authentication\Authentication;

//require __DIR__ . '/../config.php';
//require __DIR__ . '/../bootstrap.php';


class ControllerArticles{

	public function seeArticlesList($cat){
        $p['cat']=$cat;
        $artigos=new Artigos("seeArticlesOfCategorie",$p);
        echo $artigos->webService();
	}

	public function seeArticlesList2($cat){
		$p['cat']=$cat;
		$artigos=new Artigos("verArtigos2",$p);
		echo $artigos->webService();
	
		}
  
	public function error($message){
	 echo $this->msg('Error', $message);
	}

  public function msg($title, $message){
	 echo json_encode(['Title'=>$title, 'Message' => $message]);
	}
}


//$cl=new ControllerMember();
//$cl->index();message
//echo "ole";
?>