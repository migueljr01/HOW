<!doctype html>
<?php
date_default_timezone_set('America/Sao_Paulo');
$debug=1;
if ($debug==1) require_once ('../system/debugmode.php');
require_once ('../system/url_explode.php');
require_once ('../app/models/quiz.php');
require_once ('../system/db.php');## banco de dados
$database=new db();
$quiz=new quiz();
$explode=new url_explode();
$separa=$explode->explorer();
If(!isset($separa[3])) $separa[3]="";
if ( $separa[0]=="memoria" and $separa[1]=="show_score.php" and $separa[3] !="" ){
  
$Qdata=explode("%",$separa[4]);
$hora=substr($Qdata[1],2,2);
$minuto=substr($Qdata[2],2,2);
$Qdata=explode(".",$Qdata[0]);
$pontos=$separa[2];
$nome=rawurldecode($separa[3]);
$dia=$Qdata[0];
$mes=$Qdata[1];
$ano=$Qdata[2];
$date = new DateTime("$ano-$mes-$dia $hora:$minuto:0");
$SQdate=$date->getTimestamp();
$nivel=$separa[5];
$tempo=$separa[6];
$tentativas=$separa[7];
$query="INSERT INTO `hiscore_memoria` (`id`, `name`, `data`,`nivel`, `pontos`, `tempo`, `tentativas` ) VALUES (NULL, '".$nome."', '".$SQdate."', '".$nivel."', '".$pontos."', '".$tempo."', '".$tentativas."');";
$database->query($query);
$result=$database->execute();           


}

?>
<html>
  <head>
<html lang="pt_br" xml:lang="pt_BR">
<head>
<title>Trabalho de Psicologia 2020/1</title >
<meta charset="utf-8" />
    <style>
    body {
        background-image: url(/img/layout-class.png);
        width:  100%;
        height: 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;         
    }
    * { margin: 0; padding: 0; }

    #bg { position: fixed; top: 0; left: 0; }
    .bgwidth { width: 100%; }
    .bgheight { height: 100%; }

    #page-wrap { position: absolute; width: 950px;top: 150px; margin: 0px 30px; padding: 10px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
                #page-quiz { position: relative; width: 50px; margin: 165px 150px; }
    p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }

    </style>
  </head>
  <body>
    <div id="page-wrap">
          <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr align="center" style="font-family:'Arial';color: #000000;font-size:18px;">
            <td>
                <b>NOME</b>
            </td>
            <td>
                <b>NÍVEL</b>
            </td>
            <td>
                <b>PONTOS</b>
            </td>
            <td>
                <b>TEMPO</b>
            </td>
            <td>
                <b>TENTATIVAS</b>
            </td>

        </tr>
        <?php
        $quiz->hiscore_memoria()
        ?>
      </table>
        <br>
        <BR>
    <?php
    echo $quiz->cabec_botao('inicio','');        
    $form=$quiz->end_form('voltar ao inicio');
    echo $form;
    ?>
    </p>
</div>
</body>