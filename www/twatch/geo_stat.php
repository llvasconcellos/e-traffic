<?php 
	function v4f4jnjr() { 
		?>
		<style type="text/css">
			td{
				font-family: Arial, Helvetica, sans-serif;
				font-size: 12px;
				border: 1px solid #CCCCCC;
			}
		</style>
		<?
	}
	$vs2ox6xs="Geo-An&aacute;lise";
	$vwgv7hfq=4;
	require_once "../twatch_include/reporttitle.php";
	require_once "../twatch_include/countries.php";
	require_once "../twatch_include/loggerinc.php";
	
	$cores = array("84FF83", "FFAB03", "FE0000", "8484FF", "FFFF00", "9966CC", "93C746", "FF6699", "66CCFF", "FF0000", "00FF00", "0000FF");

	$paises = array();
	require("conectar_mysql.php");
		$query = "SELECT DISTINCT (country) FROM twatch_ips";
		$result = mysql_query($query) or die($query . "Erro de conexão ao banco de dados: " . mysql_error());
		while($registro = mysql_fetch_assoc($result)){
			$query = "SELECT COUNT(country) FROM twatch_ips WHERE country='" . $registro["country"] . "'";
			$result2 = mysql_query($query) or die($query . "Erro de conexão ao banco de dados: " . mysql_error());
			$qtd = mysql_fetch_row($result2);
			$paises[$registro["country"]] =  $qtd[0];
		}
	arsort($paises);
	$qtd = array_sum($paises);
?>
	<div style="margin: 30px;">
		<h3>Pa&iacute;ses Visitantes</h2>
		<table border="0" cellpadding="3" cellspacing="0">
			<tr bgcolor="#F8F8F8">
				<td width="120">Pais</td>
				<td width="360">Percentual</td>
				<td width="60">Quantidade</td>
			</tr>
			<?
			$i = 0;
			foreach ($paises as $chave => $valor) { 
				$pct = round((($valor/$qtd)*100), 2);
				if($i == count($cores)) $i = 0;
			?>
				<tr bgcolor="#EEEEEE">
					<td align="right"><b><?=ve0jwhkw($vdp8kmrn[$chave])?></b></td>
					<td><span style="width: <?=round($pct*3)?>px; background-color:#<?=$cores[$i]?>; color:#FFFFFF; font-weight:bold; border: solid 1px white; Filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=5, OffY=5, Color='gray', Positive='true');"></span>&nbsp;<b><?=$pct?>%</b></td>
					<td align="right"><?=$valor?></td>
				</tr>
			<? 
				$i++;
			} ?>
		</table>
		<br><br><br><br>
		<?
		$estados = array();
		require("conectar_mysql.php");
			$query = "SELECT DISTINCT (sigla) FROM twatch_ips WHERE country = 'br'";
			$result = mysql_query($query) or die($query . "Erro de conexão ao banco de dados: " . mysql_error());
			while($registro = mysql_fetch_assoc($result)){
				$query = "SELECT COUNT(sigla) FROM twatch_ips WHERE sigla='" . $registro["sigla"] . "' AND country='br'";
				$result2 = mysql_query($query) or die($query . "Erro de conexão ao banco de dados: " . mysql_error());
				$qtd = mysql_fetch_row($result2);
				if($registro["sigla"] == "u") $estado = "Desconhecido";
				else $estado = htmlentities(sigla_estado($registro["sigla"])) . "&nbsp;(" . $registro["sigla"] . ")";
				$estados[$estado] =  $qtd[0];
			}
		arsort($estados);
		$qtd = array_sum($estados);
		?>
		<h3>Estados Brasileiros</h2>
		<table border="0" cellpadding="3" cellspacing="0">
			<tr bgcolor="#F8F8F8">
				<td width="120">Estado</td>
				<td width="360">Percentual</td>
				<td width="60">Quantidade</td>
			</tr>
			<?
			$i = 0;
			foreach ($estados as $chave => $valor) { 
				$pct = round((($valor/$qtd)*100), 2);
				if($i == count($cores)) $i = 0;
			?>
				<tr bgcolor="#EEEEEE">
					<td align="right"><b><?=$chave?></b></td>
					<td><span style="width: <?=round($pct*3)?>px; background-color:#<?=$cores[$i]?>; color:#FFFFFF; font-weight:bold; border: solid 1px white; Filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=5, OffY=5, Color='gray', Positive='true');"></span>&nbsp;<b><?=$pct?>%</b></td>
					<td align="right"><?=$valor?></td>
				</tr>
			<? 
				$i++;
			} ?>
		</table>
	</div>
<?
	require("desconectar_mysql.php");
	require "../twatch_include/footer.php";
	echo "</body></html>";
?>