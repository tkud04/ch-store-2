﻿!function(a) {
    function b(a, b, c) {
        if (c) {
            var d = new Date;
            d.setTime(d.getTime() + 24 * c * 60 * 60 * 1e3);
            var e = "; expires=" + d.toGMTString()
        } else
            var e = "";
        document.cookie = a + "=" + b + e + "; path=/"
    }
    function c(a) {
        for (var b = a + "=", c = document.cookie.split(";"), d = 0; d < c.length; d++) {
            for (var e = c[d]; " " == e.charAt(0); )
                e = e.substring(1, e.length);
            if (0 == e.indexOf(b))
                return e.substring(b.length, e.length)
        }
        return null
    }
    a.fn.styleSwitcher = function(d) {
        var e = {
            slidein: !0,
            preview: !1,
            container: this.selector,
            directory: "css/",
            useCookie: !0,
            cookieExpires: 30,
            manageCookieLoad: !0
        }
          , f = a.extend(e, d);
        if (f.useCookie && f.manageCookieLoad) {
            var g = c("style_selected");
            if (g) {
                var h = f.directory + g + ".css";
                a("link[id=style]").attr("href", h),
                i = h
            }
        }
        f.slidein ? a(f.container).slideDown("slow") : a(f.container).show();
        var i = a("link[id=style]").attr("href");
        f.preview && a(f.container + " a").hover(function() {
            var b = f.directory + this.id + ".css";
            a("link[id=style]").attr("href", b)
        }, function() {
            a("link[id=style]").attr("href", i)
        }),
        a(f.container + " a").click(function() {
            var c = f.directory + this.id + ".css";
            a("link[id=style]").attr("href", c),
            i = c,
            f.useCookie && b("style_selected", this.id, f.cookieExpires)
        });
		
		var cc = "css/custom-purple.css";
            a("link[id=style]").attr("href", cc),
            i = cc,
            f.useCookie && b("style_selected", "custom-purple", f.cookieExpires)
		
    }
}(jQuery);

 
