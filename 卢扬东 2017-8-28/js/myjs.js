  window.onload=function(){
  	   	var dat=new Date();
	   document.getElementById('year').innerHTML=dat.getFullYear();
  	
  	var rt=document.getElementsByClassName("rt")[0];
  	var oI=rt.getElementsByTagName("i");
  	var oLi=rt.getElementsByTagName("li");
  	for(var i=0;i<oLi.length;i++){
  		oLi[i].index=i;
  		oLi[i].onmouseover=function(){
  			for(let j=0;j<oLi.length;j++){
  			oI[j].style.display="none";
  			}
  			oI[this.index].style.display="block";
  		}
  	}
  	
  	var ctn1=document.getElementsByClassName("content1_body")[0];
  	var pro=document.getElementById("print_province");
  	var oA=ctn1.getElementsByTagName('a');
  	for(var i=0;i<oA.length;i++){
  		oA[i].onclick=function(){
  			for(let j=0;j<oA.length;j++){
  			oA[j].className="";	
  			}
  			this.className="active";
  			pro.innerHTML=this.innerHTML;
  		}
  	}
  	 
  	  
  }
 
  
 