<?php
//@session_start();
ini_set("error_reporting", E_ALL);

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../autoload.php';
//require __DIR__ . '/../bootstrap.php';
//use classes\authentication\Authentication;
//use classes\db\Database;
use classes\db\TableBD;

$table= new TableBD();
$table->setTemplate(_CAMINHO_MANUTENCAO . "tables.html");
//$tabela->setTemplate("../classes/db/TableBD.html");
$table->setTitulo("Articles");
//`codArticle`, `codCategorie`, `resume`, `description`, `title`, `createdStamp`, `owne`, `active`

$table->prepareTable("cmsArticles");
$table->setFieldsAtive("codArticle,codCategorie,resume, description, title, active",'see');
$table->setFieldsAtive("resume,codCategorie, description, title, active", 'new');
$table->setFieldsAtive("resume,codCategorie, description, title, active", 'edit');
$table->setFieldsAtive("resume,codCategorie, description, title, active", 'csv');

//$table->setLabel('id',"#ID");
//$table->setLabel('tipo',"Tipo de Utilizador");


//$table->setAutentication("a");

//$table->setCampoPass("senha",0, "md5");
$table->setFieldList("codCategorie",1,"SELECT `codCategorie`, `categorie` FROM `cmsArticlesCategorie` ORDER by `categorie`");
//$table->setFieldList("Ativo",2,"0=>Desativo,1=>Ativo");
//$table->setFieldList("tipoEvento",2,"1=>Tertúlia,2=>Convocatória");
//$table->setFieldList("Encerrado",2,"1=>Já decorreu,2=>Inscrições Abertas,3=>Vai decorrer");
//$table->setFieldList("destaque",2,"1=>Sim,0=>Não");
//$table->setCampoImagem("relative_path_cache","../fotos/thumbs/",30);
//$table->setPaginaVer("ativarVotacao");
//$table->setHTMLid("votacaot", $texto);
//$table->setLabel('Presidente',"Presidente Eleitoral");
//$table->setLabel('Encerrado',"Estado");  
//$table->setCriterio("type='video'");
//$table->setOrdem("title");
//$table->preparaSQLparaAccao('novo');
//$table->fazlista();
//$table->includes(); 
//$table->formulario();
$table->showHTML();
 
 
 //echo "aqui";  

?>
