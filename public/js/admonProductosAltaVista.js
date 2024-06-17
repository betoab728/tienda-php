window.onload = function() {
    document.getElementById("libro").style.display = "none";
    document.getElementById("curso").style.display = "none";
  
    //detectamos el cambio en el select
    document.getElementById("tipo").onchange = function() {
      if (this.value==1) {
        document.getElementById("libro").style.display = "none";
        document.getElementById("curso").style.display = "block";
      } else if(this.value==2) {
        document.getElementById("libro").style.display = "block";
        document.getElementById("curso").style.display = "none";
      } else {
        document.getElementById("libro").style.display = "none";
        document.getElementById("curso").style.display = "none";
      }
    }
  }