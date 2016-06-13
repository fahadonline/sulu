define(["config","sulucategory/model/category","sulucategory/collections/categories"],function(a,b,c){"use strict";var d=a.get("sulu_category.user_settings.category_locale"),e={listContainerId:"categories-list-container",editContainerId:"categories-edit-container"},f="sulu.category.categories.",g=function(){return n.call(this,"list")},h=function(){return n.call(this,"form")},i=function(){return n.call(this,"form-add")},j=function(){return n.call(this,"changed")},k=function(){return n.call(this,"save")},l=function(){return n.call(this,"delete")},m=function(){return n.call(this,"deleted")},j=function(){return n.call(this,"changed")},n=function(a){return f+a};return{initialize:function(){this.categories=new c,this.locale=this.options.locale,this.bindCustomEvents(),this.render()},getCategoryModel:function(a){if(this.categories.get(a))return this.categories.get(a);var c=new b;return a&&c.set({id:a}),this.categories.push(c),c},render:function(){if("list"===this.options.display)this.renderList();else{if("edit"!==this.options.display)throw"display type wrong";this.renderEdit()}},bindCustomEvents:function(){this.sandbox.on("sulu.header.language-changed",this.changeLanguage.bind(this)),this.sandbox.on(g.call(this),this.navigateToList.bind(this)),this.sandbox.on(h.call(this),this.navigateToForm.bind(this)),this.sandbox.on(i.call(this),this.navigateToAddForm.bind(this)),this.sandbox.on(k.call(this),this.saveCategory.bind(this)),this.sandbox.on(l.call(this),this.deleteCategories.bind(this))},saveCategory:function(a,b){var c=this.getCategoryModel(a.id);c.set(a),c.save(null,{success:function(a){this.sandbox.emit(j.call(this),a.toJSON()),b(a.toJSON(),!0),this.sandbox.emit("sulu.header.saved",a.toJSON())}.bind(this),error:function(a,c){this.sandbox.logger.log("Error while saving category"),b(c.responseJSON,!1)}.bind(this)})},deleteCategories:function(a,b,c){var d,e=0;this.sandbox.sulu.showDeleteDialog(function(f){f===!0&&this.sandbox.util.foreach(a,function(f){d=this.getCategoryModel(f),d.destroy({success:function(){"function"==typeof b?b(f):this.sandbox.emit(m.call(this),f),e++,e===a.length&&"function"==typeof c&&c()}.bind(this),error:function(){this.sandbox.logger.log("Error while deleting a single category")}.bind(this)})}.bind(this))}.bind(this))},navigateToList:function(){this.sandbox.emit("sulu.router.navigate","settings/categories",!0,!0)},navigateToForm:function(a,b){b=b?b:"details",this.sandbox.emit("sulu.router.navigate","settings/categories/edit:"+a+"/"+b,!0,!0)},navigateToAddForm:function(a,b){b=b?b:"details";var c="settings/categories/new";c=(a?c+"/"+a:c)+"/"+b,this.sandbox.emit("sulu.router.navigate",c,!0,!0)},changeLanguage:function(a){this.locale=a.id,this.sandbox.sulu.saveUserSetting(d,this.locale),"list"===this.options.display?(this.sandbox.emit("husky.datagrid.url.update",{locale:this.locale}),this.sandbox.emit("sulu.router.navigate","settings/categories/"+this.locale,!1,!1)):this.fetchCategory(this.locale,function(a){this.sandbox.emit("sulu.router.navigate","settings/categories/"+this.locale+"/edit:"+this.options.id+"/details",!1,!1),this.sandbox.emit(j.call(this),a)}.bind(this))},renderList:function(){var a=this.sandbox.dom.createElement('<div id="'+e.listContainerId+'"/>');this.html(a),this.sandbox.start([{name:"categories/list@sulucategory",options:{el:a,locale:this.locale}}])},fetchCategory:function(a,b){var c=this.getCategoryModel(this.options.id);a&&c.set({locale:a}),this.options.parent&&c.set({parent:this.options.parent}),c.get("id")?c.fetch({data:{locale:a,flat:!0},success:function(a){b(a.toJSON())}.bind(this),error:function(){this.sandbox.logger.log("Error while fetching a single category")}.bind(this)}):b(c.toJSON())},renderEdit:function(){var a=function(a){this.sandbox.start([{name:"categories/edit@sulucategory",options:{el:b,locale:this.locale,data:a,parent:this.options.parent||null}}])}.bind(this),b=this.sandbox.dom.createElement('<div id="'+e.editContainerId+'"/>');this.html(b),this.fetchCategory(this.locale,a)}}});