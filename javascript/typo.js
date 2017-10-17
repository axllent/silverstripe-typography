function tagsToTitle() {
	var els = document.getElementById("TypoTestPage").getElementsByTagName("*");
	for (var i = 0, max = els.length; i < max; i++) {
		var el = els[i];
		var classes = [];

		var t = el.tagName;
		var s = el.getAttribute('style');
		var c = el.getAttribute('class');
		if (s) t = t + '[style="' + s + '"]';
		else if (c) t = t + '[class="' + c + '"]';
		classes.push(t);

		var p = el.parentNode;
		while (p && p.id != "TypoTestPage") {
			var t = p.tagName;
			var s = p.getAttribute('style');
			var c = p.getAttribute('class');
			if (s) t = t + '[' + s + ']';
			else if (c) t = t + '[class="' + c + '"]';
			classes.push(t);
			p = p.parentNode;
		}
		classes.reverse();
		els[i].title = classes.join(' > ').toLowerCase();
	}
}

var w = window;
w.addEventListener ? w.addEventListener("load", tagsToTitle, !1) : w.attachEvent && w.attachEvent("onload", tagsToTitle);
