/*

*/
var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.findInternal=function(e,f,g){e instanceof String&&(e=String(e));for(var h=e.length,a=0;a<h;a++){var b=e[a];if(f.call(g,b,a,e))return{i:a,v:b}}return{i:-1,v:void 0}};$jscomp.ASSUME_ES5=!1;$jscomp.ASSUME_NO_NATIVE_MAP=!1;$jscomp.ASSUME_NO_NATIVE_SET=!1;$jscomp.SIMPLE_FROUND_POLYFILL=!1;
$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(e,f,g){e!=Array.prototype&&e!=Object.prototype&&(e[f]=g.value)};$jscomp.getGlobal=function(e){return"undefined"!=typeof window&&window===e?e:"undefined"!=typeof global&&null!=global?global:e};$jscomp.global=$jscomp.getGlobal(this);
$jscomp.polyfill=function(e,f,g,h){if(f){g=$jscomp.global;e=e.split(".");for(h=0;h<e.length-1;h++){var a=e[h];a in g||(g[a]={});g=g[a]}e=e[e.length-1];h=g[e];f=f(h);f!=h&&null!=f&&$jscomp.defineProperty(g,e,{configurable:!0,writable:!0,value:f})}};$jscomp.polyfill("Array.prototype.find",function(e){return e?e:function(e,g){return $jscomp.findInternal(this,e,g).v}},"es6","es3");
(function(e,f){"function"===typeof define&&define.amd?define(["jquery"],f):"object"===typeof exports?module.exports=f(require("jquery")):e.Maplace=f(e.jQuery)})(this,function(e){function f(a){this.VERSION="@VERSION";this.loaded=!1;this.markers=[];this.circles=[];this.oMap=!1;this.view_all_key="all";this.infowindow=null;this.ln=this.maxZIndex=0;this.oMap=!1;this.directionsDisplay=this.directionsService=this.Fusion=this.Polygon=this.Polyline=this.current_index=this.current_control=this.controls_wrapper=
this.canvas_map=this.map_div=this.oBounds=null;this.o={debug:!1,map_div:"#gmap",controls_div:"#controls",generate_controls:!0,controls_type:"dropdown",controls_cssclass:"",controls_title:"",controls_on_map:!0,controls_applycss:!0,controls_position:google.maps.ControlPosition.RIGHT_TOP,type:"marker",view_all:!0,view_all_text:"View All",pan_on_click:!0,start:0,locations:[],shared:{},map_options:{mapTypeId:google.maps.MapTypeId.ROADMAP},stroke_options:{strokeColor:"#0000FF",strokeOpacity:.8,strokeWeight:2,
fillColor:"#0000FF",fillOpacity:.4},directions_options:{travelMode:google.maps.TravelMode.DRIVING,unitSystem:google.maps.UnitSystem.METRIC,optimizeWaypoints:!1,provideRouteAlternatives:!1,avoidHighways:!1,avoidTolls:!1},circle_options:{radius:100,visible:!0},styles:{},fusion_options:{},directions_panel:null,draggable:!1,editable:!1,show_infowindows:!0,show_markers:!0,infowindow_type:"bubble",listeners:{},beforeViewAll:function(){},afterViewAll:function(){},beforeShow:function(a,c,d){},afterShow:function(a,
c,d){},afterCreateMarker:function(a,c,d){},beforeCloseInfowindow:function(a,c){},afterCloseInfowindow:function(a,c){},beforeOpenInfowindow:function(a,c,d){},afterOpenInfowindow:function(a,c,d){},afterRoute:function(a,c,d){},onPolylineClick:function(a){},onPolygonClick:function(a){},circleRadiusChanged:function(a,c,d){},circleCenterChanged:function(a,c,d){},drag:function(a,c,d){},dragEnd:function(a,c,d){},dragStart:function(a,c,d){}};this.AddControl("dropdown",g);this.AddControl("list",h);a&&"directions"===
a.type&&(!a.show_markers&&(a.show_markers=!1),!a.show_infowindows&&(a.show_infowindows=!1));e.extend(!0,this.o,a)}var g={activateCurrent:function(a){this.html_element.find("select").val(a)},getHtml:function(){var a=this,b="",c;if(1<this.ln){b+='<select class="dropdown controls '+this.o.controls_cssclass+'">';this.ShowOnMenu(this.view_all_key)&&(b+='<option value="'+this.view_all_key+'">'+this.o.view_all_text+"</option>");for(c=0;c<this.ln;c+=1)this.ShowOnMenu(c)&&(b+='<option value="'+(c+1)+'">'+
(this.o.locations[c].title||"#"+(c+1))+"</option>");b=e(b+"</select>").bind("change",function(){a.ViewOnMap(this.value)})}(c=this.o.controls_title)&&(c=e('<div class="controls_title"></div>').css(this.o.controls_applycss?{fontWeight:"bold",fontSize:this.o.controls_on_map?"12px":"inherit",padding:"3px 10px 5px 0"}:{}).append(this.o.controls_title));return this.html_element=e('<div class="wrap_controls"></div>').append(c).append(b)}};var h={html_a:function(a,b,c){var d=this;b=b||a+1;c=c||this.o.locations[a].title;
a=e('<a data-load="'+b+'" id="ullist_a_'+b+'" href="#'+b+'" title="'+c+'"><span>'+(c||"#"+(a+1))+"</span></a>");a.css(this.o.controls_applycss?{color:"#666",display:"block",padding:"5px",fontSize:this.o.controls_on_map?"12px":"inherit",textDecoration:"none"}:{});a.on("click",function(a){a.preventDefault();a=e(this).attr("data-load");d.ViewOnMap(a)});return a},activateCurrent:function(a){this.html_element.find("li").removeClass("active");this.html_element.find("#ullist_a_"+a).parent().addClass("active")},
getHtml:function(){var a=e("<ul class='ullist controls "+this.o.controls_cssclass+"'></ul>").css(this.o.controls_applycss?{margin:0,padding:0,listStyleType:"none"}:{}),b;this.ShowOnMenu(this.view_all_key)&&a.append(e("<li></li>").append(h.html_a.call(this,!1,this.view_all_key,this.o.view_all_text)));for(b=0;b<this.ln;b++)this.ShowOnMenu(b)&&a.append(e("<li></li>").append(h.html_a.call(this,b)));(b=this.o.controls_title)&&(b=e('<div class="controls_title"></div>').css(this.o.controls_applycss?{fontWeight:"bold",
padding:"3px 10px 5px 0",fontSize:this.o.controls_on_map?"12px":"inherit"}:{}).append(this.o.controls_title));return this.html_element=e('<div class="wrap_controls"></div>').append(b).append(a)}};f.prototype.controls={};f.prototype.create_objMap=function(){var a=0,b;for(b in this.o.styles)this.o.styles.hasOwnProperty(b)&&(0===a&&(this.o.map_options.mapTypeControlOptions={mapTypeIds:[google.maps.MapTypeId.ROADMAP]}),a++,this.o.map_options.mapTypeControlOptions.mapTypeIds.push("map_style_"+a));if(this.loaded)this.oMap.setOptions(this.o.map_options);
else try{this.map_div.css({position:"relative",overflow:"hidden"}),this.canvas_map=e("<div>").addClass("canvas_map").css({width:"100%",height:"100%"}).appendTo(this.map_div),this.oMap=new google.maps.Map(this.canvas_map.get(0),this.o.map_options)}catch(c){this.debug("create_objMap::"+this.map_div.selector,c.toString())}a=0;for(b in this.o.styles)this.o.styles.hasOwnProperty(b)&&(a++,this.oMap.mapTypes.set("map_style_"+a,new google.maps.StyledMapType(this.o.styles[b],{name:b})),this.oMap.setMapTypeId("map_style_"+
a))};f.prototype.add_markers_to_objMap=function(){var a=this.o.type||"marker";switch(a){case "marker":for(a=0;a<this.ln;a++){var b=this.create_objPoint(a);this.create.marker.call(this,a,b)}break;default:this.create[a].apply(this)}};f.prototype.create_objPoint=function(a){a=e.extend({},this.o.locations[a]);var b=void 0===a.visible?void 0:a.visible;!a.type&&(a.type=this.o.type);a.map=this.oMap;a.position=new google.maps.LatLng(a.lat,a.lon);a.zIndex=void 0===a.zIndex?1E4:a.zIndex+100;a.visible=void 0===
b?this.o.show_markers:b;this.o.maxZIndex=a.zIndex>this.maxZIndex?a.zIndex:this.maxZIndex;a.image&&(a.icon=new google.maps.MarkerImage(a.image,new google.maps.Size(a.image_w||32,a.image_h||32),new google.maps.Point(0,0),new google.maps.Point((a.image_w||32)/2,(a.image_h||32)/2)));return a};f.prototype.create_objCircle=function(a){var b=e.extend({},a);var c=e.extend({},this.o.stroke_options);var d=e.extend({},this.o.circle_options);e.extend(c,a.stroke_options||{});e.extend(b,c);e.extend(d,a.circle_options||
{});e.extend(b,d);b.center=a.position;b.draggable=!1;b.zIndex=0<a.zIndex?a.zIndex-10:1;return b};f.prototype.add_markerEv=function(a,b,c){var d=this;google.maps.event.addListener(c,"click",function(e){d.CloseInfoWindow();d.o.beforeShow.call(d,a,b,c);d.o.show_infowindows&&!1!==b.show_infowindow&&d.open_infowindow(a,c,e);d.o.pan_on_click&&!1!==b.pan_on_click&&(d.oMap.panTo(b.position),b.zoom&&d.oMap.setZoom(b.zoom));d.current_control&&d.o.generate_controls&&d.current_control.activateCurrent&&d.current_control.activateCurrent.call(d,
a+1);d.current_index=a;d.o.afterShow.call(d,a,b,c)});b.draggable&&this.add_dragEv(a,b,c)};f.prototype.add_circleEv=function(a,b,c){var d=this;google.maps.event.addListener(c,"click",function(){d.ViewOnMap(a+1)});google.maps.event.addListener(c,"center_changed",function(){d.o.circleCenterChanged.call(d,a,b,c)});google.maps.event.addListener(c,"radius_changed",function(){d.o.circleRadiusChanged.call(d,a,b,c)});b.draggable&&this.add_dragEv(a,b,c)};f.prototype.add_dragEv=function(a,b,c){var d=this;google.maps.event.addListener(c,
"drag",function(e){var f;if(c.getPosition)e=c.getPosition();else if(c.getCenter)e=c.getCenter();else return;d.circles[a]&&d.circles[a].setCenter(e);d.Polyline?f="Polyline":d.Polygon&&(f="Polygon");if(f){for(var g=d[f].getPath().getArray(),h=[],k=0;k<g.length;++k)h[k]=a===k?new google.maps.LatLng(e.lat(),e.lng()):new google.maps.LatLng(g[k].lat(),g[k].lng());d[f].setPath(new google.maps.MVCArray(h));d.add_polyEv(f)}d.o.drag.call(d,a,b,c)});google.maps.event.addListener(c,"dragend",function(){d.o.dragEnd.call(d,
a,b,c)});google.maps.event.addListener(c,"dragstart",function(){d.o.dragStart.call(d,a,b,c)});google.maps.event.addListener(c,"center_changed",function(){d.markers[a]&&c.getCenter&&d.markers[a].setPosition(c.getCenter());d.o.drag.call(d,a,b,c)})};f.prototype.add_polyEv=function(a){var b=this;google.maps.event.addListener(this[a].getPath(),"set_at",function(c,d){b.trigger_polyEv(a,c,d)});google.maps.event.addListener(this[a].getPath(),"insert_at",function(c,d){b.trigger_polyEv(a,c,d)})};f.prototype.trigger_polyEv=
function(a,b,c){var d=this[a].getPath().getAt(b);d=new google.maps.LatLng(d.lat(),d.lng());this.markers[b]&&this.markers[b].setPosition(d);this.circles[b]&&this.circles[b].setCenter(d);this.o["on"+a+"Changed"](b,c,this[a].getPath().getArray())};f.prototype.create={marker:function(a,b,c){if("circle"===b.type&&!c){var d=this.create_objCircle(b);b.visible||(d.draggable=b.draggable);c=new google.maps.Circle(d);this.add_circleEv(a,d,c);this.circles[a]=c}b.type="marker";c=new google.maps.Marker(b);this.add_markerEv(a,
b,c);this.oBounds.extend(b.position);this.markers[a]=c;this.o.afterCreateMarker.call(this,a,b,c);return c},circle:function(){var a;for(a=0;a<this.ln;a++){var b=this.create_objPoint(a);if("circle"===b.type){var c=this.create_objCircle(b);b.visible||(c.draggable=b.draggable);var d=new google.maps.Circle(c);this.add_circleEv(a,c,d);this.circles[a]=d}b.type="marker";this.create.marker.call(this,a,b,d)}},polyline:function(){var a,b=e.extend({},this.o.stroke_options);b.path=[];b.draggable=this.o.draggable;
b.editable=this.o.editable;b.map=this.oMap;b.zIndex=this.o.maxZIndex+100;for(a=0;a<this.ln;a++){var c=this.create_objPoint(a);this.create.marker.call(this,a,c);b.path.push(c.position)}this.Polyline?this.Polyline.setOptions(b):this.Polyline=new google.maps.Polyline(b);this.add_polyEv("Polyline")},polygon:function(){var a=this,b,c=e.extend({},this.o.stroke_options);c.path=[];c.draggable=this.o.draggable;c.editable=this.o.editable;c.map=this.oMap;c.zIndex=this.o.maxZIndex+100;for(b=0;b<this.ln;b++){var d=
this.create_objPoint(b);this.create.marker.call(this,b,d);c.path.push(d.position)}this.Polygon?this.Polygon.setOptions(c):this.Polygon=new google.maps.Polygon(c);google.maps.event.addListener(this.Polygon,"click",function(b){a.o.onPolygonClick.call(a,b)});this.add_polyEv("Polygon")},fusion:function(){this.o.fusion_options.styles=[this.o.stroke_options];this.o.fusion_options.map=this.oMap;this.Fusion?this.Fusion.setOptions(this.o.fusion_options):this.Fusion=new google.maps.FusionTablesLayer(this.o.fusion_options)},
directions:function(){var a=this,b,c=[],d=0;for(b=0;b<this.ln;b++){var f=this.create_objPoint(b);if(0===b)var g=f.position;else if(b===this.ln-1)var h=f.position;else{var m=!0===this.o.locations[b].stopover?!0:!1;c.push({location:f.position,stopover:m})}this.create.marker.call(this,b,f)}this.o.directions_options.origin=g;this.o.directions_options.destination=h;this.o.directions_options.waypoints=c;this.directionsService||(this.directionsService=new google.maps.DirectionsService);this.directionsDisplay?
this.directionsDisplay.setOptions({draggable:this.o.draggable}):this.directionsDisplay=new google.maps.DirectionsRenderer({draggable:this.o.draggable});this.directionsDisplay.setMap(this.oMap);this.o.directions_panel&&(this.o.directions_panel=e(this.o.directions_panel),this.directionsDisplay.setPanel(this.o.directions_panel.get(0)));this.o.draggable&&google.maps.event.addListener(this.directionsDisplay,"directions_changed",function(){var b=a.directionsDisplay.getDirections();d=a.compute_distance(a.directionsDisplay.directions);
a.o.afterRoute.call(a,d,b.status,b)});this.directionsService.route(this.o.directions_options,function(b,c){c===google.maps.DirectionsStatus.OK&&(d=a.compute_distance(b),a.directionsDisplay.setDirections(b));a.o.afterRoute.call(a,d,c,b)})}};f.prototype.compute_distance=function(a){var b=0,c=a.routes[0],d=c.legs.length;for(a=0;a<d;a++)b+=c.legs[a].distance.value;return b};f.prototype.type_to_open={bubble:function(a){var b=this,c={content:a.html||""};a.infoWindowMaxWidth&&(c.maxWidth=a.infoWindowMaxWidth);
this.infowindow=new google.maps.InfoWindow(c);google.maps.event.addListener(this.infowindow,"closeclick",function(){b.CloseInfoWindow()})}};f.prototype.open_infowindow=function(a,b,c){c=this.o.locations[a];var d=this.o.infowindow_type;c.html&&this.type_to_open[d]&&(this.o.beforeOpenInfowindow.call(this,a,c,b),this.type_to_open[d].call(this,c),this.infowindow.open(this.oMap,b),this.o.afterOpenInfowindow.call(this,a,c,b))};f.prototype.get_html_controls=function(){return this.controls[this.o.controls_type]&&
this.controls[this.o.controls_type].getHtml?(this.current_control=this.controls[this.o.controls_type],this.current_control.getHtml.apply(this)):""};f.prototype.generate_controls=function(){if(this.o.controls_on_map){var a=e('<div class="on_gmap '+this.o.controls_type+' gmap_controls"></div>').css(this.o.controls_applycss?{margin:"5px"}:{}),b=e(this.get_html_controls()).css(this.o.controls_applycss?{background:"#fff",padding:"5px",border:"1px solid #eee",boxShadow:"rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px",
maxHeight:this.map_div.find(".canvas_map").outerHeight()-80,minWidth:100,overflowY:"auto",overflowX:"hidden"}:{});a.append(b);this.oMap.controls[this.o.controls_position].clear();this.oMap.controls[this.o.controls_position].push(a.get(0))}else this.controls_wrapper.empty(),this.controls_wrapper.append(this.get_html_controls())};f.prototype.init_map=function(){var a=this;this.Polyline&&this.Polyline.setMap(null);this.Polygon&&this.Polygon.setMap(null);this.Fusion&&this.Fusion.setMap(null);this.directionsDisplay&&
this.directionsDisplay.setMap(null);for(var b=this.markers.length-1;0<=b;--b)try{this.markers[b]&&this.markers[b].setMap(null)}catch(c){a.debug("init_map::markers::setMap",c.stack)}this.markers.length=0;this.markers=[];for(b=this.circles.length-1;0<=b;--b)try{this.circles[b]&&this.circles[b].setMap(null)}catch(c){a.debug("init_map::circles::setMap",c.stack)}this.circles.length=0;this.circles=[];this.o.controls_on_map&&this.oMap.controls&&this.oMap.controls[this.o.controls_position].forEach(function(b,
d){try{a.oMap.controls[this.o.controls_position].removeAt(d)}catch(l){a.debug("init_map::removeAt",l.stack)}});this.oBounds=new google.maps.LatLngBounds};f.prototype.perform_load=function(){this.CloseInfoWindow();1===this.ln?(this.o.map_options.set_center?this.oMap.setCenter(new google.maps.LatLng(this.o.map_options.set_center[0],this.o.map_options.set_center[1])):(this.oMap.fitBounds(this.oBounds),this.ViewOnMap(1)),this.o.map_options.zoom&&this.oMap.setZoom(this.o.map_options.zoom)):0===this.ln?
(this.o.map_options.set_center?this.oMap.setCenter(new google.maps.LatLng(this.o.map_options.set_center[0],this.o.map_options.set_center[1])):this.oMap.fitBounds(this.oBounds),this.oMap.setZoom(this.o.map_options.zoom||1)):(this.oMap.fitBounds(this.oBounds),"number"===typeof(this.o.start-0)&&0<this.o.start&&this.o.start<=this.ln?this.ViewOnMap(this.o.start):this.o.map_options.set_center?this.oMap.setCenter(new google.maps.LatLng(this.o.map_options.set_center[0],this.o.map_options.set_center[1])):
this.ViewOnMap(this.view_all_key),this.o.map_options.zoom&&this.oMap.setZoom(this.o.map_options.zoom))};f.prototype.debug=function(a,b){this.o.debug&&console.log(a,b);return this};f.prototype.AddControl=function(a,b){if(!a||!b)return self.debug("AddControl",'Missing "name" and "func" callback.'),!1;this.controls[a]=b;return this};f.prototype.CloseInfoWindow=function(){this.infowindow&&(this.current_index||0===this.current_index)&&(this.o.beforeCloseInfowindow.call(this,this.current_index,this.o.locations[this.current_index]),
this.infowindow.close(),this.infowindow=null,this.o.afterCloseInfowindow.call(this,this.current_index,this.o.locations[this.current_index]));return this};f.prototype.ShowOnMenu=function(a){if(a===this.view_all_key&&this.o.view_all&&1<this.ln)return!0;a=parseInt(a,10);return"number"===typeof(a-0)&&0<=a&&a<this.ln&&!1!==this.o.locations[a].on_menu?!0:!1};f.prototype.ViewOnMap=function(a){if(a===this.view_all_key)this.o.beforeViewAll.call(this),this.current_index=a,0<this.o.locations.length&&this.o.generate_controls&&
this.current_control&&this.current_control.activateCurrent&&this.current_control.activateCurrent.apply(this,[a]),this.oMap.fitBounds(this.oBounds),this.o.afterViewAll.call(this);else if(a=parseInt(a,10),"number"===typeof(a-0)&&0<a&&a<=this.ln)try{google.maps.event.trigger(this.markers[a-1],"click")}catch(b){this.debug("ViewOnMap::trigger",b.stack)}return this};f.prototype.SetLocations=function(a,b){this.o.locations=a;b&&this.Load();return this};f.prototype.AddLocations=function(a,b){var c=this;e.isArray(a)&&
e.each(a,function(a,b){c.o.locations.push(b)});e.isPlainObject(a)&&this.o.locations.push(a);b&&this.Load();return this};f.prototype.AddLocation=function(a,b,c){e.isPlainObject(a)&&this.o.locations.splice(b,0,a);c&&this.Load();return this};f.prototype.RemoveLocations=function(a,b){var c=this,d=0;e.isArray(a)?e.each(a,function(a,b){b-d<c.ln&&c.o.locations.splice(b-d,1);d++}):a<this.ln&&this.o.locations.splice(a,1);b&&this.Load();return this};f.prototype.Loaded=function(){return this.loaded};f.prototype._init=
function(){this.ln=this.o.locations.length;for(var a=0;a<this.ln;a++){var b=e.extend({},this.o.shared);this.o.locations[a]=e.extend(b,this.o.locations[a]);this.o.locations[a].html&&(this.o.locations[a].html=this.o.locations[a].html.replace("%index",a+1),this.o.locations[a].html=this.o.locations[a].html.replace("%title",this.o.locations[a].title||""))}this.map_div=e(this.o.map_div);this.controls_wrapper=e(this.o.controls_div);return this};f.prototype.Load=function(a){e.extend(!0,this.o,a);a&&a.locations&&
(this.o.locations=a.locations);this._init();!1===this.o.visualRefresh?google.maps.visualRefresh=!1:google.maps.visualRefresh=!0;this.init_map();this.create_objMap();this.add_markers_to_objMap();1<this.ln&&this.o.generate_controls||this.o.force_generate_controls?(this.o.generate_controls=!0,this.generate_controls()):this.o.generate_controls=!1;var b=this;if(this.loaded)this.perform_load();else{google.maps.event.addListenerOnce(this.oMap,"idle",function(){b.perform_load()});for(var c in this.o.listeners)this.o.listeners.hasOwnProperty(c)&&
google.maps.event.addListener(this.oMap,c,this.o.listeners[c])}this.loaded=!0;return this};return f});function map_init(e){var f=e.attr("data-id"),g=e.attr("data-address"),h=+e.attr("data-zoom");(new Maplace({map_div:"#map-id-"+f,locations:[{lat:e.attr("data-locationone"),lon:e.attr("data-locationtwo"),type:"marker",html:["<p><strong>"+g+"</strong></p>"].join(""),zoom:h}]})).Load()}0!=$(".shortcode_map").length&&map_init($(".shortcode_map"));0!=$(".contact_us_map_block").length&&map_init($(".contact_us_map_block"));