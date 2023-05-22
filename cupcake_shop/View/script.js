

document.addEventListener("DOMContentLoaded", function() {
    var navLinks = document.querySelectorAll("nav ul li a");
    
    for (var i = 0; i < navLinks.length; i++) {
      navLinks[i].addEventListener("click", function(event) {
        event.preventDefault();
        var targetSectionId = this.getAttribute("href");
        var targetSection = document.querySelector(targetSectionId);
        
        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: "smooth"
        });
      });
    }
  });

  document.getElementById("redirectButton").addEventListener("click", function() {
    window.location.href = "menu.php"; 
});

document.getElementById("redirectAddEmp").addEventListener("click", function() {
  window.location.href = "empform.php"; 
});

  