define([],function(){"use strict";var a=function(){var a=this.sandbox.dom.createElement('<div id="permission-form-container"/>'),b={name:"permission-tab/components/form@sulusecurity",options:{el:a,id:this.options.id,type:this.options.type,securityContext:this.options.securityContext,inOverlay:this.options.inOverlay}};this.html(a),this.sandbox.start([b])},b=function(){this.sandbox.on("sulu.permission-form.save",d.bind(this)),this.sandbox.on("sulu.permission-tab.saved",function(){this.sandbox.emit("sulu.router.navigate",this.sandbox.mvc.history.fragment,!0,!0)}.bind(this))},c=function(){this.sandbox.on("husky.permission-form.loaded",function(){this.sandbox.emit("sulu.preview.initialize")}.bind(this)),this.sandbox.on("husky.permission-form.changed",function(){this.sandbox.emit("sulu.header.toolbar.item.enable","save",!1)}.bind(this)),this.sandbox.on("sulu.permission-form.save",function(){this.sandbox.emit("sulu.header.toolbar.item.loading","save")}.bind(this)),this.sandbox.on("sulu.permission-tab.error",function(){this.sandbox.emit("sulu.header.toolbar.item.enable","save")}.bind(this)),this.sandbox.on("sulu.toolbar.save",function(){this.sandbox.emit("sulu.permission-tab.save")}.bind(this))},d=function(a,b){this.sandbox.util.ajax("/admin/api/permissions",{method:"POST",data:a,success:function(){this.sandbox.emit("sulu.labels.success.show","labels.success.permission-save-desc"),this.sandbox.emit("sulu.permission-tab.saved",a,b)}.bind(this),error:function(){this.sandbox.emit("sulu.labels.error.show"),this.sandbox.emit("sulu.permission-tab.error")}.bind(this)})};return{initialize:function(){a.call(this),b.call(this),this.options.inOverlay||c.call(this)}}});