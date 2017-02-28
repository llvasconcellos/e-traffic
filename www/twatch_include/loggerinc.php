<?php 
	class vz55o891{ 
		var $vx1j6hs3;
		var $vhb28lxc; 
		function vz55o891($vqgsq39b,$vb1cxalr=true) { 
			$this->vx1j6hs3=""; 
			$this->vhb28lxc=""; 
			if(!$vqgsq39b) return; 
			include $GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"]."/twatch_include/countries.php";
			if($vgy09x36=vf2xv1d2($vqgsq39b)) if(isset($vdp8kmrn[$vgy09x36])) $this->vx1j6hs3=$vgy09x36;
			if($vb1cxalr) $this->vhb28lxc=@gethostbyaddr($vqgsq39b); 
			if($this->vhb28lxc&&$this->vhb28lxc!=$vqgsq39b) { 
				if(!$this->vx1j6hs3&&preg_match("/\.([^\.]+)$/",$this->vhb28lxc,$vtir3io4)) { 
					$vnnrsb9y=strtolower($vtir3io4[1]); 
					if(preg_match("/^[^\W\d_]{1,2}$/",$vnnrsb9y)) { 
						if(isset($vdp8kmrn[$vnnrsb9y])) $this->vx1j6hs3=$vnnrsb9y; 
					}
					elseif(preg_match("/^(?:gov|net|com|org)$/",$vnnrsb9y)) { 
						$this->vx1j6hs3="us"; 
					}
				}
			}
			else $this->vhb28lxc=""; 
		}
	}
	function vj7q0x3l($vlxl6svb) { 
		global $vs0lfx1u;
		$vgy09x36=count($vs0lfx1u);
		for($vxdg2sdk=0;$vxdg2sdk<$vgy09x36;$vxdg2sdk++) if($vs0lfx1u[$vxdg2sdk]->vaby6ybc($vlxl6svb)) return $vs0lfx1u[$vxdg2sdk]; 
		return false; 
	}
	function vafy042h($vzd5qyuh) {
		global $vq0oz0ts;
		$vgy09x36=count($vq0oz0ts);
		for($vxdg2sdk=0;$vxdg2sdk<$vgy09x36;$vxdg2sdk++) if(preg_match($vq0oz0ts[$vxdg2sdk]->vqov7xto,$vzd5qyuh)) return $vq0oz0ts[$vxdg2sdk];
		return false;
	}
	function vf2xv1d2($vqgsq39b) {
		if(!isset($GLOBALS['vru7h2lp']["iptocou"])) return false;
		if(!$vb1cxalr=vaqc694a("select inet_aton('" . $vqgsq39b . "')>=ipfrom,code from","ipcou","where ipto>=inet_aton('" . $vqgsq39b . "') order by ipto limit 1")) return false;
		if(!$vxtcw136=mysql_fetch_row($vb1cxalr)) return false;
		if(!$vxtcw136[0]) return false;
		return $vxtcw136[1];
	}
	class v4jy65fm{
		var $v9trgw2e;
		var $vuj3w5o6;
		var $vki0zdzl;
		function v4jy65fm($vpmgxw50) {
			$vtir3io4=array();
			if(!preg_match("/^[^\/]+\:\/\/[^\/]*\.([^\.\/]+\.[^\.\/]+)(?:\/|$)/",$vpmgxw50,$vtir3io4)) {
				$vtir3io4[1]=$vpmgxw50;
				$vtir3io4[2]="";
			}
			$this->vuj3w5o6=$vtir3io4[1]; 
			$this->vki0zdzl=$vtir3io4[2]; 
			echo $vpmgxw50."<br>".$this->vuj3w5o6."<br>".$this->vki0zdzl; 
		}
	}
	function vnqvdkz3($vv7gxqqm,$v88xhuy4=array(),$vlxji3mc=true,$vuc7idlz=true) {
		if($vlxji3mc) { 
			$v88xhuy4["dt"]="@cdt"; 
			if(!vicq4vls($vv7gxqqm,$v88xhuy4)) return false; 
		}
		if($vuc7idlz) { 
			unset($v88xhuy4["dt"]); 
			$v88xhuy4["mon"]="@cmon"; 
			if(!vicq4vls($vv7gxqqm."_mon",$v88xhuy4)) return false; 
		}
		return true; 
	}
	function vicq4vls($vv7gxqqm,&$v88xhuy4) {
		global $vwoj4ypa; 
		$vx88gmmo="set count=count+1 where "; 
		foreach($v88xhuy4 as $v7ekwth8=> $vl82pjmr) $vx88gmmo.=$v7ekwth8."=".$vl82pjmr." and ";
		if(!vaqc694a("update",$vv7gxqqm,substr($vx88gmmo,0,-4))) return false;
		if(!mysql_affected_rows($GLOBALS['v4g57lyf'])) { 
			$vx88gmmo="("; 
			$vsmyaawr=""; 
			foreach($v88xhuy4 as $v7ekwth8=> $vl82pjmr) { 
				$vx88gmmo.=$v7ekwth8.","; 
				$vsmyaawr.=$vl82pjmr.","; 
			}
			if(!vaqc694a("insert into",$vv7gxqqm,substr(substr($vx88gmmo,0,-1).",count) values(".$vsmyaawr,0,-1).",1)")) return false; 
		}
		return true;
	}
	function vllpeirq($vv7gxqqm,$v88xhuy4) { 
		global $vwoj4ypa; 
		$vwoj4ypa=false; 
		$vq57ygb8="select id from";
		$vx88gmmo="where "; 
		foreach($v88xhuy4 as $v7ekwth8=> $vl82pjmr) $vx88gmmo.=$v7ekwth8."=".$vl82pjmr." and ";
		if(!$vb1cxalr=vaqc694a($vq57ygb8,$vv7gxqqm,substr($vx88gmmo,0,-4))) return false;
		if(!mysql_num_rows($vb1cxalr)) { 
			$vx88gmmo="("; 
			$vsmyaawr=""; 
			foreach($v88xhuy4 as $v7ekwth8=> $vl82pjmr) { 
				$vx88gmmo.=$v7ekwth8.","; 
				$vsmyaawr.=$vl82pjmr.","; 
			}
			if(!vaqc694a("insert into",$vv7gxqqm,substr((substr($vx88gmmo,0,-1).") values(").$vsmyaawr,0,-1).")")) return false; 
			return mysql_insert_id($GLOBALS['v4g57lyf']); 
		}
		$vxtcw136=mysql_fetch_row($vb1cxalr);
		return $vxtcw136[0]; 
	}
	function vcfl3d5i($vpigq88u,&$vuj3w5o6) { 
		if(preg_match("/^[^\/]+\:\/\/(\d+\.\d+\.\d+\.\d+)(?:\:|\/|$)/",$vpigq88u,$vtir3io4)) { 
			$vuj3w5o6=$vtir3io4[1]; 
			return true; 
		}
		elseif(preg_match("/^[^\/]+\:\/\/([^\/]+)(?:\/|$)/",$vpigq88u,$vtir3io4)) { 
			$vnxpypxd=explode(".",$vtir3io4[1]); 
			if($vnxpypxd[0]=="www") unset($vnxpypxd[0]); 
			$vj42p7gw=array(); 
			foreach($vnxpypxd as $v1j1mabm) $vj42p7gw[]=$v1j1mabm; 
			$vf06q8nn=count($vj42p7gw); 
			if($vf06q8nn>=3&&strlen($vj42p7gw[$vf06q8nn-1])==2&&strlen($vj42p7gw[$vf06q8nn-2])<=3) $vgy09x36=3; 
			else $vgy09x36=2; 
			if(count($vj42p7gw)>$vgy09x36) unset($vj42p7gw[0]); 
			$vuj3w5o6=""; 
			$vgy09x36=0; 
			foreach($vj42p7gw as $vbwq4y2g) { 
				if($vgy09x36) $vuj3w5o6.="."; 
				$vuj3w5o6.=$vbwq4y2g; 
				$vgy09x36++; 
			}
			return true; 
		}
		return false; 
	}
	class v0kpixzv{ 
		var $v7euls2k; 
		var $vuj3w5o6; 
		var $vlxl6svb; 
		function v0kpixzv($vlxl6svb) { 
			if($vewesuzk=vj7q0x3l($vlxl6svb)) { 
				$this->v7euls2k=vqos8o49; 
				$this->vuj3w5o6=$vewesuzk->vwjxgo5r; 
				$this->vlxl6svb=$vewesuzk->vkjqo5k6; 
			} 
			elseif(vcfl3d5i($vlxl6svb,$this->vuj3w5o6)) { 
				$this->v7euls2k=v0xoht22; 
				$this->vlxl6svb=$vlxl6svb; 
			} 
			else { 
				$this->v7euls2k=v39wa3t0; 
				$this->vuj3w5o6=0; 
				$this->vlxl6svb=$vlxl6svb; 
			}
		}
	} 
	function vqddkxxn($vzd5qyuh) { 
		global $vnpesnx6;   
		$vgy09x36=count($vnpesnx6); 
		for($vxdg2sdk=0;$vxdg2sdk<$vgy09x36;$vxdg2sdk++) if(preg_match($vnpesnx6[$vxdg2sdk]->vqov7xto,$vzd5qyuh)) return $vnpesnx6[$vxdg2sdk]->vwjxgo5r; 
		return 0; 
	}
	
	function ipgeo($ip){
		if($fp = fsockopen ("www.ipgeo.com.br", 80, $errno, $errstr, 30)){
			fputs ($fp, "GET /rel01.asp?ip=" . $ip . " HTTP/1.1\r\nHost:www.ipgeo.com.br\r\n\r\n");
			$i = 0;
			while (!feof($fp)) {
				$line = fgets ($fp, 10000);
				if($i == 85){
					$exp = explode("<td>&nbsp;", $line);
					$temp = str_replace("</td>", "", $exp[1]);
					$temp = str_replace(chr(10), "", $temp);
					$temp = str_replace(chr(13), "", $temp);
					$cidade = trim($temp);
				}
				elseif ($i == 86){
					$exp = explode("<td>&nbsp;", $line);
					$temp = str_replace("</td>", "", $exp[1]);
					$temp = str_replace(chr(10), "", $temp);
					$temp = str_replace(chr(13), "", $temp);
					$sigla = trim($temp);
					break;
				}
				$i++;
			}
			if(strlen($sigla) > 0) return array($cidade, sigla_estado($sigla), $sigla, "br");
			else return geobytes($ip);
			fclose ($fp);
		}
		else return geobytes($ip);
	}
	
	function geobytes($ip){
		if($fp = fsockopen ("www.geobytes.com", 80, $errno, $errstr, 30)){
			fputs ($fp, "GET /IpLocator.htm?GetLocation&ipaddress=" . $ip . " HTTP/1.1\r\nHost:www.geobytes.com\r\n\r\n");
			while (!feof($fp)) {
				$line = fgets ($fp, 10000);
				$txt .= $line;
				if (eregi("ro-no_bots_pls14", $line)) {
					$exp = explode('" ', $line);
					foreach ($exp as $num => $texto) {
						if (eregi("value=", $texto)) {
							$temp = str_replace('"', '', $texto);
							$exp = explode("=", $temp);
							$sigla = substr($exp[1], -2, 2);
						}			
					}
				}
				elseif (eregi("ro-no_bots_pls17", $line)) {
					$exp = explode('" ', $line);
					foreach ($exp as $num => $texto) {
						if (eregi("value=", $texto)) {
							$temp = str_replace('"', '', $texto);
							$exp = explode("=", $temp);
							$cidade = $exp[1];
						}			
					}
				}
				elseif (eregi("ro-no_bots_pls15", $line)) {
					$exp = explode('" ', $line);
					foreach ($exp as $num => $texto) {
						if (eregi("value=", $texto)) {
							$temp = str_replace('"', '', $texto);
							$exp = explode("=", $temp);
							$estado = $exp[1];
						}			
					}
				}
				elseif (eregi("ro-no_bots_pls12", $line)) {
					$exp = explode('" ', $line);
					foreach ($exp as $num => $texto) {
						if (eregi("value=", $texto)) {
							$temp = str_replace('"', '', $texto);
							$exp = explode("=", $temp);
							$pais = strtolower($exp[1]);
							break;
						}			
					}
				}
			}
			fclose ($fp);
			if((strtolower($pais) == "br") && (strlen($estado) < 2) && (strlen($sigla) == 2)) $estado = sigla_estado($sigla);
			if (strlen($pais) == 0) return hostip($ip);
			else{
				if (strlen($estado) == 0) $estado = "u";
				if (strlen($cidade) == 0) $cidade = "u";
				if (strlen($sigla) == 0) $sigla = "u";
				return array($cidade, $estado, $sigla, $pais);
			}
		} 
		else ip2location($ip);
	}
	function sigla_estado($sigla){
		switch($sigla){
			 case "AC":
				$estado = "Acre";
				break;
			 case "AL":
				$estado = "Alagoas";
				break;
			 case "AP":
				$estado = "Amapá";
				break;
			 case "AM":
				$estado = "Amazonas";
				break;
			 case "BA":
				$estado = "Bahia";
				break;
			 case "CE":
				$estado = "Ceará";
				break;
			 case "DF":
				$estado = "Distrito Federal";
				break;
			 case "ES":
				$estado = "Espírito Santo";
				break;
			 case "GO":
				$estado = "Goiás";
				break;
			 case "MA":
				$estado = "Maranhão";
				break;
			 case "MT":
				$estado = "Mato Grosso";
				break;
			 case "MS":
				$estado = "Mato Grosso do Sul";
				break;
			 case "MG":
				$estado = "Minas Gerais";
				break;
			 case "PA":
				$estado = "Pará";
				break;
			 case "PB":
				$estado = "Paraíba";
				break;
			 case "PR":
				$estado = "Paraná";
				break;
			 case "PE":
				$estado = "Pernambuco";
				break;
			 case "PI":
				$estado = "Piauí";
				break;
			 case "RJ":
				$estado = "Rio de Janeiro";
				break;
			 case "RN":
				$estado = "Rio Grande do Norte";
				break;
			 case "RS":
				$estado = "Rio Grande do Sul";
				break;
			 case "RO":
				$estado = "Rondônia";
				break;
			 case "RR":
				$estado = "Roraima";
				break;
			 case "SC":
				$estado = "Santa Catarina";
				break;
			 case "SP":
				$estado = "São Paulo";
				break;
			 case "SE":
				$estado = "Sergipe";
				break;
			 case "TO":
				$estado = "Tocantins";
				break;
		}
		return $estado;
	}
	function ip2location($ip){
		if($fp = fsockopen ("www.ip2location.com", 80, $errno, $errstr, 30)){
			fputs ($fp, "POST /free.asp HTTP/1.1\r\nAccept: image/gif, image/x-xbitmap, image/jpeg, image/pjpeg, application/x-shockwave-flash, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/msword, application/x-gsarcade-launch, */*\r\nReferer: http://www.ip2location.com/free.asp\r\nAccept-Language: pt-br\r\nContent-Type: application/x-www-form-urlencoded\r\nAccept-Encoding: gzip, deflate\r\nUser-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)\r\nHost: www.ip2location.com\r\nContent-Length: " . strlen("ipaddresses=" . $ip) . "\r\nConnection: Keep-Alive\r\nCache-Control: no-cache\r\n\r\nipaddresses=" . $ip . "\r\n\r\n\r\n\r\n");
			$i = 0;
			while (!feof($fp)) {
				$line = fgets ($fp, 10000);
				if (eregi("&nbsp;Region&nbsp;", $line) && eregi("&nbsp;City&nbsp;", $line) && eregi("&nbsp;ISP&nbsp;", $line)){
					$line = trim($line);
					$exp = explode("align=center>", $line);
					$temp = explode("</td>", $exp[5]);
					$estado = strtoupper($temp[0]);
					$temp = explode("</td>", $exp[6]);
					$cidade = strtoupper($temp[0]);
					$temp = explode("</td>", $exp[2]);
					$pais = strtolower($temp[0]);
					if(strlen($pais) == 2){
						if($cidade == "-") $cidade = "u";
						if($estado == "-"){
							$estado = "u";
							$sigla = "u";
						}
						else $sigla = estado_sigla($estado);
						if (strlen($estado) == 0) $estado = "u";
						if (strlen($cidade) == 0) $cidade = "u";
						if (strlen($sigla) == 0) $sigla = "u";
						if (strlen($pais) == 0) $sigla = "u";
						return array($cidade, $estado, $sigla, $pais);
					}
					else return array("u", "u", "u", "u");
					break;
				}
				$i++;
			}
			fclose ($fp);
		}
		else return array("u", "u", "u", "u");
	}
	function estado_sigla($estado){
		if(stristr($estado, "Acre")) return "AC";
		elseif(stristr($estado, "Alagoas")) return "AL";
		elseif(stristr($estado, "Amapá")) return "AP";
		elseif(stristr($estado, "Amazonas")) return "AM";
		elseif(stristr($estado, "Bahia")) return "BA";
		elseif(stristr($estado, "Ceará")) return "CE";
		elseif(stristr($estado, "Distrito Federal")) return "DF";
		elseif(stristr($estado, "Espírito Santo")) return "ES";
		elseif(stristr($estado, "Goiás")) return "GO";
		elseif(stristr($estado, "Maranhão")) return "MA";
		elseif(stristr($estado, "Mato Grosso")) return "MT";
		elseif(stristr($estado, "Mato Grosso do Sul")) return "MS";
		elseif(stristr($estado, "Minas Gerais")) return "MG";
		elseif(stristr($estado, "Pará")) return "PA";
		elseif(stristr($estado, "Paraíba")) return "PB";
		elseif(stristr($estado, "Paraná")) return "PR";
		elseif(stristr($estado, "Pernambuco")) return "PE";
		elseif(stristr($estado, "Piauí")) return "PI";
		elseif(stristr($estado, "Rio de Janeiro")) return "RJ";
		elseif(stristr($estado, "Rio Grande do Norte")) return "RN";
		elseif(stristr($estado, "Rio Grande do Sul")) return "RS";
		elseif(stristr($estado, "Rondônia")) return "RO";
		elseif(stristr($estado, "Roraima")) return "RR";
		elseif(stristr($estado, "Santa Catarina")) return "SC";
		elseif(stristr($estado, "São Paulo")) return "SP";
		elseif(stristr($estado, "Sergipe")) return "SE";
		elseif(stristr($estado, "Tocantins")) return "TO";
		else return "u";
	}
	function hostip($ip){
		if($fp = fsockopen ("api.hostip.info", 80, $errno, $errstr, 30)){
			fputs ($fp, "GET /get_html.php?ip=" . $ip . " HTTP/1.1\r\nHost:api.hostip.info\r\n\r\n");
			$i = 0;
			while (!feof($fp)) {
				$line = fgets ($fp, 10000);
				if($i == 12){
					$exp = explode("(", $line);
					$pais = strtolower(trim(str_replace(")", "", $exp[1])));
				}
				if($i == 13){
					$line = str_replace("City:", "", $line);
					$exp = explode(",", $line);
					$cidade = trim($exp[0]);
					$estado = trim($exp[1]);
					$sigla = $estado;
					break;
				}
				$i++;
			}
			if(($pais == "unknown country?") || (eregi("Unknown", $cidade))) return ip2location($ip);
			else{
				if (strlen($estado) == 0) $estado = "u";
				if (strlen($cidade) == 0) $cidade = "u";
				if (strlen($sigla) == 0) $sigla = "u";
				if (strlen($pais) == 0) $sigla = "u";
				return array($cidade, $estado, $sigla, $pais);
			}
			fclose ($fp);
		}
	}
?>