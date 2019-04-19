<html lang="ja"> 
<head> 
<meta charset="utf-8"/> 
<?php
require_once "host/javascript.php";
require_once "host/mobile.php";
$MOBILE =my_test_mobile();
my_noscriptalert();
?>
<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
<link href="xxxtmpdata/photo.css" rel="stylesheet">
<style>	

@font-face {
	font-family : 'Bandal';
	src : url('https://ens.l18.work/res/fonts/Bandal.woff') format('woff'), url('https://ens.l18.work/res/fonts/Bandal.svg#Bandal') format('svg');
/*
	src : url('xxxtmpdata/Bandal.woff') format('woff'), url('xxxtmpdata/Bandal.svg#Bandal') format('svg');
*/
	font-weight : normal;
	font-style : normal;
	font-stretch : normal;
}

body {
	background-color : #eeffff;
	font-family : 'Alice', "Hiragino Mincho ProN", "メイリオ", "Ume Mincho S3", serif;
	margin : 0px;
}
.txt {
<?php
if ($MOBILE) {
	echo "margin : 5px;\n";
	echo "padding : 5px;\n";
} else {
	echo "margin : 50px;\n";
	echo "padding : 50px;\n";
}
?>
	background-color : white;
	font-family : 'Alice', "Yu Gothic", "Hiragino Kaku Gothic ProN", "メイリオ", "Ume Gothic S4", sans-serif;
	line-height : 40px;
	box-shadow : 5px 5px 10px #ead
}
.ko {
	font-family : Bandal;
	font-size : 23px;
	color : #153;
	text-shadow : 2px 2px 8px #f8e;
}
a {
	color : MediumSeaGreen;
	text-decoration : None;
	transition-duration : 5s;
	transition-timing-function : ease-in-out;
}
a:visited {
	color : #108011;
}
a:hover {
	color : White;
	background-color : rgb(255,200,200);
	transition-duration : 5s;
	transition-timing-function : ease-in-out;
	border-width : 20%;
}

#startdash {
	font-family : monospace;
	position:relative;
	top:10px;
	right:20px;
	margin : 1px;
	font-size : 12px;
	float : right;
}

#mikuicon {
	border-radius : 50%;
	float : left;
	position :relative;
	top : -4px;
	left : 35px;
	opacity : 0.39;
	z-index : 2;
}
#jumpsvg {
	position : relative;
	float : left;
	top : -40px;
	left : 10px;
	height : 10px;
	opacity : 0;
	z-index : 2;
	transition-duration : 1s;
	transition-timing-function : ease-in-out;
}
#sakuraicon {
	border-radius : 50%;
	float : right;
	position :relative;
	top : 13px;
	right : 65px;
	opacity : 0.39;
	z-index : 2;
}
#sakuraicon1 {
	border-radius : 50%;
	float : right;
	position :relative;
	top : 23px;
	right : 85px;
	opacity : 0.39;
	z-index : 2;
}
#mypagetitle {
	width : 300px;
	position : absolute;
	zindex : 2;
}
.titleicon {
	transition-duration : 2s;
	transition-timing-function : ease-in-out;
}
</style>

<script>
/*
*/
<?php my_nowloading(1); ?>
</script>
</head> <body>

<script>
myNowloadingInit();
</script>
<a id=startdash href="//luckxa.l18.work/start-dash-diary/#bot">麻衣ねぇがリーダー就任するまでの日記</a>

<div id=mypagetitle>
<img src=xxxtmpdata/miku_400x400.jpg height=40px id=mikuicon class="titleicon"> 
<img src=xxxtmpdata/sakura.svg height=40px id=sakuraicon class="titleicon"> 
<img src=xxxtmpdata/sakura.svg height=40px id=sakuraicon1 class="titleicon"> 
<h1 class="titleicon">my<ruby>流華<rt>るか</rt></ruby>日記</h1>
<!--
-->
<svg id=jumpsvg class=titleicon width=180px height=80px>
 <polygon points="50,3 40,20  60,20" style="fill:lightblue" />
 <rect width=180px height=60px x=0 y=20 rx=20 ry=20 style="fill:lightblue" />
 <a xlink:href="#bot" target="_self">
<text style="font-family:gothic;font-size:20px;text-shadow:3px 3px 4px grey;fill:#fee" transform="rotate(-12 20,40)">
  <tspan x=5px y=55px>一番下へ</tspan>
  <tspan x=70px y=80px>ジャンプw</tspan>
  </text>
 </a>
</svg>
</div>
<div style="height:50px; clear:both;">
</div>

<?php
/*
function txtclass($name, $title, $a) {
	//$a =explode("\n", $s);
	echo '<div class="txt">';
	echo '<h4 class="tag"><a name="'.$name.'">'.$title.'</a></h4>';
	foreach ($a as $n => $p) {
		echo " <p class=\"normal ${n}\" >　${p}</p>\n";
	}
	//echo "<p><a href=\"#\">目次</a></p>\n";
	echo "</div>\n";
}

$data =file_get_contents('./xxxtmpdata/data.txt');
$adata =explode("\n", $data);
$hdata =explode(":", $adata[0]);
$a =array_slice($adata, 1);
txtclass($hdata[0], $hdata[1], $a);
*/
?>
<a name="bot"></a>
<br/><br/>
<script>
myNowloadingFini(2);

/*
 *
 * TxtClass.
 *
 */
function txtclass(id, h, s) {
	a =s.split("\n");
	let txt ="";
	let div =document.createElement("div"); 
	div.id =id;
	div.setAttribute("class", "txt");
	div.setAttribute("id", id);
	let h4 =document.createElement("h4"); 
	h4.setAttribute("class", "tag");
	let aName =document.createElement("a"); 
	aName.setAttribute("name", id);
	aName.innerHTML =h;
    h4.appendChild(aName);
    div.appendChild(h4);
	console.info(a);
	for (i =0; i<a.length; ++i ) {
		let p =document.createElement("p"); 
		p.setAttribute("class", "normal");
		p.innerHTML =a[i];
    	div.appendChild(p);
	}
    document.body.appendChild(div);

//XXX db.
<?php
echo "const mobile =" .($MOBILE ? "1" : "0").";";
?>
if (! mobile) {
	let canvas =document.createElement("canvas");
	let img =document.createElement("img");
	img.setAttribute("src", "xxxtmpdata/m.svg");
	canvas.width =543;
	canvas.height =597;
	canvas.getContext("2d").drawImage(img,0,0);
	var b64 =canvas.toDataURL();
	document.querySelector("#imgtest").onclick =function(e) {myOpenPhoto(e,b64,500,500);};
}
}
function myRecvData(q, c, callback) {
	console.log(q);
	var http =new XMLHttpRequest();
	http.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			callback(this.responseText);
		}
	}
	const postdata =["q="+encodeURIComponent(JSON.stringify(q))];
	postdata.push("c="+JSON.stringify(c));
	http.open("POST", "data.php", true);
	http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	http.send(encodeURI(postdata.join("&")));
}

function mySetTxt(a,m,d) {
	myRecvData(`SELECT * FROM luckxa_mydiary_txt WHERE a=${a} && m=${m} && ABS(d-${d}) < 2 ORDER BY a,m,d`, {"user" : "luckxa", "pass" : "MyLinka", "schema" : "l18"}, (data)=> {
			data =JSON.parse(data);
			//console.log(data["error"]);
			var res =data["res"];
			for ( i =0; i<res.length; ++i) {
				txtclass(res[i]["id"], res[i]["h"], res[i]["txt"]);
			}
	});
}
mySetTxt(2019, 4, 19);
/*
*/



/*
 *
 * Visual.
 *
 */
document.querySelector("#mypagetitle").onmouseout = () => {
	document.querySelector(".titleicon").style.opacity = 0.39;
	document.querySelector("h1").style.opacity = 1;
	document.querySelector("#jumpsvg").style.height ="10px";
	document.querySelector("#jumpsvg").style.opacity = 0;
}
<?php
if ($MOBILE) {
	echo 'document.querySelector("#mypagetitle").onclick = () => {';
} else {
		echo 'document.querySelector("#mypagetitle").onmouseover = () => {';
}
		echo "document.querySelector('.titleicon').style.opacity = 1;";
		echo "document.querySelector('h1').style.opacity = 0.1;";
		echo "document.querySelector('#jumpsvg').style.height ='80px';";
		echo "document.querySelector('#jumpsvg').style.opacity = 1;";
	echo "}";
?>


/* View in fullscreen */
function openFullscreen() {
	let elem =document.documentElement;
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  }
}

/* Close fullscreen */
function closeFullscreen() {
  if (document.exitFullscreen && document.fullscreenElement) {
    document.exitFullscreen();
  }
}

function myClosePhoto(e) {
	let tapis =document.getElementById("photo-tapis");
	let img =document.getElementById("photo-img");
	let info =document.getElementById("photo-info");
	if (tapis.style.opacity != 0) {
		info.style.transitionDuration ="1.5s";
		info.style.backgroundColor ="black";
		tapis.style.opacity =info.style.opacity =img.style.opacity =0;
		tapis.style.zIndex =info.style.zIndex =img.style.zIndex =-1;
		img.setAttribute("class", "photoLeave");
		setTimeout(() => {
    		document.body.removeChild(tapis);
			closeFullscreen();
		}, 1500);
		window.onresize ="";
	}
}
function myOpenPhoto(e, data, width, height) {
	var opacity =0.95;

	let tapis =document.createElement("div"); tapis.id ="photo-tapis";
    document.body.insertBefore(tapis, document.body.firstChild);
	tapis.addEventListener("click", myClosePhoto);
	let info =document.createElement("div"); info.id ="photo-info";
    tapis.appendChild(info);
	let img =document.createElement("img"); img.id ="photo-img";
    info.appendChild(img);
	let frame =document.createElement("div"); frame.id ="photo-frame";
    info.appendChild(frame);
	let siteHref =document.createElement("a"); siteHref.id ="photo-site-href";
    frame.appendChild(siteHref);
	let photoHref =document.createElement("a"); photoHref.id ="photo-href";
    frame.appendChild(photoHref);
	let photoText =document.createElement("div"); photoText.id ="photo-text";
    info.appendChild(photoText);
	let tooltip =document.createElement("div"); tooltip.id ="photo-tooltip";
    photoText.appendChild(tooltip);
	let legend =document.createElement("div"); legend.id ="photo-legend";
    photoText.appendChild(legend);
	if(tapis.style.opacity == 0) {
		openFullscreen();
		let totalHeight =screen.availHeight;
		let totalWidth =window.innerWidth;
		tapis.style.backgroundImage ="linear-gradient(black, #113, #333, #311, black)";
		tapis.style.opacity =info.style.opacity =opacity;
		tapis.style.zIndex =img.style.zIndex =info.style.zIndex =5;
		let top =(totalHeight-height)/2-30;
		let left =(totalWidth-width)/2-30;
		info.style.top =top+"px";
		info.style.left =left+"px";
		info.style.width =(width+30)+"px";
		info.style.height =(height+60)+"px";
		info.style.backgroundColor ="white";
		img.style.top =(top+30)+"px";
		img.style.left =(left+15)+"px";
		img.style.width =width+"px";
		img.style.height =height+"px";
		img.setAttribute("src", "xxxtmpdata/m.svg");
		img.setAttribute("class", "photoEnter");
		photoHref.setAttribute("href", "xxxtmpdata/m.svg");
		photoHref.setAttribute("target", "_blank");
		//photoHref.setAttribute("download", "xxxtmpdata/m.svg");
		let imglinkicon ='<img class="data_image" width="12" height="12" alt="star" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAA/klEQVQoU3WQMZIBYRCFX48Jtgi4gZHZmkhAihsQErnBrhvsDRxhCIwQJyA2gRGokuEGEmqr7GrdGPUPNRP98/73/a9fE4zv0w++LeBHpKyp6/mfUN+0ynN6vSiOlk6K//qiVy9AlwlhijFLBJzxMpc+nWdEWK3blc7jge0TcP2AX1MAHqjZHS46APVAyMUAjZaLncXsgXj6NBN5zNhLWj4G6I91QU0KfR3TdiFzOjcg5nsHeyKdQvE0bqV1pIh2/UVf5qsSyDE3o9vT8m+AmhQCY64J0UOq6zJ2zdIhlmCWN5NN/Qa8b+mumAmRh4qjoJYE/H7YoY4RS0gyJ+lXBviSDaxQWVkAAAAASUVORK5CYII=">';
		photoHref.innerHTML ="元の画像"+imglinkicon;
/*
		siteHref.setAttribute("href", "xxxxxxtmpdata/m.svg");
		siteHref.setAttribute("target", "_blank");
		siteHref.innerHTML ="元のサイト"+imglinkicon;
*/
		legend.innerHTML ="my diary";
		tooltip.innerHTML ="my流華日記の<br>QRコード";
		tooltip.style.zIndex =7;
		legend.onmouseover = () => {
			tooltip.style.visibility ="visible";
			tooltip.style.opacity =0.8;
		}
		legend.onmouseout = () => {
			tooltip.style.visibility ="hidden";
			tooltip.style.opacity =0;
		}

		setTimeout(()=>window.onresize =myClosePhoto, 1000);
	}
}

<?php
echo "if (!$MOBILE) {";
	echo "let canvas =document.createElement(\"canvas\");";
	echo "let img =document.createElement(\"img\");";
	echo "img.setAttribute(\"src\", \"xxxtmpdata/m.svg\");";
	echo "canvas.width =543;";
	echo "canvas.height =597;";
	echo "canvas.getContext(\"2d\").drawImage(img,0,0);";
	echo "var b64 =canvas.toDataURL();";
	echo "document.querySelector(\"#imgtest\").onclick =function(e) {myOpenPhoto(e,b64,500,500);};";
echo "}";
?>


</script>
</body></html>
