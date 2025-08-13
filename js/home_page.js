// Preloder Script
   document.addEventListener("DOMContentLoaded", function(){
        setTimeout(function(){
            document.getElementById("preloader").style.display = "none";
            document.getElementById("main-content").style.display = "block";
        }, 5000);
    });