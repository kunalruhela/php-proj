// $(document).ready(function(){
    function addressFunction() 
    { 
      if (document.getElementById('same').checked) 
      {  
        document.getElementById('sec_street').value=document. 
                 getElementById('street').value;
        document.getElementById('sec_city').value=document. 
                 getElementById('city').value;
        document.getElementById('sec_state').value=document. 
                 getElementById('u_state').value;
        document.getElementById('sec_zip').value=document. 
                 getElementById('zip').value;            
      } 
          
      else
      { 
        document.getElementById('sec_street').value=""; 
        document.getElementById('sec_city').value="";
        document.getElementById('sec_state').value="";
        document.getElementById('sec_zip').value="";

      } 
    } 
