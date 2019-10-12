$("#aboutMeBtn").on("click", function(){
    if (window.innerWidth >= 1670) {
        window.scrollTo({
            top: 850,
            behavior: "smooth"
        })
    }else if (window.innerWidth >= 900) {
            window.scrollTo({
                top:850,
                behavior: "smooth"
            })
    }
})
$("#portfolioBtn").on("click", function(){
    if (window.innerWidth >= 1670) {
        window.scrollTo({
            top: 1715,
            behavior: "smooth"
        })
    }else if (window.innerWidth >= 900) {
        window.scrollTo({
            top:1715,
            behavior: "smooth"
        })
}
})
$("#contactMeBtn").on("click", function(){
    if (window.innerWidth >= 1670) {
    window.scrollTo({
        top: 2600,
        behavior: "smooth"
    })
}else if (window.innerWidth >= 900) {
    window.scrollTo({
        top:2600,
        behavior: "smooth"
    })
}
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
  } else {if (window.innerWidth >= 1330 && window.innerHeight <= 10) {
    document.getElementById("motto").style.top = "-168px";
}else if (window.innerWidth >= 864) {
    document.getElementById("motto").style.top = "-360px";
}else if (window.innerWidth >= 768) {
    document.getElementById("motto").style.top = "-490px";
}
  }
  prevScrollpos = currentScrollPos;
}