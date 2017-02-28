<?php 
	function v4f4jnjr() { 
		echo '<link rel="stylesheet" href="reportmain'; 
		echo $GLOBALS['right_to_left'] ? "_rtl" : "";
		echo '.css" />' . chr(10) . chr(13); 
		if(!isset($GLOBALS['HTTP_GET_VARS']["c"])) { 
			echo '<script type="text/javascript"><!--' . chr(10) . chr(13);
			mt_srand((double) microtime() * 1000000);
			$GLOBALS['vm3wmus0'] = "mainw" . mt_rand(0,1000); 
			echo "	window.name='";
			echo $GLOBALS['vm3wmus0'];
			echo "';";
			?>
			mainwin = window.name;
			dontclose = false;
			window.onunload = function() {
				if(dontclose) return;
				if(typeof graphwin!='undefined'&&!graphwin.closed) {
					//alert('here');
					graphwin.close();
				}
				for(var i=0;i<wincount;i++) {
					var w=eval(window.name+'dets'+i);
					if(typeof w!='undefined'&&!w.closed) w.close();
				}
			}
			//--></script>
		<?
		}
		else { ?>
			<script type="text/javascript">
				<!--
				mainwin = window.opener.name;
				//-->
			</script>
			<?
		}
	}
	$GLOBALS['HTTP_SERVER_VARS']["DOCUMENT_ROOT"]="../";
	if(isset($HTTP_GET_VARS["c"])) $vs2ox6xs="Details";
	else $vs2ox6xs="Website Statistics";
		$vwgv7hfq=1;
		$vmrlxwwb=true;
		if(!isset($HTTP_GET_VARS["c"])){
			$v1ickqed=true;
		}
		else{$v0oj5u78=true;
	}
	require_once "../twatch_include/reporttitle.php";
	require_once "../twatch_include/data.php";
	$vi3flr61=vbiksgeu(); if(!isset($HTTP_GET_VARS["c"])) { ?><?php }
	echo "\74\163\143\162\151\160\164\40\154\141\156\147\165\141\147\145\75\42\152\141\166\141\163\143\162\151\160\164\42\76\12\11\143\154\145\146\164\75\47";
	echo $right_to_left?"\162\151\147\150\164":"\154\145\146\164" ?><?php echo "\47\73\12\11\143\162\151\147\150\164\75\47";
	echo $right_to_left?"\154\145\146\164":"\162\151\147\150\164" ?><?php echo "\47\73\12\11\143\164\157\144\141\171\75\47";
	echo ve0jwhkw("\124\117\104\101\131");
	echo "\47\73\12\11\143\147\157\75\47";
	echo ve0jwhkw("\107\117");
	echo "\47\73\12\11\146\144\151\147\151\164\75";
	echo $farsi_digits?"\164\162\165\145":"\146\141\154\163\145";
	echo "\73\12\11\143\154\141\164\145\163\164\75\47";
	echo ve0jwhkw("\106\151\156\144\40\151\156\40\114\141\164\145\163\164\40\126\151\163\151\164\157\162\163") ?><?php echo "\47\73\12\11\143\150\151\163\164\157\162\171\75\47";
	echo ve0jwhkw("\110\151\163\164\157\162\171\40\107\162\141\160\150") ?><?php echo "\47\73\12\11\143\144\145\164\141\151\154\163\75\47";
	echo ve0jwhkw("\104\145\164\141\151\154\163") ?><?php echo "\47\73\12\11\143\160\141\164\150\75\47";
	echo ve0jwhkw("\120\141\164\150\40\101\156\141\154\171\163\151\163") ?><?php echo "\47\73\12\11\143\166\141\154\154\75\47";
	echo ve0jwhkw("\126\151\145\167\40\101\154\154") ?><?php echo "\47\73\12\11\143\155\157\156\163\75\156\145\167\40\101\162\162\141\171\50\12\11\11";
	echo "\47".ve0jwhkw("\112\141\156")."\47\54\47".ve0jwhkw("\106\145\142")."\47\54\47".ve0jwhkw("\115\141\162")."\47\54\47". ve0jwhkw("\101\160\162")."\47\54\47".ve0jwhkw("\115\141\171")."\47\54\47".ve0jwhkw("\112\165\156")."\47\54\47". ve0jwhkw("\112\165\154")."\47\54\47".ve0jwhkw("\101\165\147")."\47\54\47".ve0jwhkw("\123\145\160")."\47\54\47". ve0jwhkw("\117\143\164")."\47\54\47".ve0jwhkw("\116\157\166")."\47\54\47".ve0jwhkw("\104\145\143")."\47" ?><?php echo "\11\51\73\12\11\143\144\167\163\75\156\145\167\40\101\162\162\141\171\50\12\11\11";
	echo "\47".ve0jwhkw("\115\157\156")."\47\54\47".ve0jwhkw("\124\165\145")."\47\54\47".ve0jwhkw("\127\145\144")."\47\54\47". ve0jwhkw("\124\150\165")."\47\54\47".ve0jwhkw("\106\162\151")."\47\54\47".ve0jwhkw("\123\141\164")."\47\54\47". ve0jwhkw("\123\165\156")."\47" ?><?php echo "\11\51\73\12\74\57\163\143\162\151\160\164\76\12";
	$vhn34quq = vbz7bg74("\162\143");
	if($vfs6pezc!=vi2w7d41) $vhn34quq=6;
	function vu8e841l() {
		echo "DB Error some data ignored.<br />";
	}
	function vb9z10nk(){
		vu8e841l();
		die();
	}
	function vuyzbwdk(){
		echo "Bad Parameters.<br />";
		die();
	}
	echo "\12";
	if(isset($HTTP_GET_VARS["\143"])) {
		$v92w5trw=$HTTP_GET_VARS["\143"];
		if(!isset($HTTP_GET_VARS["\144\164"])){
			$v7voh7af=new vziq9uvf();
			if($vwoj4ypa) vb9z10nk();
		}
		elseif(preg_match("/^(\d\d)(\d\d)$/",$HTTP_GET_VARS["\144\164"],$vtir3io4)){
			$v7voh7af = new ve50jphg(0, "\62\60" . $vtir3io4[1] . "\55" . $vtir3io4[2] . "\55\60\61");
			if($vwoj4ypa) vb9z10nk();
		}
		elseif(preg_match("/^(\d\d)(\d\d)(\d\d)$/", $HTTP_GET_VARS["\144\164"], $vtir3io4)) {
			$v7voh7af = new vruyso31(0, "\62\60" . $vtir3io4[1] . "\55" . $vtir3io4[2] . "\55" . $vtir3io4[3]);
			if($vwoj4ypa) vb9z10nk();
		}
		else vuyzbwdk();
		if($v92w5trw=="refdetdata"){
			if(!isset($HTTP_GET_VARS["\164"]) || !isset($HTTP_GET_VARS["\144"])) vuyzbwdk();
			if($HTTP_GET_VARS["\164"]==v39wa3t0) {
				if($HTTP_GET_VARS["\144"]!=0) vuyzbwdk();
				$v7ekwth8 = ve0jwhkw("Non Web Page Referrers");
			}
			elseif($HTTP_GET_VARS["\164"] == vqos8o49){
				if(($vb1cxalr = v1itqhmq($HTTP_GET_VARS["\144"], $vs0lfx1u)) == "ID NOT FOUND") vuyzbwdk();
				$v7ekwth8=ve0jwhkw("Keywords from #referrer#",array("referrer" => $vb1cxalr));
			}
			elseif($HTTP_GET_VARS["\164"]==v0xoht22) {
				$vb1cxalr=vfym29jc("\163\145\154\145\143\164\40\144\157\155\141\151\156\40\146\162\157\155\40{$vcva8fpp["\162\145\146\144\157\155\163"]->v7ekwth8}\40\167\150\145\162\145\40\151\144\75{$HTTP_GET_VARS["\144"]}");
				if($vwoj4ypa) vuyzbwdk();
				$v7ekwth8=ve0jwhkw("Referrers from #domain#",array("\144\157\155\141\151\156" => $vb1cxalr));
			}
			else vuyzbwdk();
			new vik0gj0u($HTTP_GET_VARS["\164"], $HTTP_GET_VARS["\144"], "\163",$v7voh7af);
			if($vwoj4ypa) vb9z10nk();
		}
		elseif($v92w5trw=="browserdetdata") {
			if(!isset($HTTP_GET_VARS["\151\144"])) vuyzbwdk();
			if(v1itqhmq($HTTP_GET_VARS["\151\144"], $vnpesnx6) == "\111\104\40\116\117\124\40\106\117\125\116\104") vuyzbwdk();
			new vqer9i83($HTTP_GET_VARS["\151\144"], "\163",$v7voh7af);
			if($vwoj4ypa) vb9z10nk();
			$v7ekwth8 = $v7voh7af -> v88xhuy4["\163"] -> v7ekwth8;
		}
		elseif($v92w5trw == "\162\157\142\157\164\144\145\164\160\141\147\145\163\144\141\164\141"){
			if(!isset($HTTP_GET_VARS["\151\144"])) vuyzbwdk();
			if(v1itqhmq($HTTP_GET_VARS["\151\144"], $vq0oz0ts) == "\111\104\40\116\117\124\40\106\117\125\116\104") vuyzbwdk();
			new vz11c5vm($HTTP_GET_VARS["\151\144"], "\163", $v7voh7af);
			if($vwoj4ypa) vb9z10nk();
			$v7ekwth8 = $v7voh7af -> v88xhuy4["\163"] -> v7ekwth8;
		}
		elseif(preg_match("/^(newrefdata|refdata|pagedata|countrydata|browserdata|robotdetdata)$/", $v92w5trw)) {
			vcnp1kug($v92w5trw);
			if($v92w5trw=="\156\145\167\162\145\146\144\141\164\141") {
				$vb1cxalr = new vehrhajg("\163",$v7voh7af);
			}
			elseif($v92w5trw=="\162\145\146\144\141\164\141") {
				$vb1cxalr = new v3zgytk7("\163",$v7voh7af);
			}
			elseif($v92w5trw=="\160\141\147\145\144\141\164\141") {
				$vb1cxalr=new vn6xrabs("\163",$v7voh7af);
			}
			elseif($v92w5trw=="\143\157\165\156\164\162\171\144\141\164\141") {
				include_once "../twatch_include/countries.php";
				$vb1cxalr=new vt31l4aj("\163",$v7voh7af);
			}
			elseif($v92w5trw=="\142\162\157\167\163\145\162\144\141\164\141") {
				$vb1cxalr=new valy066m("\163",$v7voh7af);
			}
			elseif($v92w5trw=="\162\157\142\157\164\144\145\164\144\141\164\141") {
				$vb1cxalr = new v1h0kw4y("\163",$v7voh7af);
			}
			v7em8uic($v92w5trw);
			$v7voh7af -> v88xhuy4["\163"] -> vgc4j9xp();
			if($vwoj4ypa) vb9z10nk();
			$v7ekwth8=$vb1cxalr->v7ekwth8;
		}
		else vuyzbwdk();
		ve601dma("\163", array($v7voh7af), $v7ekwth8);
		die();
	}
	echo "\12";
	$vbvonpho="";
	if(isset($HTTP_GET_VARS["\171\145\141\162"])) {
		if(!isset($HTTP_GET_VARS["\155\157\156\164\150"])||!isset($HTTP_GET_VARS["\144\141\171"])) vuyzbwdk();
		$v0rrynm7=(int)$HTTP_GET_VARS["\171\145\141\162"];
		$vwj9le2c=(int)$HTTP_GET_VARS["\155\157\156\164\150"];
		$vl6ldidq=(int)$HTTP_GET_VARS["\144\141\171"];
		if(!checkdate($vwj9le2c,$vl6ldidq,$v0rrynm7)) vuyzbwdk();
		$vbvonpho=$v0rrynm7."\55".str_pad($vwj9le2c,2,"\60",STR_PAD_LEFT)."\55".str_pad($vl6ldidq,2,"\60",STR_PAD_LEFT);
		$vb1cxalr=vfym29jc("\163\145\154\145\143\164\40\47$vbvonpho\47\75\100\143\144\164");
		if($vwoj4ypa) vu8e841l();
		if($vb1cxalr) $vbvonpho="";
	}
	$vhrzyijg=array();
	for($vxdg2sdk=($vbvonpho?-1:0);$vxdg2sdk<$vgdduz6j+($vbvonpho?-1:0);$vxdg2sdk++) { 
		$v7voh7af=new vruyso31($vxdg2sdk,$vbvonpho);
		if($vwoj4ypa) vb9z10nk();
		else $vhrzyijg["\144\141\171".($vxdg2sdk+($vbvonpho?1:0))]=$v7voh7af;
	}
	if(!$vbvonpho) $vb1cxalr=false;
	else {
		$vb1cxalr=vfym29jc("\163\145\154\145\143\164\40\155\157\156\164\150\50\47$vbvonpho\47\51\74\76\155\157\156\164\150\50\100\143\144\164\51\40\157\162\40\171\145\141\162\50\47$vbvonpho\47\51\74\76\171\145\141\162\50\100\143\144\164\51");
		if($vwoj4ypa) vb9z10nk();
	}
	for($vxdg2sdk=($vb1cxalr?-1:0);$vxdg2sdk<$vgdduz6j+($vb1cxalr?-1:0);$vxdg2sdk++) { 
		$v7voh7af=new ve50jphg($vxdg2sdk,$vbvonpho);
		if($vwoj4ypa) vb9z10nk();
		else $vhrzyijg["\155\157\156".($vxdg2sdk+($vb1cxalr?1:0))]=$v7voh7af;
	}
	$v7voh7af=new vziq9uvf();
	if($vwoj4ypa) vb9z10nk();
	else $vhrzyijg["\141\154\154"]=$v7voh7af;
	vith2bq2::v4k4h5jc($vhrzyijg);
	v3c8crfm::v4k4h5jc($vhrzyijg); 
	vh59k1sq::v4k4h5jc($vhrzyijg); 
	v2y97y1f::v4k4h5jc($vhrzyijg); 
	foreach($vhrzyijg as $v1a8al6x=> $v7voh7af) { 
		$vvxxi96n=false;
		new vith2bq2("\163\163",$vhrzyijg[$v1a8al6x]); 
		$vgy09x36=$vwoj4ypa; 
		new v3c8crfm("\165\166",$vhrzyijg[$v1a8al6x]);
		$vj42p7gw=$vwoj4ypa;
		new vh59k1sq("\160\166",$vhrzyijg[$v1a8al6x]); 
		$vnxpypxd=$vwoj4ypa; 
		if($vj42p7gw||$vnxpypxd||$vgy09x36) $vvxxi96n=true; 
		else { 
			new va4wbmky("\160\160\166",$vhrzyijg[$v1a8al6x],$vhrzyijg[$v1a8al6x]->v88xhuy4["\165\166"],$vhrzyijg[$v1a8al6x]->v88xhuy4["\160\166"]); 
			new vr3hq6lo("\160\160\150",$vhrzyijg[$v1a8al6x],$vhrzyijg[$v1a8al6x]->v88xhuy4["\160\166"]); 
			new v8v9knm5("\165\160\150",$vhrzyijg[$v1a8al6x],$vhrzyijg[$v1a8al6x]->v88xhuy4["\165\166"]); 
			new vvsqbqit("\160\160\144",$vhrzyijg[$v1a8al6x],$vhrzyijg[$v1a8al6x]->v88xhuy4["\160\166"]);
			new vcczlenn("\165\160\144",$vhrzyijg[$v1a8al6x],$vhrzyijg[$v1a8al6x]->v88xhuy4["\165\166"]);
		}
		new v2y97y1f("\162\166",$vhrzyijg[$v1a8al6x]);
		if($vwoj4ypa) $vvxxi96n=true;
		if($vvxxi96n) {
			unset($vhrzyijg[$v1a8al6x]);
			vu8e841l();
		}
	}
	$vhr84mkz=$vru7h2lp["\146\151\162\163\164"]; 
	if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\171\145\141\162\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50$vhr84mkz\51\51\40\141\163\40\146\171\145\141\162\54\171\145\141\162\50\100\143\144\164\51\40\141\163\40\154\171\145\141\162\54\155\157\156\164\150\50\100\143\144\164\51\40\141\163\40\155\157\156\164\150\54\144\141\171\157\146\155\157\156\164\150\50\100\143\144\164\51\40\141\163\40\144\141\171")) die("\144\142\40\145\162\162\157\162\40\61"); 
	if(!$vxtcw136=mysql_fetch_array($vb1cxalr)) die("\144\142\40\145\162\162\157\162\40\62"); 
	if(!$vbvonpho) { 
		$v0rrynm7=$vxtcw136["\154\171\145\141\162"]; 
		$vwj9le2c=$vxtcw136["\155\157\156\164\150"]; 
		$vl6ldidq=$vxtcw136["\144\141\171"]; 
	}
	if(count($vhrzyijg)) v11t8562(array("\165\166","\163\163","\160\166","\160\160\166","\162\166","\165\160\144","\160\160\144","\165\160\150","\160\160\150"),$vhrzyijg,ve0jwhkw("\107\145\156\145\162\141\154\40\123\164\141\164\163"),$vxtcw136["\146\171\145\141\162"],$vxtcw136["\154\171\145\141\162"],$v0rrynm7,$vwj9le2c,$vl6ldidq); 
	$vj42p7gw=array(); 
	$va3zxa3b=false; 
	for($vxdg2sdk=0;$vxdg2sdk<$vgdduz6j;$vxdg2sdk++) { 
		new vnrje716("\155\151\154",$vhrzyijg["\144\141\171".$vxdg2sdk],$vhn34quq); 
		if($vwoj4ypa) vu8e841l(); 
		else $vj42p7gw[]=$vhrzyijg["\144\141\171".$vxdg2sdk]; 
		if(count($vhrzyijg["\144\141\171".$vxdg2sdk]->v88xhuy4["\155\151\154"]->vl82pjmr)) $va3zxa3b=true; 
	}
	$vzlytwzg=vbz7bg74("\146\144\167"); 
	if($GLOBALS['vfs6pezc']!=vi2w7d41) $vzlytwzg=0;
	echo "\n"."\74\163\143\162\151\160\164\40\154\141\156\147\165\141\147\145\75\"\152\141\166\141\163\143\162\151\160\164\"\76\40\146\144\167\75".$vzlytwzg."\73\40\74\57\163\143\162\151\160\164\76"."\n"; 
	if($va3zxa3b) ve601dma("\155\151\154",$vj42p7gw,ve0jwhkw("\115\151\154\145\163\164\157\156\145\163")); 
	v5wr8dh9("\150\157\165","\150\157\165\162\154\171\144\151\163\164\144\141\164\141",ve0jwhkw("\110\157\165\162\154\171\40\104\151\163\164\162\151\142\165\164\151\157\156"),1);
	v5wr8dh9("\162\145\146","\162\145\146\144\141\164\141",ve0jwhkw("\122\145\146\145\162\162\145\162\163"),$vhn34quq); 
	v5wr8dh9("\160\147","\160\141\147\145\144\141\164\141",ve0jwhkw("\120\141\147\145\163"),$vhn34quq); 
	v5wr8dh9("\162\157\142","\162\157\142\157\164\144\145\164\144\141\164\141",ve0jwhkw("\122\157\142\157\164\163"),$vhn34quq); 
	v5wr8dh9("\142\162\157","\142\162\157\167\163\145\162\144\141\164\141",ve0jwhkw("\102\162\157\167\163\145\162\163"),$vhn34quq); 
	include_once "\56\56\57\164\167\141\164\143\150\137\151\156\143\154\165\144\145\57\143\157\165\156\164\162\151\145\163\56\160\150\160"; 
	v5wr8dh9("\143\157\165","\143\157\165\156\164\162\171\144\141\164\141",ve0jwhkw("\103\157\165\156\164\162\151\145\163"),$vhn34quq); 
	v5wr8dh9("\167\144\144","\167\145\145\153\144\141\171\144\151\163\164\144\141\164\141",ve0jwhkw("\127\145\145\153\144\141\171\40\104\151\163\164\162\151\142\165\164\151\157\156"),1,true);
	require_once "../twatch_include/footer.php";
	echo "\74\57\142\157\144\171\76\12\74\57\150\164\155\154\76\12";
	function vcnp1kug($v92w5trw) {
		if($v92w5trw=="\155\151\154\145\163\164\157\156\145\144\141\164\141") vnrje716::v4k4h5jc(); 
		elseif($v92w5trw=="\160\141\147\145\144\141\164\141") vn6xrabs::v4k4h5jc(); 
		elseif($v92w5trw=="\162\145\146\144\141\164\141") v3zgytk7::v4k4h5jc(); 
		elseif($v92w5trw=="\162\145\146\144\145\164\144\141\164\141") vik0gj0u::v4k4h5jc(); 
		elseif($v92w5trw=="\162\157\142\157\164\144\145\164\160\141\147\145\163\144\141\164\141") vz11c5vm::v4k4h5jc();
		elseif($v92w5trw=="\156\145\167\162\145\146\144\141\164\141") vehrhajg::v4k4h5jc(); 
		elseif($v92w5trw=="\143\157\165\156\164\162\171\144\141\164\141") vt31l4aj::v4k4h5jc(); 
		elseif($v92w5trw=="\150\157\165\162\154\171\144\151\163\164\144\141\164\141") vdflvzl5::v4k4h5jc(); 
		elseif($v92w5trw=="\167\145\145\153\144\141\171\144\151\163\164\144\141\164\141") vmxyv2ny::v4k4h5jc(); 
		elseif($v92w5trw=="\162\157\142\157\164\144\145\164\144\141\164\141") v1h0kw4y::v4k4h5jc(); 
		elseif($v92w5trw=="\167\145\145\153\144\141\171\144\151\163\164\144\141\164\141") vmxyv2ny::v4k4h5jc(); 
		elseif($v92w5trw=="\142\162\157\167\163\145\162\144\141\164\141") valy066m::v4k4h5jc(); 
		else die("\156\157\164\40\146\157\165\156\144\72\40".$v92w5trw."\74\142\162\76"); 
	}
	function v7em8uic($v92w5trw) { 
		if($v92w5trw=="\155\151\154\145\163\164\157\156\145\144\141\164\141") vnrje716::v9qcfysd(); 
		elseif($v92w5trw=="\160\141\147\145\144\141\164\141") vn6xrabs::v9qcfysd(); 
		elseif($v92w5trw=="\162\145\146\144\141\164\141") v3zgytk7::v9qcfysd(); 
		elseif($v92w5trw=="\162\145\146\144\145\164\144\141\164\141") vik0gj0u::v9qcfysd(); 
		elseif($v92w5trw=="\162\157\142\157\164\144\145\164\160\141\147\145\163\144\141\164\141") vz11c5vm::v9qcfysd(); 
		elseif($v92w5trw=="\156\145\167\162\145\146\144\141\164\141") vehrhajg::v9qcfysd(); 
		elseif($v92w5trw=="\143\157\165\156\164\162\171\144\141\164\141") vt31l4aj::v9qcfysd(); 
		elseif($v92w5trw=="\150\157\165\162\154\171\144\151\163\164\144\141\164\141") vdflvzl5::v9qcfysd(); 
		elseif($v92w5trw=="\167\145\145\153\144\141\171\144\151\163\164\144\141\164\141") vmxyv2ny::v9qcfysd(); 
		elseif($v92w5trw=="\162\157\142\157\164\144\145\164\144\141\164\141") v1h0kw4y::v9qcfysd(); 
		elseif($v92w5trw=="\167\145\145\153\144\141\171\144\151\163\164\144\141\164\141") vmxyv2ny::v9qcfysd(); 
		elseif($v92w5trw=="\142\162\157\167\163\145\162\144\141\164\141") valy066m::v9qcfysd(); 
		else die("\156\157\164\40\146\157\165\156\144\72\40".$v92w5trw."\74\142\162\76"); 
	}
	function v7reudot($v92w5trw,$vwjxgo5r,&$v7voh7af,$vqcclfeq) { 
		if($v92w5trw=="\155\151\154\145\163\164\157\156\145\144\141\164\141") new vnrje716($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\160\141\147\145\144\141\164\141") new vn6xrabs($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\162\145\146\144\141\164\141") new v3zgytk7($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\162\145\146\144\145\164\144\141\164\141") new vik0gj0u($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\162\157\142\157\164\144\145\164\160\141\147\145\163\144\141\164\141") new vz11c5vm($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\156\145\167\162\145\146\144\141\164\141") new vehrhajg($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\143\157\165\156\164\162\171\144\141\164\141") new vt31l4aj($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\150\157\165\162\154\171\144\151\163\164\144\141\164\141") new vdflvzl5($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\167\145\145\153\144\141\171\144\151\163\164\144\141\164\141") new vmxyv2ny($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\162\157\142\157\164\144\145\164\144\141\164\141") new v1h0kw4y($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\167\145\145\153\144\141\171\144\151\163\164\144\141\164\141") new vmxyv2ny($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		elseif($v92w5trw=="\142\162\157\167\163\145\162\144\141\164\141") new valy066m($vwjxgo5r,$v7voh7af,$vqcclfeq); 
		else die("\156\157\164\40\146\157\165\156\144\72\40".$v92w5trw."\74\142\162\76"); 
	}
	function v5wr8dh9($vwjxgo5r,$v92w5trw,$vcivh8bd,$vqcclfeq,$voyhh4jw=false) {
		global $vhrzyijg,$vwoj4ypa,$vgdduz6j; 
		if(!$voyhh4jw) $v8fqz6rx=array($vwjxgo5r."\61"=>"\104\141\151\154\171",$vwjxgo5r."\62"=>"\115\157\156\164\150\154\171",$vwjxgo5r."\63"=>"\101\154\154");
		else $v8fqz6rx=array($vwjxgo5r."\62"=>"\115\157\156\164\150\154\171",$vwjxgo5r."\63"=>"\101\154\154"); 
		vlepjmeg($vwjxgo5r,$v8fqz6rx); 
		vcnp1kug($v92w5trw); 
		$vj42p7gw=array(); 
		if(!$voyhh4jw) { 
			$vj42p7gw[1]=array(); 
			for($vxdg2sdk=0;$vxdg2sdk<$vgdduz6j;$vxdg2sdk++) { 
				v7reudot($v92w5trw,$vwjxgo5r,$vhrzyijg["\144\141\171".$vxdg2sdk],$vqcclfeq);   
				if($vwoj4ypa) { 
					vu8e841l(); 
					unset($vj42p7gw[1]); 
					break; 
				}
				else $vj42p7gw[1][]=$vhrzyijg["\144\141\171".$vxdg2sdk]; 
			}
		}
		$vj42p7gw[2]=array();
		for($vxdg2sdk=0;$vxdg2sdk<$vgdduz6j;$vxdg2sdk++) { 
			v7reudot($v92w5trw,$vwjxgo5r,$vhrzyijg["\155\157\156".$vxdg2sdk],$vqcclfeq);   
			if($vwoj4ypa) { 
				vu8e841l(); 
				unset($vj42p7gw[2]); 
				break; 
			}
			else $vj42p7gw[2][]=$vhrzyijg["\155\157\156".$vxdg2sdk]; 
		}
		v7reudot($v92w5trw,$vwjxgo5r,$vhrzyijg["\141\154\154"],$vqcclfeq); 
		if($vwoj4ypa) vu8e841l(); 
		else { 
			$vj42p7gw[3]=array(); 
			$vj42p7gw[3][]=$vhrzyijg["\141\154\154"];   
		}
		v7em8uic($v92w5trw); 
		for($vxdg2sdk=1;$vxdg2sdk<=3;$vxdg2sdk++) { 
			if(isset($vj42p7gw[$vxdg2sdk])) { 
				for($v4ufpmk9=0;$v4ufpmk9<count($vj42p7gw[$vxdg2sdk]);$v4ufpmk9++) { 
					$vj42p7gw[$vxdg2sdk][$v4ufpmk9]->v88xhuy4[$vwjxgo5r]->vgc4j9xp(); 
				}
				ve601dma($vwjxgo5r,$vj42p7gw[$vxdg2sdk],$vcivh8bd,$v8fqz6rx,$vwjxgo5r.$vxdg2sdk,$vwjxgo5r); 
			}
		}
	}
	function vlepjmeg($vwjxgo5r,$v8fqz6rx) { 
		echo "\74\163\164\171\154\145\40\164\171\160\145\75\"\164\145\170\164\57\143\163\163\"\76"."\n"; 
		$vgy09x36=0; 
		foreach($v8fqz6rx as $v1a8al6x=> $vwy7p3li) { 
			if($vgy09x36>0) echo "\43\164$v1a8al6x\40\173\40\144\151\163\160\154\141\171\72\156\157\156\145\73\40\175\n"; 
			$vgy09x36++; 
		}
		echo "\74\57\163\164\171\154\145\76\n"; 
		echo "\74\163\143\162\151\160\164\40\154\141\156\147\165\141\147\145\75\"\152\141\166\141\163\143\162\151\160\164\"\76\74\41\55\55"."\n"; 
		echo "\146\165\156\143\164\151\157\156\40\163\150\157\167$vwjxgo5r\50\162\145\146\51\40\173\n"; 
		foreach($v8fqz6rx as $v1a8al6x=> $vwy7p3li) { 
			echo "\151\146\50\162\145\146\75\75\47$v1a8al6x\47\51\40\163\150\167\142\154\153\50\47\164$v1a8al6x\47\51\73\n"; 
			echo "\145\154\163\145\40\150\151\144\50\47\164$v1a8al6x\47\51\73\n"; 
		}
		echo "\175\n"; 
		echo "\57\57\55\55\76\74\57\163\143\162\151\160\164\76\n"; 
	}
	function v11t8562($vwwlm8f6,&$vzu173rk,$vcivh8bd,$vixvyymb,$v8lahvgt,$v0rrynm7,$vwj9le2c,$vl6ldidq) { 
		echo "\74\163\143\162\151\160\164\40\154\141\156\147\165\141\147\145\75\"\112\141\166\141\163\143\162\151\160\164\"\76\74\41\55\55"."\n"; 
		echo "\162\143\75".count($vwwlm8f6)."\73\n"; 
		echo "\144\141\164\141\75\156\145\167\40\101\162\162\141\171\50\n";
		echo "\156\145\167\40\101\162\162\141\171\50"; 
		for($vxdg2sdk=0;$vxdg2sdk<count($vwwlm8f6);$vxdg2sdk++) { 
			$vts08d8b=current($vzu173rk); 
			echo "\47".$vts08d8b->v88xhuy4[$vwwlm8f6[$vxdg2sdk]]->v4wd2vxa()."\47\54"; 
			echo "\47".$vts08d8b->v88xhuy4[$vwwlm8f6[$vxdg2sdk]]->vqpu6lbu()."\47"; 
			if($vxdg2sdk!=count($vwwlm8f6)-1) echo "\54"; 
		}
		echo "\51\54\n"; 
		$v4ufpmk9=0; 
		foreach($vzu173rk as $v2y8fsh6=> $vts08d8b) { 
			echo "\156\145\167\40\101\162\162\141\171\50".($vzu173rk[$v2y8fsh6]->vwy7p3li?"\164\162\165\145":"\146\141\154\163\145")."\54\47".$vzu173rk[$v2y8fsh6]->v7ekwth8."\47\54"; 
			for($vxdg2sdk=0;$vxdg2sdk<count($vwwlm8f6);$vxdg2sdk++) { 
				echo "\47".ve0jwhkw(vvs5s220($vzu173rk[$v2y8fsh6]->v88xhuy4[$vwwlm8f6[$vxdg2sdk]]->vuqyi1ct()))."\47"; 
				if($vxdg2sdk!=count($vwwlm8f6)-1) echo "\54"; 
			}
			echo "\51"; 
			if($v4ufpmk9!=count($vzu173rk)-1) echo "\54"; 
			echo "\n"; 
			$v4ufpmk9++; 
		}
		echo "\51\73\n"; 
		echo "\147\145\156\145\162\141\154\164\141\142\154\145\50\47$vcivh8bd\47\54$vixvyymb\54$v8lahvgt\54$v0rrynm7\54$vwj9le2c\54$vl6ldidq\51\73\n"; 
		echo "\57\57\55\55\76\74\57\163\143\162\151\160\164\76\n"; 
		flush(); 
	} 
	function ve601dma($v2y8fsh6,$vj42p7gw,$vcivh8bd,$v8fqz6rx=false,$vwy7p3li="",$vwjxgo5r="") { 
		global $HTTP_GET_VARS;
		$vtpumx75=true;
		foreach($vj42p7gw as $v7voh7af) { 
			if(count($v7voh7af->v88xhuy4[$v2y8fsh6]->vl82pjmr)) { 
				$vtpumx75=false; 
				break;
			} 
		}
		reset($vj42p7gw); 
		$vbwq4y2g=current($vj42p7gw); 
		echo "\74\163\143\162\151\160\164\40\154\141\156\147\165\141\147\145\75\"\112\141\166\141\163\143\162\151\160\164\"\76\74\41\55\55"."\n"; 
		$vbwq4y2g->v88xhuy4[$v2y8fsh6]->vuogr2fy(); 
		echo "\n\144\143\75".$vbwq4y2g->v88xhuy4[$v2y8fsh6]->v4cfpr7k."\73\n"; 
		echo "\162\143\75".$vbwq4y2g->v88xhuy4[$v2y8fsh6]->vspvz9oh."\73\n"; 
		$vmmpx4bm=false;
		$vp91g9vy=0; 
		foreach($vj42p7gw as $v1a8al6x=> $v7voh7af) { 
			if($vj42p7gw[$v1a8al6x]->v88xhuy4[$v2y8fsh6]->vmmpx4bm) { 
				$vmmpx4bm=true;
				break; 
			}
		} 
		$v1zdy659=true;
		$v4cfpr7k=0; 
		$v9v7vtz6=0; 
		while($v1zdy659) { 
			$v9v7vtz6++; 
			echo "\155\157\162\145\75".($vmmpx4bm?"\164\162\165\145":"\146\141\154\163\145")."\73\n"; 
			echo "\144\141\164\141\75\156\145\167\40\101\162\162\141\171\50\n"; 
			$vgy09x36=0; 
			foreach($vj42p7gw as $v1a8al6x=> $v7voh7af) { 
				$vlvzpvhf=""; 
				if($vj42p7gw[$v1a8al6x]->v88xhuy4[$v2y8fsh6]->vmmpx4bm) { 
					$vlvzpvhf="\143\75".$vj42p7gw[$v1a8al6x]->v88xhuy4[$v2y8fsh6]->vbogm3rj. ($vj42p7gw[$v1a8al6x]->vl7qtri2?"\46\144\164\75".$vj42p7gw[$v1a8al6x]->vl7qtri2:""). ($vj42p7gw[$v1a8al6x]->v88xhuy4[$v2y8fsh6]->vacsv5yb()?"\46".$vj42p7gw[$v1a8al6x]->v88xhuy4[$v2y8fsh6]->vacsv5yb():"");
				}
				echo "\156\145\167\40\101\162\162\141\171\50".($vj42p7gw[$v1a8al6x]->vwy7p3li?"\164\162\165\145":"\146\141\154\163\145")."\54\47".$vj42p7gw[$v1a8al6x]->v7ekwth8."\47\54\47".$vlvzpvhf."\47"; $v88xhuy4=&$vj42p7gw[$v1a8al6x]->v88xhuy4[$v2y8fsh6];
				$vzkgpt81=false; 
				$v4db3woc=0; 
				while($vjbyvvfl=$v88xhuy4->v4htcl9y()) { 
					$v4cfpr7k++; 
					$v4db3woc++; 
					foreach($vjbyvvfl as $v2rikqap) echo "\54\47".addslashes($v2rikqap)."\47"; 
					if(isset($HTTP_GET_VARS["\143"])&&$v4db3woc>=20) { 
						$vzkgpt81=true; 
						break; 
					}
				}
				if(!$vzkgpt81) $v1zdy659=false; 
				if($v4cfpr7k>$vp91g9vy) $vp91g9vy=$v4cfpr7k; 
				echo "\51"; 
				if($vgy09x36!=count($vj42p7gw)-1) echo "\54"; 
				echo "\n"; 
				$vgy09x36++; 
			}
			echo "\51\73\n"; 
			if($v9v7vtz6<=1||$v4db3woc>0) { 
				if($v9v7vtz6>1) echo "\162\143\75".$v4db3woc."\73\n"; 
				elseif($vp91g9vy<$vbwq4y2g->v88xhuy4[$v2y8fsh6]->vspvz9oh-1) echo "\162\143\75".$vp91g9vy."\73\n"; 
				$vbhxerf8=""; 
				if($v8fqz6rx) { 
					$vgy09x36=0; 
					foreach($v8fqz6rx as $v1a8al6x=> $vzu173rk) { 
						$vbhxerf8.="\74\144\151\166\40\151\144\75\"".$vwy7p3li.$v1a8al6x."\"\40".($vgy09x36>0?"\163\164\171\154\145\75\"\144\151\163\160\154\141\171\72\156\157\156\145\"":"\163\164\171\154\145\75\"\144\151\163\160\154\141\171\72\151\156\154\151\156\145\"")."\76\74\151\156\160\165\164\40\164\171\160\145\75\"\142\165\164\164\157\156\"\40\143\154\141\163\163\75\"".($v1a8al6x==$vwy7p3li?"\142\165\164\163\145\154":"\144\142\165\164")."\"\40\166\141\154\165\145\75\"".ve0jwhkw($vzu173rk)."\"\40\157\156\143\154\151\143\153\75\"\163\150\157\167".$vwjxgo5r."\50"."\\\47$v1a8al6x\\\47"."\51\"\76\74\57\144\151\166\76"; 
						$vgy09x36++; 
					}
					echo "\144\141\164\141\164\141\142\154\145\50\47$vcivh8bd\47\54\47$vbhxerf8\47\54\47\164$vwy7p3li\47\51\73\n"; 
					foreach($v8fqz6rx as $v1a8al6x=> $vzu173rk) { 
						echo "\163\150\167\151\156\154\50\47$v1a8al6x$vwy7p3li\47\51\73\n"; 
						if($v1a8al6x==$vwy7p3li) break; 
					}
					foreach($v8fqz6rx as $v1a8al6x=> $vzu173rk) { 
						if($v1a8al6x==$vwy7p3li) break; 
						echo "\163\150\167\151\156\154\50\47$vwy7p3li$v1a8al6x\47\51\73\n"; 
					}
				}
				else { 
					if($v9v7vtz6!=1) $v5b3xriv=ve0jwhkw("\43\163\157\155\145\164\150\151\156\147\43\40\143\157\156\164\151\156\165\145\144",array("\163\157\155\145\164\150\151\156\147"=>$vcivh8bd)); 
					else $v5b3xriv=$vcivh8bd; 
					echo "\144\141\164\141\164\141\142\154\145\50\47$v5b3xriv\47\54\47".$vbhxerf8."\47\54\47\47\51\73\n"; 
					echo "\57\57\55\55\76\74\57\163\143\162\151\160\164\76\n"; 
					echo "\74\163\143\162\151\160\164\40\154\141\156\147\165\141\147\145\75\"\112\141\166\141\163\143\162\151\160\164\"\76\74\41\55\55"."\n";
					flush();
				}
			}
		}
		echo "\57\57\55\55\76\74\57\163\143\162\151\160\164\76\n"; 
		flush();
	}
	class vvby6dsc{
		var $v7ekwth8;
		var $v88xhuy4=array();
		var $vwy7p3li=false;
		var $vl7qtri2; 
		var $vmj7yl4o; 
		var $vt8mlwly=false; 
		function vcv8ofsv(){} 
		function v73munak($v7ekwth8,&$v88xhuy4) { $this->v88xhuy4[$v7ekwth8]=&$v88xhuy4; } 
	}
	class vruyso31 extends vvby6dsc { 
		var $vvncn729; 
		var $vz36b96n; 
		function vruyso31($vvncn729=0,$vbvonpho="") { 
			global $vcva8fpp,$vru7h2lp;
			$this->vvncn729=$vvncn729;   
			$vz36b96n="\144\141\164\145\137\146\157\162\155\141\164\50\144\141\164\145\137\163\165\142\50".($vbvonpho?"\47$vbvonpho\47":"\100\143\144\164")."\54\151\156\164\145\162\166\141\154\40$vvncn729\40\144\141\171\51\54\47\45\131\55\45\155\55\45\144\47\51"; 
			$this->vz36b96n=$vz36b96n; 
			if(!isset($vru7h2lp["\146\151\162\163\164"])) { 
				$GLOBALS['vwoj4ypa']=true;
				return; 
			}
			if(!isset($vru7h2lp["\144\141\166\141\151\154"])) { 
				$vru7h2lp["\144\141\166\141\151\154"]=$vru7h2lp["\146\151\162\163\164"]; 
			}
			else $vylv25y9=$vru7h2lp["\144\141\166\141\151\154"]; 
			$vhr84mkz=&$vru7h2lp["\146\151\162\163\164"]; 
			if(!$vb1cxalr=vaqc694a("select (@tdt:=$vz36b96n) as dt,@tdt<from_unixtime($vylv25y9,'%Y-%m-%d') as outd, @tdt<(@fymd:=date_format(from_unixtime($vhr84mkz),'%Y-%m-%d')) or @tdt>@cdt as outr,if( @tdt=@cdt , @cts , unix_timestamp(date_format(date_add(@tdt,interval 1 day),'%Y-%m-%d 00:00:00')) ) - if( @tdt=@fymd , $vhr84mkz , unix_timestamp(date_format(@tdt,'%Y-%m-%d 00:00:00')) ) as seconds,@tdt=@fymd as fdconf,Date_Format(@tdt,'%W %b %e') as name,Date_Format(@tdt,'%y%m%d') as param")) return false;
			if(!$vxtcw136=mysql_fetch_array($vb1cxalr,MYSQL_ASSOC)) { 
				$GLOBALS['vwoj4ypa']=true; 
				return false;
			}
			$this->vz36b96n="\47".$vxtcw136["\144\164"]."\47"; 
			$this->vlk8i0ez=$vxtcw136["\157\165\164\144"]?true:false; 
			$this->vt8mlwly=$vxtcw136["\157\165\164\162"]?true:false; 
			$this->vwy7p3li=$vvncn729?false:true; 
			if($this->vt8mlwly) { $this->v7ekwth8="\55\55\55\55\55\55\55\55\55\55\55\55\55\55\55\55"; return; 
		} 
		$this->vmj7yl4o=$vxtcw136["\163\145\143\157\156\144\163"]; 
		$this->vgmx56z1=86400; 
		$vb1cxalr=($this->vz36b96n=="\47".$vru7h2lp["\143\144\164"]."\47"); 
		$this->v4zsk53h=$vb1cxalr; 
		$this->vn7nhhk0=$vxtcw136["\146\144\143\157\156\146"]; 
		$vp3puxqf=$vxtcw136["\156\141\155\145"]; 
		$v0hxfwbc=explode("\40",$vp3puxqf); 
		$vpp1asay=array("\127"=>$v0hxfwbc[0],"\115"=>$v0hxfwbc[1],"\104"=>$v0hxfwbc[2]); 
		$this->v7ekwth8=vjvxhkqj("\127\40\115\40\104",$vpp1asay); 
		$this->vl7qtri2=$vxtcw136["\160\141\162\141\155"]; 
	}
	function vcv8ofsv() { 
		return "\141\56\144\164\75{$this->vz36b96n}"; 
	}
	function vmmpcrfo() { 
		return "\141\56\155\157\156\75\144\141\164\145\137\146\157\162\155\141\164\50{$this->vz36b96n}\54\47\45\171\45\155\47\51";
	}
	function v76myf9s() { 
		$vhr84mkz=vbz7bg74("\146\151\162\163\164"); 
		if($GLOBALS['vfs6pezc']!=vi2w7d41) return -1; 
		$vb1cxalr=vfym29jc("\163\145\154\145\143\164\40\144\141\164\145\137\146\157\162\155\141\164\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50$vhr84mkz\51\54\47\45\171\45\155\47\51\75\144\141\164\145\137\146\157\162\155\141\164\50{$this->vz36b96n}\54\47\45\171\45\155\47\51"); 
		if($GLOBALS['vwoj4ypa']) return -1; 
		if($vb1cxalr) $vewesuzk=$vhr84mkz; 
		else $vewesuzk="\165\156\151\170\137\164\151\155\145\163\164\141\155\160\50\144\141\164\145\137\146\157\162\155\141\164\50{$this->vz36b96n}\54\47\45\131\55\45\155\55\60\61\47\51\51"; 
		$vb1cxalr=vfym29jc("\163\145\154\145\143\164\40\144\141\164\145\137\146\157\162\155\141\164\50\100\143\144\164\54\47\45\171\45\155\47\51\75\144\141\164\145\137\146\157\162\155\141\164\50{$this->vz36b96n}\54\47\45\171\45\155\47\51"); 
		if($GLOBALS['vwoj4ypa']) return -1; 
		if($vb1cxalr) $vcjvnukp="\100\143\164\163"; 
		else $vcjvnukp="\165\156\151\170\137\164\151\155\145\163\164\141\155\160\50\144\141\164\145\137\146\157\162\155\141\164\50\144\141\164\145\137\141\144\144\50{$this->vz36b96n}\54\151\156\164\145\162\166\141\154\40\61\40\155\157\156\164\150\51\54\47\45\131\55\45\155\55\60\61\47\51\51"; 
		$v0o06s1m=vfym29jc("\163\145\154\145\143\164\40$vcjvnukp\55$vewesuzk"); 
		if($GLOBALS['vwoj4ypa']) return -1; 
		return $v0o06s1m/86400; 
	} 
}
class ve50jphg extends vvby6dsc { 
	var $vvncn729; 
	var $vz36b96n; 
	function ve50jphg($vvncn729=0,$vbvonpho=0) { 
		global $vcva8fpp,$vru7h2lp; 
		$this->vvncn729=$vvncn729; 
		$vz36b96n="\144\141\164\145\137\146\157\162\155\141\164\50\144\141\164\145\137\163\165\142\50".($vbvonpho?"\47$vbvonpho\47":"\100\143\144\164")."\54\151\156\164\145\162\166\141\154\40$vvncn729\40\155\157\156\164\150\51\54\47\45\131\55\45\155\47\51"; 
		$this->vz36b96n=$vz36b96n; 
		$vhr84mkz=&$vru7h2lp["\146\151\162\163\164"]; 
		if(!$vb1cxalr=vaqc694a("select (@tdt:=" . $vz36b96n . ") as dt,date_format(concat(@tdt,'-01'),'%y%m') as dtu,@tdtym:=concat(@tdt,'-01'),@tdt<(@fym:=from_unixtime(" . $vhr84mkz . ",'%Y-%m')) or @tdt>date_format(@cdt,'%Y-%m') as outr,if( @tdt=(@cym:=date_format(@cdt,'%Y-%m')) , @cts , unix_timestamp(date_format(date_add(@tdtym,interval 1 month),'%Y-%m-01 00:00:00')) )- if( @tdt=@fym , " . $vhr84mkz . " , unix_timestamp(concat(@tdt,'-01 00:00:00')) ) as seconds, if( @tdt=@cym , unix_timestamp(date_format(date_add(from_unixtime(@cts),interval 1 day),'%Y-%m-%d 00:00:00')) , unix_timestamp(date_format(date_add(@tdtym,interval 1 month),'%Y-%m-01 00:00:00')) ) - if( @tdt=@fym , unix_timestamp(from_unixtime(" . $vhr84mkz . ",'%Y-%m-%d 00:00:00')) , unix_timestamp(concat(@tdt,'-01 00:00:00')) ) as secondsfd, @tdt=@cym as ldconf, (@fdc:=(@tdt=@fym)) as fdconf, if(@fdc,weekday(from_unixtime(" . $vhr84mkz . "))+1,weekday(@tdtym)) as fwd, date_format(@tdtym,'%b %Y') as name, date_format(@tdtym,'%y%m') as param")){
			return;
		}
		if(!$vxtcw136=mysql_fetch_array($vb1cxalr,MYSQL_ASSOC)) { 
			$GLOBALS['vwoj4ypa']=true; 
			return; 
		}
		$this->vz36b96n="\47".$vxtcw136["\144\164"]."\47";
		$this->vdwuizqt="\47".$vxtcw136["\144\164\165"]."\47"; 
		$this->vt8mlwly=$vxtcw136["\157\165\164\162"]?true:false; 
		$this->vwy7p3li=$vvncn729?false:true;
		if($this->vt8mlwly) { 
			$this->v7ekwth8="----------------";
			return; 
		}
		$this->vmj7yl4o=$vxtcw136["\163\145\143\157\156\144\163"]; 
		$this->vgmx56z1=$vxtcw136["\163\145\143\157\156\144\163\146\144"]; 
		$this->v4zsk53h=($vxtcw136["\154\144\143\157\156\146"]?true:false); 
		$this->vn7nhhk0=($vxtcw136["\146\144\143\157\156\146"]?true:false); 
		$this->vhhly95t=$vxtcw136["\146\167\144"];
		$vp3puxqf=$vxtcw136["\156\141\155\145"]; 
		$v0hxfwbc=explode("\40",$vp3puxqf);
		$this->v7ekwth8=ve0jwhkw($v0hxfwbc[0])."\40".vvs5s220($v0hxfwbc[1]);
		$this->vl7qtri2=$vxtcw136["\160\141\162\141\155"];
	}
	function vcv8ofsv() { 
		return "\141\56\155\157\156\75{$this->vdwuizqt}";
	}
	function vmmpcrfo() {
		return "\141\56\155\157\156\75{$this->vdwuizqt}"; 
	}
} 
class vziq9uvf extends vvby6dsc { 
	function vziq9uvf() { 
		global $vcva8fpp,$vru7h2lp; 
		$this->vwy7p3li=true; 
		$this->v7ekwth8=ve0jwhkw("\101\154\154\40\124\151\155\145"); 
		$this->vl7qtri2=""; 
		$vhr84mkz=&$vru7h2lp["\146\151\162\163\164"]; 
		if(!$vb1cxalr=vaqc694a("select @cts-" . $vhr84mkz . " as seconds, unix_timestamp(date_format(date_add(from_unixtime(@cts),interval 1 day),'%Y-%m-%d 00:00:00'))  - unix_timestamp(date_format(from_unixtime(" . $vhr84mkz . "),'%Y-%m-%d 00:00:00')) as secondsfd, weekday(from_unixtime(" . $vhr84mkz . "))+1 as fwd")) return;
		if(!$vxtcw136=mysql_fetch_array($vb1cxalr,MYSQL_ASSOC)) { 
			$GLOBALS['vwoj4ypa']=true; 
			return;
		}
		$this->vmj7yl4o=$vxtcw136["\163\145\143\157\156\144\163"]; 
		$this->vgmx56z1=$vxtcw136["\163\145\143\157\156\144\163\146\144"]; 
		$this->vhhly95t=$vxtcw136["\146\167\144"]; 
		$this->v4zsk53h=true; 
		$this->vn7nhhk0=true; 
	} 
	function vcv8ofsv() { 
		return ""; 
	}
	function vmmpcrfo() { 
		return ""; 
	}
}
class v88xhuy4{ 
	var $vl82pjmr; 
	var $vvby6dsc; 
	var $v7ekwth8; 
	var $vxdg2sdk=0; 
	function v4k4h5jc() {} 
	function v9qcfysd() {} 
	function vgc4j9xp() {} 
	function v88xhuy4($v7ekwth8,&$vvby6dsc) { 
		$GLOBALS['vwoj4ypa']=false; 
		$this->vvby6dsc=$vvby6dsc; 
		$vvby6dsc->v73munak($v7ekwth8,$this); 
	} 
	function vuqyi1ct() {
		return $this->vl82pjmr;
	}
	function v4htcl9y() { 
		if($this->vxdg2sdk<count($this->vl82pjmr)) {
			$this->vxdg2sdk++; 
			return $this->vo7papyb($this->vl82pjmr[$this->vxdg2sdk-1]); 
		} 
		return false; 
	}
	function reset() { 
		$vxdg2sdk=0; 
	}
	function vacsv5yb() { 
		return ""; 
	}
	function vpz2ao7o(&$vxtcw136) { 
		if($this->vxj9h6lk) { 
			if($this->v5k9659s<0) $vxtcw136="\145"; 
			else $vxtcw136=round($vxtcw136/$this->v5k9659s)."\52"; 
		}
	}
	function vuvb06rv($vv7gxqqm,$vc7sjfj9=false) { 
		global $vcva8fpp;
		$this->vxj9h6lk=false; 
		if($this->vvby6dsc->vt8mlwly) {
			$this->vl82pjmr="\46\156\142\163\160\73"; 
			return -1;
		}
		if(get_class($this->vvby6dsc)=='vruyso31') { 
			if($this->vvby6dsc->vlk8i0ez) { 
				$vv7gxqqm.="\137\155\157\156"; 
				$v2m3ie84=$this->vvby6dsc->vmmpcrfo(); 
				$this->vxj9h6lk=true; 
				$this->v5k9659s=$this->vvby6dsc->v76myf9s(); 
			}
			else { 
				$v2m3ie84=$this->vvby6dsc->vcv8ofsv(); 
			}
		}
		elseif(get_class($this->vvby6dsc)=='ve50jphg') { 
			$vv7gxqqm.="\137\155\157\156"; 
			$v2m3ie84=$this->vvby6dsc->vmmpcrfo(); 
		}
		else { 
			$vv7gxqqm.="\137\155\157\156"; 
			$v2m3ie84=""; } if(get_class($this->vvby6dsc)=='vruyso31'&&!$this->vvby6dsc->vlk8i0ez &&isset($GLOBALS['v8u4hhdb'][$vv7gxqqm])) { if(isset($GLOBALS['v8u4hhdb'][$vv7gxqqm][substr($this->vvby6dsc->vz36b96n,1,count($this->vvby6dsc->vz36b96n)-2)])) $this->vl82pjmr=$GLOBALS['v8u4hhdb'][$vv7gxqqm][substr($this->vvby6dsc->vz36b96n,1,count($this->vvby6dsc->vz36b96n)-2)]; else $this->vl82pjmr=0; } elseif(get_class($this->vvby6dsc)=='ve50jphg' &&isset($GLOBALS['v8u4hhdb'][$vv7gxqqm])) { if(isset($GLOBALS['v8u4hhdb'][$vv7gxqqm][$this->vvby6dsc->vl7qtri2])) $this->vl82pjmr=$GLOBALS['v8u4hhdb'][$vv7gxqqm][$this->vvby6dsc->vl7qtri2]; else $this->vl82pjmr=0; } else { $v2mssjqn="\163\145\154\145\143\164\40"; if(get_class($this->vvby6dsc)=='vziq9uvf'||$vc7sjfj9) $v2mssjqn.="\163\165\155\50\141\56\143\157\165\156\164\51"; else $v2mssjqn.="\141\56\143\157\165\156\164"; $v2mssjqn.="\40\146\162\157\155\40".$vcva8fpp[$vv7gxqqm]->v7ekwth8."\40\141\163\40\141"; if($v2m3ie84) $v2mssjqn.="\40\167\150\145\162\145\40".$v2m3ie84;   if(!$vb1cxalr=vaqc694a($v2mssjqn)) return; if(!$vxtcw136=mysql_fetch_row($vb1cxalr)) $this->vl82pjmr=0; elseif(!$vxtcw136[0]) $this->vl82pjmr=0; else $this->vl82pjmr=$vxtcw136[0]; } $this->vpz2ao7o($this->vl82pjmr); return 1; } function vaee3a3a($vv7gxqqm,&$vfhitt2p,$vc7sjfj9=false) { $vqwe7fb4=array(); $vxg000fg=array(); $vpolawor=array_keys($vfhitt2p); foreach($vpolawor as $vxdg2sdk) { if($vfhitt2p[$vxdg2sdk]->vt8mlwly) continue; if(get_class($vfhitt2p[$vxdg2sdk])=='ve50jphg') { $vqwe7fb4[]="\47".$vfhitt2p[$vxdg2sdk]->vl7qtri2."\47"; } elseif(get_class($vfhitt2p[$vxdg2sdk])=='vruyso31') { $vxg000fg[]=$vfhitt2p[$vxdg2sdk]->vz36b96n; } } sort($vqwe7fb4); sort($vxg000fg); if(!isset($GLOBALS['v8u4hhdb'])) $GLOBALS['v8u4hhdb']=array(); if(count($vxg000fg)) { if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\144\164\54".($vc7sjfj9?"\163\165\155\50\143\157\165\156\164\51":"\143\157\165\156\164")."\40\146\162\157\155",$vv7gxqqm ,"\167\150\145\162\145\40\144\164\76\75".$vxg000fg[0]."\40\141\156\144\40\144\164\74\75".$vxg000fg[count($vxg000fg)-1].($vc7sjfj9?"\40\147\162\157\165\160\40\142\171\40\144\164":""))) return false; $GLOBALS['v8u4hhdb'][$vv7gxqqm]=array(); while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $GLOBALS['v8u4hhdb'][$vv7gxqqm][$vxtcw136[0]]=$vxtcw136[1]; } } if(count($vqwe7fb4)) { if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\155\157\156\54".($vc7sjfj9?"\163\165\155\50\143\157\165\156\164\51":"\143\157\165\156\164")."\40\146\162\157\155",$vv7gxqqm."\137\155\157\156" ,"\167\150\145\162\145\40\155\157\156\76\75".$vqwe7fb4[0]."\40\141\156\144\40\155\157\156\74\75".$vqwe7fb4[count($vqwe7fb4)-1].($vc7sjfj9?"\40\147\162\157\165\160\40\142\171\40\155\157\156":""))) return false; $GLOBALS['v8u4hhdb'][$vv7gxqqm."\137\155\157\156"]=array(); while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $GLOBALS['v8u4hhdb'][$vv7gxqqm."\137\155\157\156"][$vxtcw136[0]]=$vxtcw136[1]; } } } } class v3c8crfm extends v88xhuy4 { function v3c8crfm($v7ekwth8,&$vvby6dsc) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); $this->vuvb06rv("\150\151\164\163"); } function v4k4h5jc(&$vfhitt2p) { v88xhuy4::vaee3a3a("\150\151\164\163",$vfhitt2p); } function vqpu6lbu() { return ve0jwhkw("\125\156\151\161\165\145\40\126\151\163\151\164\157\162\163"); } function v4wd2vxa() { return v3aupmbi("\165\166\151\163\151\164\157\162\163\144\141\164\141"); } } class vith2bq2 extends v88xhuy4 { function vith2bq2($v7ekwth8,&$vvby6dsc) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); $this->vuvb06rv("\163\145\163\163\151\157\156\163"); } function v4k4h5jc(&$vfhitt2p) { v88xhuy4::vaee3a3a("\163\145\163\163\151\157\156\163",$vfhitt2p); } function vqpu6lbu() { return ve0jwhkw("\123\145\163\163\151\157\156\163"); } function v4wd2vxa() { return v3aupmbi("\163\145\163\163\151\157\156\163\144\141\164\141"); } } class vh59k1sq extends v88xhuy4 { function vh59k1sq($v7ekwth8,&$vvby6dsc) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); $this->vuvb06rv("\160\141\147\145\163\143",true); } function v4k4h5jc(&$vfhitt2p) { v88xhuy4::vaee3a3a("\160\141\147\145\163\143",$vfhitt2p,true); } function vqpu6lbu() { return ve0jwhkw("\120\141\147\145\40\126\151\145\167\163"); } function v4wd2vxa() { return v3aupmbi("\160\166\151\145\167\163\144\141\164\141"); } } class va4wbmky extends v88xhuy4 { function va4wbmky($v7ekwth8,&$vvby6dsc,$vpigq88u,$vzu173rk) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); if($vvby6dsc->vt8mlwly) $this->vl82pjmr="\46\156\142\163\160\73"; else { if($vpigq88u->vl82pjmr!=0) $this->vl82pjmr=round($vzu173rk->vl82pjmr/$vpigq88u->vl82pjmr); else $this->vl82pjmr="\116\101"; } if($vpigq88u->vxj9h6lk) $this->vl82pjmr.="\52"; } function vqpu6lbu() { return ve0jwhkw("\101\166\145\162\141\147\145\40\120\126\151\145\167\57\126\151\163\151\164\157\162"); } function v4wd2vxa() { return "\46\156\142\163\160\73"; } } class v8v9knm5 extends v88xhuy4 { function v8v9knm5($v7ekwth8,&$vvby6dsc,$vpigq88u) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); if($vvby6dsc->vt8mlwly) $this->vl82pjmr="\46\156\142\163\160\73"; else { if($vpigq88u->vxj9h6lk) $this->vl82pjmr=round($vpigq88u->vl82pjmr/24); else $this->vl82pjmr=round($vpigq88u->vl82pjmr/($vvby6dsc->vmj7yl4o/3600)); } if($vpigq88u->vxj9h6lk) $this->vl82pjmr.="\52"; } function vqpu6lbu() { return ve0jwhkw("\101\166\145\162\141\147\145\40\125\126\151\163\151\164\157\162\57\110\157\165\162"); } function v4wd2vxa() { return "\46\156\142\163\160\73"; } } class vr3hq6lo extends v88xhuy4 { function vr3hq6lo($v7ekwth8,&$vvby6dsc,$vzu173rk) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); if($vvby6dsc->vt8mlwly) $this->vl82pjmr="\46\156\142\163\160\73"; else { if($vzu173rk->vxj9h6lk) $this->vl82pjmr=round($vzu173rk->vl82pjmr/24); else $this->vl82pjmr=round($vzu173rk->vl82pjmr/($vvby6dsc->vmj7yl4o/3600)); } if($vzu173rk->vxj9h6lk) $this->vl82pjmr.="\52"; } function vqpu6lbu() { return ve0jwhkw("\101\166\145\162\141\147\145\40\120\126\151\145\167\57\110\157\165\162"); } function v4wd2vxa() { return "\46\156\142\163\160\73"; } } class vcczlenn extends v88xhuy4 { function vcczlenn($v7ekwth8,&$vvby6dsc,$vpigq88u) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); if($vvby6dsc->vt8mlwly) $this->vl82pjmr="\46\156\142\163\160\73"; else { $this->vl82pjmr=round($vpigq88u->vl82pjmr/($vvby6dsc->vmj7yl4o/(86400))); } if($vpigq88u->vxj9h6lk) $this->vl82pjmr.="\52"; } function vqpu6lbu() { return ve0jwhkw("\101\166\145\162\141\147\145\40\125\126\151\163\151\164\157\162\57\104\141\171"); } function v4wd2vxa() { return "\46\156\142\163\160\73"; } } class vvsqbqit extends v88xhuy4 { function vvsqbqit($v7ekwth8,&$vvby6dsc,$vzu173rk) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); if($vvby6dsc->vt8mlwly) $this->vl82pjmr="\46\156\142\163\160\73"; else { $this->vl82pjmr=round($vzu173rk->vl82pjmr/($vvby6dsc->vmj7yl4o/(86400))); } if($vzu173rk->vxj9h6lk) $this->vl82pjmr.="\52"; } function vqpu6lbu() { return ve0jwhkw("\101\166\145\162\141\147\145\40\120\126\151\145\167\57\104\141\171"); } function v4wd2vxa() { return "\46\156\142\163\160\73"; } } class v2y97y1f extends v88xhuy4 { function v2y97y1f($v7ekwth8,&$vvby6dsc) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); $this->vuvb06rv("\162\157\142\157\164\163\143",true); } function v4k4h5jc(&$vfhitt2p) { v88xhuy4::vaee3a3a("\162\157\142\157\164\163\143",$vfhitt2p,true); } function vqpu6lbu() { return ve0jwhkw("\122\157\142\157\164\40\120\126\151\145\167\163"); } function v4wd2vxa() { return v3aupmbi("\162\157\142\157\164\163\144\141\164\141"); } } class v0vkzk65 extends v88xhuy4 { var $vspvz9oh; var $v96pegnr; var $vmmpx4bm=false; function v0vkzk65($v7ekwth8,&$vvby6dsc,$v8d5swv9) { v88xhuy4::v88xhuy4($v7ekwth8,$vvby6dsc); $this->vspvz9oh=$v8d5swv9; $this->vl82pjmr=array(); } function vh1aigud($vxtcw136) { return round(($vxtcw136/$this->vsdmpz60)*100)."\45"; } function vuvb06rv($vv7gxqqm,$v6zl74yb,$v88xhuy4,$vubjgzok,$vbi0927o,$vd533b2t,$vhy9a69p="",$vkozbswq="",$vc7sjfj9=true,$v0f6yv0p=false,$v4o18ukf=false) { global $vcva8fpp;   $this->vxj9h6lk=false; if($this->vvby6dsc->vt8mlwly) return -1; if(get_class($this->vvby6dsc)=='vruyso31') { if($this->vvby6dsc->vlk8i0ez) { $vv7gxqqm.="\137\155\157\156"; $v2m3ie84=$this->vvby6dsc->vmmpcrfo(); $this->vxj9h6lk=true; $this->v5k9659s=$this->vvby6dsc->v76myf9s(); } else { $v2m3ie84=$this->vvby6dsc->vcv8ofsv(); } } elseif(get_class($this->vvby6dsc)=='ve50jphg') { $vv7gxqqm.="\137\155\157\156"; $v2m3ie84=$this->vvby6dsc->vmmpcrfo(); } else { $vv7gxqqm.="\137\155\157\156"; $v2m3ie84=""; } $v2mssjqn="\163\145\154\145\143\164\40".$v88xhuy4; if($vbi0927o) $v2mssjqn.="\54\163\165\155\50\141\56\143\157\165\156\164\51\40\141\163\40\143"; else $v2mssjqn.="\54\141\56\143\157\165\156\164"; $v2mssjqn.="\40\146\162\157\155\40".$vcva8fpp[$vv7gxqqm]->v7ekwth8."\40\141\163\40\141"; $vg5u3iju=array("\142","\143","\144"); for($vxdg2sdk=0;$vxdg2sdk<count($v6zl74yb);$vxdg2sdk++) $v2mssjqn.="\54".$vcva8fpp[$v6zl74yb[$vxdg2sdk]]->v7ekwth8."\40\141\163\40".$vg5u3iju[$vxdg2sdk]; if($vubjgzok||$v2m3ie84) { $v2mssjqn.="\40\167\150\145\162\145"; if($vubjgzok) $v2mssjqn.="\40".$vubjgzok; if($vubjgzok&&$v2m3ie84) $v2mssjqn.="\40\141\156\144\40"; if($v2m3ie84) $v2mssjqn.="\40".$v2m3ie84; } if($vbi0927o) $v2mssjqn.="\40\147\162\157\165\160\40\142\171\40".$vbi0927o; if($vd533b2t) { if($vkozbswq) $v2mssjqn.="\40\157\162\144\145\162\40\142\171\40$vkozbswq\40"; else $v2mssjqn.="\40\157\162\144\145\162\40\142\171\40\143\40\144\145\163\143\40"; } if($this->vspvz9oh) $v2mssjqn.="\40\154\151\155\151\164\40".($this->vspvz9oh+1)."\40";   if(!$this->vb1cxalr=vaqc694a($v2mssjqn)) return; if(!$this->vspvz9oh) $this->vspvz9oh=mysql_num_rows($this->vb1cxalr); elseif(mysql_num_rows($this->vb1cxalr)>$this->vspvz9oh) $this->vmmpx4bm=true; if($vc7sjfj9) { $v2mssjqn="\163\145\154\145\143\164\40\163\165\155\50\141\56\143\157\165\156\164\51"; $v2mssjqn.="\40\146\162\157\155\40".$vcva8fpp[$vv7gxqqm]->v7ekwth8."\40\141\163\40\141"; if(!$v4o18ukf) { $vg5u3iju=array("\142","\143","\144"); for($vxdg2sdk=0;$vxdg2sdk<count($v6zl74yb);$vxdg2sdk++) $v2mssjqn.="\54".$vcva8fpp[$v6zl74yb[$vxdg2sdk]]->v7ekwth8."\40\141\163\40".$vg5u3iju[$vxdg2sdk]; } if(($vubjgzok&&!$v4o18ukf)||$v2m3ie84||$vhy9a69p) { $v2mssjqn.="\40\167\150\145\162\145"; if($vubjgzok&&!$v4o18ukf) $v2mssjqn.="\40".$vubjgzok; if($vubjgzok&&!$v4o18ukf&&$v2m3ie84) $v2mssjqn.="\40\141\156\144\40"; if($v2m3ie84) $v2mssjqn.="\40".$v2m3ie84; if($vhy9a69p&&(($vubjgzok&&!$v4o18ukf)||$v2m3ie84)) $v2mssjqn.="\40\141\156\144\40"; if($vhy9a69p) $v2mssjqn.=$vhy9a69p; } $this->vsdmpz60=vfym29jc($v2mssjqn); if($GLOBALS['vwoj4ypa']) return false;   } return 1; } } class vn6xrabs extends v0vkzk65 { function vn6xrabs($v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp; $this->v7ekwth8=ve0jwhkw("\120\141\147\145\163"); $this->vbogm3rj="\160\141\147\145\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); if(isset($this->vvby6dsc->v88xhuy4["\160\166"])) $this->vsdmpz60=$this->vvby6dsc->v88xhuy4["\160\166"]->vl82pjmr; if($this->vuvb06rv("\160\141\147\145\163\143",array() ,"\141\56\160\141\147\145" ,"" ,"\141\56\160\141\147\145" ,true,"","",!isset($this->vvby6dsc->v88xhuy4["\160\166"]))<=0) return; if(!isset($GLOBALS['vayi9hn6'])) { $GLOBALS['vayi9hn6']=array(); } while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { $GLOBALS['vayi9hn6'][$vxtcw136[0]]=false;   $vxtcw136[3]="\116\101"; $vxtcw136[4]=$this->vh1aigud($vxtcw136[1]); $this->vpz2ao7o($vxtcw136[1]); $this->vl82pjmr[]=$vxtcw136; } } function v9qcfysd() { global $vayi9hn6; $v2mssjqn="\167\150\145\162\145\40\151\144\40\151\156\40\50"; $vxdg2sdk=0; foreach($vayi9hn6 as $v2y8fsh6=> $vb0qc8n4) { $v2mssjqn.=($vxdg2sdk?"\54":"").$v2y8fsh6; $vxdg2sdk++; } $vayi9hn6=array(); if($vxdg2sdk) { if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\151\144\54\160\141\147\145\40\146\162\157\155","\160\141\147\145\163",$v2mssjqn."\51")) return false; while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $vayi9hn6[$vxtcw136[0]]=$vxtcw136[1]; } } } function vgc4j9xp() { global $vayi9hn6; $vgy09x36=count($this->vl82pjmr); for($vxdg2sdk=0;$vxdg2sdk<$vgy09x36;$vxdg2sdk++) {   if(isset($vayi9hn6[$this->vl82pjmr[$vxdg2sdk][0]])) $this->vl82pjmr[$vxdg2sdk][2]=$vayi9hn6[$this->vl82pjmr[$vxdg2sdk][0]]; else $this->vl82pjmr[$vxdg2sdk][2]="\111\104\40\116\117\124\40\106\117\125\116\104"; } } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\160\147\61\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\160\147\62\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\160\147\63\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\144\47\54\61\54\47\144\47\54\64\54\47\154\47\54\62\54\47\144\47\54\63\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0],$vxtcw136[1],$vxtcw136[2],$vxtcw136[3]=="\116\101"?"\55":$vxtcw136[3],$vxtcw136[4]); } var $v4cfpr7k=5; } class vik0gj0u extends v0vkzk65 { var $v7euls2k; function vik0gj0u($v7euls2k,$vuj3w5o6,$v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); $this->vbogm3rj="\162\145\146\144\145\164\144\141\164\141"; $this->v7euls2k=$v7euls2k; if($this->vuvb06rv("\162\145\146\163\143",array("\162\145\146\163") ,"\141\56\162\145\146\54\142\56\162\145\146" ,"\141\56\162\145\146\75\142\56\151\144\40\141\156\144\40\142\56\164\171\160\145\75$v7euls2k\40\141\156\144\40\142\56\144\157\155\141\151\156\75$vuj3w5o6\40\141\156\144\40\142\56\162\145\146\74\76\47\47" ,"\141\56\162\145\146" ,true)<=0) return; while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { if($vxtcw136[1]=="") $vxtcw136[1]=ve0jwhkw("\104\151\162\145\143\164\40\124\171\160\145\40\157\162\40\125\156\153\156\157\167\156"); $vxtcw136[3]=$this->vh1aigud($vxtcw136[2]); $this->vpz2ao7o($vxtcw136[2]); $this->vl82pjmr[]=$vxtcw136; } } function vuogr2fy() { if($this->v7euls2k==v0xoht22) echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\162\145\146\144\145\164\61\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\162\145\146\144\145\164\62\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\162\145\146\144\145\164\63\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\144\47\54\61\54\47\144\47\54\63\54\47\154\47\54\62\51\73"; else echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\162\145\146\144\145\164\61\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\162\145\146\144\145\164\62\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\162\145\146\144\145\164\63\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\144\47\54\61\54\47\144\47\54\63\54\47\163\156\142\47\54\62\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0],$vxtcw136[2],$vxtcw136[1],$vxtcw136[3]); } var $v4cfpr7k=4; } class vehrhajg extends v0vkzk65 { function vehrhajg($v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp,$vwoj4ypa; $this->v7ekwth8="\116\145\167\40\122\145\146\145\162\145\162\163"; $this->vbogm3rj="\156\145\167\162\145\146\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); $vprzwxbx=vfym29jc("\163\145\154\145\143\164\40\146\162\157\155\137\165\156\151\170\164\151\155\145\50\166\141\154\165\145\54\47\45\131\55\45\155\55\45\144\47\51\40\146\162\157\155","\147\145\156\145\162\141\154","\167\150\145\162\145\40\146\151\145\154\144\75\47\146\151\162\163\164\47"); if($vwoj4ypa) return; $v2mssjqn="\163\145\154\145\143\164\40\142\56\164\171\160\145\54\142\56\144\157\155\141\151\156\54\163\165\155\50\151\146\50\141\56\144\164\75{$this->vvby6dsc->vz36b96n}\54\141\56\143\157\165\156\164\54\60\51\51\40\141\163\40\143\54\155\151\156\50\141\56\144\164\51\40\141\163\40\155\40\146\162\157\155" ."\40{$vcva8fpp["\162\145\146\163\143"]->v7ekwth8}\40\141\163\40\141\54{$vcva8fpp["\162\145\146\163"]->v7ekwth8}\40\141\163\40\142" ."\40\167\150\145\162\145\40\141\56\162\145\146\75\142\56\151\144\40\141\156\144\40\50{$this->vvby6dsc->vz36b96n}\74\76\47$vprzwxbx\47\51\40\141\156\144\40\142\56\162\145\146\74\76\47\47" ."\40\147\162\157\165\160\40\142\171\40\142\56\164\171\160\145\54\142\56\144\157\155\141\151\156" ."\40\150\141\166\151\156\147\40\155\75{$this->vvby6dsc->vz36b96n}" ."\40\157\162\144\145\162\40\142\171\40\143\40\144\145\163\143" .($this->vspvz9oh?"\40\154\151\155\151\164\40".($this->vspvz9oh+1)."\40":"");   if(!$this->vb1cxalr=vaqc694a($v2mssjqn)) return; if(!$this->vspvz9oh) $this->vspvz9oh=mysql_num_rows($this->vb1cxalr); elseif(mysql_num_rows($this->vb1cxalr)>$this->vspvz9oh) $this->vmmpx4bm=true; while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { if($vxtcw136[0]==vqos8o49) $vxtcw136[3]=v1itqhmq($vxtcw136[1],$GLOBALS['vs0lfx1u']); elseif($vxtcw136[0]==v39wa3t0) $vxtcw136[3]="\116\157\156\40\127\145\142\40\120\141\147\145"; elseif($vxtcw136[0]==v0xoht22) { $vxtcw136[3]=vfym29jc("\163\145\154\145\143\164\40\144\157\155\141\151\156\40\146\162\157\155","\162\145\146\144\157\155\163","\167\150\145\162\145\40\151\144\75{$vxtcw136[1]}"); if($GLOBALS['vwoj4ypa']) $vxtcw136[3]="\111\104\40\116\117\124\40\106\117\125\116\104"; } else $vxtcw136[3]="\111\104\40\116\117\124\40\106\117\125\116\104"; $this->vl82pjmr[]=$vxtcw136; } } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\162\145\146\61\47\54\156\145\167\40\101\162\162\141\171\50\60\54\61\51\54\47\162\145\146\62\47\54\156\145\167\40\101\162\162\141\171\50\60\54\61\54\62\51\54\47\162\145\146\64\47\54\156\145\167\40\101\162\162\141\171\50\60\54\61\51\54\47\144\47\54\64\54\47\162\145\146\63\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\163\47\54\63\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0],$vxtcw136[1],$this->vvby6dsc->vl7qtri2,$vxtcw136[3],$vxtcw136[2]); } var $v4cfpr7k=5; } class v3zgytk7 extends v0vkzk65 { function v3zgytk7($v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { $this->v7ekwth8=ve0jwhkw("\122\145\146\145\162\162\145\162\163"); $this->vbogm3rj="\162\145\146\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); if($this->vuvb06rv("\162\145\146\147\162\157\165\160\163\143",array() ,"\141\56\164\171\160\145\54\141\56\144\157\155\141\151\156" ,"" ,"\141\56\164\171\160\145\54\141\56\144\157\155\141\151\156" ,true ,"\40\141\56\164\171\160\145\74\76".v39wa3t0)<=0) return; if(!isset($GLOBALS['vyls8dgc'])) { $GLOBALS['vyls8dgc']=array(); } while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) {   $vxtcw136[3]="\111\104\40\116\117\124\40\106\117\125\116\104"; if($vxtcw136[0]==v0xoht22) $GLOBALS['vyls8dgc'][$vxtcw136[1]]=false; if($vxtcw136[0]!=v39wa3t0) $vxtcw136[4]=round(($vxtcw136[2]/$this->vsdmpz60)*100)."\45"; else $vxtcw136[4]="\46\156\142\163\160\73"; $this->vpz2ao7o($vxtcw136[2]); $this->vl82pjmr[]=$vxtcw136; } } function v9qcfysd() { global $vyls8dgc; $v2mssjqn="\167\150\145\162\145\40\151\144\40\151\156\40\50"; $vxdg2sdk=0; foreach($vyls8dgc as $v2y8fsh6=> $vb0qc8n4) { $v2mssjqn.=($vxdg2sdk?"\54":"").$v2y8fsh6; $vxdg2sdk++; } $vyls8dgc=array(); if($vxdg2sdk) { if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\151\144\54\144\157\155\141\151\156\40\146\162\157\155","\162\145\146\144\157\155\163",$v2mssjqn."\51")) return false; while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $vyls8dgc[$vxtcw136[0]]=$vxtcw136[1]; } } } function vgc4j9xp() { global $vyls8dgc; $vgy09x36=count($this->vl82pjmr); for($vxdg2sdk=0;$vxdg2sdk<$vgy09x36;$vxdg2sdk++) { if($this->vl82pjmr[$vxdg2sdk][0]==v0xoht22) { if(isset($vyls8dgc[$this->vl82pjmr[$vxdg2sdk][1]])) $this->vl82pjmr[$vxdg2sdk][3]=$vyls8dgc[$this->vl82pjmr[$vxdg2sdk][1]]; else $this->vl82pjmr[$vxdg2sdk][3]="\111\104\40\116\117\124\40\106\117\125\116\104"; } else { $this->vl82pjmr[$vxdg2sdk][3]=vgtc53pd($this->vl82pjmr[$vxdg2sdk][0],$this->vl82pjmr[$vxdg2sdk][1]); } } } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\162\145\146\61\47\54\156\145\167\40\101\162\162\141\171\50\60\54\61\51\54\47\162\145\146\62\47\54\156\145\167\40\101\162\162\141\171\50\60\54\61\54\62\51\54\47\162\145\146\64\47\54\156\145\167\40\101\162\162\141\171\50\60\54\61\51\54\47\144\47\54\64\54\47\144\47\54\65\54\47\162\145\146\63\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\163\47\54\63\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0],$vxtcw136[1],$this->vvby6dsc->vl7qtri2,$vxtcw136[3],$vxtcw136[2],$vxtcw136[4]); } var $v4cfpr7k=6; } class vnrje716 extends v0vkzk65 { function vnrje716($v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp; $this->v7ekwth8=ve0jwhkw("\115\151\154\145\163\164\157\156\145\163"); $this->vbogm3rj="\155\151\154\145\163\164\157\156\145\163\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); $this->vl82pjmr=array(); if($vvby6dsc->vt8mlwly) return; $v2m3ie84=$vvby6dsc->vcv8ofsv(); $v2mssjqn="\163\145\154\145\143\164\40\141\56\164\170\164\40". "\146\162\157\155\40{$vcva8fpp["\155\151\154\145\163"]->v7ekwth8}\40\141\163\40\141\40". ($v2m3ie84?"\167\150\145\162\145\40".$v2m3ie84."\40":""). ($v8d5swv9?"\154\151\155\151\164\40".($v8d5swv9+1):""); if(!$vb1cxalr=vaqc694a($v2mssjqn)) return false; if(!$this->vspvz9oh) $this->vspvz9oh=mysql_num_rows($vb1cxalr); elseif(mysql_num_rows($vb1cxalr)>$v8d5swv9) $this->vmmpx4bm=true; while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $this->vl82pjmr[]=$vxtcw136; } } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\163\47\54\60\51\73"; } function vo7papyb($vxtcw136) { return array(htmlentities($vxtcw136[0])); } var $v4cfpr7k=1; } class vz11c5vm extends v0vkzk65 { var $vwjxgo5r; function vz11c5vm($vwjxgo5r,$v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp; $this->vwjxgo5r=$vwjxgo5r; $this->v7ekwth8=ve0jwhkw("\120\141\147\145\163\40\166\151\163\151\164\145\144\40\142\171\40\43\162\157\142\157\164\43",array("\162\157\142\157\164"=>v1itqhmq($vwjxgo5r,$GLOBALS['vq0oz0ts']))); $this->vbogm3rj="\162\157\142\157\164\144\145\164\160\141\147\145\163\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); if($this->vuvb06rv("\162\157\142\157\164\163\143",array("\160\141\147\145\163") ,"\141\56\160\141\147\145\54\142\56\160\141\147\145" ,"\141\56\160\141\147\145\75\142\56\151\144\40\141\156\144\40\141\56\162\157\142\157\164\75$vwjxgo5r" ,"\141\56\160\141\147\145" ,true)<=0) return; while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { $vxtcw136[3]=$this->vh1aigud($vxtcw136[2]); $this->vpz2ao7o($vxtcw136[2]); $this->vl82pjmr[]=$vxtcw136; } } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\162\157\142\144\61\47\54\156\145\167\40\101\162\162\141\171\50\60\54\61\51\54\47\144\47\54\62\54\47\144\47\54\64\54\47\163\47\54\63\51\73"; } function vo7papyb($vxtcw136) { return array($this->vwjxgo5r,$vxtcw136[0],$vxtcw136[2],$vxtcw136[1],$vxtcw136[3]); } var $v4cfpr7k=5; } class v1h0kw4y extends v0vkzk65 { function v1h0kw4y($v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp; $this->v7ekwth8=ve0jwhkw("\122\157\142\157\164\163"); $this->vbogm3rj="\162\157\142\157\164\144\145\164\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); if(isset($this->vvby6dsc->v88xhuy4["\162\166"])) $this->vsdmpz60=$this->vvby6dsc->v88xhuy4["\162\166"]->vl82pjmr; if($this->vuvb06rv("\162\157\142\157\164\163\143",array() ,"\141\56\162\157\142\157\164" ,"" ,"\141\56\162\157\142\157\164" ,true,"","",!isset($this->vvby6dsc->v88xhuy4["\162\166"]))<=0) return; while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { $vxtcw136[2]=v1itqhmq($vxtcw136[0],$GLOBALS['vq0oz0ts']); $vxtcw136[3]=$this->vh1aigud($vxtcw136[1]); $this->vpz2ao7o($vxtcw136[1]); $this->vl82pjmr[]=$vxtcw136; } } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\162\157\142\61\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\162\157\142\62\47\54\156\145\167\40\101\162\162\141\171\50\60\54\61\51\54\47\162\157\142\63\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\144\47\54\62\54\47\144\47\54\64\54\47\163\47\54\63\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0],$this->vvby6dsc->vl7qtri2,$vxtcw136[1],$vxtcw136[2],$vxtcw136[3]); } var $v4cfpr7k=5; } class vqer9i83 extends v0vkzk65 { function vqer9i83($vwjxgo5r,$v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp; if(!$vwjxgo5r) $this->v7ekwth8=ve0jwhkw("\117\164\150\145\162\40\102\162\157\167\163\145\162\163"); else $this->v7ekwth8=ve0jwhkw("\43\142\162\157\167\163\145\162\43\40\102\162\157\167\163\145\162\163",array("\142\162\157\167\163\145\162"=>v1itqhmq($vwjxgo5r,$GLOBALS['vnpesnx6']))); $this->vbogm3rj="\142\162\157\167\163\145\162\144\145\164\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); if($this->vuvb06rv("\141\147\145\156\164\163\143",array("\141\147\145\156\164\163") ,"\141\56\141\147\145\156\164\54\142\56\141\147\145\156\164" ,"\141\56\141\147\145\156\164\75\142\56\151\144\40\141\156\144\40\142\56\142\162\157\167\163\145\162\75$vwjxgo5r" ,"\141\56\141\147\145\156\164" ,true)<=0) return; while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { $vxtcw136[3]=$this->vh1aigud($vxtcw136[2]); $this->vpz2ao7o($vxtcw136[2]); $this->vl82pjmr[]=$vxtcw136; } } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\141\147\164\61\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\141\147\164\62\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\144\47\54\61\54\47\144\47\54\63\54\47\163\156\142\47\54\62\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0],$vxtcw136[2],vb1iulhl($vxtcw136[1]),$vxtcw136[3]); } var $v4cfpr7k=4; } class vt31l4aj extends v0vkzk65 { function vt31l4aj($v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp,$vdp8kmrn; $this->v7ekwth8=ve0jwhkw("\103\157\165\156\164\162\151\145\163"); $this->vbogm3rj="\143\157\165\156\164\162\171\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); if(isset($this->vvby6dsc->v88xhuy4["\165\166"])) $this->vsdmpz60=$this->vvby6dsc->v88xhuy4["\165\166"]->vl82pjmr; if($this->vuvb06rv("\143\157\165\163\143",array() ,"\141\56\143\157\165\156\164\162\171" ,"" ,"\141\56\143\157\165\156\164\162\171" ,true,"","",!isset($this->vvby6dsc->v88xhuy4["\165\166"]))<=0) return; while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { if(isset($vdp8kmrn[$vxtcw136[0]])) { $vxtcw136[2]=ve0jwhkw($vdp8kmrn[$vxtcw136[0]]); } else { $vxtcw136[2]=$vxtcw136[0]; } $vxtcw136[3]=$this->vh1aigud($vxtcw136[1]); $this->vpz2ao7o($vxtcw136[1]); $this->vl82pjmr[]=$vxtcw136; } } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\143\157\165\61\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\143\157\165\63\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\144\47\54\61\54\47\144\47\54\63\54\47\143\157\165\62\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\163\47\54\62\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0],$vxtcw136[1],$vxtcw136[2],$vxtcw136[3]); } var $v4cfpr7k=4; } class vdflvzl5 extends v0vkzk65 { function v4k4h5jc() { global $vb08d6hi,$vru7h2lp; $vhr84mkz=$vru7h2lp["\146\151\162\163\164"]; if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\150\157\165\162\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50$vhr84mkz\51\51\40\141\163\40\146\150\162\54" ."\144\141\164\145\137\146\157\162\155\141\164\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50$vhr84mkz\51\54\47\45\131\55\45\155\55\45\144\47\51\40\141\163\40\146\144\164\54" ."\150\157\165\162\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50\100\143\164\163\51\51\40\141\163\40\154\150\162")) return false; if(!$vb08d6hi=mysql_fetch_array($vb1cxalr)) return false; if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\143\157\165\156\164\40\146\162\157\155","\150\157\165\162\154\171","\167\150\145\162\145\40\144\164\75\47{$vb08d6hi["\146\144\164"]}\47\40\141\156\144\40\150\162\75{$vb08d6hi["\146\150\162"]}")) return; if(!$vxtcw136=mysql_fetch_row($vb1cxalr)) $vb08d6hi["\146\143\156\164"]=0; else $vb08d6hi["\146\143\156\164"]=$vxtcw136[0]; if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\143\157\165\156\164\40\146\162\157\155","\150\157\165\162\154\171","\167\150\145\162\145\40\144\164\75\100\143\144\164\40\141\156\144\40\150\162\75\150\157\165\162\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50\100\143\164\163\51\51")) return; if(!$vxtcw136=mysql_fetch_row($vb1cxalr)) $vb08d6hi["\154\143\156\164"]=0; else $vb08d6hi["\154\143\156\164"]=$vxtcw136[0]; } function vdflvzl5($v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp,$vwoj4ypa,$vb08d6hi; $this->v7ekwth8="\110\157\165\162\154\171\40\104\151\163\164\162\151\142\165\164\151\157\156"; $this->vbogm3rj="\150\157\165\162\154\171\144\151\163\164\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); if($this->vvby6dsc->vt8mlwly) return; if(get_class($this->vvby6dsc)=='vruyso31'&&$this->vvby6dsc->vlk8i0ez) return; $this->vspvz9oh=0; $va03h56h=$vb08d6hi["\146\150\162"]; $vprzwxbx=$vb08d6hi["\146\144\164"]; $vuklgidq=$vb08d6hi["\154\150\162"]; $v2tja2v1=$vb08d6hi["\146\143\156\164"]; $vpdw9sns=$vb08d6hi["\154\143\156\164"]; $v1jeajkd=false; $v9ocdzda=false; if(get_class($this->vvby6dsc)=='vziq9uvf') { $v1jeajkd=true; $v9ocdzda=true; } elseif(get_class($this->vvby6dsc)=='ve50jphg') { if(!$this->vvby6dsc->v4zsk53h) $v1jeajkd=true; if(!$this->vvby6dsc->vn7nhhk0) $v9ocdzda=true; } if($this->vuvb06rv("\150\157\165\162\154\171",array() ,"\141\56\150\162" ,(get_class($this->vvby6dsc)=='vruyso31')?"\50\141\56\150\162\74\76$va03h56h\40\157\162\40\141\56\144\164\74\76\47$vprzwxbx\47\51\40\141\156\144\40\50\141\56\150\162\74\76\150\157\165\162\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50\100\143\164\163\51\51\40\157\162\40\141\56\144\164\74\76\100\143\144\164\51":"" ,"\141\56\150\162" ,true,"","\141\56\150\162",false)<=0) return; $this->vspvz9oh=1; $vewesuzk=""; $vrxvstmi=0; while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { for($vxdg2sdk=$vrxvstmi;$vxdg2sdk<$vxtcw136[0];$vxdg2sdk++) { if($vxdg2sdk) $vewesuzk.="\54"; $vgy09x36=$this->vvby6dsc->vgmx56z1/86400-(($this->vvby6dsc->v4zsk53h&&$vxdg2sdk>=$vuklgidq)?1:0)-(($this->vvby6dsc->vn7nhhk0&&$vxdg2sdk<=$va03h56h)?1:0); if($vgy09x36) $vewesuzk.="\60"; else $vewesuzk.="\55\61"; } if($vxdg2sdk) $vewesuzk.="\54"; if($v1jeajkd&&$vxtcw136[0]==$vuklgidq) $vxtcw136[1]-=$vpdw9sns; if($v9ocdzda&&$vxtcw136[0]==$va03h56h) $vxtcw136[1]-=$v2tja2v1; $vgy09x36=$this->vvby6dsc->vgmx56z1/86400-(($this->vvby6dsc->v4zsk53h&&$vxtcw136[0]>=$vuklgidq)?1:0)-(($this->vvby6dsc->vn7nhhk0&&$vxtcw136[0]<=$va03h56h)?1:0);   if($vgy09x36) $vewesuzk.=$vxtcw136[1]/$vgy09x36; else $vewesuzk.="\55\61"; $vrxvstmi=$vxtcw136[0]+1; } for($vxdg2sdk=$vrxvstmi;$vxdg2sdk<=23;$vxdg2sdk++) { if($vxdg2sdk) $vewesuzk.="\54"; $vgy09x36=$this->vvby6dsc->vgmx56z1/86400-(($this->vvby6dsc->v4zsk53h&&$vxdg2sdk>=$vuklgidq)?1:0)-(($this->vvby6dsc->vn7nhhk0&&$vxdg2sdk<=$va03h56h)?1:0); if($vgy09x36) $vewesuzk.="\60"; else $vewesuzk.="\55\61"; } $this->vl82pjmr[]=array($vewesuzk); } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\147\47\54\60\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0]); } var $v4cfpr7k=1; } class vmxyv2ny extends v0vkzk65 { function v4k4h5jc() { global $vxiw5ugo,$vru7h2lp; $vhr84mkz=$vru7h2lp["\146\151\162\163\164"]; if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\167\145\145\153\144\141\171\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50$vhr84mkz\51\51\40\141\163\40\146\167\144\54" ."\167\145\145\153\144\141\171\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50\100\143\164\163\51\51\40\141\163\40\154\167\144\54" ."\144\141\164\145\137\146\157\162\155\141\164\50\146\162\157\155\137\165\156\151\170\164\151\155\145\50$vhr84mkz\51\54\47\45\131\55\45\155\55\45\144\47\51\40\141\163\40\146\144\164")) return false; if(!$vxiw5ugo=mysql_fetch_array($vb1cxalr)) return false; if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\143\157\165\156\164\40\146\162\157\155","\150\151\164\163","\167\150\145\162\145\40\144\164\75\47{$vxiw5ugo["\146\144\164"]}\47")) return; if(!$vxtcw136=mysql_fetch_row($vb1cxalr)) $vxiw5ugo["\146\143\156\164"]=0; else $vxiw5ugo["\146\143\156\164"]=$vxtcw136[0]; if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\143\157\165\156\164\40\146\162\157\155","\150\151\164\163","\167\150\145\162\145\40\144\164\75\100\143\144\164")) return; if(!$vxtcw136=mysql_fetch_row($vb1cxalr)) $vxiw5ugo["\154\143\156\164"]=0; else $vxiw5ugo["\154\143\156\164"]=$vxtcw136[0]; return true; } function vmxyv2ny($v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp,$vwoj4ypa,$vxiw5ugo; $this->v7ekwth8="\127\145\145\153\144\141\171\40\104\151\163\164\162\151\142\165\164\151\157\156"; $this->vbogm3rj="\167\145\145\153\144\141\171\144\151\163\164\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); if($this->vvby6dsc->vt8mlwly) return; $this->vspvz9oh=0; $vhhly95t=$vxiw5ugo["\146\167\144"]; $vwmh51jp=$vxiw5ugo["\154\167\144"]; $vprzwxbx=$vxiw5ugo["\146\144\164"]; $v2tja2v1=$vxiw5ugo["\146\143\156\164"]; $vpdw9sns=$vxiw5ugo["\154\143\156\164"]; if($this->vuvb06rv("\167\145\145\153\144\141\171",array() ,"\167\144" ,"" ,"\167\144" ,true,"","\167\144",false)<=0) return; $this->vspvz9oh=1; $vewesuzk=""; $vrxvstmi=0; while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { for($vxdg2sdk=$vrxvstmi;$vxdg2sdk<$vxtcw136[0];$vxdg2sdk++) { if($vxdg2sdk) $vewesuzk.="\54"; $vki54ia6=$this->vimyp5vt($vxdg2sdk); if($vki54ia6) $vewesuzk.="\60"; else $vewesuzk.="\55\61"; } if($vxdg2sdk) $vewesuzk.="\54";   if($this->vvby6dsc->v4zsk53h&&$vxtcw136[0]==$vwmh51jp) $vxtcw136[1]-=$vpdw9sns; if($this->vvby6dsc->vn7nhhk0&&$vxtcw136[0]==$vhhly95t) $vxtcw136[1]-=$v2tja2v1; $vki54ia6=$this->vimyp5vt($vxtcw136[0]);   if($vki54ia6) $vewesuzk.=$vxtcw136[1]/$vki54ia6; else $vewesuzk.="\55\61"; $vrxvstmi=$vxtcw136[0]+1; } for($vxdg2sdk=$vrxvstmi;$vxdg2sdk<=6;$vxdg2sdk++) { if($vxdg2sdk) $vewesuzk.="\54"; $vki54ia6=$this->vimyp5vt($vxdg2sdk); if($vki54ia6) $vewesuzk.="\60"; else $vewesuzk.="\55\61"; } $this->vl82pjmr[]=array($vewesuzk); } function vimyp5vt($vbrf6arr) { $vki54ia6=$this->vvby6dsc->vgmx56z1/86400; if($this->vvby6dsc->v4zsk53h) $vki54ia6-=1; if($this->vvby6dsc->vn7nhhk0) $vki54ia6-=1; if($vbrf6arr>=$this->vvby6dsc->vhhly95t) $vki54ia6-=$vbrf6arr-$this->vvby6dsc->vhhly95t+1; else $vki54ia6-=7-$this->vvby6dsc->vhhly95t+$vbrf6arr+1; if($vki54ia6<0) $vki54ia6=0; elseif($vki54ia6==0) $vki54ia6=1; else { $vki54ia6=($vki54ia6-$vki54ia6%7)/7+1;   }   return $vki54ia6; } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\147\47\54\60\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0]); } var $v4cfpr7k=1; } class valy066m extends v0vkzk65 { function valy066m($v7ekwth8,&$vvby6dsc,$v8d5swv9=0) { global $vcva8fpp; $this->v7ekwth8=ve0jwhkw("\102\162\157\167\163\145\162\163"); $this->vbogm3rj="\142\162\157\167\163\145\162\144\141\164\141"; v0vkzk65::v0vkzk65($v7ekwth8,$vvby6dsc,$v8d5swv9); if(isset($this->vvby6dsc->v88xhuy4["\165\166"])) $this->vsdmpz60=$this->vvby6dsc->v88xhuy4["\165\166"]->vl82pjmr; if($this->vuvb06rv("\142\162\157\167\163\145\162\163\143",array() ,"\141\56\142\162\157\167\163\145\162" ,"" ,"\141\56\142\162\157\167\163\145\162" ,true,"","",!isset($this->vvby6dsc->v88xhuy4["\165\166"]))<=0) return; while($vxtcw136=mysql_fetch_row($this->vb1cxalr)) { if(!$vxtcw136[0]) $vxtcw136[2]="\117\164\150\145\162"; else $vxtcw136[2]=v1itqhmq($vxtcw136[0],$GLOBALS['vnpesnx6']); $vxtcw136[3]=$this->vh1aigud($vxtcw136[1]); $this->vpz2ao7o($vxtcw136[1]); $this->vl82pjmr[]=$vxtcw136; } } function vuogr2fy() { echo "\146\157\162\155\141\164\75\156\145\167\40\101\162\162\141\171\50\47\142\162\167\61\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\142\162\167\62\47\54\156\145\167\40\101\162\162\141\171\50\60\54\61\51\54\47\142\162\167\64\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\144\47\54\62\54\47\144\47\54\64\54\47\142\162\167\63\47\54\156\145\167\40\101\162\162\141\171\50\47\60\47\51\54\47\163\47\54\63\51\73"; } function vo7papyb($vxtcw136) { return array($vxtcw136[0],$this->vvby6dsc->vl7qtri2,$vxtcw136[1],$vxtcw136[2],$vxtcw136[3]); } var $v4cfpr7k=5; } function v3aupmbi($v92w5trw,$v8s2w7qs="") { return '<a href="javascript:opengraph(' . "\'$v92w5trw$v8s2w7qs\'\54\'\'\51\73" . '" target="' . $GLOBALS['vm3wmus0'] . '"><img title="' . ve0jwhkw("History Graph").'" class="grf" width="15" height="15" src="track.gif" style="cursor:hand" /></a>'; } ?>