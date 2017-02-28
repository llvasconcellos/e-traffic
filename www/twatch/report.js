function e(s) {
	document.write(s);
}

function cls(e) {
	alert(event.button);
}
wincount=0;



function openw(s,t) {

	w=450;
	h=300;
	if(t==2) {
		w=518;
		h=335;
	}
	x=30;
	y=120;

	if(x<0) x=0;
	else if(x+w>screen.availWidth) x=screen.availWidth-w-60;
	if(y<0) y=0;
	else if(y+h>screen.availHeight) y=screen.availHeight-h-60;
	var w=open(s,window.name+'dets'+wincount,'scrollbars=yes,status=yes,resizable,width='+w+',height='+h+',left='+x+',top='+y);
	eval(window.name+'dets'+wincount+'=w;');
	wincount++;
}
function details(s) {
	return '<a href="javascript:openw('+"'index.php"+s+"'"+',1)" target="'+mainwin+'"><img title="'+cdetails+'" width="15" height="15" src="details.gif" style="cursor:hand" /></a>';
}
function viewall(s) {
	return '<a href="javascript:openw('+"'index.php?"+s+"'"+',1)" target="'+mainwin+'"><img title="'+cvall+'" width="40" height="14" class="none" style="cursor:hand" src="viewall.gif" /></a>';
}

function cleargraphtime() {
	clearTimeout(graphtime);
}


function opengraph(c,a) {
	if(typeof graphtime!='undefined') clearTimeout(graphtime);
	if(typeof graphwin=='undefined'||graphwin.closed) {
		var y;
		y=window.screen.availHeight-230;
		w=window.screen.availWidth;
		
		graphwin=open('graphcont.php',window.name+'graphwin','scrollbars=yes,status=yes,resizable,outerwidth='+w+',outerheight='+230+',left='+0+',top='+y);

		if(document.all) graphwin.resizeTo(w,230);
	}
	graphwin.focus();
	
	setgraph(c,a);
	
}

function setgraph(c,a) {
	if(typeof graphwin=='undefined'||graphwin.closed) return;
	if(typeof graphwin.setdef=='undefined') {
		graphtime=setTimeout("setgraph('"+c+"',"+'"'+a+'")',200);
	} else {
		graphwin.set( c,eval('new Array('+a+')') );
		graphtime=setTimeout("setgraph('"+c+"',"+'"'+a+'")',200);
	}
}

function graph(c,args) {
	var a='';
	for(var i=0;i<args.length;i+=2) {
		if(i) a+=',';
		a+="\\'"+args[i]+"\\',"+args[i+1];
	}
	if(inpart) return "<a href=\"javascript:opengraph('"+c+"','"+a+"'"+');" target="'+mainwin+'"><img class="grf2" title="'+chistory+'" width="15" height="15" src="track2.gif" style="cursor:hand" /></a>';
	else return "<a href=\"javascript:opengraph('"+c+"','"+a+"'"+');" target="'+mainwin+'"><img class="grf" title="'+chistory+'" width="15" height="15" src="track.gif" style="cursor:hand" /></a>';
}
dgcount=0;
function getMovie(s) {
	if(typeof eval('document.embeds.'+s) != 'undefined')
		return eval('document.embeds.'+s);
	else
		return eval('document.'+s);
}
function dist(s) {
	dgcount++;
	e('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="200" height="120" id="distribution'+dgcount+'" align="middle">');
	e('<param name="allowScriptAccess" value="sameDomain" />');
	e('<param name="movie" value="distribution.swf" />');
	e('<param name="quality" value="high" />');
	e('<param name="bgcolor" value="#ffffff" />');
	e('<param name="wmode" value="transparent" />');
	e('<embed src="distribution.swf" quality="high" bgcolor="#ffffff" width="200" height="120" name="distribution'+dgcount+'" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
	e('</object>');

	setInterval("setdist("+dgcount+",'"+s+"','"+(inpart?'true':'false')+"')",100);
	setdist(dgcount,s,inpart?'true':'false');
}

function setdist(no,s,p) {
	if((typeof getMovie('distribution'+no).SetVariable)=='undefined') return;
	var mov=getMovie('distribution'+no);
	mov.SetVariable('fdw',fdw);
	//mov.SetVariable('inpart',p);
	mov.SetVariable('d',s);
	mov.SetVariable('fdigit',fdigit?'true':'false');
	mov.SetVariable('cdws',cdws.toString());
}

function convdig(d) {
	if(!fdigit) return d;
	var d=new String(d);
	var o='';
	for(var i=0;i<d.length;i++) {
		if(d.charAt(i).match(/\d/))
			o+=String.fromCharCode(parseInt(d.charAt(i))+0x6f0);
		else
			o+=d.charAt(i);
	}
	return o;
}
function yearselect(fyear,lyear,year) {
	e('<select class="txt" name="year">');
	for(var i=fyear;i<=lyear;i++) {
		e('<option  '+(i==year?'selected':'')+' value="'+i+'">'+convdig(i)+'</option>');
	}
	e('</select>');
}
function dayselect(day) {
	e('<select class="txt" name="day">');
	for(var i=1;i<=31;i++)
		e('<option '+(i==day?'selected':'')+' value="'+i+'">'+convdig(i)+'</option>');
	e('</select>');
}
function generaltable(title,fyear,lyear,year,month,day) {
	e('<table cellpadding="0" cellspacing="0" border="0">');
	e('<thead><tr><td class="non" colspan='+(3+data.length)+'><div style="float:'+cleft+'">'+title+'</div><div style="float:'+cright+'">');
	e('<form>');
		e('<input type="button" value="'+ctoday+'" class="go" onclick="window.location=\'\'" />&nbsp;&nbsp;&nbsp;');
		if(cright=='left') dayselect(day);
		else yearselect(fyear,lyear,year);
		e('<select class="txt" name="month">');
		var mons=cmons;
		for(var i=1;i<=12;i++) 
			e('<option  '+(i==month?'selected':'')+' value="'+i+'">'+mons[i-1]+'</option>');
		e('</select>');
		if(cright=='right') dayselect(day);
		else yearselect(fyear,lyear,year);
		e('<input type="submit" value="'+cgo+'" class="go" />');
		
	e('</form>');
	e('</div></td></tr>');
	e('<tr><td colspan="2" class="null">&nbsp;</td>');
	for(i=1;i<data.length;i++)  {
		if(data[i][0]) e('<td class="part">');
		else e('<td>');
		e(data[i][1]+'</td>');
		if(i%3==0) e('<td class="spc">&nbsp;</td>');
	}
	e('</tr></thead>');
	e('<tbody>');
	for(i=0;i<rc;i++) {
		//e(i);
		if(i==rc-1) e('<tr class="lst">');
		else e('<tr>');
		e('<td class="fc">'+data[0][i*2]+'</td><td class="hd">'+data[0][i*2+1]+'</td>');
		for(j=1;j<data.length;j++) {
			if(data[j][0]) e('<td class="part">');
			else e('<td>');
			e(data[j][i+2]+'</td>');
			if(j%3==0) e('<td class="spc">&nbsp;</td>');
		}
		e('</tr>');
	}
	e('</tbody>');
	e('</table>');
}
function shwinl(s) {
	document.getElementById(s).style.display='inline';
	
}
function shwblk(s) {
	if(document.all) {
		document.getElementById(s).style.display='block';
		
	} else {
		document.getElementById(s).style.display='table';
	}
}
function hid(s) {
	document.getElementById(s).style.display='none';
}
function breakable(s) {
	var j=1;
	var so='';
	for(var i=0;i<s.length;i++) {
		var c=s.charAt(i);
		if(c=='<') {
			while(c!='>'&&i<s.length-1) {
				so+=c;
				i++;
				c=s.charAt(i);
			}
		} else if(c==' ') {
			j=0;
		} else if(c=='/'||c=='.'||c==',') {
			so+='<span style="font-size:1px">&#8203;</span>';
			j=0;
		} else if(j>=30) {
			so+='<span style="font-size:1px">&#8203;</span>';
			j=0;
		}
		so+=c;
		j++;
	}
	return so;
}

inpart=false;
function datatable(title1,title2,part) {
	fc=format.length/2;
	if(part!='')
		e('<table id="'+part+'" cellpadding="0" cellspacing="0" border="0">');
	else
		e('<table cellpadding="0" cellspacing="0" border="0">');
	e('<thead><tr><td class="non" colspan="'+fc*data.length+'"><div style="float:'+cleft+'">'+title1+'</div><div style="float:'+cright+'">'+title2+'</div></td></tr>');
	e('<tr>');
	for(i=0;i<data.length;i++) {
		e('<td width="33%" colspan="'+fc+'" '+(data[i][0]?'class="part"':'')+'>'+data[i][1]+"</td>");
	}
	e("</tr></thead>");
	for(j=0;j<rc;j++) {
		if(j==rc-1&&!more)
			e('<tr class="lst">');
		else
			e('<tr>');

		for(i=0;i<data.length;i++) {

			for(k=0;k<format.length;k+=2) {
				e('<td valign="top" ');
				if(format[k]=='g') e('style="text-align:center" ');
				if(k<format.length-2) {
					if(data[i][0]) e('class="partl" ');
					else e('class="l" ');
				} else {
					
					if(data[i][0]) e('class="part" ');
					else e('');
				}
				if(format[k]=='s'||format[k]=='snb'||format[k]=='l'||format[k]=='g') e('width="'+(100/data.length)+'%">');
				else {
					if(format[k]!='d') e('width="1" style="padding:0px">');
					else e('width="1">');
				}
				if(j*dc+3<data[i].length) {
					inpart=data[i][0];
					if(format[k]=='s') e(breakable(data[i][j*dc+3+format[k+1]]));
					else if(format[k]=='snb') e(data[i][j*dc+3+format[k+1]]);
					else if(format[k]=='l') e('<a href="'+data[i][j*dc+3+format[k+1]]+'" target="_blank">'+(cright=='left'?'<span style="direction:ltr;unicode-bidi:embed">':'')+breakable(data[i][j*dc+3+format[k+1]])+(cright=='left'?'</span>':'')+'</a>');
					else if(format[k]=='d') e(convdig(data[i][j*dc+3+format[k+1]])); 
					else if(format[k]=='g') dist(data[i][j*dc+3+format[k+1]]);
					else {
						var f=format[k]+"(";
						for (l=0;l<format[k+1].length;l++) {
							if(l) f+=',';
							f+="'"+data[i][j*dc+3+parseInt(format[k+1][l])]+"'";
						}
						f+=");";
						

						e(eval(f));

					}
				} else {
					e('&nbsp;');
				}
				e('</td>');
			}
		}
		e('</tr>');
	}
	if(more) {
		e('<tr class="lst">');
		for(i=0;i<data.length;i++) {
			e('<td style="text-align:center" colspan="'+fc+'" '+(data[i][0]?'class="part"':'')+'>');
			if(data[i][2]!='') e(viewall(data[i][2]));
			else e('&nbsp;');
			e('</td>');
		}
		e('</tr>');
	}
	e("</table>");
}
function agt1(a) {
	return graph('browserdetdata',new Array('id',a));
}
function agt2(a) {
		return findLatest('c=agt&id='+a);
}
function rob1(a) {
	return graph('robotdetdata',new Array('id',a));
}
function rob2(a,b) {
	return details('?c=robotdetpagesdata&id='+a+(b==''?'':'&dt='+b));
}
function rob3(a) {
		return findLatest('c=rob&id='+a);
}
function robd1(a,b) {
	return graph('robotdetpagesdata',new Array('r',a,'p',b));
}
function brw1(a) {
	return graph('browserdata',new Array('id',a));
}
function brw2(a,b) {
	return details('?c=browserdetdata&id='+a+(b==''?'':'&dt='+b));
}
function brw3(a) {
		return '<img style="border:0px" src="browsers/'+(a?a:'0')+'.gif" width="17" height="17" />';
}
function brw4(a) {
		return findLatest('c=brw&id='+a);
}
function ref1(a,b) {
	return graph('refdata',new Array('t',a,'d',b));
}
function ref2(a,b,c) {
	return details('?c=refdetdata&t='+a+'&d='+b+(c==''?'':"&dt="+c));
}
function ref3(a) {
	return '<img style="border:0px" src="refs/'+(a?a:'0')+'.gif" width="17" height="17" />';
}
function ref4(a,b) {
		return findLatest('c=ref&t='+a+'&d='+b);
}
function findLatest(s) {
	return '<a href="latest.php?'+s+'" target="'+mainwin+'" ><img onclick="if(typeof opener!=\'undefined\'&&opener!=null) opener.focus()" title="'+clatest+'" width="15" height="15" src="find.gif" /></a>';
}
function findPath(s) {
	return '<a href="pathanalysis.php?'+s+'" target="'+mainwin+'" ><img onclick="if(typeof opener!=\'undefined\'&&opener!=null) opener.focus()" title="'+cpath+'" width="15" height="15" src="path.gif" /></a>';
}
function refdet1(a) {
	return graph('refdetdata',new Array('id',a));
}
function refdet2(a) {
		return findLatest('c=refdet&id='+a);
}
function refdet3(a) {
		 return findPath('r='+a);
}
function pg1(a) {
	return graph('pagedata',new Array('id',a));
}
function pg2(a) {
		return findLatest('c=pg&id='+a);
}
function pg3(a) {
		 return findPath('p='+a);
}
function cou1(a) {
	return graph('countrydata',new Array('id',"\\'"+a+"\\'"));
}
function cou2(a) {
		return '<img style="border:0px" src="flags/'+a+'.gif" width="26" height="13" />';
}
function cou3(a) {
		return findLatest('c=cou&id='+a);
}