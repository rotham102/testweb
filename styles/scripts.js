function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

$("#mobileToggle").on("click", function() {
    $(this).toggleClass('#mobileToggle .overlay');
});