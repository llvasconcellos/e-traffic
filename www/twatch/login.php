<?
$GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"] = "../";
require_once "../twatch_include/general.php";
require_once "../twatch_include/multiuser.php";
if(!isset($HTTP_GET_VARS["back"]) || !$HTTP_GET_VARS["back"]){
	$HTTP_GET_VARS["back"] = "../twatch/";
}
if(isset($HTTP_GET_VARS["tryback"])){
	vcn2bycc($HTTP_GET_VARS["back"]);
}
function vj7vgrvg($vnb0l6wv=true, $vuy3lzk3=true, $vzjy0nqd=true){
	global $v6wqka0r;
	$vwwlm8f6=opendir("../twatch_include");
	$vub62q7q=array();
	while($vypo7kth=readdir($vwwlm8f6)){
		if(preg_match("/^userinfo_(.+)\.php$/", $vypo7kth, $vtir3io4)){
			if($vtir3io4[1] != "default") $vub62q7q[] = $vtir3io4[1];
		}
	}
	$vub62q7q[]="default";
	sort($vub62q7q);
	if($vnb0l6wv) echo ('<form class="lang" method="get" id="altuserform">');
	echo '<select name="website" id="altuserselect">';
	foreach($vub62q7q as $vglvpsqh){
		echo '<option value="' . $vglvpsqh . '" ' . ($vglvpsqh == $v6wqka0r ? "selected" : "") . ">" . $vglvpsqh . "</option>";
	}
	echo "</select>";
	echo '<input type="hidden" name="tryback" value="true">';
	if($vzjy0nqd){
		foreach($GLOBALS['HTTP_GET_VARS'] as $v2y8fsh6=> $vb0qc8n4){
			if($v2y8fsh6 != "website") echo '<input type="hidden" name="' . $v2y8fsh6 . '" value="' . $vb0qc8n4 . '" />';
		}
	}
	if($vnb0l6wv) echo "</form>";
	if($vuy3lzk3){ ?>
		<script type="text/javascript">
			document.getElementById('altuserselect').onchange=subaltuser;
			function subaltuser() {
				document.getElementById('altuserform').submit();
			}
		</script>
	<? }
}
$vvxxi96n=false;
if(!session_id()) session_start();
if(vvoyl39m()){
	vcn2bycc($HTTP_GET_VARS["back"]);
}
if(isset($HTTP_POST_VARS["username"]) && isset($HTTP_POST_VARS["pass"]) && $HTTP_POST_VARS["username"] == $adl_username && $HTTP_POST_VARS["pass"] == $adl_pass){
	$HTTP_SESSION_VARS["loggedin_" . $v6wqka0r] = "true";
	if(!vsskumkc()) {
		if(isset($vcabgqjs)) die("Website <strong>" . $v6wqka0r . '</strong> não foi instalado ainda >> <a href="/twatch/install.php">Instalar Agora</a>');
		die("Erro de conexão com o banco de dados");
	}
	if(isset($HTTP_POST_VARS["remember"])){
		$vyr5ixa5=vbz7bg74("relogin_" . $v6wqka0r);
		if($vfs6pezc==vvs7hrbz){
			$vyr5ixa5=md5(uniqid(rand()));
			if(!vfxbbzv6("relogin_" . $v6wqka0r, $vyr5ixa5) || !vfxbbzv6("relogin_" . $v6wqka0r . "_tm", time())) die("Erro ajustando codigo de recordação");
		}
		elseif($vfs6pezc==v3rxf15h) die("Erro ao buscar estado de login do banco de dados");
		setcookie("relogin_" . $v6wqka0r, $vyr5ixa5, time() + 60000000, "/", $adl_domain);
	}
	else {
		setcookie("relogin_" . $v6wqka0r, "", time() - 600000, "/", $adl_domain);
	}
	if(isset($HTTP_POST_VARS["dontcount"])){
		$vyr5ixa5 = vbz7bg74("dontcount_" . $v6wqka0r);
		if($vfs6pezc == vvs7hrbz){
			$vyr5ixa5 = md5(uniqid(rand()));
			if(!vfxbbzv6("dontcount_" . $v6wqka0r, $vyr5ixa5)) die("Erro ajustando codigo de não-contagem");
		}
		elseif($vfs6pezc == v3rxf15h) die("Erro ajustando codigo de não-contagem");
		setcookie("dontcount_" . $v6wqka0r, $vyr5ixa5, time() + 60000000, "\57", $adl_domain);
	}
	if(isset($HTTP_GET_VARS["back"]) && $HTTP_GET_VARS["back"] && !$vvxxi96n) vcn2bycc($HTTP_GET_VARS["back"]);
}
else{
	echo '<html><head><title>Estatísticas do Website - ';
	echo $vru7h2lp["wname"];
	echo '</title>'; ?>
	<style>
		body {
			margin-top:0px;
			padding-top:0px;
		}
		h1 {
			font-family:Arial, Helvetica, sans-serif;
			margin-bottom:0px;
			font-size:1em;
			padding:0px;
		}
		form.log {
			background:#777777;color:#fff;margin:0px;padding:10px;font-family:Arial, Helvetica, sans-serif;
		}
		td {
			color:#fff;font-family:Arial, Helvetica, sans-serif;

		}
		img {

			vertical-align:-.3em;
		}
		.text {
			background:#eee;
			border:0px;
		}
		
		.radio {
			border:0px;

		}
		.sub {
			background:#000000;
			color:#fff;
			border:0px;
			margin-top:5px;
			margin-left:10px;
			
		}
		a {
			color:#faa;
			font-family:Arial, Helvetica, sans-serif;
			text-decoration:none;
		}
		a:hover {
			color:#fec;
		}
		.multi {
			display:inline;
			margin-right:10px;
			margin-left:5px;
		}
		.multi select {
			font-family:Arial, Helvetica, sans-serif;
		}
		.intro {
			background:#300;
			padding:5px 10px;
			border:1px solid #000000;
			margin-bottom:5px;
			font-size:.9em;
		}
	</style>
	<?	echo('</head><body>');  ?>
	<div style="width: 100%; vertical-align: bottom;">
		<span style="width: 48%;"><img src="e.trafego.jpg" alt="E.TRÁFEGO" class="logo"></span>
		<span class="inf" style="width: 40%; text-align: right; background-color: #FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size: 12px;">Estatísticas do Website <? if(!isset($HTTP_GET_VARS["onlydefault"])) v1bwf6us(true);?></span><br><br>
	</div>
	<?
	echo '<form class="log" action="login.php?back=';
	echo isset($HTTP_GET_VARS["back"]) ? urlencode($HTTP_GET_VARS["back"]) : "" ?><?php echo '" method="post"><br><div class="intro"><br><b>Bem Vindo ao E-Tráfego!<br>Entre com usuário e senha para utilizar o software.</b><br><br></div><br>';
	if(isset($HTTP_GET_VARS["onlydefault"])) { 
		echo "<p>Você precisa logar na instância padrão para executar esta ação:</p>";
	}
	?>
	<table>	
		<tr>
			<td align="right">Usuário:</td>
			<td><input class="text" type="text" name="username" /></td>
			<td rowspan="2"></td>
		</tr>
		<tr>
			<td align="right">Senha:</td>
			<td><input class="text" type="password" name="pass" /></td>
		</tr>
	</table>
	<input class="radio" type="checkbox" name="remember" value="true" checked />Lembre-se de mim por <?=$vjyl7xfa?> dias
	<input class="radio" type="checkbox" name="dontcount" value="true" />Não me conte
	<input type="submit" class="sub" value="LOGIN" />
	</form>
	<?
	if(isset($HTTP_POST_VARS["username"])) echo "Usuário ou senha incorretos";
	echo "</body></html>";
}
?>