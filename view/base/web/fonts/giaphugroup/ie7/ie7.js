/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'giaphugroup\'">' + entity + '</span>' + html;
	}
	var icons = {
		'giaphugroup-iconicon-giaphugroup': '&#xe901;',
		'giaphugroup-iconfaq-icon': '&#xe900;',
		'giaphugroup-iconkeyboard_arrow_right': '&#xe902;',
		'giaphugroup-iconcalendar': '&#xe953;',
		'giaphugroup-iconuser': '&#xe971;',
		'giaphugroup-iconeye': '&#xe9ce;',
		'giaphugroup-iconhappy': '&#xe9df;',
		'giaphugroup-iconangry': '&#xe9ed;',
		'giaphugroup-iconplus': '&#xea0a;',
		'giaphugroup-iconminus': '&#xea0b;',
		'giaphugroup-iconsearch': '&#xe986;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/giaphugroup-icon[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
