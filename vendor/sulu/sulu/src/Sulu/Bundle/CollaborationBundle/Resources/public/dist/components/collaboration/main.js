define(["app-config","config","websocket-manager"],function(a,b,c){"use strict";var d="admin",e="sulu_collaboration",f="collaboration";return{defaults:{translations:{collaborationWarning:"collaboration.warning"}},initialize:function(){this.client=c.getClient(d,!0),this.bindEvents(),this.bindMessageHandler(),this.sendEnterMessage().then(this.onEnterResponse.bind(this))},destroy:function(){this.sandbox.emit("sulu.labels.label.remove",f)},bindEvents:function(){this.sandbox.on("sulu.router.navigate",this.sendLeaveMessage.bind(this)),$(window).unload(this.sendLeaveMessage.bind(this)),this.keepInterval=setInterval(this.sendKeepMessage.bind(this),b.get("sulu-collaboration").interval)},bindMessageHandler:function(){this.client.addHandler(e,function(a){switch(a.command){case"update":this.onUpdate(a)}}.bind(this))},sendEnterMessage:function(){return this.client.send(e,{command:"enter",id:this.options.id,userId:this.options.userId,type:this.options.type})},onEnterResponse:function(a,b){this.showCollaboratorLabel(b.users)},sendKeepMessage:function(){return this.client.send(e,{command:"keep",id:this.options.id,userId:this.options.userId,type:this.options.type})},sendLeaveMessage:function(){return clearInterval(this.keepInterval),this.client.send(e,{command:"leave",id:this.options.id,userId:this.options.userId,type:this.options.type})},onUpdate:function(a){this.showCollaboratorLabel(a.users)},showCollaboratorLabel:function(a){if(a.length<=1)return void this.sandbox.emit("sulu.labels.label.remove",f);var b=this.translations.collaborationWarning.replace("%s",a.map(function(a){return a.id===this.options.userId?null:a.username}.bind(this)).filter(function(a){return null!=a}).join(", "));this.sandbox.emit("sulu.labels.warning.show",b,"",f,!1)}}});