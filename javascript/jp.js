function countPasswordLength () {
    let getUserEmailInput = document.getElementsByClassName("createAccPassword").value;
    if (getUserEmailInput.length <= 0) {
        alert("Your password must be at least 8 characters !");
        } else {
            alert("Your`re in !!!");
        }

}


$(document).ready(function(){
        $(".carousel").owlCarousel({
    margin: 10,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1
//                nav: false
            },
            640:{
                items: 3
//                nav: false
            }
        }
    });

});

//function showBurgerMenu() {
//  var x = document.getElementById("burger_links");
//  if (x.style.display === "block") {
//    x.style.display = "none";
//  } else {
//    x.style.display = "block";
//  }
//}

function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}




