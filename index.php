<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Animal Hunt</title>
<script>
var errorCount = 0;
var imageSelect = 'tiger';
var divSelect = 'tigerdiv';

function hideImage(imageID) {
	alert('sdfsdfs');
    document.getElementById(imageID).style.visibility = 'hidden';
}

function checkPick(pickSelect, nextPick){
	if(pickSelect==imageSelect){
		alert('yes');
	    var divHideName = pickSelect + 'div';
//		alert(divHideName);
	    var divHide = document.getElementById(divHideName);
    	divHide.style.visibility = 'hidden';
	    var divShowName = nextPick + 'div';
//		alert(divShowName);
	    var divShow = document.getElementById(divShowName);
    	divShow.style.visibility = 'visible';
	    var checkName = pickSelect + '_check';
//		alert(checkName);
	    var checkShow = document.getElementById(checkName);
    	checkShow.style.visibility = 'visible';
		imageSelect = nextPick;
	}else{
		alert('no');
//		alert(checkName);
		var xName = pickSelect + '_x';
	    var xShow = document.getElementById(xName);
    	xShow.style.visibility = 'visible';
		alert(xName);
		setTimeout(function(){xShow.style.visibility = 'hidden';}, 1000);
	}
}
</script>
</head>

<body>
<div width="600">
<div style="background-image: url('http://api.pearson.com/dk/v1/images/byyT2TFqcc1sDH'); width:200px; height:175px; float:left;" onclick="checkPick('kangaroo', 'monkey');">
<img src="img/x.png" style="width:200px; height:175px; opacity:0.4;
filter:alpha(opacity=40); visibility:hidden;position:absolute;
left:0px;
top:0px;
z-index:1;" id="kangaroo_x" />
<img src="img/check.png" style="width:200px; height:175px; opacity:0.4;
filter:alpha(opacity=40); visibility:hidden;position:absolute;
left:0px;
top:0px;
z-index:1;" id="kangaroo_check" />&nbsp;</div>
<div
    style="background-image:
           url('http://api.pearson.com/dk/v1/images/2RQEbSKaYQvY6Z'); 
    width:200px; 
    height:175px; float:left;" onclick="checkPick('bear', 'end');">
    <img src="img/x.png" style="width:200px; height:175px; opacity:0.4;
filter:alpha(opacity=40); visibility:hidden;position:absolute;
left:200px;
top:0px;
z-index:1;" id="bear_x" />
<img src="img/check.png" style="width:200px; height:175px; opacity:0.4;
filter:alpha(opacity=40); visibility:hidden;position:absolute;
left:200px;
top:0px;
z-index:1;" id="bear_check" />&nbsp;</div>
<div onclick="checkPick('tiger', 'kangaroo');"
    style="background-image:
           url('http://api.pearson.com/dk/v1/images/H1DKH10y6PR8m8'); 
    width:200px; 
    height:175px; float:left;">
<img src="img/x.png" style="width:200px; height:175px; opacity:0.4;
filter:alpha(opacity=40); visibility:hidden;position:absolute;
left:400px;
top:0px;
z-index:1;" id="tiger_x" />
<img src="img/check.png" style="width:200px; height:175px; opacity:0.4;
filter:alpha(opacity=40); visibility:hidden;position:absolute;
left:400px;
top:0px;
z-index:1;" id="tiger_check" />    
    &nbsp;</div>

<div onclick="checkPick('koala', 'bear');"
    style="background-image:
           url('http://api.pearson.com/dk/v1/images/GwwvErjEBJ7M4X'); 
    width:200px; 
    height:175px; float:left;">&nbsp;</div>
<div onclick="checkPick('otter', 'koala');" 
    style="background-image:
           url('http://api.pearson.com/dk/v1/images/23XapC38TwyCmR'); 
    width:200px; 
    height:175px; float:left;">&nbsp;</div>
<div  onclick="checkPick('monkey', 'otter');"
    style="background-image:
           url('http://api.pearson.com/dk/v1/images/HzeahsZVwf8pTj'); 
    width:200px; 
    height:175px; float:left;">&nbsp;</div>
</div>
<div style="visibility: visible" id="tigerdiv">Tiger</div>
<div style="visibility: hidden" id="kangaroodiv">Kangaroo</div>
<div style="visibility: hidden" id="monkeydiv">Monkey</div>
<div style="visibility: hidden" id="otterdiv">Otter</div>
<div style="visibility: hidden" id="koaladiv">Koala</div>
<div style="visibility: hidden" id="beardiv">Bear</div>
<div style="visibility: hidden" id="enddiv">Congrats!</div>

</body>
</html>
