var f=document.getElementById("sa");
var data=new XMLHttpRequest();
data.open('GET','https://learnwebcode.github.io/json-example/animals-1.json',true);
data.onload=function()
{
	var mydata=JSON.parse(data.responseText);
	f.innerhtml = mydata[0];
};
ourRequest.send();