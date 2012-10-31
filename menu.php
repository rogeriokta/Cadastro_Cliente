<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<style type="text/css">
   body{padding:20px; font-size:14px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
   h2 {font-weight:bold; color:#000099; margin:10px 0px; }
   p span {color:#006600; font-weight:bold; }
   a, a:link, a:visited {color:#0000FF;}
   textarea {width: 100%; padding: 10px; margin: 10px 0 15px 0; font-size: 13px; font-family: Consolas,monospace;}
   textarea.html {height: 300px;}
   p {margin: 0 0 10px 0;}
   code, pre {font-family: Consolas,monospace; color: green;}
   ol li {margin: 0 0 15px 0;}
</style>

</head>

<body>
<style type="text/css">#cssmenu{
	border:none;
	border:0px;
	margin:0px;
	padding:0px;
	font-family:verdana,geneva,arial,helvetica,sans-serif;
	font-size:14px;
	font-weight:bold;
	color:8e8e8e;
	}
#cssmenu ul{
	background:url(menu_assets/images/menu-bg.gif) top left repeat-x;
	height:43px;
	list-style:none;
	margin:0;
	padding:0;
	}
	#cssmenu li{
		float:left;
		padding:0px 8px 0px 8px;
		}
	#cssmenu li a{
		color:#666666;
		display:block;
		font-weight:bold;
		line-height:43px;
		padding:0px 25px;
		text-align:center;
		text-decoration:none;
		}
		#cssmenu li a:hover{
			color:#000000;
			text-decoration:none;
			}
	#cssmenu li ul{
		background:#e0e0e0;
		border-left:2px solid #f68618;
		border-right:2px solid #f68618;
		border-bottom:2px solid #f68618;
		display:none;
		height:auto;
		filter:alpha(opacity=95);
		opacity:0.95;
		position:absolute;
		width:225px;
		z-index:200;
		/*top:1em;
		/*left:0;*/
		}
	#cssmenu li:hover ul{
		display:block;
		}
	#cssmenu li li {
		display:block;
		float:none;
		padding:0px;
		width:225px;
		}
	#cssmenu li ul a{
		display:block;
		font-size:12px;
		font-style:normal;
		padding:0px 10px 0px 15px;
		text-align:left;
		}
		#cssmenu li ul a:hover{
			background:#949494;
			color:#000000;
			opacity:1.0;
			filter:alpha(opacity=100);
			}
	#cssmenu p{
		clear:left;
		}	
	#cssmenu .active > a{
		background:url(menu_assets/images/current-bg.gif) top left repeat-x;
		color:#ffffff;
		}
	#cssmenu .active > a:hover {
		color:#ffffff;
		}
		</style>
<div id='cssmenu'>
<ul>
   <li class='active '><a href='menu.html'><span>Home</span></a></li>
   <li class='has-sub '><a href='#'><span>Clientes</span></a>
      <ul>
         <li><a href='cadastro-cliente.php'><span>Cadastro</span></a></li>
         <li><a href='listagem-clientes.php'><span>Listagem</span></a></li>
      </ul>
   <li><a href='#'><span>Sair</span></a></li>
</ul>
</div>
<div style="clear:both; margin: 0 0 30px 0;">&nbsp;</div>


</body>
</html>