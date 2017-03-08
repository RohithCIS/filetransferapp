function ajax(a,b,e,d,f,g,c){
 c=new XMLHttpRequest;
 !f||(c.upload.onprogress=f);
 !g||(c.onprogress=g);
 c.onload=b;
 c.open(e||'get',a);
 c.send(d||null)
}

var canvas,pre;
window.onload=function(){
 canvas=document.getElementsByTagName('canvas');
 pre=document.getElementsByTagName('pre')[0];
 document.forms[0].onsubmit=function(e){
  e.preventDefault();
  ajax('upload.php',rdy,'post',new FormData(this),progressup)
 }
}
function progressup(e){
 animate(e.loaded/e.total,canvas[0],'rgba(127,227,127,1)')
}
// function progressdown(e){
//  animate(e.loaded/e.total,canvas[1],'rgba(227,127,127,1)')
// }
function rdy(e){
 pre.textContent=this.response;
}

function animate(p,C,K){
var c=C.getContext("2d"),
x=C.width/2,
r=x-(x/4),
s=(-90/180)*Math.PI,
p=p||0,
e=(((p*360|0)-90)/180)*Math.PI;
c.clearRect(0,0,C.width,C.height);
c.fillStyle=K;
c.textAlign='center'; 
c.font='bold '+(x/2)+'px Raleway';
c.fillText(p*100|0,x,x+(x/5));
c.beginPath();
c.arc(x,x,r,s,e);
c.lineWidth=x/2;
c.strokeStyle=K;
c.stroke();
}

