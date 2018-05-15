window.alert = function(txt)
{
	var shield = document.createElement("DIV");
	shield.id = "shield";
	shield.style.position = "absolute";
	shield.style.left = "0px";
	shield.style.top = "0px";
	shield.style.width = "100%";
	shield.style.height = document.body.scrollHeight+"px";
	shield.style.background = "#eee";
	shield.style.textAlign = "center";
	shield.style.zIndex = "10000";
	shield.style.filter = "alpha(opacity=40)";
	shield.style.opacity = "0.4";
	var alertFram = document.createElement("DIV");
	alertFram.id="alertFram";
	alertFram.style.position = "absolute";
	alertFram.style.left = "50%";
	alertFram.style.top = "30%";
	alertFram.style.marginLeft = "-150px";
	alertFram.style.marginTop = "-50px";
	alertFram.style.width = "300px";
	alertFram.style.height = "100px";
	alertFram.style.background = "#eee";
	alertFram.style.textAlign = "center";
	alertFram.style.lineHeight = "150px";
	alertFram.style.zIndex = "10001";
	strHtml = "<ul style=\"list-style:none;margin:0px;padding:0px;width:100%\">\n";
	strHtml += " <li style=\"float:none;background:#ccc;text-align:left;padding-left:10px;font-size:14px;font-weight:bold;height:25px;line-height:25px;border:1px solid #ccc;\">设计+</li>\n";
	strHtml += " <li style=\"float:none;background:#fff;text-align:center;font-size:14px;height:100px;line-height:100px;border-left:1px solid #ddd;border-right:1px solid #ddd;\">"+txt+"</li>\n";
	strHtml += " <li style=\"float:none;background:#eee;text-align:center;font-weight:bold;height:25px;line-height:25px; border:1px solid #ddd;\"><input type=\"button\" value=\"确 定\" onclick=\"doOk()\" /></li>\n";
	strHtml += "</ul>\n";
	alertFram.innerHTML = strHtml;
	document.body.appendChild(alertFram);
	document.body.appendChild(shield);
	var c = 0;
	this.doAlpha = function(){
		if (c++ > 20){clearInterval(ad);return 0;}
		shield.style.filter = "alpha(opacity="+c+");";
	}
	var ad = setInterval("doAlpha()",5);
	this.doOk = function(){
		alertFram.style.display = "none";
		shield.style.display = "none";
	}
	alertFram.focus();
	document.body.onselectstart = function(){return false;};
}