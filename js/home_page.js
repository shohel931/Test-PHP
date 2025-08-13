// Preloder Script
   document.addEventListener("DOMContentLoaded", function(){
        setTimeout(function(){
            document.getElementById("preloder").style.display = "none";
            document.getElementById("main-content").style.display = "block";
        }, 2000);
    });