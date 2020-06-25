<?php 

$desenvolvimento=1;
date_default_timezone_set('America/Sao_Paulo');
$cfgscript="system";
$debug=0;
if ($debug==1) require_once ('system/debugmode.php');
require_once ('system/url_explode.php');
require_once ('system/controller.php');
require_once ('system/db.php');## banco de dados
function __autoload($file){
    require_once ('app/models/'.$file.'.php');
}
$explode=new url_explode();
$separa=$explode->explorer();
if( $desenvolvimento==1 ){
    $controllers=$separa[0];
    $function=$separa[1];
}
if( $desenvolvimento==0 ){
    $controllers=$separa[1];
    $function=$separa[2];
}
    if($controllers=="" and $function==""){
        $novo="index/inicio";
        $separa=explode('/', $novo);
        $controllers=$separa[0];
        $function=$separa[1];
    } 
    require_once ('app/controllers/'.$controllers.'Controllers.php');
    $cont=new controller();
    $cont->cabecalho('',$controllers);
    #monta conteúdo
    $controles=$controllers.'Controllers';
    $app=new $controles();
    $app->$function();
    #monta rodape
    #$cont->rodape();

?>