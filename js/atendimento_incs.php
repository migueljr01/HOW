<?php
$cidade=$_GET[city];
$id_tec=$_GET[id_tec];
$ativa=$_GET[ativa];
$area=$_GET[area];
$contrato=$_GET[contrato];
$fato=$_GET[fato];
$causa=$_GET[causa];
$assao=$_GET[assao];
$visita=$_GET[visita];
$setor=$_GET[setor];
$obser=$_GET[obser];
$status=$_GET[status];
$produtiva=$_GET[proda];
$name_tec=$_GET[name_tec];
$sname_tec=$_GET[sname_tec];
$empresa=$_GET[empresa];                
$cadastra_tec=$_GET[cadastra_tec];
if(!isset($teclog))$teclog=$_POST[id_log];
if(!isset($teclog))$teclog=$_GET[id_log];
$teclog=strtoupper($teclog);
?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<script type="text/javascript">
function validaCampo(){
    if(document.cadastro.id_log.value==""){
    alert("O Login do Técnico é obrigatório!");
    return false;
    } else return true;
}
function validaCampo2(){
    if(document.cadastro.cadastra_tec.value==1){
	if(document.cadastro.name_tec.value==""){
		alert("O Nome do Técnico é obrigatório!");
		return false;
	}else if(document.cadastro.sname_tec.value==""){
		alert("O Sobrenome do Técnico é obrigatório!");
		return false;
	}else if(document.cadastro.empresa.value==""){
		alert("É obrigatório a escolha da Empresa!");
		return false;
	} 
    }
    if(document.cadastro.pcad.value=="CC"){
	if(document.cadastro.chamado.value==""){
		alert("O Chamado é obrigatório!");
		return false;
	}
    }
    if(document.cadastro.pcad.value=="PR"){
	if(document.cadastro.tiporb.value==""){
		alert("O Tipo é obrigatório!");
		return false;
	}
	if(document.cadastro.segmento.value==""){
		alert("O SEGMENTO é obrigatório!");
		return false;
	}
	if(document.cadastro.cmts.value==""){
		alert("O CMTS é obrigatório!");
		return false;
	}
    }
    if(document.cadastro.city.value==""){
	alert("Selecione a cidade é obrigatório!");
	return false;
    }else if(document.cadastro.contrato.value==""){
	alert("O Contrato é obrigatório!");
	return false;
    }else if(document.cadastro.area.value==""){
	alert("A area é obrigatória!");
	return false;
    }else if(document.cadastro.cat.value=="0"){
	alert("O Fato é obrigatório!");
	return false;
    }else if(document.cadastro.subcat.value=="0"){
	alert("A Causa é obrigatória!");
	return false;
    }else if(document.cadastro.subcat3.value=="0"){
	alert("A Ação é obrigatória!");
	return false;
    }else if(document.cadastro.vista.value==""){
	alert("O Tipo Vista é obrigatório!");
	return false;
    }else if(document.cadastro.atendsetor.value==""){
	alert("O Setor é obrigatório!");
	return false;
    }else if(document.cadastro.obser.value==""){
	alert("A Observação é obrigatória!");
	return false;
    }else if(document.cadastro.produtiva.value==""){
	alert("O Atendimento Foi produtivo ?");
	return false;
    }            

}
function reload(form,acao,id_tec,ativa){
var val=form.cat.options[form.cat.options.selectedIndex].value; 
var val2=form.subcat.options[form.subcat.options.selectedIndex].value;
var val3=form.subcat3.options[form.subcat3.options.selectedIndex].value;
var city=form.city.options[form.city.options.selectedIndex].value;
var area=form.area.options[form.area.options.selectedIndex].value;  
var visita=form.vista.options[form.vista.options.selectedIndex].value;
var protudutiva=form.produtiva.options[form.produtiva.selectedIndex].value;
var contrato=form.contrato.value; 
var obser=form.obser.value;
var cadastra_tec=form.cadastra_tec.value; 
	if (cadastra_tec==1 ){
		var name_tec=form.name_tec.value; 
		var id_log=form.id_log.value; 
		var sname_tec=form.sname_tec.value; 
		var empresa=form.empresa.options[form.empresa.options.selectedIndex].value;
		self.location='?fato=' + val + '&causa=' + val2 + '&assao=' + val3 +'&city=' + city + '&acao=' + acao + "&id_tec=" + id_tec + "&ativa=" + ativa + "&name_tec=" + name_tec + "&sname_tec=" + sname_tec + "&id_log=" + id_log +  "&empresa=" + empresa + "&contrato=" + contrato + "&area=" + area + "&obser=" + obser + "&visita=" + visita + "&proda=" + protudutiva+"&cadastra_tec="+cadastra_tec;
	}else{
		self.location='?fato=' + val + '&causa=' + val2 + '&assao=' + val3 + '&city=' + city + '&acao=' + acao + "&id_tec=" + id_tec + "&ativa=" + ativa + "&contrato=" + contrato + "&area=" + area + "&obser=" + obser + "&visita=" + visita + "&proda=" + protudutiva;
	}

}
function reload2(form,acao,id_tec,ativa)
{
var val=form.cat.options[form.cat.options.selectedIndex].value; 
var val2=form.subcat.options[form.subcat.options.selectedIndex].value;
var val3=form.subcat3.options[form.subcat3.options.selectedIndex].value;
var city=form.city.options[form.city.options.selectedIndex].value;
var area=form.area.options[form.area.options.selectedIndex].value;  
var visita=form.vista.options[form.vista.options.selectedIndex].value;
var protudutiva=form.produtiva.options[form.produtiva.selectedIndex].value;
var contrato=form.contrato.value; 
var obser=form.obser.value;
var cadastra_tec=form.cadastra_tec.value; 
        if (cadastra_tec==1 ){
		var name_tec=form.name_tec.value; 
		var id_log=form.id_log.value; 
		var sname_tec=form.sname_tec.value; 
		var empresa=form.empresa.options[form.empresa.options.selectedIndex].value;
		self.location='?fato=' + val + '&causa=' + val2 + '&assao=' + val3 +'&city=' + city + '&acao=' + acao + "&id_tec=" + id_tec + "&ativa=" + ativa + "&name_tec=" + name_tec + "&sname_tec=" + sname_tec + "&id_log=" + id_log +  "&empresa=" + empresa + "&contrato=" + contrato + "&area=" + area + "&obser=" + obser + "&visita=" + visita + "&proda=" + protudutiva+"&cadastra_tec="+cadastra_tec;
	}else{
		self.location='?fato=' + val + '&causa=' + val2 + '&assao=' + val3 + '&city=' + city + '&acao=' + acao + "&id_tec=" + id_tec + "&ativa=" + ativa + "&contrato=" + contrato + "&area=" + area + "&obser=" + obser + "&visita=" + visita + "&proda=" + protudutiva;
	}

}
function reload3(form,acao,id_tec,ativa)
{
var val=form.cat.options[form.cat.options.selectedIndex].value; 
var val2=form.subcat.options[form.subcat.options.selectedIndex].value;
var val3=form.subcat3.options[form.subcat3.options.selectedIndex].value;
var city=form.city.options[form.city.options.selectedIndex].value;
var area=form.area.options[form.area.options.selectedIndex].value;  
var visita=form.vista.options[form.vista.options.selectedIndex].value;
var protudutiva=form.produtiva.options[form.produtiva.selectedIndex].value;
var contrato=form.contrato.value; 
var obser=form.obser.value;
var cadastra_tec=form.cadastra_tec.value; 
	if (cadastra_tec==1 ){
		var name_tec=form.name_tec.value; 
		var id_log=form.id_log.value; 
		var sname_tec=form.sname_tec.value; 
		var empresa=form.empresa.options[form.empresa.options.selectedIndex].value;
		self.location='?fato=' + val + '&causa=' + val2 + '&assao=' + val3 +'&city=' + city + '&acao=' + acao + "&id_tec=" + id_tec + "&ativa=" + ativa + "&name_tec=" + name_tec + "&sname_tec=" + sname_tec + "&id_log=" + id_log +  "&empresa=" + empresa + "&contrato=" + contrato + "&area=" + area + "&obser=" + obser + "&visita=" + visita + "&proda=" + protudutiva+"&cadastra_tec="+cadastra_tec;
	}else{
		self.location='?fato=' + val + '&causa=' + val2 + '&assao=' + val3 + '&city=' + city + '&acao=' + acao + "&id_tec=" + id_tec + "&ativa=" + ativa + "&contrato=" + contrato + "&area=" + area + "&obser=" + obser + "&visita=" + visita + "&proda=" + protudutiva;
	}

}
function reload4(form,acao,id_tec,ativa)
{
var val=form.cat.options[form.cat.options.selectedIndex].value; 
var val2=form.subcat.options[form.subcat.options.selectedIndex].value;
var val3=form.subcat3.options[form.subcat3.options.selectedIndex].value;
var city=form.city.options[form.city.options.selectedIndex].value;
var area=form.area.options[form.area.options.selectedIndex].value;  
var visita=form.vista.options[form.vista.options.selectedIndex].value;
var protudutiva=form.produtiva.options[form.produtiva.selectedIndex].value;
var contrato=form.contrato.value; 
var obser=form.obser.value;
var cadastra_tec=form.cadastra_tec.value; 
	if (cadastra_tec==1 ){
		var name_tec=form.name_tec.value; 
		var id_log=form.id_log.value; 
		var sname_tec=form.sname_tec.value; 
		var empresa=form.empresa.options[form.empresa.options.selectedIndex].value;
		self.location='?fato=' + val + '&causa=' + val2 + '&assao=' + val3 +'&city=' + city + '&acao=' + acao + "&id_tec=" + id_tec + "&ativa=" + ativa + "&name_tec=" + name_tec + "&sname_tec=" + sname_tec + "&id_log=" + id_log +  "&empresa=" + empresa + "&contrato=" + contrato + "&area=" + area + "&obser=" + obser + "&visita=" + visita + "&proda=" + protudutiva+"&cadastra_tec="+cadastra_tec;
	}else{
		self.location='?fato=' + val + '&causa=' + val2 + '&assao=' + val3 + '&city=' + city + '&acao=' + acao + "&id_tec=" + id_tec + "&ativa=" + ativa + "&contrato=" + contrato + "&area=" + area + "&obser=" + obser + "&visita=" + visita + "&proda=" + protudutiva;
	}

}
</script>
<script>
 $(function() {
    var availabletecnicos = [
	<?php
        $database=new db();
        $strSQL="SELECT * FROM `tecnicos` ORDER BY `login` ASC  "; 
        $database->query($strSQL);
        $data=$database->resultset();
        $linhas=$result = count($data);
        $linhas=$linhas-1;
        $ie=1;
        for ($i = 0; $i <= $linhas; $i++) {
            $test="";
            if($iee==11) $iee=1;
            if($iee==10) $test="\n";
            echo '"'.$data[$i][login].'",'.$test; 
            $iee++;
	}
	?>
	""
	];
    $( "#tecnicos" ).autocomplete({
      source: availabletecnicos
    });
  });
</script>