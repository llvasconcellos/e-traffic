<?php 
	$revision=0.231;
	
	// Language name in English
	$lang_name='Portugu&ecirc;s'; 
	// Your name or nickname 
	$translator='Leonardo Lima de Vasconcellos';
	// leave it empty if you don't want your name be linked to anywhere
	$translator_link=''; 
	// change this to true if your language is written from right to left
	// Persian, Hebrew, Arabic,...
	$right_to_left=false;


	// Write the corresponding sentence or phrase in your language 
	// between empty single quotes BELOW each English phrase.
	// words between # signs will be replaced by the software with
	// the appropriate word, don't translate these words, leave them
	// as they are and keep the # signs. single quotes within
	// phrases should be escaped with back slash and be written as \'
	$phrases=array(
		// phrases used on title of report pages
		'#site_name# Website Statistics' 
		=> '#site_name# Estatísticas do Site',
		'Main' 
		=> 'Principal',
		'Path Analysis' 
		=> 'Análises de Caminho',
		'Logout' 
		=> '',
		'Login'
		=> '',
		'Milestones' 
		=> 'Marcos Miliários',
		'Administrate' 
		=> 'Administrar',
		'Latest Visitors' 
		=> 'Últimos Visitantes',
		'About' 
		=> 'Sobre',
		'Now' 
		=> 'Agora',
		'Working Since' 
		=> 'Funcionando Desde',
		'Logger Status' 
		=> 'Status do Logger',
		'Working' 
		=> 'Funcionando',
		'Stopped'
		=> 'Parado',
		'No Errors' 
		=> 'Sem Erros',
		
		
		// Month names (short form)
		'Jan' 
		=> 'Jan',
		'Feb' 
		=> 'Fev',
		'Mar' 
		=> 'Mar',
		'Apr' 
		=> 'Abr',
		'May' 
		=> 'Mai',
		'Jun' 
		=> 'Jun',
		'Jul' 
		=> 'Jul',
		'Aug' 
		=> 'Ago',
		'Sep' 
		=> 'Set',
		'Oct' 
		=> 'Out',
		'Nov' 
		=> 'Nov',
		'Dec' 
		=> 'Dez',
		
		// Weekday name
		'Saturday' 
		=> 'Sábado',
		'Sunday' 
		=> 'Domingo',
		'Monday' 
		=> 'Segunda',
		'Tuesday' 
		=> 'Terça',
		'Wednesday' 
		=> 'Quarta',
		'Thursday' 
		=> 'Quinta',
		'Friday' 
		=> 'Sexta',
		
		// Weekday names (short form)
		'Sat' 
		=> 'Sab',
		'Sun' 
		=> 'Dom',
		'Mon' 
		=> 'Seg',
		'Tue' 
		=> 'Ter',
		'Wed' 
		=> 'Qua',
		'Thu' 
		=> 'Qui',
		'Fri' 
		=> 'Sex',
		
		// Main report page
		'Unique Visitors' 
		=> 'Visitantes &Uacute;nicos',
		'Sessions' 
		=> 'Se&ccedil;ões',
		'Page Views' 
		=> 'Vizualiza&ccedil;&otilde;es de P&aacute;gina',
		'Average PView/Visitor' 
		=> 'M&eacute;dia Visualiz.Pag/Visitante',
		'Average UVisitor/Day' 
		=> 'M&eacute;dia Visitante &Uacute;nico/Dia',
		'Average PView/Hour' 
		=> 'M&eacute;dia Visualiz.Pag/Hora',
		'Average PView/Day' 
		=> 'M&eacute;dia Visualiz.Pag/Dia',
		'Average UVisitor/Hour' 
		=> 'M&eacute;dia Visitante &Uacute;nico/Hora',
		'Robot PViews' 
		=> 'Robot PViews',
		'Robot Page Views' 
		=> 'Robot Visualiz.Pag',
		'General Stats' 
		=> 'Status Geral',
		'Hourly Distribution' 
		=> 'Distribui&ccedil;&atilde;o Hor&aacute;ria',
		'Referrers' 
		=> 'Refer&ecirc;ncias',
		'Pages' 
		=> 'P&aacute;ginas',
		'Robots' 
		=> 'Robôs',
		'Browsers' 
		=> 'Browsers',
		'Countries' 
		=> 'Pa&iacute;ses',
		'Pages visited by #robot#' 
		=> 'P&aacute;ginas visitadas por #robot#',
		'Other Browsers' 
		=> 'Outros Browsers',
		'#browser# Browsers' 
		=> '#browser# Browsers',
		'Weekday Distribution' 
		=> 'Distribui&ccedil;&atilde;o Diária',
		'TODAY' 
		=> 'HOJE',
		'GO' 
		=> 'IR',
		'Daily' 
		=> 'Diário',
		'Monthly' 
		=> 'Mensal',
		'All' // (All time)
		=> 'Tudo', 
		'All Time' 
		=> 'Tempo Todo',
		'NA' // Not Available
		=> 'Inex',
		'#something# continued' 
		=> '#something# continuado',
		'Non Web Page Referrers' 
		=> 'Sem refer&ecirc;ncia de p&aacute;gina',
		'Keywords from #referrer#' 
		=> 'Palavras chaves do #referrer#',
		'Referrers from #domain#' 
		=> 'Refer&ecirc;ncia do #domain#',
		'Non Web Page'
		=> 'Não é Página da Web',
		
		// Graph
		'Visitors referred from #referrer#' 
		=> 'Visitantes vindos de #referrer#',
		'Visitors referred from #referrer_type# referrers' 
		=> 'Visitantes vindos de #referrer_type# referrers',
		'#page# views' 
		=> '#page# visitas', 
		'Page views by #robot#' 
		=> 'Visualização de paginas por #robot#',
		'#page# views by #robot#' 
		=> '#page# visualizadas por #robot#',
		'Visitors with #browser_name# browser' 
		=> 'Visitantes com browser #browser_name#',
		"Visitors with #user_agent#" 
		=> 'Visitantes com #user_agent#',
		'Visitors from #country#' 
		=> 'Visitantes de #country#',

		// Latest Visitors page
		'Referrer' 
		=> 'Referência',
		'Agent String' // user agent string
		=> 'String', 
		'Unresolved' //unresolved IP address
		=> 'Não Resolvido',
		'h' //hour
		=> '',
		'm'  //minute
		=> '',
		's' //second
		=> '',
		'Direct Type or Unknown' 
		=> 'Digitado ou Desconhecido',
		'#sengine# Search' 
		=> 'Busca #sengine#',
		'#sengine# Search for #keyword#' 
		=> 'Busca #sengine# por #keyword#',
		'Latest Visitors Referred from #referrer#' 
		=> 'Últimos visitantes vindos de #referrer#',
		'Latest Visitors who have visited #page#' 
		=> 'Últimos visitantes que visitaram #page#',
		'Latest Visits by #robot# Robot' 
		=> 'Últimas visitas do robô #robot#',
		'Latest Visitors with #browser#' 
		=> 'Últimos visitantes usando #browser#',
		'Latest Visitors with #user_agent#' 
		=> 'Últimos visitantes usando #user_agent#',
		'Latest Visitors from #country#'
		=> 'Últimos visitantes de #country#',
		'Find' 
		=> 'Procurar',
		'View All'
		=> 'Ver tudo',
		'No visitors in last #number# hours' 
		=> 'Sem visitantes nas últimas #number# horas',
		'Previous #number#' 
		=> '#number# anteriores',
		
		// Path Analysis page
		'RESET' 
		=> 'RESET',
		'Entry pages based on #count# latest visitors' 
		=> 'Páginas de entrada baseadas nos #count# últimos visitantes',
		'From #count# latest visitors #count2# moved along these paths' 
		=> 'Dos #count# últimos visitantes #count2# se movimentaram por esses caminhos',
		'Not enough data yet' 
		=> 'Ainda não há dados suficientes',
		'None of #count# latest visitors moved along this path' 
		=> 'Nenhum dos #count# ultimos visitantes se moveram por este caminho',
		'Visit End' 
		=> 'Fim da visita',
		'Visit Start' 
		=> 'Início da visita',
		'FIND #page#' 
		=> 'ENCONTRAR #page#',
		'FIND #page# as entry page' 
		=> 'ENCONTRAR #page# como pagina de entrada',
		
		
		// Adminstration page
		'to show on report pages' 
		=> 'para aparecer em páginas de relatório',
		'Website name or domain' 
		=> 'Nome do site ou domínio',
		'Maximum Number of rows to show on main report page' 
		=> 'Número máximo de linhas mostradas na pagina principal de relatório',
		'Apply Changes' 
		=> 'Aplicar Mudanças',
		'First day of week' 
		=> 'Primeiro dia da semana',
		'Set' 
		=> 'Ajustar',
		'Database time' 
		=> 'Horário do banco de dados',
		'Your time' 
		=> 'Seu horário',
		'Actual time difference' 
		=> 'Diferença de horário real',
		'Your time - DB time' 
		=> 'Seu horário - horário do BD',
		'Your setting' 
		=> 'Seu ajuste',
		'Your time zone name' 
		=> 'O nome da sua zona de tempo',
		'Report pages' 
		=> 'Páginas de Relatório',
		'Private' 
		=> 'Privado',
		'Public' 
		=> 'Publico',
		'Count report page hits' =>
		'Contar hits na página de relatório',
		'Data' 
		=> 'Dados',
		'Size' 
		=> 'Tamanho',
		'Notes' 
		=> 'Notas',
		'Data with Daily Precision' 
		=> 'Dados com precisão diária',
		'Data with Monthly Precision' 
		=> 'Dados com precisão mensal',
		'Dictionary' 
		=> 'Dicionário',
		'Paths' 
		=> 'Caminhos',
		'Other' 
		=> 'Outro',
		'TOTAL' 
		=> 'TOTAL',
		'kb' // kilobytes
		=> 'KB',
		'Depends on distinct pages, referrers, browsers, etc... you have.' 
		=> 'Depende de páginas distintas, referências, browsers, etc... que você tem.',
		'Depends on your website\'s unique visitors per day' 
		=> 'Depende dos visitantes únicos do seu site por dia',
		'Very much depends on the number of distinct pages your website have.' 
		=> 'Depende muito do número de páginas distintas que seu site tem.',
		'IP to Country information, Milestones, etc...' 
		=> 'Informação de IP para País, Marcos Miliários, etc...',
		'#delete# daily data #number# months old or older NOW.' 
		=> '#delete# dados diários à mais de #number# meses, ou mais antigos, AGORA.',
		'Delete' 
		=> 'Apagar',
		'and do this automatically every month' 
		=> 'e faça isso automaticamente todo mês',
		'and do this automatically every day' 
		=> 'e faça isso automaticamente todo dia',
		'Remove Auto' 
		=> 'Auto remover',
		'#trim# monthly data #number# months old or older NOW, keep only top #number2# referrers and user-agents.' 
		=> '#trim# dados mensais à #number# meses ou mais atigo AGORA, guardar apenas as ultimas #number2# referências e user-agents.',
		'Trim' 
		=> 'Reduzir',
		'#trim# daily data #number# days old or older NOW, keep only top #number2# referrers and user-agents.' 
		=> '#trim# dados diários à #number# meses ou mais atigo AGORA, guardar apenas as ultimas #number2# referências e user-agents.',
		'Always use visitors\' path of last #number# weeks and #delete# older paths NOW.' 
		=> 'یUse sempre o caminho do visitante nas ultimas #number# semanas e #delete# os últimos caminhos AGORA.',
		'#delete# ANY data #number# months old or older NOW' 
		=> '#delete# qualquer dado de #number# meses ou mais antigo AGORA',
		'Repair Tables' 
		=> 'Reparar tabelas',
		'If you\'ve got corrupted tables click on this to manually check and repair all tables.' 
		=> 'Se você teve tabelas corrompidas, clique aqui para manualmente verificar e reparar todas as tabelas.',
		'Automatically check and repair tables once a day.' 
		=> 'Verificar e reparar automaticamente as tabelas uma vez por dia.',
		'Save Change' 
		=> 'Gravar Mudanças',
		'Enabled' 
		=> 'ativo',
		'Disabled' 
		=> 'inativo',
		'Resolve IP addresses' 
		=> 'Resolver endereços IP',
		'#stop# the logger.' 
		=> '#stop# o logger.',
		'Stop' 
		=> 'Parar',
		'Start' 
		=> 'Iniciar',
		'Update IP to country data' 
		=> 'Atualizar dados de IP para País',
		'If you have replaced ip-to-country.csv click on this to update the database' 
		=> 'Se você substituiu o arquivo ip-to-country.csv, clique aqui para atualizar o banco de dados.',
		'Reset' 
		=> '',
		'Delete all data, recreate tables and restart the logger' 
		=> 'Apagar todos os dados, recriar as tabelas e reiniciar o logger.',
		'Uninstall' 
		=> 'Desinstalar',
		'Delete all tracewatch related tables in database' 
		=> 'Apagar todas as tabelas relacionadas com o software no banco de dados.',
		'SUCCESSFUL' 
		=> 'SUCESSO',
		'Default Language' 
		=> 'Língua Padrão',
		'Apply Change' 
		=> 'Aplicar Mudança',
		
		// Milestones
		'DELETE' 
		=> 'APAGAR',
		'Date' 
		=> 'Data',
		'Add Milestone' 
		=> 'Adicionar Marco Miliário',
		
		// Country names
		'Unknown Country' 
		=> 'País Desconhecido',
		'Afghanistan' 
		=> 'Afeganistão',
		'Albania' 
		=> 'Albânia',
		'Algeria'
		=> 'Algeria', 
		'American Samoa' 
		=> 'Samoa Americana',
		'Andorra' 
		=> '',
		'Angola' 
		=> '',
		'Anguilla' 
		=> '',
		'Antarctica' 
		=> '',
		'Antigua and Barbuda' 
		=> '',
		'Argentina' 
		=> '',
		'Armenia' 
		=> '',
		'Aruba' 
		=> '',
		'Australia' 
		=> '',
		'Austria' 
		=> '',
		'Azerbaijan' 
		=> '',
		'Bahamas' 
		=> '',
		'Bahrain'
		=> '',
		'Bangladesh'
		=> '',
		'Barbados'
		=> '',
		'Belarus'
		=> '',
		'Belgium'
		=> '',
		'Belize'
		=> '',
		'Benin'
		=> '',
		'Bermuda'
		=> '',
		'Bhutan'
		=> '',
		'Bolivia'
		=> '',
		'Bosnia and Herzegovina'
		=> '',
		'Botswana'
		=> '',
		'Bouvet Island'
		=> '',
		'Brazil'
		=> 'Brasil',
		'British Indian Ocean Territory'
		=> '',
		'Brunei Darussalam' 
		=> '',
		'Bulgaria'
		=> '',
		'Burkina Faso'
		=> '',
		'Burundi'
		=> '',
		'Cambodia'
		=> '',
		'Cameroon'
		=> '',
		'Canada'
		=> '',
		'Cape Verde'
		=> '',
		'Cayman Islands'
		=> '',
		'Central African Republic'
		=> '',
		'Chad'
		=> '', 
		'Chile'
		=> '',
		'China'
		=> '',
		'Christmas Island'
		=> '',
		'Cocos (Keeling) Islands'
		=> '',
		'Colombia'
		=> '',
		'Comoros'
		=> '',
		'Congo'
		=> '',
		'Congo, Democratic Republic of the'
		=> '',
		'Cook Islands'
		=> '',
		'Costa Rica'
		=> '',
		'Croatia'
		=> '',
		'Cuba'
		=> '',
		'Cyprus'
		=> '',
		'Czech Repbulic'
		=> '',
		'Côte d\'Ivoire'
		=> '',
		'Denmark'
		=> '',
		'Djibouti'
		=> '',
		'Dominica'
		=> '',
		'Dominican Repbulic'
		=> '',
		'East Timor'
		=> '',
		'Ecuador'
		=> '',
		'Egypt'
		=> '',
		'El Salvador'
		=> '', 
		'Equatorial Guinea'
		=> '',
		'Eritrea'
		=> '',
		'Estonia'
		=> '',
		'Ethiopia'
		=> '',
		'Falkland Islands (Malvinas)'
		=> '',
		'Faroe Islands'
		=> '',
		'Fiji'
		=> '',
		'Finland'
		=> '',
		'France'
		=> '',
		'France, Metropolitan'
		=> '',
		'Frence Guiana'
		=> '',
		'French Polynesia'
		=> '',
		'French Southern Territories'
		=> '',
		'Great Britain'
		=> '',
		'Gabon'
		=> '',
		'Gambia'
		=> '',
		'Georgia'
		=> '',
		'Germany'
		=> '',
		'Ghana'
		=> '',
		'Gibraltar'
		=> '',
		'Greece'
		=> '',
		'Greenland'
		=> '',
		'Grenada'
		=> '',
		'Guadaloupe'
		=> '',
		'Guam'
		=> '',
		'Guatemala'
		=> '',
		'Guinea'
		=> '',
		'Guinea-Bissau'
		=> '',
		'Guyana'
		=> '',
		'Haiti'
		=> '',
		'Heard Island and McDonal Islands'
		=> '',
		'Honduras'
		=> '',
		'Hong Kong'
		=> '',
		'Hungary'
		=> '',
		'Iceland'
		=> '',
		'India'
		=> '',
		'Indonesia'
		=> '',
		'Iran'
		=> '',
		'Iraq'
		=> '',
		'Ireland'
		=> '',
		'Israel'
		=> '',
		'Italy'
		=> '',
		'Jamaica'
		=> '',
		'Japan'
		=> '',
		'Jordan'
		=> '',
		'Kazakhstan'
		=> '',
		'Kenya'
		=> '',
		'Kiribati'
		=> '',
		'Korea, North'
		=> '',
		'Korea, South'
		=> '',
		'Kuwait'
		=> '',
		'Kyrgyzstan'
		=> '',
		'Laos'
		=> '',
		'Latvia'
		=> '',
		'Lebanon'
		=> '',
		'Lesotho'
		=> '',
		'Liberia'
		=> '',
		'Libya'
		=> '',
		'Liechtenstein'
		=> '',
		'Lithuania'
		=> '',
		'Luxembourg'
		=> '',
		'Macau'
		=> '',
		'Macedonia'
		=> '',
		'Madagascar'
		=> '',
		'Malawi'
		=> '',
		'Malaysia'
		=> '',
		'Maldives'
		=> '',
		'Mali'
		=> '',
		'Malta'
		=> '',
		'Marshall Islands'
		=> '',
		'Martinique'
		=> '',
		'Mauritania'
		=> '',
		'Mauritius'
		=> '',
		'Mayotte'
		=> '',
		'Mexico'
		=> '',
		'Micronesia'
		=> '',
		'Moldova'
		=> '',
		'Monaco'
		=> '',
		'Mongolia'
		=> '',
		'Montserrat'
		=> '',
		'Morocco'
		=> '',
		'Mozambique'
		=> '',
		'Myanmar'
		=> '',
		'Namibia'
		=> '',
		'Nauru'
		=> '',
		'Nepal'
		=> '',
		'Netherlands'
		=> '',
		'Netherlands Antilles'
		=> '',
		'New Caledonia'
		=> '',
		'New Zealand'
		=> '',
		'Nicaragua'
		=> '',
		'Niger'
		=> '',
		'Nigeria'
		=> '',
		'Niue'
		=> '',
		'Norfolk Island'
		=> '',
		'Northern Mariana Islands'
		=> '',
		'Norway'
		=> '',
		'Oman'
		=> '',
		'Pakistan'
		=> '',
		'Palau'
		=> '',
		'Panama'
		=> '',
		'Papua New Guinea'
		=> '',
		'Paraguay'
		=> '',
		'Peru'
		=> '',
		'Philippines'
		=> '',
		'Pitcairn'
		=> '',
		'Poland'
		=> '',
		'Portugal'
		=> '',
		'Puerto Rico'
		=> '',
		'Qatar'
		=> '',
		'Romania'
		=> '',
		'Russian Federation'
		=> '',
		'Rwanda'
		=> '',
		'Réunion'
		=> '',
		'Saint Helena'
		=> '',
		'Saint Kitts and Nevis'
		=> '',
		'Saint Lucia'
		=> '',
		'Saint Pierre and Miquelon'
		=> '',
		'Saint Vincent and the Grenadines'
		=> '',
		'Samoa'
		=> '',
		'San Marino'
		=> '',
		'Saudi Arabia'
		=> '',
		'Senegal'
		=> '',
		'Seychelles'
		=> '',
		'Sierra Leone'
		=> '',
		'Singapore'
		=> '',
		'Slovakia'
		=> '',
		'Slovenia'
		=> '',
		'Solomon Islands'
		=> '',
		'South Africa'
		=> '',
		'South Georgia and the South Sandwich Islands'
		=> '',
		'Spain'
		=> '',
		'Sri Lanka'
		=> '',
		'Sudan'
		=> '',
		'Suriname'
		=> '',
		'Svalbard and Jan Mayen'
		=> '',
		'Swaziland'
		=> '',
		'Sweden'
		=> '',
		'Switzerland'
		=> '',
		'Syria'
		=> '',
		'São Tomé and Príncipe'
		=> '',
		'Taiwan'
		=> '',
		'Tajikistan'
		=> '',
		'Tanzania'
		=> '',
		'Thailand'
		=> '',
		'Togo'
		=> '',
		'Tokelau'
		=> '',
		'Tonga'
		=> '',
		'Trinidad and Tobago'
		=> '',
		'Tunisia'
		=> '',
		'Turkey'
		=> '',
		'Turkmenistan'
		=> '',
		'Turks and Caicos Islands'
		=> '',
		'Tuvalu'
		=> '',
		'Uganda'
		=> '',
		'Ukraine'
		=> '',
		'United Arab Emirates'
		=> '',
		'United Kingdom'
		=> '',
		'United States'
		=> '',
		'United States Minor and Outlying Islands'
		=> '',
		'Uruguay'
		=> '',
		'Uzbekistan'
		=> '',
		'Vanuatu'
		=> '',
		'Vatican City'
		=> '',
		'Venezuela'
		=> '',
		'Viet Nam'
		=> '',
		'Virgin Islands, British'
		=> '',
		'Virgin Islands, U.S.'
		=> '',
		'Wallis and Fortuna Islands'
		=> '',
		'Western Sahara'
		=> '',
		'Yemen'
		=> '',
		'Yugoslavia'
		=> '',
		'Zaire'
		=> '',
		'Zambia'
		=> '',
		'Zimbabwe'
		=> '',
		
		/*------------- version 0.23 --------------*/
		
		//title
		'Website Statistics'
		=> 'Estat&iacute;sticas do Website',
		
		//latest visitors page
		'No Visitors Found'
		=> 'Sem visitantes',
		
		//admin page
		'#delete# detailed visitor data #number# days old or older NOW.'
		=> '#delete# dados detalhados do visitante #number# dias depois AGORA.'
		
		/*------------- version 0.231 --------------*/
		
		//main report page (icon tooltips)
		,'Find in Latest Visitors'
		=> 'Encontrar &uacute;ltimos visitantes',
		'History Graph'
		=> 'Hist&oacute;ricos de Gr&aacute;ficos',
		'Details'
		=> 'Detalhes',
		//admin page
		'IP Addresses'
		=>'Endere&ccedil;os IP',
		'visible only to administrator'
		=> 'vis&iacute;vel apenas para o administrador',
		'visible to everyone'
		=> 'vis&iacute;vel para todos',
		'All Instances'
		=> 'Todas inst&acirc;ncias',
		//latest visitors
		'hidden'
		=> 'escondido',
		'domain'
		=> 'dom&iacute;nio',
		//title
		'main website'
		=> 'Site Principal'
	);
?>