function searchProduct(){
    console.log('connected');
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
    
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
    //    alert(xmlhttp.responseText);
       console.log(xmlhttp.responseText);// you will see OKKK in console
    }
}
    xmlhttp.open("GET","search",true); 
    xmlhttp.send();
} 