(window.webpackJsonp=window.webpackJsonp||[]).push([[170],{411:function(e,a,t){"use strict";t.r(a);var n=t(3),i=t(2),w=t(147),o=t(74),r=t(5),p=t(98),s=o.a>1,c=s?"bmaphidpi":"geolandbasemap",l=s?2:1,m=new n.a({target:"map",view:new i.a({center:[1823849,6143760],zoom:11})});fetch("https://www.basemap.at/wmts/1.0.0/WMTSCapabilities.xml").then(function(e){return e.text()}).then(function(e){var a=(new w.a).read(e),t=Object(p.b)(a,{layer:c,matrixSet:"google3857",style:"normal"});t.tilePixelRatio=l,m.addLayer(new r.a({source:new p.a(t)}))})}},[[411,0]]]);
//# sourceMappingURL=wmts-hidpi.js.map