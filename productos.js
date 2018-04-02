function showProducto(str) {
      if (str=="") {
        document.getElementById("txtHint").innerHTML="";
        return;
      }
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          var respuesta = this.responseText.split("<br>");
          document.getElementById("modalHeader").innerHTML=respuesta[0];
          document.getElementById("txtHint").innerHTML=respuesta[1];
          document.getElementById("modalImg").src=respuesta[2];
        }
      }
      xmlhttp.open("GET","getProducto.php?q="+str,true);
      xmlhttp.send();
    }