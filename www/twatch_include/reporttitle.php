<?php 
	$GLOBALS['HTTP_SERVER_VARS']["\104\117\103\125\115\105\116\124\137\122\117\117\124"]="\56\56\57";
	require_once "../twatch_include/general.php";   
	require_once "../twatch_include/multiuser.php"; 
	require_once "../twatch_include/lang.php"; 
	if(!session_id()) session_start();
		$vs9ns2uy=false; 
		$vxls96qn=true; 
		$vgnsiwe1=false; 
		$GLOBALS['vg9loh6q']=array("\160\165\142\162\145\160","\164\172\156\141\155\145","\146\151\162\163\164","\163\164\157\160","\144\141\166\141\151\154"); 
		if(!vsskumkc()) $vgnsiwe1=true; 
		if(!$vgnsiwe1) { 
			if(!isset($vru7h2lp["\160\165\142\162\145\160"])) $vacgimnz=false; 
			else $vacgimnz=$vru7h2lp["\160\165\142\162\145\160"]; 
			if(!$vacgimnz||isset($vobjkk95)) { 
				vne1kf1x(); 
				$vp2ce82x=true; 
			}
			else $vp2ce82x=vvoyl39m(); 
		} 
		else { 
			$vp2ce82x=false; 
		} 
		class v5ehnftc{ 
			var $vwjxgo5r; 
			var $vdvquroq; 
			var $vicjw5dd; 
			function v5ehnftc($vwjxgo5r,$vdvquroq,$vicjw5dd) { 
				$this->vwjxgo5r=$vwjxgo5r; 
				$this->vdvquroq=$vdvquroq; 
				$this->vicjw5dd=$vicjw5dd; 
			} 
		} 
		$vv3ijy32=array( new v5ehnftc(1,ve0jwhkw("Main"),"../twatch/"), new v5ehnftc(2,ve0jwhkw("Path Analysis"),"pathanalysis.php"), new v5ehnftc(3,ve0jwhkw("Latest Visitors"),"latest.php"), new v5ehnftc(4, "Geo-An&aacute;lise","geo_stat.php") ); 
		$vhbc17ws=urlencode(vyzc4zq1(true)); 
		if($vp2ce82x) { 
			$vv3ijy32[]=new v5ehnftc(7,ve0jwhkw("\115\151\154\145\163\164\157\156\145\163"),"\155\151\154\145\163\164\157\156\145\163\56\160\150\160"); 
			$vv3ijy32[]=new v5ehnftc(6,ve0jwhkw("\101\144\155\151\156\151\163\164\162\141\164\145"),"\141\144\155\151\156\56\160\150\160"); 
			$vv3ijy32[]=new v5ehnftc(5,ve0jwhkw("\114\157\147\157\165\164"),"\154\157\147\157\165\164\56\160\150\160\77\142\141\143\153\75".$vhbc17ws); 
			//$vv3ijy32[]=new v5ehnftc(8,ve0jwhkw("\101\142\157\165\164"),"\141\142\157\165\164\56\160\150\160"); 
		} 
		else { 
			$vv3ijy32[]=new v5ehnftc(7,ve0jwhkw("\114\157\147\151\156"),"\154\157\147\151\156\56\160\150\160\77\142\141\143\153\75".$vhbc17ws); 
			//$vv3ijy32[]=new v5ehnftc(8,ve0jwhkw("\101\142\157\165\164"),"\141\142\157\165\164\56\160\150\160"); 
		}     
		if(isset($GLOBALS['v0luxu2i'])) {
			?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
			<?
		}
		else { 
			echo "\74\150\164\155\154\76\12"; 
		} 
		echo "\74\150\145\141\144\76\12";
		if(isset($GLOBALS['vjc0beqz'])) { 
			$vr4fx0q9=$vhc2m11j=ve0jwhkw($GLOBALS['vjc0beqz']); 
		} 
		else { 
			$vhc2m11j=(isset($GLOBALS['vs2ox6xs'])?ve0jwhkw($GLOBALS['vs2ox6xs']):ve0jwhkw("\127\145\142\163\151\164\145\40\123\164\141\164\151\163\164\151\143\163"))."\40\55\40".ve0jwhkw($vru7h2lp["\167\156\141\155\145"]); 
			$vr4fx0q9=ve0jwhkw($GLOBALS['vs2ox6xs']); 
		} 
		echo "<title>"; 
		echo $vhc2m11j;
		echo '</title><meta name="description" content="';
		if(!isset($GLOBALS['v1ickqed'])) echo $vr4fx0q9.",";
		echo "TraceWatch Website Statistics for ";
		echo $vru7h2lp["wname"]." (".$adl_domain.")"." ".$vn92z1vw;
		echo '" />' . chr(10) . chr(13);
		echo '<meta http-equiv="content-type" content="text/html; charset=utf-8" />' . chr(10) . chr(13);
		echo '<link rel="stylesheet" href="report';
		echo $right_to_left?"_rtl":"";
		echo '.css" />' . chr(10) . chr(13); 
		echo '<script language="javascript" src="report.js"></script>';
		if(function_exists('v4f4jnjr')) v4f4jnjr();
		echo "</head><body>";
		if(!isset($v0oj5u78)) { 
			$vz36b96n=$vprzwxbx=$vo86209f=$vf88cy2z=""; 
			if(!$vgnsiwe1) { 
				if(isset($vru7h2lp["\164\172\156\141\155\145"])) $vf88cy2z=$vru7h2lp["\164\172\156\141\155\145"]; 
				else $vf88cy2z=""; 
				if(!isset($vru7h2lp["\143\164\163"])) $vz36b96n='<span class="error">Error</span>'; 
				else $vz36b96n=$vru7h2lp["\143\164\163"]; $v6oq6egx=strftime("%Y-%b-%d-%H-%M-%S",$vz36b96n); 
				$vhm89q3h=explode("\55",$v6oq6egx); $vpp1asay=array("\131" => $vhm89q3h[0],"\115" => $vhm89q3h[1],"\104" => $vhm89q3h[2], "\150" => $vhm89q3h[3],"\155" => $vhm89q3h[4],"\163" => $vhm89q3h[5], "\124" => ve0jwhkw($vf88cy2z)); if($vpp1asay["\104"][0]=="\60") $vpp1asay["\104"]=substr($vpp1asay["\104"],1);
				$v6oq6egx=vjvxhkqj("Y-M-D h:m:s T",$vpp1asay); 
				if(!isset($vru7h2lp["\146\151\162\163\164"])) $vprzwxbx='<span class="error">Error</span>'; 
				else { $vprzwxbx=strftime("\45\131\55\45\142\55\45\144",$vru7h2lp["\146\151\162\163\164"]); 
				$vwygqq3i=explode("\55",$vprzwxbx); 
				$vpp1asay=array("\131"=>$vwygqq3i[0],"\115"=>$vwygqq3i[1],"\104"=>$vwygqq3i[2]); 
				if($vpp1asay["\104"][0]=="\60") $vpp1asay["\104"]=substr($vpp1asay["\104"],1); 
				$vprzwxbx=vjvxhkqj("\131\55\115\55\104",$vpp1asay); 
			} 
			if(!isset($vru7h2lp["\163\164\157\160"])) $vo86209f='<span class="error">Error</span>'; 
			else $vo86209f=$vru7h2lp["\163\164\157\160"]?ve0jwhkw("\123\164\157\160\160\145\144"):ve0jwhkw("\127\157\162\153\151\156\147"); 
			if(!isset($vru7h2lp["\167\156\141\155\145"])) $vcakukbb=""; 
			else $vcakukbb=$vru7h2lp["\167\156\141\155\145"]; 
			$vdvvrh68=vfym29jc("\163\145\154\145\143\164\40\143\157\165\156\164\50\52\51\40\146\162\157\155\40{$vcva8fpp["\145\162\162\157\162\163"]->v7ekwth8}"); 
			if($vwoj4ypa) $vdvvrh68='<span class="error">Erro lendo a tabela de erros</span>';
			elseif($vdvvrh68) $vdvvrh68='<span class="error"><a href="errors.php">' . $vdvvrh68." erros</a></span>"; 
			else $vdvvrh68=ve0jwhkw("No Errors");   
		} 
		else $vcakukbb=""; 
		//vxjemfe4();
		?>
		<div style="width: 100%; vertical-align: bottom;">
			<span style="width: 48%;"><img src="e.trafego.jpg" alt="E.TRÁFEGO" class="logo"></span>
			<span class="inf" style="width: 40%; text-align: right; background-color: #FFFFFF;"><?=ve0jwhkw('Website Statistics')?><?=v1bwf6us();?></span>
		</div>
		<?
		echo '<div class="nav">';
		foreach($vv3ijy32 as $v5ehnftc) { 
			if($v5ehnftc->vwjxgo5r==$vwgv7hfq) echo '<span class="cell"><span class="sel">' . $v5ehnftc->vdvquroq . '</span></span>'; 
			else echo '<span class="cell"><span class="but"> <a href="' . $v5ehnftc->vicjw5dd . '" target="_top">' . $v5ehnftc->vdvquroq . '</a> </span></span>'; 
		}
		echo '</div><div class="inf">';
		if(!$vgnsiwe1) {
			echo '<span class="title">';
			echo ve0jwhkw("\116\157\167");
			echo ':</span>' . chr(10) . chr(13) . '<span>';
			echo $v6oq6egx;
			echo '</span><span class="title">';
			echo ve0jwhkw("Working Since");
			echo ':</span>' . chr(10) . chr(13) . '<span>';
			echo $vprzwxbx;
			echo "</span>";
			if($vp2ce82x) {
				echo '<span class="title">';
				echo ve0jwhkw("Logger Status");
				echo ':</span> <span ';
				echo $vo86209f==ve0jwhkw("\123\164\157\160\160\145\144")?"\143\154\141\163\163\75\"\141\154\145\162\164\"":"";
				echo " >";
				echo $vo86209f;
				echo " (";
				echo $vdvvrh68;
				echo ")</span>";
			}
		}
		elseif(isset($vcabgqjs)) {
			echo 'E.Tráfego não está instaladot >> <a href="install.php" target="_top">Instalar Agora</a>';
		}
		else {
			echo '<span class="error">Não foi possivel conectar ao banco de dados</span>';
		}
		echo "</div>";
	} 
	flush();
	if($vgnsiwe1) die("</body></html>");
?>