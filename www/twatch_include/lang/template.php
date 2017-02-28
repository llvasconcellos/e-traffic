<?php 
	/*******************************************************/
	/*                                                     */
	/*   TraceWatch template language file                 */
	/*                                                     */
	/*   Duplicate this file and rename the duplicate to   */
	/*   language_name.php (E.g. Spanish translation       */
	/*   should be renamed to Spanish.php)                 */
	/*   Your language should appear in language combobox  */
	/*   on top of TraceWatch report pages.                */
	/*   Open the duplicate in a text editor and           */
	/*   Start entering data below following the           */
	/*   instructions.                                     */
	/*   After finishing each part check TraceWatch and    */
	/*   see if everything looks right.                    */
	/*   If your file contains unicode characters          */
	/*   remeber to save in utf-8 encoding format and      */
	/*   DO NOT include the Unicode Signature (BOM).       */
	/*                                                     */
	/*******************************************************/

	$revision=0.231;
	
	// Language name in English
	$lang_name=''; 
	// Your name or nickname 
	$translator='';
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
		=> '',
		'Main' 
		=> '',
		'Path Analysis' 
		=> '',
		'Logout' 
		=> '',
		'Login'
		=> '',
		'Milestones' 
		=> '',
		'Administrate' 
		=> '',
		'Latest Visitors' 
		=> '',
		'About' 
		=> '',
		'Now' 
		=> '',
		'Working Since' 
		=> '',
		'Logger Status' 
		=> '',
		'Working' 
		=> '',
		'Stopped'
		=> '',
		'No Errors' 
		=> '',
		
		
		// Month names (short form)
		'Jan' 
		=> '',
		'Feb' 
		=> '',
		'Mar' 
		=> '',
		'Apr' 
		=> '',
		'May' 
		=> '',
		'Jun' 
		=> '',
		'Jul' 
		=> '',
		'Aug' 
		=> '',
		'Sep' 
		=> '',
		'Oct' 
		=> '',
		'Nov' 
		=> '',
		'Dec' 
		=> '',
		
		// Weekday name
		'Saturday' 
		=> '',
		'Sunday' 
		=> '',
		'Monday' 
		=> '',
		'Tuesday' 
		=> '',
		'Wednesday' 
		=> '',
		'Thursday' 
		=> '',
		'Friday' 
		=> '',
		
		// Weekday names (short form)
		'Sat' 
		=> '',
		'Sun' 
		=> '',
		'Mon' 
		=> '',
		'Tue' 
		=> '',
		'Wed' 
		=> '',
		'Thu' 
		=> '',
		'Fri' 
		=> '',
		
		// Main report page
		'Unique Visitors' 
		=> '',
		'Sessions' 
		=> '',
		'Page Views' 
		=> '',
		'Average PView/Visitor' 
		=> '',
		'Average UVisitor/Day' 
		=> '',
		'Average PView/Hour' 
		=> '',
		'Average PView/Day' 
		=> '',
		'Average UVisitor/Hour' 
		=> '',
		'Robot PViews' 
		=> '',
		'Robot Page Views' 
		=> '',
		'General Stats' 
		=> '',
		'Hourly Distribution' 
		=> '',
		'Referrers' 
		=> '',
		'Pages' 
		=> '',
		'Robots' 
		=> '',
		'Browsers' 
		=> '',
		'Countries' 
		=> '',
		'Pages visited by #robot#' 
		=> '',
		'Other Browsers' 
		=> '',
		'#browser# Browsers' 
		=> '',
		'Weekday Distribution' 
		=> '',
		'TODAY' 
		=> '',
		'GO' 
		=> '',
		'Daily' 
		=> '',
		'Monthly' 
		=> '',
		'All' // (All time)
		=> '', 
		'All Time' 
		=> '',
		'NA' // Not Available
		=> '',
		'#something# continued' 
		=> '',
		'Non Web Page Referrers' 
		=> '',
		'Keywords from #referrer#' 
		=> '',
		'Referrers from #domain#' 
		=> '',
		'Non Web Page'
		=> '',
		
		// Graph
		'Visitors referred from #referrer#' 
		=> '',
		'Visitors referred from #referrer_type# referrers' 
		=> '',
		'#page# views' 
		=> '', 
		'Page views by #robot#' 
		=> '',
		'#page# views by #robot#' 
		=> '',
		'Visitors with #browser_name# browser' 
		=> '',
		"Visitors with #user_agent#" 
		=> '',
		'Visitors from #country#' 
		=> '',

		// Latest Visitors page
		'Referrer' 
		=> '',
		'Agent String' // user agent string
		=> '', 
		'Unresolved' //unresolved IP address
		=> '',
		'h' //hour
		=> '',
		'm'  //minute
		=> '',
		's' //second
		=> '',
		'Direct Type or Unknown' 
		=> '',
		'#sengine# Search' 
		=> '',
		'#sengine# Search for #keyword#' 
		=> '',
		'Latest Visitors Referred from #referrer#' 
		=> '',
		'Latest Visitors who have visited #page#' 
		=> '',
		'Latest Visits by #robot# Robot' 
		=> '',
		'Latest Visitors with #browser#' 
		=> '',
		'Latest Visitors with #user_agent#' 
		=> '',
		'Latest Visitors from #country#'
		=> '',
		'Find' 
		=> '',
		'View All'
		=> '',
		'No visitors in last #number# hours' 
		=> '',
		'Previous #number#' 
		=> '',
		
		// Path Analysis page
		'RESET' 
		=> '',
		'Entry pages based on #count# latest visitors' 
		=> '',
		'From #count# latest visitors #count2# moved along these paths' 
		=> '',
		'Not enough data yet' 
		=> '',
		'None of #count# latest visitors moved along this path' 
		=> '',
		'Visit End' 
		=> '',
		'Visit Start' 
		=> '',
		'FIND #page#' 
		=> '',
		'FIND #page# as entry page' 
		=> '',
		
		
		// Adminstration page
		'to show on report pages' 
		=> '',
		'Website name or domain' 
		=> '',
		'Maximum Number of rows to show on main report page' 
		=> '',
		'Apply Changes' 
		=> '',
		'First day of week' 
		=> '',
		'Set' 
		=> '',
		'Database time' 
		=> '',
		'Your time' 
		=> '',
		'Actual time difference' 
		=> '',
		'Your time - DB time' 
		=> '',
		'Your setting' 
		=> '',
		'Your time zone name' 
		=> '',
		'Report pages' 
		=> '',
		'Private' 
		=> '',
		'Public' 
		=> '',
		'Count report page hits' =>
		'',
		'Data' 
		=> '',
		'Size' 
		=> '',
		'Notes' 
		=> '',
		'Data with Daily Precision' 
		=> '',
		'Data with Monthly Precision' 
		=> '',
		'Dictionary' 
		=> '',
		'Paths' 
		=> '',
		'Other' 
		=> '',
		'TOTAL' 
		=> '',
		'kb' // kilobytes
		=> '',
		'Depends on distinct pages, referrers, browsers, etc... you have.' 
		=> '',
		'Depends on your website\'s unique visitors per day' 
		=> '',
		'Very much depends on the number of distinct pages your website have.' 
		=> '',
		'IP to Country information, Milestones, etc...' 
		=> '',
		'#delete# daily data #number# months old or older NOW.' 
		=> '',
		'Delete' 
		=> '',
		'and do this automatically every month' 
		=> '',
		'and do this automatically every day' 
		=> '',
		'Remove Auto' 
		=> '',
		'#trim# monthly data #number# months old or older NOW, keep only top #number2# referrers and user-agents.' 
		=> '',
		'Trim' 
		=> '',
		'#trim# daily data #number# days old or older NOW, keep only top #number2# referrers and user-agents.' 
		=> '',
		'Always use visitors\' path of last #number# weeks and #delete# older paths NOW.' 
		=> 'ی',
		'#delete# ANY data #number# months old or older NOW' 
		=> '',
		'Repair Tables' 
		=> '',
		'If you\'ve got corrupted tables click on this to manually check and repair all tables.' 
		=> '',
		'Automatically check and repair tables once a day.' 
		=> '',
		'Save Change' 
		=> '',
		'Enabled' 
		=> '',
		'Disabled' 
		=> '',
		'Resolve IP addresses' 
		=> '',
		'#stop# the logger.' 
		=> '',
		'Stop' 
		=> '',
		'Start' 
		=> '',
		'Update IP to country data' 
		=> '',
		'If you have replaced ip-to-country.csv click on this to update the database' 
		=> '',
		'Reset' 
		=> '',
		'Delete all data, recreate tables and restart the logger' 
		=> '',
		'Uninstall' 
		=> '',
		'Delete all tracewatch related tables in database' 
		=> '',
		'SUCCESSFUL' 
		=> '',
		'Default Language' 
		=> '',
		'Apply Change' 
		=> '',
		
		// Milestones
		'DELETE' 
		=> '',
		'Date' 
		=> '',
		'Add Milestone' 
		=> '',
		
		// Country names
		'Unknown Country' 
		=> '',
		'Afghanistan' 
		=> '',
		'Albania' 
		=> '',
		'Algeria'
		=> '', 
		'American Samoa' 
		=> '',
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
		=> '',
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
		=> '',
		
		//latest visitors page
		'No Visitors Found'
		=> '',
		
		//admin page
		'#delete# detailed visitor data #number# days old or older NOW.'
		=> ''
		
		/*------------- version 0.231 --------------*/
		
		//main report page (icon tooltips)
		,'Find in Latest Visitors'
		=> '',
		'History Graph'
		=> '',
		'Details'
		=> '',
		//admin page
		'IP Addresses'
		=>'',
		'visible only to administrator'
		=> '',
		'visible to everyone'
		=> '',
		'All Instances'
		=> '',
		//latest visitors
		'hidden'
		=> '',
		'domain'
		=> '',
		//title
		'main website'
		=> ''
	);
?>