define(["mvc/relationalmodel","mvc/hasmany","sulutranslate/models/catalogue"],function(a,b,c){"use strict";return a({urlRoot:"/admin/api/packages",idAttribute:"id",defaults:{id:null,name:"",catalogues:[],codes:[]},relations:[{type:b,key:"catalogues",relatedModel:c}]})});