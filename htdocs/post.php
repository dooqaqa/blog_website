<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>д��</title>
<style type="text/css">
body{ font-size:12px;}
#ed{ height:300px; width:800px; background-color: }
.sssss{ background-image:url(image/003356952.p.gif)}
.a1{ background-image:url(image/003356952.p.gif);height:22px; display:inline-table;float:left; ;cursor: pointer; margin-top:8px; margin-left:5px; margin-right:2px; vertical-align:middle; line-height:20px;}
.ebody{ height:auto; width:760px; border:1px solid #999999}
.ebar{ width:100%; height:36px; background-color:#F0F2F5;};
.edit{ height:550px; width:100%; border:0px;}
.popupfont{ width:200px; height:auto; border:1px solid #7B9EBD; background-color:#F7F7F7; position:absolute;padding:3px; }
a.c1{ width:96%; height:auto; font-size:10px;display:block;border:1px solid #F7F7F7; padding:3px;color:#666666;text-decoration:none;}
a.c1:hover{width:96%; height:auto; font-size:10px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;}
a.c2{ width:96%; height:auto; font-size:12px;display:block;border:1px solid #F7F7F7; padding:3px;color:#666666;text-decoration:none;}
a.c2:hover{width:96%; height:auto; font-size:12px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;}
a.c3{ width:96%; height:auto; font-size:14px;display:block;border:1px solid #F7F7F7;padding:3px;color:#666666 ;text-decoration:none;}
a.c3:hover{width:96%; height:auto; font-size:14px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;}
a.c4{ width:96%; height:auto; font-size:16px;display:block;border:1px solid #F7F7F7;padding:3px; color:#666666;text-decoration:none;}
a.c4:hover{width:96%; height:auto; font-size:16px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;}
a.c5{ width:96%; height:auto; font-size:18px;display:block;border:1px solid #F7F7F7;padding:3px; color:#666666;text-decoration:none;}
a.c5:hover{width:96%; height:auto; font-size:18px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;}
a.c6{ width:96%; height:auto; font-size:22px;display:block;border:1px solid #F7F7F7; padding:3px;color:#666666;text-decoration:none;}
a.c6:hover{width:96%; height:auto; font-size:22px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;}
a.c7{ width:96%; height:auto; font-size:26px;display:block;border:1px solid #F7F7F7; padding:3px;color:#666666;text-decoration:none;}
a.c7:hover{width:96%; height:auto; font-size:26px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;}
a.n{ width:96%; height:auto; font-size:14px;display:block;border:1px solid #F7F7F7;padding:3px;color:#666666;text-decoration:none; }
a.n:hover{width:96%; height:auto; font-size:14px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;}
.textarea{ border:0px;display:none;}
.bottom{height:30px;width:100%;background-color:#F7F3F7;font-size:12px;}
.checkbox{margin-top:10px;margin-top/*/**/:6px/9;margin-left:20px;margin-left/*/**/:16px/9;}
.pp{height:auto; border:1px solid #D3D3D3; position:absolute;z-index:5;}
.ppt{
height:24px; width:100%; background-image:url(http://album.hi.csdn.net/app_uploads/wtcsy/20090726/203207031.p.gif); font-size:12px; font-weight: bold; vertical-align:middle; line-height:24px;
}
</style>
<script src="CommonJs.js"></script>
</head>

<body>
<input type="text" name="title_text" id="title_text" onkeyup="TitleCheck(this.value)"/>
<div id="title_check"></div>
<br>
<div id='ss'></div>
<br><br><br>
<div id='sss'></div>
<br><br><br>
<div id='ssss'></div>
<script>
var hehe;
function TitleCheck(str)
{
	if ("" == str) {
		document.getElementById("title_check").innerHTML="";
		return;
	}
	hehe = str
	var httpreq = GetXmlHttpObject();
	if (httpreq) {
		httpreq.onreadystatechange=function()
		{
			if (httpreq.readyState==4 && httpreq.status==200)
			{
				document.getElementById("title_check").innerHTML=httpreq.responseText;
			}
		}
		var url =  "save_blog.php";
		httpreq.open("POST", url, true);
		httpreq.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		httpreq.send("q=" + "title_check&qq=" + str);
	}
}

var isIE = (document.all) ? true : false;

var isIE6 = false;


var $ = function (id) {
	return "string" == typeof id?document.getElementById(id):id;
};

var $$ = function(p,e){
	return p.getElementsByTagName(e);
}

var $c = function(elm){
	return document.createElement(elm);
}

function getTarget(e){
	e = e||window.event;
	return e.srcElement||e.target;
}

function createtab(tri,tdi,arisetab,arisetr,arisetd,p){
	var table = p?p.createElement("table"):$c("table");
	arisetab&&arisetab(table);
	var tbody = p?p.createElement("tbody"):$c("tbody");
	for(var i=0;i<tri;i++)
	{
		 var tr = p?p.createElement("tr"):$c("tr");
		 arisetr&&arisetr(i,tr);
		 for(var j=0;j<tdi;j++)
		 {
			 var td = p?p.createElement("td"):$c("td");
			 arisetd&&arisetd(i,j,td);
			 tr.appendChild(td);
		 }
		 tbody.appendChild(tr);
	}
	table.appendChild(tbody);
	return table;
}

var Extendpro = function(e,o){
	for(var i in o)
	typeof o[i]!="object"?(e.style[i] = o[i]):(e[i] = o[i][0]);
}

var Extend = function(destination, source) {
	for (var property in source) {
		destination[property] = source[property];
	}
}

var Bind = function(object, fun,args) {
	return function() {
		return fun.apply(object,args||[]);
	}
}

var BindAsEventListener = function(object, fun,args) {
	var args = Array.prototype.slice.call(arguments).slice(2);
	return function(event) {
		return fun.apply(object, [event || window.event].concat(args));
	}
}

var CurrentStyle = function(element){
	return element.currentStyle || document.defaultView.getComputedStyle(element, null);
}

function getobjpos(el,left){
	 var val = 0;
     while (el !=null) {
		 val += el["offset" + (left? "Left": "Top")];
		 el = el.offsetParent;
     }
     return val;
}

 function create(e,p,fn){
	 var element = document.createElement(e); p.appendChild(element);fn&&fn(element);return element;
 }
 
 function addListener(element,e,fn){ element.addEventListener?element.addEventListener(e,fn,false):element.attachEvent("on" + e,fn)};
 
 function removeListener(element,e,fn){ element.removeEventListener?element.removeEventListener(e,fn,false):element.detachEvent("on" + e,fn)};

 var Class = function(properties){
       var _class = function(){return (arguments[0] !== null && this.initialize && typeof(this.initialize) == 'function') ? this.initialize.apply(this, arguments) : this;};
       _class.prototype = properties;
       return _class;
 };
 
 var Editer = new Class({
	 options:{
	     width     :890,
		 height    :700,
	     /*facebg    : [
			 {bgimg:"-4px -4px",title:"΢Ц",wl:22,src:"http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220846596.p.gif"},{bgimg:"-31px -4px",title:"��Ц",wl:22,src:"http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220859814.p.gif"},{bgimg:"-58px -4px",title:"��Ц",wl:22,src:"http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220911971.p.gif"},{bgimg:"-85px -4px",title:"գ��",wl:22,src:"http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220928549.p.gif"},{bgimg:"-112px -4px",title:"����",wl:22,src:"http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220928549.p.gif"},{bgimg:"-139px -4px",title:"ɫɫ",wl:22,src:"http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220951955.p.gif"},{bgimg:"-167px -4px",title:"����",wl:22,src:"http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220958111.p.gif"},{bgimg:"-194px -4px",title:"����",wl:22,src:"http://album.hi.csdn.net/app_uploads/wtcsy/20090719/221004564.p.gif"}
		 ],*/
	     fontsizedata     : { fontSize:["�ֺ�1","�ֺ�2","�ֺ�3","�ֺ�4","�ֺ�5","�ֺ�6","�ֺ�7"],
							  fontname:["����","����","����","����","��Բ","Arial","Georgia","Verdana","Helvetica"]
		 },
		 oninit:function(){} 
	 },
	 initialize:function(container,b,options){
		 this.data        = [
			 {obj:null,bgimg:"-0px -57px",active:"-0px -28px",title:"�Ӵ�",width:22,cbg:"-0px -2px",action:"Exec",args:["bold",null],exist:true},
			 {obj:null,bgimg:"-30px -57px",active:"-30px -28px",title:"б��",width:22,cbg:"-30px -2px",action:"Exec",args:["Italic",null],exist:true},
			 {obj:null,bgimg:"-58px -57px",active:"-58px -28px",title:"�»���",width:22,cbg:"-58px -2px",action:"Exec",args:["Underline",null],exist:true},
			 {obj:null,bgimg:"-86px -57px",title:"�ֺ�",width:73,cbg:"-86px -57px",action:"Fontsize",args:[],exist:true},
			 {obj:null,bgimg:"-86px -28px",title:"����",width:73,cbg:"-86px -28px",action:"FontName",args:[],exist:true},
			 {obj:null,bgimg:"-164px -57px",title:"������ɫ",width:22,bgcolor:"#000000",cbg:"-164px -2px",action:"Fontcolor",args:[],exist:true},
			 {obj:null,bgimg:"-194px -57px",title:"��������",width:22,cbg:"-194px -2px",action:"CreateLink",args:[],exist:true},
			 {obj:null,bgimg:"-45px -84px",title:"����",width:22,cbg:"-45px -192px",action:"Exec",args:["Cut",null],exist:true},
			 {obj:null,bgimg:"-76px -84px",title:"����",width:22,cbg:"-76px -192px",action:"Exec",args:["Copy",null],exist:true},			 
			 {obj:null,bgimg:"-58px -140px",title:"�����",width:22,cbg:"-58px -247px",action:"Exec",args:["JustifyLeft",null],exist:true},
			 {obj:null,bgimg:"-86px -140px",title:"���ж���",width:22,cbg:"-86px -247px",action:"Exec",args:["JustifyCenter",null],exist:true},
			 {obj:null,bgimg:"-113px -140px",title:"�Ҷ���",width:22,cbg:"-113px -247px",action:"Exec",args:["JustifyRight",null],exist:true},
			 {obj:null,bgimg:"-476px -84px",active:"-476px -299px",title:"��Ŀ����",width:22,cbg:"-476px -192px",action:"Exec",args:["InsertUnorderedList",null],exist:true},
			 {obj:null,bgimg:"-505px -84px",active:"-505px -299px",title:"���",width:22,cbg:"-505px -192px",action:"Exec",args:["InsertOrderedList",null],exist:true},
			 {obj:null,bgimg:"-333px -140px",title:"������",width:22,cbg:"-333px -247px",action:"Addtable",args:[],exist:true},
			 {obj:null,bgimg:"-532px -84px",title:"��������",width:22,cbg:"-532px -192px",action:"Exec",args:["Outdent",null],exist:true},
			 {obj:null,bgimg:"-560px -84px",title:"��������",width:22,cbg:"-560px -192px",action:"Exec",args:["Indent",null],exist:true},
			 {obj:null,bgimg:"-455px -140px",title:"�����ʽ",width:22,cbg:"-455px -247px",action:"Exec",args:["RemoveFormat",null],exist:true},
			 {obj:null,bgimg:"-222px -57px",title:"����ͼƬ",width:73,cbg:"-222px -2px",action:"InsertImage",args:[],exist:true},
			 //{obj:null,bgimg:"-380px -57px",title:"�������",width:74,cbg:"-380px -2px",action:"Expression",args:[],exist:true},
			 {obj:null,bgimg:"-460px -57px",title:"�Զ��Ű�",width:71,cbg:"-460px -2px",action:"Layout",args:[],exist:true},
			 {obj:null,title:"����",width:74,cbg:"",action:"Save",args:[],exist:true},
		 ];		 
		 this.container   = container;  
		 this._body       = $c("div");    
		 this.toolbar     = $c("div");     //������
		 this.iframe      = $c("iframe");  //�༭��
		 this.bottom      = $c("div");     //�ײ�
		 this.textarea    = $c("textarea"); //��ʾԴ����Ŀ�� 
		 this.lightbox    = b;             //lightbox
		 this.original    = $c("input");   //��ʾԴ����İ�Ŧ
		 this.ed          = null;
		 this.isfocus     = false;
		 Extend(this.options,options||{});		           

		 this.fontsizedata= this.options.fontsizedata;   //��������Դ
		 //this.facebg      = this.options.facebg;         //��������Դ
		 this.width       = this.options.width;          //�༭���Ŀ��
		 this.height      = this.options.height;          //�༭���ĸ߶�
		 this.oninit      = this.options.oninit;
		 this.rang        = null;                        //ѡ����
		 this.Fpop        = null;              
		 this._body.appendChild(this.toolbar);
		 this._body.appendChild(this.iframe);
		 this._body.appendChild(this.textarea);
		 this._body.appendChild(this.bottom);
		 this.container.appendChild(this._body);
		 this.oninit();
		 var self  =  this ;
		 this.toolbar.className   = "ebar";
		 with(this._body){className = "ebody"; style.width = this.width+"px";style.height = this.height+"px";}
		 with(this.textarea){ className = "textarea";style.width = isIE?this.width-2+"px":this.width+"px";style.height = isIE?this.height-66+"px":this.height-70+"px";}
		 with(this.iframe){src = "about:blank";width =isIE?this.width:this.width-4;height=isIE?this.height-66:this.height-70; }  
		 with(this.original){type = "checkbox";className="checkbox";align="top"};
		 with(this.bottom){className   = "bottom";innerHTML   = "<span>��ʾԴ����</span>";insertBefore(this.original,this.bottom.childNodes[0]);};
		 this.ed=isIE?this.iframe.contentWindow.document:this.iframe.contentDocument;
		 this.ed.open();
		 var div = isIE?"<div></div>":"";
		 this.ed.write("<html><head><style>body{margin:5px;font-size:16px;word-wrap:break-word}</style></head><body id='my_body'>"+div+"</body></html>");
		 this.ed.close();
		 with(this.ed){contentEditable = true;designMode = "on";}; //���ñ༭��Ϊ�ɱ༭
		 
		 for(var i = 0;i<this.data.length;i++)
		 {
		     if(!this.data[i].exist)continue;
			 create("span",this.toolbar,function(o){
				 with(o){
					 className = "a1";style.backgroundPosition = self.data[i].bgimg;style.width = self.data[i].width+"px";title = self.data[i].title;active = false;
				 }
				 o.unselectable = "on";
				 self.data[i].obj=o;
				 if(self.data[i].bgcolor)o.style.backgroundColor = self.data[i].bgcolor;
				 addListener(o,"mouseover",Bind(self,self.Changebgcolor,[o,self.data[i].cbg]));
				 addListener(o,"mouseout",Bind(self,self.Changebgcolor,[o,self.data[i].bgimg]));
				 addListener(o,"click",Bind(self,self[self.data[i].action],[o].concat(self.data[i].args))); 		
			 })
		 }
		 //////////////////////////���ɹ�����
			 addListener(this.iframe.contentWindow,"focus",function(){self.isfocus = true;});
			 addListener(this.iframe.contentWindow,"blur",function(){self.isfocus  = false;});		 
		 	 addListener(this.ed,'mousedown',Bind(this,this.Show));
			 addListener(this.ed,'mouseup',Bind(this,this.Show));
			 //////////////////////////��2���¼������жϹ������λ���Ƿ��༭
			 addListener(this.original,'click',Bind(this,this.Showoriginal,[this.original]));  //��ʾԴ����
	 },
	 Show:function(){                   
		var elm = [[0,"Bold"],[1,"Italic"],[2,"Underline"],[12,"InsertUnorderedList"],[13,"InsertOrderedList"]]; 
		var Is = null;
		 for(var i=0;i<elm.length;i++)
		 {
			Is = this.ed.queryCommandState(elm[i][1]);
			this.data[elm[i][0]].obj.style.backgroundPosition = Is?this.data[elm[i][0]].active:this.data[elm[i][0]].bgimg;
			this.data[elm[i][0]].obj.active = Is;
		 }
	 },
	 Showoriginal:function(o){
		 if(!this.zhe){
		     var self = this
			 this.zhe= create("div",document.body,function(elm){
			 Extendpro(elm,{width:self.width + "px",height:"36px",left:getobjpos(self.toolbar,1) + "px",backgroundColor:"#ffffff",position:"absolute",top:getobjpos(self.toolbar,0) + "px"})
				 elm.style.opacity = 0.7;
				 elm.style.filter = "alpha(opacity:" + 70 + ")" 
			 });
		 }
		 if(o.checked)
		 {
			 this.iframe.style.display = "none";
			 this.textarea.style.display = "block";
			 this.zhe.style.display = "block";
			 this.textarea.value = this.ed.body.innerHTML;
		 }
		 else
		 {
			 this.iframe.style.display = "block";
			 this.textarea.style.display = "none";
			 this.zhe.style.display = "none";
			 this.ed.body.innerHTML = this.textarea.value;
		 }

	 },
	 Changebgcolor:function(o,i){              
	     if(o.active)return;
		 o.style.backgroundPosition=i;
	 },
	 Exec:function(o,cmd,para){  
		 try{
				this.ed.execCommand(cmd,false, para);
				this.Show();
			}
		 catch(err)
		 	{
				return;
			}	
	 },
	 InsertImage:function(o){       
		 if(isIE)
		 {
			  !this.isfocus&&this.iframe.contentWindow.focus();
			  this.rang = this.ed.selection.createRange();
		 }
		 this.lightbox.Show();
		 this.makebody(this.Imagepopoup,"350px","����ͼƬ","InsertImage","Imagepopoup");	
	 },
	 CreateLink:function(o){
		 if(isIE)this.rang = this.ed.selection.createRange(); 
		 this.lightbox.Show();	
		 this.makebody(this.Linkpopoup,"350px","��������","CreateLink","Linkpopoup");	
	 },
	 Fontcolor:function(o){
		var self = this;
		if(!this.fontcolorpopup)
		{
			var color = new popoup({width:"210px",title:"��ɫѡ��"});
            this.fontcolorpopup = color.container;
			with(color.container){
				style.left = getobjpos(o,1) +"px";style.top  = getobjpos(o,0) + o.offsetHeight +"px";
			};
			var bgcolor = ["00","33","66","99","CC","FF","00","33","66","99","CC","FF"];
			$$(color.container,"div")[1].appendChild(createtab(12,18,function(tab){
			with(tab){cellPadding = 0,cellSpacing = 1,border = 0,bgColor="#333333"}
		    },null,function(i,j,td){
			td.width=10,td.height=10,td.unselectable="on";
			td.style.backgroundColor = i<6?"#"+bgcolor[Math.floor(j/6)]+bgcolor[Math.floor(j%6)]+bgcolor[i]:"#"+bgcolor[Math.floor(j/6)+3]+bgcolor[Math.floor(j%6)]+bgcolor[i-6];
			var color = td.style.backgroundColor;
			addListener(td,'click',Bind(self,self.Execa,[color,"fontColor"]));
			addListener(td,'mousedown',BindAsEventListener(self,self.Bubble));
			}))
		}
		else
		{
			this.fontcolorpopup.style.display = "block";
		}
		 this.Fpop = Bind(this,this.Hide);
         addListener(this.ed,'click',this.Fpop);
		 addListener(document,'mousedown',this.Fpop);
	 },
	 /*Expression:function(o){
		 var self = this;
		 if(!this.facebgpopup)
		 {
			var expr = new popoup({width:"190px",title:"�������"});
            this.facebgpopup = expr.container;
			with(expr.container){
				style.left = getobjpos(o,1) +"px";style.top  = getobjpos(o,0) + o.offsetHeight +"px";
			};
			$$(expr.container,"div")[1].appendChild(createtab(1,this.facebg.length,function(tab){
			with(tab){cellPadding = 0,cellSpacing = 1,border = 0,bgColor="#FFFFFF"}},null,function(i,j,td){
			with(td){style.backgroundImage="url(http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220510752.p.gif)";
			style.backgroundPosition = self.facebg[j].bgimg;
				width=self.facebg[i].wl;height=self.facebg[i].wl;
			}
			td.unselectable="on";
			addListener(td,'click',Bind(self,self.Execa,[self.facebg[j].src,"Expression"]));
			addListener(td,'mousedown',BindAsEventListener(self,self.Bubble))
			}));						
		}
		else
		{
			this.facebgpopup.style.display = "block";
		}	
		 this.Fpop = Bind(this,this.Hide);
         addListener(this.ed,'click',this.Fpop);
		 addListener(document,'mousedown',this.Fpop);
	 },*/
	 Layout:function(){
		 var child = this.ed.body.childNodes;
		 for(var i=0;i<child.length;i++)
		 {
			  if(child[i].nodeName == "DIV"||child[i].nodeName == "P")
			  child[i].style.textIndent= child[i].style.textIndent== "2em"?"":"2em";
		 }
	 },
	 Fontsize:function(o){
		 var self = this;
		 if(!this.fontsizepopup)
		 {	 
			var size = new popoup({width:"210px",title:"�ֺ�"});
            this.fontsizepopup = size.container;
			with(size.container){
				style.left = getobjpos(o,1) +"px";style.top  = getobjpos(o,0) + o.offsetHeight +"px";
			};
			 for(var i = 0;i<this.fontsizedata .fontSize.length;i++)
			 {
				 create("a",$$(size.container,"div")[1],function(elm){
					 with(elm){className="c"+(i+1);setAttribute("href","javascript:void(0);");
					 innerHTML=self.fontsizedata.fontSize[i];}
					 addListener(elm,"click",Bind(self,self.Execa,[i,"fontSize"]));
					 addListener(elm,'mousedown',BindAsEventListener(self,self.Bubble));	
				 })	
			 }	 					  
		 }else
		 {
			 this.fontsizepopup.style.display = "block";
		 }
		 this.Fpop = Bind(this,this.Hide);
         addListener(this.ed,'click',this.Fpop);
		 addListener(document,'mousedown',this.Fpop);
	 },
	 FontName:function(o){
		 var self = this;
		 if(!this.fontnamepopup)
		 {	 
			var name = new popoup({width:"200px",title:"����"});
            this.fontnamepopup = name.container;
			with(name.container){
				style.left = getobjpos(o,1) +"px";style.top  = getobjpos(o,0) + o.offsetHeight +"px";
			};
			 for(var i = 0;i<this.fontsizedata .fontname.length;i++)
			 {
				 create("a",$$(name.container,"div")[1],function(elm){
					 with(elm){className="n";setAttribute("href","javascript:void(0);");
					 innerHTML=self.fontsizedata.fontname[i];}
					 addListener(elm,"click",Bind(self,self.Execa,[self.fontsizedata.fontname[i],"fontname"]));
					 addListener(elm,'mousedown',BindAsEventListener(self,self.Bubble));	
				 })	
			 }	 					  
		 }else
		 {
			 this.fontnamepopup.style.display = "block";
		 }
		 this.Fpop = Bind(this,this.Hide);
         addListener(this.ed,'click',this.Fpop);
		 addListener(document,'mousedown',this.Fpop);	 
	 },
	 makebody :function(o,w,t,f,n){
		 if(!o)
		 {
		     var self = this;
			 this[n]= new popoup({width:w,title:t});		 
			 this[n].pos();
			 $$(this[n].container,"div")[1].innerHTML = "<div style=' margin-top:6px; margin-left:10px'><span >���ӵ�ַ</span>��<input style='width:200px;' type='text' /></div><div style='text-align:center; padding-top:15px;'><img src='http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220836549.p.gif'>��<img src='http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220726721.p.gif'></div>"			 
			 this[n].elm = [$$(this[n].container,"input")[0],$$(this[n].container,"img")[0],$$(this[n].container,"img")[1]];
			 this[n].elm[0].focus()
			 addListener(this[n].elm[1],'click',Bind(this,this.Execa,[null,f]));
			 addListener(this[n].elm[2],'click',function(){self.lightbox.Close();self[n].Close();});
		 }
		 else
		 {
			 with(this[n]){pos();Show();elm[0].value="";elm[0].focus();}
		 }		 
	 },
	 Addtable:function(){
		 if(isIE)
		 {
			  !this.isfocus&&this.iframe.contentWindow.focus();
			  this.rang = this.ed.selection.createRange();
		 }	 
		 this.lightbox.Show();
		 if(isIE)this.rang = this.ed.selection.createRange(); 
		 if(!this.tablepopup)
		 {	 
		     var self = this;
			 this.tablepopup = new popoup({width:"300px",title:"������"});
			 this.tablepopup.pos();
			 $$(this.tablepopup.container,"div")[1].innerHTML = "<div style='margin-left:30px; margin-top:7px;'>������<input style='width:50px; height:13px' type='text' />��������<input style='width:50px;height:13px' type='text' /></div><div style=' margin-left:30px; margin-top:7px;'>���Ŀ�ȣ�<input style='width:50px; height:13px' type='text' /> px</div><div style=' margin-left:30px; margin-top:7px;'>���еĸ߶ȣ�<input style='width:50px; height:13px' type='text' /> px<div style='text-align:center; margin-left:30px; margin-top:7px;'><img src='http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220836549.p.gif'>��<img src='http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220726721.p.gif'></div>"	
			 var o = $$(this.tablepopup.container,"input");
			 this.tablepopup.elm = [o[0],o[1],o[2],o[3],$$(this.tablepopup.container,"img")[0],$$(this.tablepopup.container,"img")[1]];
			 addListener(this.tablepopup.elm[4],'click',Bind(this,this.Execa,[null,"CreateTable"]));
			 addListener(this.tablepopup.elm[5],'click',function(){self.lightbox.Close();self.tablepopup.Close();}); 					  
		 }
		 else
		 {
		     with(this.tablepopup){pos();Show();elm[0].focus();}
		 }
		 this.Fpop = Bind(this,this.Hide);
         addListener(this.ed,'click',this.Fpop);
		 addListener(document,'mousedown',this.Fpop);
	 },
	 Hide:function(o){
		 this.facebgpopup&&(this.facebgpopup.style.display = "none");
		 this.fontsizepopup&&(this.fontsizepopup.style.display = "none");
		 this.fontnamepopup&&(this.fontnamepopup.style.display = "none");
		 this.fontcolorpopup&&(this.fontcolorpopup.style.display = "none");
		 removeListener(this.ed,'click',this.Fpop);
		 removeListener(document,'mousedown',this.Fpop);
	 },
	 Bubble:function(e){
		 if(isIE){e.cancelBubble=true}else{e.stopPropagation()}
	 },
	 Save:function(){
		var testhehe = this.ed.body.innerHTML;
		if ("" == testhehe) {
			return;
		}
		var httpreq = GetXmlHttpObject();
		if (httpreq) {
			httpreq.onreadystatechange=function()
			{
				if (httpreq.readyState==4 && httpreq.status==200)
				{
					document.getElementById("title_check").innerHTML=httpreq.responseText;
					alert(httpreq.responseText);
				}
			}
			var url =  "save_blog.php";
			httpreq.open("POST", url, true);
			httpreq.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			httpreq.send("q=" + "body_save&qq=" + hehe + "&b=" + testhehe);
		}
	 },
	 Execa:function(num,stamp){
		 switch(stamp)
			 {
			     case "fontname":
				 this.fontnamepopup.style.display = "none";
				 this.ed.execCommand('FontName',false,num);  
				 break;
				 case "fontSize":
				 this.fontsizepopup.style.display = "none";
				 this.ed.execCommand("FontSize",false,num+1)
				 break;
				 case  "fontColor":
					 this.fontcolorpopup.style.display = "none";
					 this.ed.execCommand("ForeColor",false,num);
				 break;
				 case  "CreateLink":
					 this.lightbox.Close();this.Linkpopoup.Close();
					 if(this.Linkpopoup.elm[0].value=="")return;
					 if(isIE)
					 {
						 this.rang.execCommand("CreateLink",false,this.Linkpopoup.elm[0].value);
						 this.rang.parentElement().target="_blank ";
					 }
					 else
					 {
						 this.ed.execCommand("CreateLink",false,this.Linkpopoup.elm[0].value);
						 this.rang = this.iframe.contentWindow.getSelection().getRangeAt(0);
						 this.rang.commonAncestorContainer.parentNode.target="_blank ";
					 }
				 break;
				 case  "InsertImage":
					 this.lightbox.Close();this.Imagepopoup.Close();
					 if(this.Imagepopoup.elm[0].value=="")return;
					 isIE?this.rang.execCommand("InsertImage",false,this.Imagepopoup.elm[0].value):this.ed.execCommand("InsertImage",false,this.Imagepopoup.elm[0].value);
				 break;	
				 case  "Expression":
					 this.facebgpopup.style.display = "none";
					 isIE&&(this.iframe.contentWindow.focus());
					 this.ed.execCommand("InsertImage",false,num);	
				 break;	
				 case "CreateTable" :
					 this.lightbox.Close();this.tablepopup.Close();
					 var  o = this.tablepopup.elm;
					 var  p =  null;
					 if(isIE)
					 {
						 this.rang.execCommand("InsertImage",false,"http://xxx.com/xxxxx.gif");
						 p = this.rang.parentElement();
					 }
					 else
					 {
						 this.ed.execCommand("InsertImage",false,"http://xxx.com/xxxxx.gif");
					 	 p = this.iframe.contentWindow.getSelection().getRangeAt(0).commonAncestorContainer;
					 }
					var tab = createtab(o[0].value,o[1].value,function(tab){
					with(tab){cellPadding = 0,cellSpacing = 1,border = 0,bgColor="#CCCCCC",width=o[2].value;}
					},null,function(i,j,td){td.height=o[3].value;td.width=o[2].value/o[1].value; td.style.backgroundColor="#FFFFFF"},this.ed);
					 for(var i = 0;i<p.childNodes.length;i++)
					 {
					     if(p.childNodes[i].nodeName=="IMG"&&p.childNodes[i].src=="http://xxx.com/xxxxx.gif")
						 {p.replaceChild(tab,p.childNodes[i])}
					 }
					 p.insertBefore(this.ed.createElement("br"),tab.nextSibling)
				 break;			 		 				 
			 }
	 }
 });

var popoup = new Class({
	options:{
		width:"200px",
		title:"����"
	},
	initialize:function(options){
		this.container = create("div",document.body);
		Extend(this.options,options);
		this.title = this.options.title;
		with(this.container){
			className = "pp";style.width = this.options.width;
			innerHTML = "<div class='ppt'><span style='margin-left:8px;'></span></div><div style='height:auto; width:auto; padding:7px; background-color:#FFFFFF'></div>";
		}
		this.w = this.container.offsetWidth;
		this.h = this.container.offsetHeight;			
		$$(this.container,"span")[0].innerHTML = this.title;
	},
	pos:function(){
			var self = this;
			 with(this.container){
			 style.left = (Math.max(document.documentElement.scrollWidth,document.documentElement.clientWidth) - self.w)/2+"px"; 
			 style.top =(Math.min(document.documentElement.scrollHeight, document.documentElement.clientHeight)- self.h)/2+document.documentElement.scrollTop+"px";
			 }	 
	},	
	Show:function(){
		this.container.style.display ="";
	},
	Close:function(){
		this.container.style.display ="none";
	}
})
 
  var LightBox = new Class({
	 options:{
	 	 Obj      : null,
		 Color    :	"#fff",
		 Opacity  :	50,
		 zIndex   :	1000
	 },
	 initialize:function(options){
		 this.Obj     = this.options.Obj;
		 this.Color   = this.options.Color;
		 this.Opacity = this.options.Opacity;
		 this.zIndex  = this.options.zIndex;
		 Extend(this, options || {});
		 this.Obj     = this.Obj||document.body.insertBefore(document.createElement("div"), document.body.childNodes[0])
	     with(this.Obj.style){
			display = "none"; zIndex = this.zIndex; left = top = "0px"; position = "fixed"; width = height = "100%"; 
		 };
		if(isIE6){
			this.Obj.style.position = "absolute";
			this._resize = Bind(this, function(){
			this.Obj.style.width = Math.max(document.documentElement.scrollWidth, document.documentElement.clientWidth) + "px";
			this.Obj.style.height = Math.max(document.documentElement.scrollHeight, document.documentElement.clientHeight) + "px"
		   });
		}
		this.Obj.innerHTML = '<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;filter:alpha(opacity=0);"></iframe>';			 
	 },
	 Show:function() {
	    var self = this;
		if(isIE6){ this._resize(); addListener(window,"resize", self._resize); }
		with(this.Obj.style){
			isIE ? filter = "alpha(opacity:" + this.Opacity + ")" : opacity = this.Opacity / 100;
			backgroundColor = this.Color; display = "block";
		};	
     },
	 Close: function() {
		this.Obj.style.display = "none";
     }
 })

 window.onload = function(){
	new Editer($('ss'),new LightBox({Color:"#000000",Opacity:20,zIndex:3}),{height:700,width:890});
	//new Editer($('sss'),new LightBox({Color:"#000000",Opacity:20,zIndex:3}),{height:500,width:760,oninit:function(){
	//this.data[19].exist=false;this.data[18].exist=false;}});
	//new Editer($('ssss'),new LightBox({Color:"#000000",Opacity:20,zIndex:3}),{height:350,width:550,oninit:function(){
	//this.data[19].exist=false;this.data[18].exist=false;this.data[16].exist=false;this.data[20].exist=false;
	//this.data[15].exist=false;this.data[14].exist=false;this.data[3].exist=false;
	//}});
 }
</script>
</body>
</html>

