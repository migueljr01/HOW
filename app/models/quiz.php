
<?php
class quiz {
    public function cabec_botao($info,$id_pergunta){  
        $form="<form name=\"$info\" action=\"http://".$_SERVER['SERVER_NAME']."/index/".$info."\" method=\"post\" >\n";
        return $form;
    }    
    public function cabec_com($info){  
    $form="<form name=\"$info\" action=\"http://".$_SERVER['SERVER_NAME']."/index/".$info."/\" method=\"post\" onsubmit=\"return validaCampo(); return false;\" >";
        return $form;
    }    
    
    public function monta_inicio($tipo,$variavel,$valor,$req ){
        if($req==1) $requerido=" required ";
        if(!isset($req) or $req==0 or $req=='') $requerido=" ";
        if(!isset($valor)) $valor="";
        echo "<input type=\"$tipo\" name=\"$variavel\" value=\"$valor\" $requerido / >\n";
    }

    public function end_form($txt){
        $form="<input class=\"botao01\" type=submit value='$txt'>\n</form>\n";
        return $form;
    }
    public function close_form(){
        $form="</form>\n";
        return $form;
    }    
    public function lista_perguntas(){
        $database = new db();
        $strSQL = "SELECT * FROM  `quiz` ";
        $database->query($strSQL);
        $results=$database->resultset();
        return $results;
    }
    public function lista_pergunta($id){
        $database = new db();
        $strSQL = "SELECT * FROM  `quiz` WHERE  `id`=$id ";
        $database->query($strSQL);
        $results=$database->resultset();
        return $results;
    }
    public function conta_pergunta($perguntas){
        $ret= count($perguntas);
        return $ret;
    }
    public function monta_pergunta($pergunta){

        echo '<br/><b>'.$pergunta[0]['pergunta'].'</b><br /><br />';
        echo '<input type="radio" name="joke" value="1" > <label for=1 >'.$pergunta[0]['resposta_1'].'</label><br/>';
        echo '<input type="radio" name="joke" value="2" > <label for=2 >'.$pergunta[0]['resposta_2'].'</label><br/>';
        if($pergunta[0]['resposta_3']!="") echo '<input type="radio" name="joke" value="3" ><label for=3 > '.$pergunta[0]['resposta_3'].'</label><br/>';
        if($pergunta[0]['resposta_4']!="") echo '<input type="radio" name="joke" value="4" ><label for=4 > '.$pergunta[0]['resposta_4'].'</label><br/>';
    }
    public function consulta_respostas($nome,$idade,$time,$linhas){
        $database = new db();    
        $strSQL="SELECT *  FROM `andamento` WHERE `nome_jogador` LIKE '".$nome."' AND `idade_jogador` = ".$idade." and `time_inicio` = ".$time.";";
        $database->query($strSQL);
        $results=$database->resultset();
        $linhas=$linhas-1;
        $ii=1;
        for ($i = 0; $i <= $linhas; $i++) {
            $variavel="resposta_".$ii;
            $variavel2="resposta_".$ii;
            $respostas[$i][$variavel]=$results[0][$variavel2];
            $ii++;
        }
        return $respostas;
    }
    public function consulta_corretas(){
        $database = new db();    
        $strSQL="SELECT id,correta FROM `quiz`;";
        $database->query($strSQL);
        $results=$database->resultset();
        $linhas=count($results);
        $linhas=$linhas-1;
        for ($i = 0; $i <= $linhas; $i++) {
            $variavel="resposta_".$results[$i]['id'];
            $corretas[$i][$variavel]=$results[$i]['correta'];
        }
        return $corretas;
    }
    public function compara($user,$corretas,$linhas){
        $linhas=$linhas-1;
        $acertos=0;
        $ii=1;
        for ($i = 0; $i <= $linhas; $i++) {
            $variavel="resposta_".$ii;
            if($user[$i][$variavel]==$corretas[$i][$variavel]){
                $acertos++;
            }
            $ii++;
        }
        return $acertos;
    }
    public function hiscore(){
        $database = new db();    
        $strSQL="SELECT * FROM `hiscore` ORDER BY `hiscore`.`acertos` DESC, `tempo_exec` ASC limit 10;";
        $database->query($strSQL);
        $results=$database->resultset();
        $linhas=count($results);
        $linhas=$linhas-1;
        for ($i = 0; $i <= $linhas; $i++) {
            $nome=$results[$i]['name'];
            $idade=$results[$i]['idade'];
            $acertos=$results[$i]['acertos'];
            $tempodb=$results[$i]['tempo_exec'];
            $decorrido=($tempodb)/60;
            $minutos=number_format($decorrido, 0, '', '');
            $segundos=($decorrido-$minutos)*60;

            echo "<tr align=\"center\" style=\"font-family:'Arial';color: #000000;font-size:18px;\"><td>$nome</td><td>$idade</td><td>$acertos</td><td>".$minutos." m ".$segundos." s</td></tr>";
        }
    }
    public function hiscore_memoria(){
        $database = new db();    
        $strSQL="SELECT * FROM `hiscore_memoria` ORDER BY `hiscore_memoria`.`nivel` DESC, `hiscore_memoria`.`pontos` DESC, `hiscore_memoria`.`tempo` ASC, `hiscore_memoria`.`tentativas` ASC limit 10;";
        $database->query($strSQL);
        $results=$database->resultset();
        $linhas=count($results);
        $linhas=$linhas-1;
        for ($i = 0; $i <= $linhas; $i++) {
            $nome=$results[$i]['name'];
            $idade=$results[$i]['nivel'];
            $acertos=$results[$i]['pontos'];
            $tempodb=$results[$i]['tempo'];
            $tentativas=$results[$i]['tentativas'];            
            echo "<tr align=\"center\" style=\"font-family:'Arial';color: #000000;font-size:18px;\"><td>$nome</td><td>$idade</td><td>$acertos</td><td>".$tempodb."</td><td>".$tentativas."</td></tr>";
        }
    }
}
