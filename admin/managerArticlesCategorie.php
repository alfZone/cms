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
$table->setTitulo("Categories of Articles");
//`codCategorie`, `father`, `categorie`, `createdStamp`, `owne`, `active`

$table->preparaTabela("cmsArticlesCategorie");
$table->setFieldsAtive("codCategorie,categorie, father, active",'see');
$table->setFieldsAtive("categorie, father, active", 'new');
$table->setFieldsAtive("categorie, father, active", 'edt');
$table->setFieldsAtive("codCategorie,categorie, father, active, owne, createdStamp", 'csv');

//$table->setLabel('id',"#ID");
//$table->setLabel('tipo',"Tipo de Utilizador");


//$table->setAutentication("a");

//$table->setCampoPass("senha",0, "md5");
//$table->setCampoLista("Presidente",1," SELECT `id`,`Nome` FROM `PAPVotacaoPresidenteMesa` ORDER BY `id`");
//$table->setCampoLista("id_C",1,"SELECT `id_C`, `Nome` FROM `TicketsClientes` order by `Nome`");
$table->setFieldList("father",1,"SELECT `codCategorie`, `categorie` FROM `cmsArticlesCategorie` ORDER by `categorie`");
//$table->setCampoLista("Ativo",2,"0=>Desativo,1=>Ativo");
//$table->setCampoLista("tipoEvento",2,"1=>Tertúlia,2=>Convocatória");
//$table->setCampoLista("Encerrado",2,"1=>Já decorreu,2=>Inscrições Abertas,3=>Vai decorrer");
//$table->setCampoLista("destaque",2,"1=>Sim,0=>Não");
//$table->setCampoImagem("relative_path_cache","../fotos/thumbs/",30);
//$table->setPaginaVer("ativarVotacao");
//$table->setLabel('id_votacao',"#ID");
//$table->setLabel('nome',"Nome");
//$table->setLabel('data',"Data de Inicio");
//$table->setLabel('Encerrada',"Data de Encerramento"); 
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