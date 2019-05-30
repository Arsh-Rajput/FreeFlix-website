var myvar=new XMLHttpRequest();
myvar.open('GET','myjason.php');
myvar.onload()=function()
{
	var data=myvar.responseText;
	document.getElementById('sa').innerhtml=data[0];

};
data.send();