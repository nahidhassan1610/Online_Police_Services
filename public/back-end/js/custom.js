function sub(){
 var nam = document.getElementById("name");
 var rev = document.getElementById("title");
 
  
 var revw = document.getElementById("urrev");
    
 var fac1 = document.getElementById("wifi").checked;    
 var fac2 = document.getElementById("laundry").checked;
    var fac3 = document.getElementById("room service").checked;
    var fac4 = document.getElementById("restaurant").checked;
   
        

    
if(nam.value ===''){
    alert("type ur name");
    nam.focus();
    return false;
}
if(nam.value.length < 7){
    alert("minimum 7 letter");
    nam.focus();
    return false;
}



if(re.value.length < 20){
    alert("title minimum 20 letter");
    pas.focus();
    return false;
}

 

if(revw.value ===''){
    alert("kichu likhen vai");
    mesg.focus();
    return false;
}    
if(fac1 =='' && fac2 =='' && fac3=='' && fac4==''){
    alert("select minimum 1");
    return false;
}    
}