$("#aboutMeBtn").on("click", function(){
    window.scrollTo({
        top: 850,
        behavior: "smooth"
    })
})
$("#portfolioBtn").on("click", function(){
    window.scrollTo({
        top: 1710,
        behavior: "smooth"
    })
})
$("#contactMeBtn").on("click", function(){
    window.scrollTo({
        top: 2600,
        behavior: "smooth"
    })
})
$("#homeBtn").on("click", function(){
    window.scrollTo({
        top: 0,
        behavior: "auto"
    })
})
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("motto").style.top = "0";
  } else {
    document.getElementById("motto").style.top = "-166px";
  }
  prevScrollpos = currentScrollPos;
}