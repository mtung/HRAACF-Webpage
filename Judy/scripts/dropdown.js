// javascript function written by Marco van Hylckama Vlieg (weblog: http://www.i-marco.nl/weblog/) 

startList = function() {
if (document.all&&document.getElementById) {
navRoot = document.getElementById("nav");
for (i=0; i<navRoot.childNodes.length; i++) {
node = navRoot.childNodes[i];
if (node.nodeName=="LI") {
node.onmouseover=function() {
this.className+=" over";
  }
  node.onmouseout=function() {
  this.className=this.className.replace»
	(" over", "");
   }
   }
  }
 }
}
window.onload=startList;

