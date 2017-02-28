<?php 
	function v4f4jnjr() { 
		echo '<link rel="stylesheet" href="latest'; 
		if($GLOBALS['right_to_left']) echo "_rtl";
		echo('.css" />' . chr(10) . chr(13));
		echo('<script language="javascript"><!--') . chr(10) . chr(13);
		echo('trans=new Array();') . chr(10) . chr(13);
		echo("trans['Agent String']='" . ve0jwhkw("Agent String") . ("';")  . chr(10) . chr(13));
		echo("trans['Referrer']='" . ve0jwhkw("Referrer") . ("';")  . chr(10) . chr(13));
		echo("right_to_left=");
		echo($GLOBALS['right_to_left']?"true":"false" . ";" . chr(10) . chr(13));
		?>
		function e(s){
			document.write(s);
		}
		function visitor(d) {
			e('<div class="visitor">');
			e('<div class="h">');
			e('<div class="time"><div>'+d[0]+'<br /><b>'+d[1]+'</b>');
			e('</div></div>');
			e('<div class="referer"><div>'+trans['Referrer']+': <img class="inl" src="refs/'+d[2]+'.gif" width="17" height="17" />'+(d[3]?'<a href="'+d[3]+'">':'')+d[4]+(d[3]?'</a>':'')+'</div></div>');
			e('<div class="spacer"> </div>');
			e('</div>');
			e('<div class="v">');
			e('<div class="ip"><div>');
			e('<b>'+d[5]+'</b><br />');
			e('['+d[6]+']<br />');
			e('<img class="inl" src="flags/'+d[7]+'.gif" width="26" height="13" />'+d[8]);
			e('</div></div>');
			if(d[9]) {
				e('<div class="proxy">');
				e('<div><span>proxy</span> <b>'+d[9]+'</b><br />');
				e('['+d[10]+']<br />');
				e('<img class="inl" src="flags/'+d[11]+'.gif" width="26" height="13" />'+d[12]);
				e('</div></div>');
			}
			e('<div class="browser"><div>');
			e('<img class="inl" src="browsers/'+d[13]+'.gif" width="17" height="17" />'+d[14]+'<br />');
			e(trans['Agent String']+': <span style="direction:ltr;unicode-bidi:bidi-override">'+d[15]+'</span>');
			e('</div></div>');
			e('<div class="spacer"> </div>');
			e('</div>');
			
			e('<div class="pages">');
			for(var i=0;i<d[16].length-1;i+=2) {
				e('<div class="page">');
				if(!right_to_left) e('<div class="arrow"><img src="arrow.gif" class="arrow" /></div>');
				e('<div class="text">'+d[16][i]+'<br /><span>'+d[16][i+1]+'</span></div>');	
				if(right_to_left) e('<div class="arrow"><img src="arrow_rtl.gif" class="arrow" /></div>');
				e('</div>');
			}
			e('<div class="spacer"> </div>');
			e('</div>');
			e('<div class="spacer"> </div>');
			e('</div>');
		}
		function google_map(ip){
			window.open('http://kharkoma.homelinux.com/gmaps/gmapapi.php?ip=' + ip, 'Google', 'width=620,height=520,status=no,resizable=no,top=20,left=100,dependent=yes,alwaysRaised=yes,scrollbars=no');
		}
		//-->
		</script>
		<?
	}
	$GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"]="../";
	$vs2ox6xs="Latest Visitors";
	$vwgv7hfq=3;
	$v0luxu2i=true;
	require_once "../twatch_include/reporttitle.php";
	require_once "../twatch_include/data.php";
	require_once "../twatch_include/countries.php";
	$vi3flr61=vbiksgeu();
	echo chr(10) . chr(13);
	$vxybqq9m=20;
	if(isset($HTTP_GET_VARS["start"])) $va44c75y=(int)$HTTP_GET_VARS["start"];
	else $va44c75y=0;
	if(!$vp2ce82x) { 
		$v9uprm6w=vbz7bg74("showips"); 
		if($vfs6pezc!=vi2w7d41) $v9uprm6w=false; 
	}
	else { 
		$v9uprm6w=true;
	}
	$v2m3ie84="";
	if(isset($HTTP_GET_VARS["c"])) { 
		$vgy09x36=$HTTP_GET_VARS["c"];
		if($vgy09x36=="ref") $vn4nxptb=new vlxl6svb();
		elseif($vgy09x36=="refdet") $vn4nxptb=new v9opj0ck();
		elseif($vgy09x36=="rob") $vn4nxptb=new vxifrzxl(); 
		elseif($vgy09x36=="cou") $vn4nxptb=new vx1j6hs3(); 
		elseif($vgy09x36=="brw") $vn4nxptb=new v9zy1grn(); 
		elseif($vgy09x36=="agt") $vn4nxptb=new vl7w9g83(); 
		elseif($vgy09x36=="pg") $vn4nxptb=new vx3p5unx(); 
		else die("Bad Parameters"); 
	}
	elseif(isset($HTTP_GET_VARS["\151\160"])) { 
		$vn4nxptb=new vqgsq39b();
	}
	else {
		$vn4nxptb=new v9hlwa51();
	}
	?>
	<form method="get" class="ipform">
	<span>IP: <input type="text" name="ip" value="<?
	
	if(isset($HTTP_GET_VARS["ip"])) echo $HTTP_GET_VARS["ip"];
	echo '" /><input type="submit" class="submit" value="';
	echo ve0jwhkw("Find");
	echo '" /> ';
	if(isset($HTTP_GET_VARS["ip"])||isset($HTTP_GET_VARS["c"])) echo '  <a href="?">'.ve0jwhkw("View All")."</a>";
	echo "</span></form>";
	if(!$vn4nxptb->vbu7h596()) die("bad parameters"); 
	$v7ekwth8=$vn4nxptb->vqpu6lbu(); 
	if($v7ekwth8) echo "<h2>".$v7ekwth8."</h2>"; 
	$v2m3ie84=$vn4nxptb->vcv8ofsv(); 
	if(!$vb1cxalr=vaqc694a("select a.agent,a.resolved,a.country,a.proxy,a.proxyresolved,a.proxycou,a.robot,a.dt,a.ip,b.page, CASE a.cidade WHEN 'u' THEN 'Desconhecida' ELSE a.cidade END, CASE a.estado WHEN 'u' THEN 'Desconhecido' ELSE a.estado END, a.sigla from " . $vcva8fpp["ips"]->v7ekwth8 . " as a," . $vcva8fpp["ippages"]->v7ekwth8 . " as b". $vn4nxptb->v29oha6v()." ". $v2m3ie84. ($v2m3ie84?" and ":" where ")."a.ip=b.ip and a.dt=b.dt and b.ord=1" .(isset($vn4nxptb->vbi0927o)?" group by a.ip,a.dt":"")." order by a.dt desc limit " . $va44c75y . ",".($vxybqq9m+1))) die("db error"); 
	if(!$va44c75y&&!mysql_num_rows($vb1cxalr)) { 
		echo "<p>".ve0jwhkw("No Visitors Found")."</p>";
		require_once "../twatch_include/footer.php"; 
		die("</body></html>"); 
	}
	$vmmpx4bm=mysql_num_rows($vb1cxalr)==$vxybqq9m+1; 
	$vgy09x36=0; 
	$vjazm6in=array(); 
	$vsxa9q3y=array(); 
	$vueav2xg=array(); 
	while(($vxtcw136=mysql_fetch_row($vb1cxalr))&&$vgy09x36<$vxybqq9m) {
		$vsxa9q3y[$vxtcw136[0]]=false; 
		$vueav2xg[$vxtcw136[9]]=false; 
		$vjazm6in[]=$vxtcw136; 
	} 
	$vgwglzww=""; 
	foreach($vsxa9q3y as $vwjxgo5r=> $vl7w9g83) { 
		$vgwglzww.=($vgwglzww?"\54":"").$vwjxgo5r; 
	}
	$vlkbl0jc=""; 
	foreach($vueav2xg as $vwjxgo5r=> $vlxl6svb) { 
		$vlkbl0jc.=($vlkbl0jc?"\54":"").$vwjxgo5r;
	}
	$vmdtdbsk=array(); 
	if($vgwglzww) { 
		if($vb1cxalr=vaqc694a("select id,browser,agent from","agents","where id in(" . $vgwglzww . ")")) { 
			while($vxtcw136=mysql_fetch_row($vb1cxalr)) $vmdtdbsk[$vxtcw136[0]]=array_slice($vxtcw136,1); 
		}
	}
	$vyls8dgc=array(); 
	if($vgwglzww) { 
		if($vb1cxalr=vaqc694a("select id,type,domain,ref from","refs","where id in(" . $vlkbl0jc . ")")) { 
			while($vxtcw136=mysql_fetch_row($vb1cxalr)) $vyls8dgc[$vxtcw136[0]]=array_slice($vxtcw136,1);
		}
	}
	foreach($vjazm6in as $vxtcw136) { 
		$vb0qc8n4=new varl75sz(); 
		$vb0qc8n4->vigbz1ow($vxtcw136[7],$vxtcw136[8],$vxtcw136);
		$vb0qc8n4->vpqlfcw8(); 
		flush(); 
		$vgy09x36++; 
	}
	if($vmmpx4bm) { 
		$vxan3yro=""; 
		foreach($HTTP_GET_VARS as $vvoa3lhw=> $vb0qc8n4) { 
			if($vvoa3lhw!="start") $vxan3yro.="&".$vvoa3lhw."=".urlencode($vb0qc8n4); 
		}
		echo '<p class="prev"><span class="but"><a href="?start=' . ($va44c75y+$vxybqq9m).$vxan3yro. '">' .ve0jwhkw("Previous #number#",array("number" => vvs5s220($vxybqq9m)))." >></a></span></p>" . chr(10) . chr(13); 
	}
	require "../twatch_include/footer.php";
	echo "</body></html>";
	class v9hlwa51{ 
		function vbu7h596() { 
			return true; 
		}
		function vqpu6lbu() { 
			return ""; 
		}
		function vcv8ofsv() { 
			return ""; 
		} 
		function v29oha6v() { 
			return ""; 
		}
	}
	class vlxl6svb extends v9hlwa51 { 
		var $vuj3w5o6; 
		var $v7euls2k; 
		function vbu7h596() { 
			global $HTTP_GET_VARS; 
			if(!isset($HTTP_GET_VARS["t"])||!isset($HTTP_GET_VARS["d"])) return false; 
			$this->v7euls2k=(int)$HTTP_GET_VARS["t"]; 
			$this->vuj3w5o6=(int)$HTTP_GET_VARS["d"]; 
			return true; 
		}
		function vqpu6lbu() { 
			return ve0jwhkw("Latest Visitors Referred from #referrer#",array("referrer" => "<span>".vgtc53pd($this->v7euls2k,$this->vuj3w5o6)."</span>")); 
		}
		function v29oha6v() { 
			global $vcva8fpp; 
			return "," . $vcva8fpp["\162\145\146\163"]->v7ekwth8 . " as c"; 
		}
		function vcv8ofsv() { 
			return "where b.page=c.id and c.type=" . $this->v7euls2k . " and c.domain=" . $this->vuj3w5o6; 
		}
	}
	class vxifrzxl extends v9hlwa51 { 
		var $vwjxgo5r;
		function vbu7h596() { 
			global $HTTP_GET_VARS;
			if(!isset($HTTP_GET_VARS["id"])) return false; 
			$this->vwjxgo5r=(int)$HTTP_GET_VARS["id"]; 
			return true; 
		}
		function vqpu6lbu() { 
			return ve0jwhkw("Latest Visits by #robot# Robot",array("robot" => "<span>".v1itqhmq($this->vwjxgo5r,$GLOBALS['vq0oz0ts'])."</span>")); 
		}
		function v29oha6v() { 
			return ""; 
		}
		function vcv8ofsv() { 
			return "where a.robot=" . $this->vwjxgo5r; 
		}
	}
	class v9opj0ck extends v9hlwa51 { 
		var $vwjxgo5r; 
		function vbu7h596() { 
			global $HTTP_GET_VARS; 
			if(!isset($HTTP_GET_VARS["id"])) return false;
			$this->vwjxgo5r=(int)$HTTP_GET_VARS["id"]; 
			return true; 
		}
		function vqpu6lbu() { 
			return ve0jwhkw("Latest Visitors Referred from #referrer#",array("referrer" => "<span>".vytnhq2x($this->vwjxgo5r)."</span>")); 
		}
		function v29oha6v() { 
			global $vcva8fpp; 
			return ""; 
		}
		function vcv8ofsv() { 
			return "where b.page=" . $this->vwjxgo5r; 
		}
	}
	class v9zy1grn extends v9hlwa51 { 
		var $vwjxgo5r; 
		function vbu7h596() { 
			global $HTTP_GET_VARS;
			if(!isset($HTTP_GET_VARS["id"])) return false; 
			$this->vwjxgo5r=(int)$HTTP_GET_VARS["id"]; 
			return true; 
		}
		function vqpu6lbu() { 
			return ve0jwhkw("Latest Visitors with #browser#",array("browser" => "<span>".v1itqhmq($this->vwjxgo5r,$GLOBALS['vnpesnx6'])."</span>")); 
		}
		function v29oha6v() { 
			global $vcva8fpp; 
			return "," . $vcva8fpp["agents"]->v7ekwth8 . " as c"; 
		}
		function vcv8ofsv() { 
			return "where a.agent=c.id and c.browser=" . $this->vwjxgo5r; 
		}
	}
	class vqgsq39b extends v9hlwa51 {
		var $vqgsq39b; 
		function vbu7h596() { 
			global $HTTP_GET_VARS;
			if(!isset($HTTP_GET_VARS["ip"])) return false; 
			$this->vqgsq39b=$HTTP_GET_VARS["ip"];
			return true;
		}
		function vqpu6lbu() {
			return ""; 
		}
		function v29oha6v() { 
			return ""; 
		}
		function vcv8ofsv() { 
			return "where (a.ip='" . $this->vqgsq39b . "' or a.proxy='" . $this->vqgsq39b . "')"; 
		}
	}
	class vl7w9g83 extends v9hlwa51 { 
		var $vwjxgo5r; 
		function vbu7h596() { 
			global $HTTP_GET_VARS; 
			if(!isset($HTTP_GET_VARS["id"])) return false; 
			$this->vwjxgo5r=(int)$HTTP_GET_VARS["id"]; 
			return true; 
		}
		function vqpu6lbu() { 
			$v7ekwth8=vfym29jc("select agent from","agents","where id=" . $this->vwjxgo5r); 
			if($GLOBALS['vwoj4ypa']) $v7ekwth8="ID NOT FOUND"; 
			return ve0jwhkw("Latest Visitors with #user_agent#",array("user_agent" => "<span>".vb1iulhl($v7ekwth8)."</span>")); 
		}
		function v29oha6v() { 
			return ""; 
		}
		function vcv8ofsv() { 
			return "where a.agent=" . $this->vwjxgo5r; 
		}
	}
	class vx3p5unx extends v9hlwa51 { 
		var $vwjxgo5r; 
		function vbu7h596() { 
			global $HTTP_GET_VARS; 
			if(!isset($HTTP_GET_VARS["id"])) return false; 
			$this->vwjxgo5r=(int)$HTTP_GET_VARS["id"]; 
			$this->vbi0927o=true; 
			return true; 
		}
		function vqpu6lbu() { 
			$v7ekwth8=vfym29jc("select page from","pages","where id=" . $this->vwjxgo5r); 
			if($GLOBALS['vwoj4ypa']) $v7ekwth8="ID NOT FOUND"; 
			return ve0jwhkw("Latest Visitors who have visited #page#",array("page" => vb1iulhl("<span>".$v7ekwth8."</span>"))); 
		}
		function v29oha6v() {
			global $vcva8fpp; 
			return "," . $vcva8fpp["ippages"]->v7ekwth8 . " as c"; 
		}
		function vcv8ofsv() { 
			return "where a.dt=c.dt and a.ip=c.ip and c.ord<>1 and c.page=" . $this->vwjxgo5r; 
		}
	}
	class vx1j6hs3 extends v9hlwa51 {
		var $vwjxgo5r; 
		var $v7ekwth8; 
		function vbu7h596() { 
			global $HTTP_GET_VARS; 
			if(!isset($HTTP_GET_VARS["id"])) return false; 
			$this->vwjxgo5r=$HTTP_GET_VARS["id"]; 
			include "../twatch_include/countries.php"; 
			if(!isset($vdp8kmrn[$this->vwjxgo5r])) return false; 
			else $this->v7ekwth8=ve0jwhkw($vdp8kmrn[$this->vwjxgo5r]); 
			return true; 
		}
		function vqpu6lbu() {
			return ve0jwhkw("Latest Visitors from #country#",array("country" => "<span>".$this->v7ekwth8."</span>")); 
		}
		function v29oha6v() { 
			return ""; 
		}
		function vcv8ofsv() { 
			return "where (a.country='" . $this->vwjxgo5r . "' or (a.country='u' and a.proxycou='" . $this->vwjxgo5r . "'))"; 
		} 
	} 
	class varl75sz{ 
		var $vz36b96n;
		var $vqgsq39b;
		var $viaayn1x; 
		var $vjn3w5nk; 
		var $vqrrreyy; 
		var $vzd5qyuh; 
		var $v0vu0tco; 
		var $v5k006c3; 
		var $v90bh5f5; 
		var $ve7fe6m0; 
		var $vtlywb33; 
		var $vup3v2fa; 
		var $vzsn7p56; 
		var $v38yoo87; 
		var $v0wjy8ob=""; 
		var $va5l0hfb=array(); 
		var $vgxtdgw3=false; 
		var $cidade;
		var $estado;
		var $sigla;
		function vigbz1ow($vz36b96n,$vqgsq39b,$vxtcw136) { 
			global $vnpesnx6,$vs0lfx1u,$vcva8fpp,$vdp8kmrn,$vq0oz0ts; 
			$this->vz36b96n=$vz36b96n; 
			$this->vqgsq39b=$vqgsq39b;
			$this->v0vu0tco=$vxtcw136[3];
			$this->cidade = $vxtcw136[10];
			$this->estado = $vxtcw136[11];
			$this->sigla = $vxtcw136[12];
			if($this->sigla != "u") $this->estado .= "&nbsp;(" . $this->sigla . ")";
			if($vxtcw136[4]=="u") $this->v5k006c3="Unresolved"; 
			else $this->v5k006c3=$vxtcw136[4];
			if(!isset($GLOBALS['vmdtdbsk'][$vxtcw136[0]])) { 
				$this->vzd5qyuh="ID NOT FOUND"; 
				$this->vtlywb33="ID NOT FOUND"; 
				$this->vup3v2fa=0; 
			}
			else { 
				$this->vzd5qyuh=$GLOBALS['vmdtdbsk'][$vxtcw136[0]][1]; 
				if(!$GLOBALS['vmdtdbsk'][$vxtcw136[0]][0]) $this->vtlywb33="Unknown Browser"; 
				elseif($GLOBALS['vmdtdbsk'][$vxtcw136[0]][0]==1) $this->vtlywb33=v1itqhmq($vxtcw136[6],$vq0oz0ts);
				else $this->vtlywb33=v1itqhmq($GLOBALS['vmdtdbsk'][$vxtcw136[0]][0],$vnpesnx6); 
				$this->vup3v2fa=$GLOBALS['vmdtdbsk'][$vxtcw136[0]][0]; 
			}
			if($vxtcw136[1]=="u") $this->viaayn1x="Unresolved"; 
			else $this->viaayn1x=$vxtcw136[1]; 
			if(isset($vdp8kmrn[$vxtcw136[2]])){
				$this->vjn3w5nk=ve0jwhkw($vdp8kmrn[$vxtcw136[2]]);
			}
			else $this->vjn3w5nk="db error"; 
			if(isset($vdp8kmrn[$vxtcw136[5]])) $this->v90bh5f5=ve0jwhkw($vdp8kmrn[$vxtcw136[5]]);
			else $this->vjn3w5nk="db error"; 
			$this->ve7fe6m0=$vxtcw136[5]; 
			$this->vqrrreyy=$vxtcw136[2];
			if(!isset($GLOBALS['vyls8dgc'][$vxtcw136[9]])) $this->vzsn7p56="ID NOT FOUND"; 
			else { 
				$vnxpypxd=$GLOBALS['vyls8dgc'][$vxtcw136[9]]; 
				$this->v38yoo87=$vnxpypxd[0]; 
				if($vnxpypxd[0]==v0xoht22) { 
					$this->vzsn7p56=vb1iulhl($vnxpypxd[2]);
					$this->v0wjy8ob=$vnxpypxd[2]; 
				}
				elseif($vnxpypxd[0]==vqos8o49) $this->vzsn7p56=ve0jwhkw("#sengine# Search for #keyword#",array("sengine" => v1itqhmq($vnxpypxd[1],$vs0lfx1u),"keyword" => "[".$vnxpypxd[2]."]")); 
				elseif($vnxpypxd[0]==v39wa3t0) { 
					if($vnxpypxd[2]=="") $this->vzsn7p56=ve0jwhkw("Direct Type or Unknown"); 
					else $this->vzsn7p56=$vnxpypxd[2]; 
				}
				else { 
					$this->vzsn7p56="db error"; 
				}
			}
			if($vb1cxalr=vaqc694a("select b.page,a.pagedt from " . $vcva8fpp["ippages"]->v7ekwth8 . " as a," . $vcva8fpp["pages"]->v7ekwth8 . " as b where a.page=b.id and a.dt='" . $vz36b96n . "' and a.ip='" . $vqgsq39b . "' and a.ord>1 order by a.pagedt,a.ord")) {
				while($vxtcw136=mysql_fetch_row($vb1cxalr)) { 
					$this->va5l0hfb[]=$vxtcw136[0]; 
					$this->va5l0hfb[]=$vxtcw136[1]; 
				}
			}
		}
		function vpqlfcw8() { 
			global $v9uprm6w; 
			echo "\n";
			echo('<script language="javascript"><!--'."\n");
			echo("visitor(new Array("); 
			$vz36b96n=strftime("%Y-%m-%d-%H-%M-%S",$this->va5l0hfb[1]); 
			$vq2zdtuu=explode("-",$vz36b96n); 
			echo "'".addslashes(vjvxhkqj("Y/n/D",array("Y"=>$vq2zdtuu[0],"n"=>$vq2zdtuu[1],"D"=>$vq2zdtuu[2])))."'"; 
			echo ",'".addslashes(vvs5s220($vq2zdtuu[3]).":".vvs5s220($vq2zdtuu[4]).":".vvs5s220($vq2zdtuu[5]))."'"; 
			echo ",".$this->v38yoo87; 
			echo ",'".addslashes($this->v0wjy8ob)."'"; 
			echo ",'".addslashes($this->vzsn7p56)."'"; 
			echo ",'".addslashes(($v9uprm6w?$this->vqgsq39b:ve0jwhkw("IP").' <span class="hid">' . ve0jwhkw("hidden")."</span>"))."'";
			echo ",'".addslashes(($v9uprm6w?ve0jwhkw($this->viaayn1x):ve0jwhkw("domain").' <span class="hid">'.ve0jwhkw("hidden")."</span>"))."'"; 
			echo ",'".addslashes($this->vqrrreyy)."'"; 
			if($this->v0vu0tco) { 
				echo ",'<b>" . addslashes($this->vjn3w5nk) . '</b>\''; 
				echo ",'".addslashes(($v9uprm6w?$this->v0vu0tco:ve0jwhkw("IP").' <span class="hid">'.ve0jwhkw("hidden")."</span>"))."'"; 
				echo ",'".addslashes(($v9uprm6w?ve0jwhkw($this->v5k006c3):ve0jwhkw("domain").' <span class="hid">'.ve0jwhkw("hidden")."</span>"))."'";
				echo ",'".addslashes($this->ve7fe6m0)."'"; 
				echo ",'".addslashes($this->v90bh5f5)."'";
			}
			else {
				echo ",'<b>" . addslashes($this->vjn3w5nk) . '</b><br>Cidade:&nbsp;' . $this->cidade . "<br>&nbsp;Estado:&nbsp;" . $this->estado . '<br><a align="absbottom" style="color: #000000;" title="Mapa" href="Javascript: google_map(\\\'' . $this->vqgsq39b . '\\\');"><img border="0" src="globo.gif"></a>&nbsp;<a align="absbottom" style="color: #000000;" title="Mapa" href="Javascript: google_map(\\\'' . $this->vqgsq39b . '\\\');"><b>[Mapear]</b></a>\''; 
				echo ",'','','',''";
			}
			echo ",".$this->vup3v2fa; 
			echo ",'".addslashes($this->vtlywb33)."'"; 
			echo ",'".addslashes($this->vzd5qyuh)."'"; 
			echo ",new Array("; 
			$vgy09x36=count($this->va5l0hfb); 
			for($vxdg2sdk=0;$vxdg2sdk<$vgy09x36;$vxdg2sdk+=2) { 
				if($vxdg2sdk>$vgy09x36-3) $vbvonpho=" "; 
				else { 
					$vbvonpho=$this->va5l0hfb[$vxdg2sdk+3]-$this->va5l0hfb[$vxdg2sdk+1]; 
					$v2vabo1q=$vbvonpho%60; 
					$vaif3zdw=($vbvonpho-$v2vabo1q)/60; 
					$v2c072yt=$vaif3zdw%60; 
					$vdott6ou=($vaif3zdw-$v2c072yt)/60; 
					$vbvonpho=($vdott6ou?vvs5s220($vdott6ou).ve0jwhkw("h")." ":"").($v2c072yt?vvs5s220($v2c072yt).ve0jwhkw("m")." ":"").($v2vabo1q?vvs5s220($v2vabo1q).ve0jwhkw("s"):"");
				}
				echo($vxdg2sdk?",":"")."'".addslashes($this->va5l0hfb[$vxdg2sdk])."','".addslashes($vbvonpho)."'"; 
			}
			echo ")));" . chr(10). chr(13);
			echo ("//--></script>"); 
			flush(); 
		}
		function vagi1lpx() {
			global $v9uprm6w;
			echo '<div class="visitor"><div class="h"><div class="time"><div>';
			$vz36b96n=strftime("%Y-%m-%d-%H-%M-%S",$this->va5l0hfb[1]);
			$vq2zdtuu=explode("-",$vz36b96n);
			$vo0gltmv=vjvxhkqj("Y/n/D",array("Y"=>$vq2zdtuu[0],"n"=>$vq2zdtuu[1],"D"=>$vq2zdtuu[2]));
			$vo0gltmv.="<br /><b>".vvs5s220($vq2zdtuu[3]).":".vvs5s220($vq2zdtuu[4]).":".vvs5s220($vq2zdtuu[5])."</b>"; echo $vo0gltmv;
			echo "</div></div>" . chr(10) . chr(13) . '<div class="referer"><div>';
			echo ve0jwhkw("Referrer");
			echo ': <img class="inl" src="refs/';
			echo $this->v38yoo87;
			echo '.gif" width="17" height="17" />';
			echo $this->v38yoo87==v0xoht22?'<a href="' . $this->v0wjy8ob.'">':"";
			echo $this->vzsn7p56;
			echo $this->v38yoo87==v0xoht22?"</a>":"";
			echo '</div></div>' . chr(10) . chr(13);
			echo '<div class="spacer"> </div></div>' . chr(10) . chr(13);
			echo '<div class="v"><div class="ip"><div><b>';
			echo $v9uprm6w?$this->vqgsq39b:(ve0jwhkw("IP").' <span class="hid">'.ve0jwhkw("hidden")."</span>");
			echo "</b><br />" . chr(10) . chr(13) . "[";
			echo $v9uprm6w?ve0jwhkw($this->viaayn1x):(ve0jwhkw("domain").' <span class="hid">'.ve0jwhkw("hidden")."</span>");
			echo ']<br />' . chr(10) . chr(13);
			echo '<img class="inl" src="flags/';
			echo $this->vqrrreyy;
			echo '.gif" width="26" height="13" />';
			echo $this->vjn3w5nk;
			echo "</div></div>" . chr(10) . chr(13);
			if($this->v0vu0tco) {
				echo '<div class="proxy"><div><span>proxy</span> <b>';
				echo $v9uprm6w?$this->v0vu0tco:(ve0jwhkw("IP").' <span class="hid">'.ve0jwhkw("hidden")."</span>");
				echo "</b><br />[";
				echo $v9uprm6w?ve0jwhkw($this->v5k006c3):(ve0jwhkw("domain").' <span class="hid">'.ve0jwhkw("hidden")."</span>");
				echo ']<br /><img class="inl" src="flags/';
				echo $this->ve7fe6m0;
				echo '.gif" width="26" height="13" />';
				echo $this->v90bh5f5;
				echo "</div></div>";
			}
			echo '"	<div class="browser"><div><img class="inl" src="browsers/';
			echo $this->vup3v2fa;
			echo '.gif" width="17" height="17" />';
			echo $this->vtlywb33;
			echo "<br />";
			echo ve0jwhkw("Agent String");
			echo ': <span style="direction:ltr;unicode-bidi:bidi-override">';
			echo $this->vzd5qyuh;
			echo '</span></div></div>' . chr(10) . chr(13);
			echo '<div class="spacer"> </div></div>' . chr(10) . chr(13);
			echo '<div class="pages">';
			$vgy09x36=count($this->va5l0hfb); 
			for($vxdg2sdk=0;$vxdg2sdk<$vgy09x36;$vxdg2sdk+=2) { 
				if($vxdg2sdk>$vgy09x36-3) $vbvonpho="&nbsp"; 
				else { 
					$vbvonpho=$this->va5l0hfb[$vxdg2sdk+3]-$this->va5l0hfb[$vxdg2sdk+1]; 
					$v2vabo1q=$vbvonpho%60; 
					$vaif3zdw=($vbvonpho-$v2vabo1q)/60; 
					$v2c072yt=$vaif3zdw%60; 
					$vdott6ou=($vaif3zdw-$v2c072yt)/60;
					$vbvonpho=($vdott6ou?vvs5s220($vdott6ou).ve0jwhkw("h")."&nbsp;":"").($v2c072yt?vvs5s220($v2c072yt).ve0jwhkw("m")."&nbsp;":"").($v2vabo1q?vvs5s220($v2vabo1q).ve0jwhkw("s"):""); 
				}
				echo '<div class="page">';
				if(!$GLOBALS['right_to_left']) {
					echo '<div class="arrow"><img src="arrow.gif" class="arrow" /></div>';
				}
				echo '<div class="text">';
				echo $this->va5l0hfb[$vxdg2sdk]."<br /><span>".$vbvonpho;
				echo "</span></div>";
				if($GLOBALS['right_to_left']) {
					echo '<div class="arrow"><img src="arrow_rtl.gif" class="arrow" /></div> ';
				}
				echo "</div>";
			}
			echo '<div class="spacer"> </div>	</div>	<div class="spacer"> </div></div>';
		}
	}
?>