<?php

    /******************************************/
    /*  TraceWatch                            */
    /*  Website Statistics Software           */
	/*                                        */
    /*  Author: Arash Dejkam                  */
	/*                                        */
    /*  Copyright (c)2004-2005 Arash Dejkam   */
    /*  All Rights Reserved                   */ 
	/*                                        */
	/*  http://www.tracewatch.com             */
	/*                                        */
    /******************************************/

?>
<?php vctxa8fc(); function vctxa8fc() { global $HTTP_GET_VARS,$HTTP_SERVER_VARS,$vvrarop8 ,$phrases,$date_formats,$right_to_left,$farsi_digits,$translator,$translator_link,$lang_name; $vwwlm8f6=opendir($HTTP_SERVER_VARS["\104\117\103\125\115\105\116\124\137\122\117\117\124"]."\57\164\167\141\164\143\150\137\151\156\143\154\165\144\145\57\154\141\156\147"); $vvrarop8=array("\105\156\147\154\151\163\150"); while($vypo7kth=readdir($vwwlm8f6)) { if(preg_match("\57\136\50\56\53\51\\\56\160\150\160\$\57",$vypo7kth,$vtir3io4)) { if($vtir3io4[1]=="\105\156\147\154\151\163\150"||$vtir3io4[1]=="\164\145\155\160\154\141\164\145"||preg_match("\57\\\137\145\170\164\$\57",$vtir3io4[1])) continue; $vvrarop8[]=$vtir3io4[1]; } } sort($vvrarop8); @session_start(); if(isset($HTTP_GET_VARS["\154\141\156\147"])) { $v0ncx3zt=$HTTP_GET_VARS["\154\141\156\147"]; } elseif(isset($GLOBALS['HTTP_SESSION_VARS']["\154\141\156\147"])) { $v0ncx3zt=$GLOBALS['HTTP_SESSION_VARS']["\154\141\156\147"]; } else { if(!vsskumkc()) { $v0ncx3zt="\105\156\147\154\151\163\150"; } else { $v0ncx3zt=vbz7bg74("\144\145\146\154\141\156\147"); if($GLOBALS['vfs6pezc']!=vi2w7d41) $v0ncx3zt="\105\156\147\154\151\163\150"; } } if(!in_array($v0ncx3zt,$vvrarop8)) $v0ncx3zt="\105\156\147\154\151\163\150"; if($v0ncx3zt=="\105\156\147\154\151\163\150") { $right_to_left=false; $farsi_digits=false; } else { require($HTTP_SERVER_VARS["\104\117\103\125\115\105\116\124\137\122\117\117\124"]."\57\164\167\141\164\143\150\137\151\156\143\154\165\144\145\57\154\141\156\147\57".$v0ncx3zt."\56\160\150\160"); if(file_exists($HTTP_SERVER_VARS["\104\117\103\125\115\105\116\124\137\122\117\117\124"]."\57\164\167\141\164\143\150\137\151\156\143\154\165\144\145\57\154\141\156\147\57".$v0ncx3zt."\137\145\170\164\56\160\150\160")) { require $HTTP_SERVER_VARS["\104\117\103\125\115\105\116\124\137\122\117\117\124"]."\57\164\167\141\164\143\150\137\151\156\143\154\165\144\145\57\154\141\156\147\57".$v0ncx3zt."\137\145\170\164\56\160\150\160"; foreach($custom_phrases as $v9i8hf0p=> $v7cd5jcs) { $phrases[$v9i8hf0p]=$v7cd5jcs; } } if(!isset($farsi_digits)) $farsi_digits=false; } $GLOBALS['HTTP_SESSION_VARS']["\154\141\156\147"]=$v0ncx3zt; $GLOBALS['vn92z1vw']=$v0ncx3zt; } function vxjemfe4() { global $vvrarop8,$HTTP_GET_VARS,$vn92z1vw; echo "\74\146\157\162\155\40\143\154\141\163\163\75\"\154\141\156\147\"\40\155\145\164\150\157\144\75\"\147\145\164\"\40\151\144\75\"\154\141\156\147\146\157\162\155\"\76"; echo "\114\101\116\107\125\101\107\105\40\74\163\145\154\145\143\164\40\156\141\155\145\75\"\154\141\156\147\"\40\151\144\75\"\154\141\156\147\163\145\154\145\143\164\"\76"; foreach($vvrarop8 as $v0ncx3zt) { echo "\74\157\160\164\151\157\156\40\166\141\154\165\145\75\"".$v0ncx3zt."\"\40".($vn92z1vw==$v0ncx3zt?"\163\145\154\145\143\164\145\144":"")."\76".$v0ncx3zt."\74\57\157\160\164\151\157\156\76"; } echo "\74\57\163\145\154\145\143\164\76"; foreach($HTTP_GET_VARS as $v2y8fsh6=> $vb0qc8n4) { if($v2y8fsh6!="\154\141\156\147") echo "\74\151\156\160\165\164\40\164\171\160\145\75\"\150\151\144\144\145\156\"\40\156\141\155\145\75\"".$v2y8fsh6."\"\40\166\141\154\165\145\75\"".$vb0qc8n4."\"\40\57\76"; } echo "\74\57\146\157\162\155\76"; ?><?php echo "\11\74\163\143\162\151\160\164\40\164\171\160\145\75\42\164\145\170\164\57\152\141\166\141\163\143\162\151\160\164\42\76\12\11\11\144\157\143\165\155\145\156\164\56\147\145\164\105\154\145\155\145\156\164\102\171\111\144\50\47\154\141\156\147\163\145\154\145\143\164\47\51\56\157\156\143\150\141\156\147\145\75\163\165\142\154\141\156\147\73\12\11\11\146\165\156\143\164\151\157\156\40\163\165\142\154\141\156\147\50\51\40\173\12\11\11\11\144\157\143\165\155\145\156\164\56\147\145\164\105\154\145\155\145\156\164\102\171\111\144\50\47\154\141\156\147\146\157\162\155\47\51\56\163\165\142\155\151\164\50\51\73\12\11\11\175\12\11\74\57\163\143\162\151\160\164\76\12"; ?><?php } function vjvxhkqj($v5iddd42,$v88xhuy4) { if(isset($GLOBALS['date_formats'])&&isset($GLOBALS['date_formats'][$v5iddd42])&&$GLOBALS['date_formats'][$v5iddd42]) $v5iddd42=$GLOBALS['date_formats'][$v5iddd42]; $vo0gltmv=""; for($vxdg2sdk=0;$vxdg2sdk<strlen($v5iddd42);$vxdg2sdk++) { if(isset($v88xhuy4[$v5iddd42[$vxdg2sdk]])) { if(preg_match("\57\50\131\174\104\174\150\174\155\174\163\174\156\51\57",$v5iddd42[$vxdg2sdk])) $vo0gltmv.=vvs5s220($v88xhuy4[$v5iddd42[$vxdg2sdk]]); elseif(preg_match("\57\50\115\174\127\51\57",$v5iddd42[$vxdg2sdk])) $vo0gltmv.=ve0jwhkw($v88xhuy4[$v5iddd42[$vxdg2sdk]]); else $vo0gltmv.=$v88xhuy4[$v5iddd42[$vxdg2sdk]]; } else $vo0gltmv.=$v5iddd42[$vxdg2sdk]; } return $vo0gltmv; } function ve0jwhkw($vzu173rk,$v88xhuy4=array(),$vajg5evr=false) { global $phrases,$right_to_left,$vaxk2954; $vo0gltmv=""; if(isset($phrases[$vzu173rk])&&$phrases[$vzu173rk]) { $vo0gltmv=$phrases[$vzu173rk]; } else { $vo0gltmv=$vzu173rk; } if(count($v88xhuy4)) { $vv0bz2g0=$vo0gltmv; $vo0gltmv=""; for($vxdg2sdk=0;$vxdg2sdk<strlen($vv0bz2g0);$vxdg2sdk++) { if($vv0bz2g0[$vxdg2sdk]=="\43") { $vxdg2sdk++; $v2y8fsh6=""; while($vxdg2sdk<strlen($vv0bz2g0)&&$vv0bz2g0[$vxdg2sdk]!="\43") { $v2y8fsh6.=$vv0bz2g0[$vxdg2sdk]; $vxdg2sdk++; } if(isset($v88xhuy4[$v2y8fsh6])) $vo0gltmv.=$v88xhuy4[$v2y8fsh6]; else $vo0gltmv.="\154\141\156\147\137\145\162\162\157\162"; } else { $vo0gltmv.=$vv0bz2g0[$vxdg2sdk]; } } } if($vajg5evr&&$right_to_left) { $vz5alc40=explode("\40",$vo0gltmv); $v895ge8y=array(); $vgz80crk=array(); $vukox3wb=((ord($vz5alc40[0][0])&0x80)?true:false); $v895ge8y[]=$vz5alc40[0]; $vxdg2sdk=1; while($vxdg2sdk<count($vz5alc40)) { if($vukox3wb!=((ord($vz5alc40[$vxdg2sdk][0])&0x80)?true:false)) { $vgz80crk[]=$v895ge8y; $v895ge8y=array(); $v895ge8y[]=$vz5alc40[$vxdg2sdk]; $vukox3wb=!$vukox3wb; } else { $v895ge8y[]=$vz5alc40[$vxdg2sdk]; } $vxdg2sdk++; } $vgz80crk[]=$v895ge8y; $vo0gltmv=""; $vxdg2sdk=0; $vgz80crk=array_reverse($vgz80crk); foreach($vgz80crk as $v895ge8y) {   foreach($v895ge8y as $vz5alc40) {   if($vxdg2sdk) $vo0gltmv.="\40"; $vo0gltmv.=$vz5alc40; $vxdg2sdk++; } } } return $vo0gltmv; } function vb1iulhl($vewesuzk,$vnm6mlmt=true) { if(!$GLOBALS['right_to_left']||!$vnm6mlmt) return $vewesuzk; return "\74\163\160\141\156\40\163\164\171\154\145\75\"\144\151\162\145\143\164\151\157\156\72\154\164\162\73\165\156\151\143\157\144\145\55\142\151\144\151\72\145\155\142\145\144\"\76".$vewesuzk."\74\57\163\160\141\156\76"; } function vvs5s220($vvoa3lhw) { if(!$GLOBALS['farsi_digits']) return $vvoa3lhw; $vvoa3lhw=(string)$vvoa3lhw; $vo0gltmv=""; for($vxdg2sdk=0;$vxdg2sdk<strlen($vvoa3lhw);$vxdg2sdk++) { if(ord($vvoa3lhw[$vxdg2sdk])>=0x30&&ord($vvoa3lhw[$vxdg2sdk])<=0x39) $vo0gltmv.="\46\43\170\66\146".$vvoa3lhw[$vxdg2sdk]."\73"; else $vo0gltmv.=$vvoa3lhw[$vxdg2sdk]; } return $vo0gltmv; } ?>