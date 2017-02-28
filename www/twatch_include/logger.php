<?php
	if(!isset($GLOBALS['vof5peuj'])) vb8364y4();
	function vb8364y4() {
		if(!isset($GLOBALS['vof5peuj'])) { 
			if(isset($GLOBALS['v53j9s2i'])) { 
				$vgv8ltzj=ignore_user_abort(true); 
				vh01ubid(); 
				ignore_user_abort($vgv8ltzj); 
			}
			else { 
				register_shutdown_function('vh01ubid');
			}
		}
		else return vh01ubid();
	}
	function vh01ubid() { 
		global $vwoj4ypa; 
		if(isset($GLOBALS['adl_alt_docroot'])) { 
			if(isset($GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"])) $v1zuroh8=$GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"]; 
			$GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"]=$GLOBALS['adl_alt_docroot'];
		}
		$GLOBALS['vg4s0sj6']=true; 
		require_once $GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"]."/twatch_include/general.php"; 
		require_once $GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"]."/twatch_include/data.php"; 
		require_once $GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"]."/twatch_include/loggerinc.php"; 
		$GLOBALS['vg9loh6q']=array("stop", "dontcount_".$GLOBALS['v6wqka0r'],"nores","iptocou"); 
		if(!vsskumkc()) return $GLOBALS['vcabgqjs']; 
		$vb1cxalr=vgxb7yi8(); 
		if(isset($v1zuroh8)) $GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"]=$v1zuroh8; 
		if(!isset($GLOBALS['vkljda0y'])) vaqc694a("unlock tables"); 
		mysql_close($GLOBALS['v4g57lyf']); 
		return $vb1cxalr;
	}
	function vgxb7yi8() {
		global $vru7h2lp,$vwgyfw1q,$HTTP_GET_VARS,$HTTP_ENV_VARS,$HTTP_COOKIE_VARS,$HTTP_SERVER_VARS,$vcva8fpp,$vwoj4ypa,$vi2qnbue,$vsk2m0ye,$vfs6pezc;
		unset($GLOBALS['vkljda0y']);
		if(!isset($vru7h2lp["stop"])) { 
			vrwh7qhe("stop status is not set");
			return false;
		}
		if($vru7h2lp["stop"]=="1") return true;
		vaqc694a("lock tables " . $vcva8fpp["general"]->v7ekwth8 . " write," . $vcva8fpp["errors"]->v7ekwth8 . " write");
		$vru7h2lp["ndclear"]=vbz7bg74("ndclear");
		if($vfs6pezc==v3rxf15h) return false;
		elseif($vfs6pezc==vvs7hrbz) unset($vru7h2lp["ndclear"]);
		if(!isset($vru7h2lp["ndclear"])||$vru7h2lp["cdt"]>$vru7h2lp["ndclear"]) {
			require_once $HTTP_SERVER_VARS["DOCUMENT_ROOT"]."/twatch_include/cleanup.php";
			$vh3lxif8=vfym29jc("select @cdt");
			if($vwoj4ypa) return false;
			if(!vfxbbzv6("ndclear",$vh3lxif8)) return false;
			vaqc694a("unlock tables");
			if(!vm4vimb9("ldclear_t")) return false;
			if(!vfxbbzv6("ldclear_s",$vru7h2lp["cts"])) return false;
			$vc8yqh65=vbiksgeu();
			$vz50nl9q=vbz7bg74("autorep");
			if(!isset($GLOBALS['vof5peuj'])&&$GLOBALS['vfs6pezc']==vi2w7d41) if(!vmwyxwmv()) return false;
			if(!vz5p7ach()) {
				vrwh7qhe("UNSUCCESSFUL daily visitor data cleanup");
			}
			if(!v849z3gh(false)) { 
				vrwh7qhe("UNSUCCESSFUL daily trimming");
			}
			if(!vkxdwon6()) { 
				vrwh7qhe("ERROR evaluating paths"); 
			}
			vfxbbzv6("ldclear_t",vbiksgeu()-$vc8yqh65);
			vaqc694a("lock tables " . $vcva8fpp["general"]->v7ekwth8 . " write," . $vcva8fpp["errors"]->v7ekwth8 . " write");
			if(!$vb1cxalr=vaqc694a("select @cmon>value from","general","where field='nclear'")) return false;
			if(!($vb1cxalr=mysql_fetch_row($vb1cxalr))||$vb1cxalr[0]) { 
				$vn2hj55x=vfym29jc("select @cmon");
				if($vwoj4ypa) return false; 
				if(!vfxbbzv6("nclear",$vn2hj55x)) return false; 
				vaqc694a("unlock tables"); 
				vm4vimb9("lmclear_t"); 
				vfxbbzv6("lmclear_s",$vru7h2lp["cts"]); 
				$vc8yqh65=vbiksgeu(); 
				if(!vjkati7k()) { 
					vrwh7qhe("UNSUCCESSFUL monthly all data delete"); 
				}
				if(!vpv6fiva()) {
					vrwh7qhe("UNSUCCESSFUL monthly daily data delete"); 
				}
				if(!v849z3gh(true)) { 
					vrwh7qhe("UNSUCCESSFUL monthly trimming"); 
				}
				if(!v0h7sdpn()) { 
					vrwh7qhe("UNSUCCESSFUL Dictionary cleanup");
				}
				vfxbbzv6("lmclear_t",vbiksgeu()-$vc8yqh65);
			}
		}
		vaqc694a("unlock tables");
		if(!vay94w88(true,true)) return false;
		$v3lqy5sd=false;
		if(!isset($vru7h2lp["dontcount_".$GLOBALS['v6wqka0r']])||!isset($HTTP_COOKIE_VARS["dontcount_".$GLOBALS['v6wqka0r']])||$HTTP_COOKIE_VARS["dontcount_".$GLOBALS['v6wqka0r']]!=$vru7h2lp["dontcount_".$GLOBALS['v6wqka0r']]) { 
			if(empty($HTTP_SERVER_VARS["REMOTE_ADDR"])) $HTTP_SERVER_VARS["REMOTE_ADDR"]="NotSetByServer";
			if(isset($HTTP_SERVER_VARS["HTTP_CLIENT_IP"])) $vkm45mnv=$HTTP_SERVER_VARS["HTTP_CLIENT_IP"]; 
			elseif(isset($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"])) $vkm45mnv=$HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
			if(isset($vkm45mnv)) { 
				if(preg_match("/^([\d\.]+)\,\s?[\d\.]+$/",$vkm45mnv,$vtir3io4)) $vkm45mnv=$vtir3io4[1]; 
				$vqgsq39b=substr($vkm45mnv,0,15); 
				$v0vu0tco=substr($HTTP_SERVER_VARS["REMOTE_ADDR"],0,15); 
			}
			else { 
				$vqgsq39b=substr($HTTP_SERVER_VARS["REMOTE_ADDR"],0,15); 
				$v0vu0tco=""; 
			}
			if(!isset($HTTP_SERVER_VARS["HTTP_USER_AGENT"])) $vzd5qyuh=""; 
			else $vzd5qyuh=$HTTP_SERVER_VARS["HTTP_USER_AGENT"];   
			if(!$vb1cxalr=vaqc694a("select dt,robot,@cts-last from","ips","where ip='" . $vqgsq39b . "' and ((dt>=unix_timestamp(date_format(@cdt,'%Y-%m-%d 00:00:00')) or last>@cts-" . $vwgyfw1q . "))")) return false; 
			if(!$vxtcw136=mysql_fetch_row($vb1cxalr)) { 
				$v6vo9l3c=false; 
				$vcu1pgai=vafy042h($vzd5qyuh);
			}
			else { 
				$v6vo9l3c=$vxtcw136[0]; 
				$vusynrnz=$vxtcw136[2]; 
				if($vxtcw136[1]) $vcu1pgai=new v2o4cj7f($vxtcw136[1],"",""); 
				else $vcu1pgai=false;
			}
			if(isset($GLOBALS['vnrhy32a'])) { 
				$vx3p5unx=$HTTP_GET_VARS["pg"];
				if(preg_match("/^[^\/]+\:\/\/[^\/]+(\/.*|)$/",$vx3p5unx,$vtir3io4)) {
					$vx3p5unx=$vtir3io4[1]; 
					if(!$vx3p5unx) $vx3p5unx="\57";
				}
			}
			else {
				if(empty($HTTP_SERVER_VARS["REQUEST_URI"])) {
					if(empty($HTTP_SERVER_VARS["PHP_SELF"])) { 
						if(empty($HTTP_SERVER_VARS["SCRIPT_NAME"])) { 
							$vx3p5unx="unknown_page";
						}
						else { 
							$vx3p5unx=$HTTP_SERVER_VARS["SCRIPT_NAME"]; 
						}
					}
					else { 
						$vx3p5unx=$HTTP_SERVER_VARS["PHP_SELF"]; 
					}
					$vxdg2sdk=0;
					foreach($HTTP_GET_VARS as $v2y8fsh6=> $vb0qc8n4) {
						$vx3p5unx.=($vxdg2sdk?"&":"?").$v2y8fsh6."=".urlencode($vb0qc8n4); 
						$vxdg2sdk++; 
					}
				}
				else $vx3p5unx=$HTTP_SERVER_VARS["REQUEST_URI"];
			}
			/*if(isset($GLOBALS['adl_page_prefix'])) $vx3p5unx="[".$GLOBALS['adl_page_prefix']."] ".$vx3p5unx;
			if(empty($GLOBALS['adl_count_params'])) if(preg_match("/^([^\?]+)\?.+$/",$vx3p5unx,$vtir3io4)) $vx3p5unx=$vtir3io4[1];*/
			
			$vx3p5unx=$_SERVER['REQUEST_URI'];
			$vah1idye=vllpeirq("pages",array("page"=>"'".mysql_escape_string(substr($vx3p5unx,0,255))."'"));
			if($vwoj4ypa) return false;
			if($vcu1pgai) {
				if(!vnqvdkz3("robotsc",array("robot"=>$vcu1pgai->vwjxgo5r,"page"=>$vah1idye))) return;
			}
			else {
				if(!vnqvdkz3("pagesc",array("page"=>$vah1idye))) return;
			}
			if($v6vo9l3c) {
				if(!$vcu1pgai&&($vusynrnz>$vwgyfw1q)) if(!vnqvdkz3("sessions")) return false;
				if(!vaqc694a("update","ips","set last=@cts where dt=" . $v6vo9l3c . " and ip='" . $vqgsq39b . "'")) return false;
				if(!vaqc694a("insert into","ippages","values(" . $v6vo9l3c . ",'" . $vqgsq39b . "',null," . $vah1idye . ",@cts)")) return false;
			}
			else {
				if(!$vcu1pgai) { 
					if(!vnqvdkz3("hits")) return false;
					if(!vnqvdkz3("sessions")) return false;
					if(!vnqvdkz3("weekday",array("wd"=>"weekday(@cdt)"),false)) return false;
					if(!vnqvdkz3("hourly",array("hr"=>"from_unixtime(@cts,'%k')"))) return false;
				}
				if(!$vcu1pgai) $vtlywb33=vqddkxxn($vzd5qyuh);
				else $vtlywb33=1;
				$vvu96ikz=vllpeirq("agents",array("agent"=>"'".mysql_escape_string(substr($vzd5qyuh,0,255))."'","browser"=>$vtlywb33));
				if($vwoj4ypa) return;
				if(!$vcu1pgai) { 
					if(!vnqvdkz3("agentsc",array("agent"=>$vvu96ikz))) return false;
					if(!vnqvdkz3("browsersc",array("browser"=>$vtlywb33))) return false;
				}
				if(isset($GLOBALS['vnrhy32a'])) { 
					$vt1z42pn=$HTTP_GET_VARS["ref"]; 
				}
				elseif(isset($HTTP_SERVER_VARS["HTTP_REFERER"])) {
					$vt1z42pn=$HTTP_SERVER_VARS["HTTP_REFERER"]; 
				}
				else {
					$vt1z42pn="";
				}
				$vlxl6svb=new v0kpixzv($vt1z42pn);
				if($vlxl6svb->v7euls2k==v0xoht22) $vlxl6svb->vuj3w5o6=vllpeirq("refdoms",array("domain"=>"'".mysql_escape_string(substr($vlxl6svb->vuj3w5o6,0,255))."'"));
				if($vwoj4ypa) return false;
				$vvn0vgh8=vllpeirq("refs",array("type"=>$vlxl6svb->v7euls2k,"domain"=>$vlxl6svb->vuj3w5o6,"ref"=>"'".mysql_escape_string(substr($vlxl6svb->vlxl6svb,0,255))."'"));
				if($vwoj4ypa) return false;
				if(!$vcu1pgai) {
					if(!vnqvdkz3("refsc",array("ref"=>$vvn0vgh8))) return false;
					if($vlxl6svb->vlxl6svb) if(!vnqvdkz3("refgroupsc",array("type"=>$vlxl6svb->v7euls2k,"domain"=>$vlxl6svb->vuj3w5o6))) return false;
					if(!vnqvdkz3("cousc",array("country"=>"'u'"))) return false; 
				}
				$v6vo9l3c=$vru7h2lp["cts"];
				$v3lqy5sd=true;
				if(!$vcu1pgai) {
					if(!vaqc694a("insert into","ips","(dt, ip, last, proxy, proxyresolved, proxycou, agent, robot, resolved, country) values(@cts,'" . $vqgsq39b . "',@cts,'" . $v0vu0tco . "','u','u'," . $vvu96ikz . ",0,'u','u')")&&$vwoj4ypa) return false;
				}
				else {
					if(!vaqc694a("insert into","ips","(dt, ip, last, proxy, proxyresolved, proxycou, agent, robot, resolved, country) values(@cts,'" . $vqgsq39b . "',@cts,'" . $v0vu0tco . "','u','u'," . $vvu96ikz . "," . $vcu1pgai->vwjxgo5r . ",'u','u')")&&$vwoj4ypa) return false;
				}
				if(!vaqc694a("insert into","ippages","values(@cts,'" . $vqgsq39b . "',1," . $vvn0vgh8 . ",@cts),(@cts,'" . $vqgsq39b . "',2," . $vah1idye . ",@cts)")) return false;
			}
			if(!isset($GLOBALS['vkljda0y'])) { 
				vaqc694a("unlock tables");
				$GLOBALS['vkljda0y']=true; 
			}
			if($v3lqy5sd) {
				$vb1cxalr=((!isset($GLOBALS['vru7h2lp']["nores"]))&&!isset($GLOBALS['vof5peuj'])); 
				$v2nb51zg=new vz55o891($vqgsq39b,$vb1cxalr);
				$vbry0egk=new vz55o891($v0vu0tco,$vb1cxalr); 
				if($v2nb51zg->vhb28lxc) vaqc694a("update","ips","set resolved='" . $v2nb51zg->vhb28lxc . "' where dt=" . $v6vo9l3c . " and ip='" . $vqgsq39b . "'"); 
				if($v2nb51zg->vx1j6hs3){
					 vaqc694a("update","ips","set country='" . $v2nb51zg->vx1j6hs3 . "' where dt=" . $v6vo9l3c . " and ip='" . $vqgsq39b . "'");
					 
					 if(strlen($v0vu0tco) > 0){
						 if((strcmp(trim($v2nb51zg->vx1j6hs3),"br") == 0) || (strcmp(trim($vbry0egk->vx1j6hs3),"br") == 0)){
						 	$localidade = ipgeo($v0vu0tco);
						 }
						 else $localidade = geobytes($v0vu0tco);
					}
					else {
						 if((strcmp(trim($v2nb51zg->vx1j6hs3),"br") == 0) || (strcmp(trim($vbry0egk->vx1j6hs3),"br") == 0)){
						 	$localidade = ipgeo($vqgsq39b);
						 }
						 else $localidade = geobytes($vqgsq39b);
					}
					
					vaqc694a("update","ips","set sigla='" . $localidade[2] . "' where dt=" . $v6vo9l3c . " and ip='" . $vqgsq39b . "'");
					vaqc694a("update","ips","set estado='" . mysql_escape_string(htmlentities($localidade[1])) . "' where dt=" . $v6vo9l3c . " and ip='" . $vqgsq39b . "'");
					vaqc694a("update","ips","set cidade='" . mysql_escape_string(htmlentities($localidade[0])) . "' where dt=" . $v6vo9l3c . " and ip='" . $vqgsq39b . "'");
					if($v2nb51zg->vx1j6hs3 == "u"){
						vaqc694a("update","ips","set country='" . $localidade[3] . "' where dt=" . $v6vo9l3c . " and ip='" . $vqgsq39b . "'");
						$v2nb51zg->vx1j6hs3 = $localidade[3];
					}
				}
				if($vbry0egk->vhb28lxc) vaqc694a("update","ips","set proxyresolved='" . $vbry0egk->vhb28lxc . "' where dt=" . $v6vo9l3c . " and ip='" . $vqgsq39b . "'"); 
				if($vbry0egk->vx1j6hs3) vaqc694a("update","ips","set proxycou='" . $vbry0egk->vx1j6hs3 . "' where dt=" . $v6vo9l3c . " and ip='" . $vqgsq39b . "'"); 
				if($v2nb51zg->vx1j6hs3) $vx1j6hs3=$v2nb51zg->vx1j6hs3; 
				elseif($vbry0egk->vx1j6hs3) $vx1j6hs3=$vbry0egk->vx1j6hs3; 
				else $vx1j6hs3=""; 
				if($vx1j6hs3&&!$vcu1pgai) { 
					vaqc694a("update","cousc","set count=count-1 where dt=@cdt and country='u' and count>0"); 
					vaqc694a("update","cousc_mon","set count=count-1 where mon=@cmon and country='u' and count>0"); 
					if(!vnqvdkz3("cousc",array("country"=>"'" . $vx1j6hs3 . "'"))) return false; 
				}
			}
		}
		return true; 
	} 
?>