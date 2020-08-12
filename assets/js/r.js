function toggle_visibility(id1, id2) {  
    var e = document.getElementById(id1);
    var e2 = document.getElementById(id2);
    if(e.style.display == 'none') {                
       e.style.display = 'block'; //block will show the conain in div            
       e2.style.display = 'none';
    }
    else {
       e.style.display = 'none';            
       e2.style.display = 'block';
    }              
 }