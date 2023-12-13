// Java Script
let str1="";
function cal(n){
    if(n!="AC" && n!="DEL" && n!="="){
        document.getElementById("show").innerHTML+=n;
        str1=str1+n;
    }
    else if(n=="AC"){
        document.getElementById("show").innerHTML="";
    }
    else if(n=="DEL"){
        var l=str1.length;
        str1=str1.slice(0,l-1)
        document.getElementById("show").innerHTML=str1;
    }
    else if(n=="="){
        str1=eval(str1);
        document.getElementById("show").innerHTML=str1;
        }
    
}	
