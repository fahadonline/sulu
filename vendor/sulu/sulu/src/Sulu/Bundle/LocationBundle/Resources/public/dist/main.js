require.config({paths:{sululocation:"../../sululocation/js",sululocationcss:"../../sululocation/css","type/location":"../../sululocation/js/validation/types/location","map/leaflet":"../../sululocation/js/map/leaflet","map/google":"../../sululocation/js/map/google",leaflet:"../../sululocation/js/vendor/leaflet/leaflet",async:"../../sululocation/js/vendor/requirejs-plugins/async"}}),define(["css!sululocationcss/main","css!sululocation/vendor/leaflet/leaflet.css"],function(){return{name:"SuluLocationBundle",initialize:function(a){"use strict";a.sandbox;a.components.addSource("sululocation","/bundles/sululocation/js/components")}}});