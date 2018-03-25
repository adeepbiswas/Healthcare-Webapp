var i=0;
function clicky(){
	i=i+1;
	if(i%2!=0)
		document.getElementsByClassName("container1")[0].style.display="block";
	else
		document.getElementsByClassName("container1")[0].style.display="none";
}