!function(a,b){"function"===typeof define&&define.amd?define([],b):"object"===typeof exports?module.exports=b():a.salvattore=b()}(this,function(){window.matchMedia||(window.matchMedia=function(){"use strict";var a=window.styleMedia||window.media;if(!a){var b=document.createElement("style"),c=document.getElementsByTagName("script")[0],d=null;b.type="text/css",b.id="matchmediajs-test",c.parentNode.insertBefore(b,c),d="getComputedStyle"in window&&window.getComputedStyle(b,null)||b.currentStyle,a={matchMedium:function(a){var c="@media "+a+"{ #matchmediajs-test { width: 1px; } }";return b.styleSheet?b.styleSheet.cssText=c:b.textContent=c,"1px"===d.width}}}return function(b){return{matches:a.matchMedium(b||"all"),media:b||"all"}}}()),function(){"use strict";if(window.matchMedia&&window.matchMedia("all").addListener)return!1;var a=window.matchMedia,b=a("only all").matches,c=!1,d=0,e=[],f=function(){clearTimeout(d),d=setTimeout(function(){for(var b=0,c=e.length;b<c;b++){var d=e[b].mql,f=e[b].listeners||[],g=a(d.media).matches;if(g!==d.matches){d.matches=g;for(var h=0,i=f.length;h<i;h++)f[h].call(window,d)}}},30)};window.matchMedia=function(d){var g=a(d),h=[],i=0;return g.addListener=function(a){b&&(c||(c=!0,window.addEventListener("resize",f,!0)),0===i&&(i=e.push({mql:g,listeners:h})),h.push(a))},g.removeListener=function(a){for(var b=0,c=h.length;b<c;b++)h[b]===a&&h.splice(b,1)},g}}(),function(){"use strict";for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var d=(new Date).getTime(),e=Math.max(0,16-(d-a)),f=window.setTimeout(function(){b(d+e)},e);return a=d+e,f}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}(),"function"!==typeof window.CustomEvent&&!function(){"use strict";function a(a,b){b=b||{bubbles:!1,cancelable:!1,detail:void 0};var c=document.createEvent("CustomEvent");return c.initCustomEvent(a,b.bubbles,b.cancelable,b.detail),c}a.prototype=window.Event.prototype,window.CustomEvent=a}();var a=function(a,b){"use strict";var d={},e=[],f=[],g=[],h=function(a,b,c){a.dataset?a.dataset[b]=c:a.setAttribute("data-"+b,c)};return d.obtainGridSettings=function(b){var c=a.getComputedStyle(b,":before"),d=c.getPropertyValue("content").slice(1,-1),e=d.match(/^\s*(\d+)(?:\s?\.(.+))?\s*$/),f=1,g=[];return e?(f=e[1],g=e[2],g=g?g.split("."):["column"]):(e=d.match(/^\s*\.(.+)\s+(\d+)\s*$/),e&&(g=e[1],f=e[2],f&&(f=f.split(".")))),{numberOfColumns:f,columnClasses:g}},d.addColumns=function(a,c){for(var l,e=d.obtainGridSettings(a),f=e.numberOfColumns,g=e.columnClasses,i=new Array(+f),j=b.createDocumentFragment(),k=f;0!==k--;)l="[data-columns] > *:nth-child("+f+"n-"+k+")",i.push(c.querySelectorAll(l));i.forEach(function(a){var c=b.createElement("div"),d=b.createDocumentFragment();c.className=g.join(" "),Array.prototype.forEach.call(a,function(a){d.appendChild(a)}),c.appendChild(d),j.appendChild(c)}),a.appendChild(j),h(a,"columns",f)},d.removeColumns=function(c){var d=b.createRange();d.selectNodeContents(c);var e=Array.prototype.filter.call(d.extractContents().childNodes,function(b){return b instanceof a.HTMLElement}),f=e.length,g=e[0].childNodes.length,i=new Array(g*f);Array.prototype.forEach.call(e,function(a,b){Array.prototype.forEach.call(a.children,function(a,c){i[c*f+b]=a})});var j=b.createElement("div");return h(j,"columns",0),i.filter(function(a){return!!a}).forEach(function(a){j.appendChild(a)}),j},d.recreateColumns=function(b){a.requestAnimationFrame(function(){d.addColumns(b,d.removeColumns(b));var a=new CustomEvent("columnsChange");b.dispatchEvent(a)})},d.mediaQueryChange=function(a){a.matches&&Array.prototype.forEach.call(e,d.recreateColumns)},d.getCSSRules=function(a){var b;try{b=a.sheet.cssRules||a.sheet.rules}catch(c){return[]}return b||[]},d.getStylesheets=function(){return Array.prototype.concat.call(Array.prototype.slice.call(b.querySelectorAll("style[type='text/css']")),Array.prototype.slice.call(b.querySelectorAll("link[rel='stylesheet']")))},d.mediaRuleHasColumnsSelector=function(a){var b,c;try{b=a.length}catch(d){b=0}for(;b--;)if(c=a[b],c.selectorText&&c.selectorText.match(/\[data-columns\](.*)::?before$/))return!0;return!1},d.scanMediaQueries=function(){var b=[];if(a.matchMedia){d.getStylesheets().forEach(function(a){Array.prototype.forEach.call(d.getCSSRules(a),function(a){a.media&&a.cssRules&&d.mediaRuleHasColumnsSelector(a.cssRules)&&b.push(a)})});var c=f.filter(function(a){return-1===b.indexOf(a)});g.filter(function(a){return-1!==c.indexOf(a.rule)}).forEach(function(a){a.mql.removeListener(d.mediaQueryChange)}),g=g.filter(function(a){return-1===c.indexOf(a.rule)}),b.filter(function(a){return-1==f.indexOf(a)}).forEach(function(b){var c=a.matchMedia(b.media.mediaText);c.addListener(d.mediaQueryChange),g.push({rule:b,mql:c})}),f.length=0,f=b}},d.rescanMediaQueries=function(){d.scanMediaQueries(),Array.prototype.forEach.call(e,d.recreateColumns)},d.nextElementColumnIndex=function(a,b){var f,g,h,c=a.children,d=c.length,e=0,i=0;for(h=0;h<d;h++)f=c[h],g=f.children.length+(b[h].children||b[h].childNodes).length,0===e&&(e=g),g<e&&(i=h,e=g);return i},d.createFragmentsList=function(a){for(var c=new Array(a),d=0;d!==a;)c[d]=b.createDocumentFragment(),d++;return c},d.appendElements=function(a,b){var c=a.children,e=c.length,f=d.createFragmentsList(e);Array.prototype.forEach.call(b,function(b){var c=d.nextElementColumnIndex(a,f);f[c].appendChild(b)}),Array.prototype.forEach.call(c,function(a,b){a.appendChild(f[b])})},d.prependElements=function(a,c){var e=a.children,f=e.length,g=d.createFragmentsList(f),h=f-1;c.forEach(function(a){var b=g[h];b.insertBefore(a,b.firstChild),0===h?h=f-1:h--}),Array.prototype.forEach.call(e,function(a,b){a.insertBefore(g[b],a.firstChild)});for(var i=b.createDocumentFragment(),j=c.length%f;0!==j--;)i.appendChild(a.lastChild);a.insertBefore(i,a.firstChild)},d.registerGrid=function(c){if("none"!==a.getComputedStyle(c).display){var f=b.createRange();f.selectNodeContents(c);var g=b.createElement("div");g.appendChild(f.extractContents()),h(g,"columns",0),d.addColumns(c,g),e.push(c)}},d.init=function(){var a=b.createElement("style");a.innerHTML="[data-columns]::before{visibility:hidden;position:absolute;font-size:1px;}",b.head.appendChild(a);var c=b.querySelectorAll("[data-columns]");Array.prototype.forEach.call(c,d.registerGrid),d.scanMediaQueries()},d.init(),{appendElements:d.appendElements,prependElements:d.prependElements,registerGrid:d.registerGrid,recreateColumns:d.recreateColumns,rescanMediaQueries:d.rescanMediaQueries,append_elements:d.appendElements,prepend_elements:d.prependElements,register_grid:d.registerGrid,recreate_columns:d.recreateColumns,rescan_media_queries:d.rescanMediaQueries}}(window,window.document);return a});