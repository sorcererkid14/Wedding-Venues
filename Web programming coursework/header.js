// Header bar
// JQuery
$(window).scroll(function(){ 

    if($(window).scrollTop() >= 10 ){ 

        $("#header").stop().animate({ top: '0' }, 100);
        
   
    } else { 
        
        $("#header").stop().animate({ top: '-100' }, 100);
    } 
}); 


function homePage() {
    window.location.href = 'http://cosn6.sci-project.lboro.ac.uk/f331292wedding/wedding.php';
}

function toggleMenu() {
    var menu = document.getElementById("dropdownMenu");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
}