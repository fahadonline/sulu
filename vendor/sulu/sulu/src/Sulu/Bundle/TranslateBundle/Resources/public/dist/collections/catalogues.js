define(["mvc/collection","sulutranslate/models/catalogue"],function(a,b){return a({model:b,url:function(){return"/admin/api/catalogues?flat=true&fields="+this.fields+"&packageId="+this.packageId},initialize:function(a){this.packageId=a.packageId,this.fields=a.fields},parse:function(a){return a._embedded.catalogues}})});