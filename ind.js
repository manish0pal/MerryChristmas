const tl = gsap.timeline({ defaults: { ease: "power1.out" } });
function callload(){
tl.to(".intro", { y: "-100%", duration: 1.5, delay: 1.5},);
}



var queryString = decodeURIComponent(window.location.search);
queryString = queryString.substring(1);
if(queryString==""){
        queryString="Well Wisher"
}
document.getElementById('setUname').innerHTML = queryString;

function sharebtn(){
        var blur =document.getElementById('card')
        var popup =document.getElementById('popup')
        var btnblur = document.getElementById('shrbtn')
        btnblur.classList.toggle('active')
        popup.classList.toggle('active')
        blur.classList.toggle('active')
}
function sendwhatsapp(){
        console.log("whatsapp");
        var letters = /^[A-Za-z]+$/;
        var uname = document.getElementById('uname').value
        if(uname == ""){
                showsnaker()
              }
              else if(! uname.match(letters)){
                showsnaker()
              }
              else{

                      window.open('whatsapp://send?text=*Special Surprise for you* :   '+'http://manishpal.epizy.com/christmas/?'+uname)
              }
}
function sendfacebook(){
        var letters = /^[A-Za-z]+$/;
        var uname =document.getElementById('uname').value
        if(uname == ""){
                showsnaker()
              }
              else if(! uname.match(letters)){
                showsnaker()
              }
              else{
                      window.open("https://www.facebook.com/sharer/sharer.php?u="+'http://manishpal.epizy.com/christmas/?'+uname)
              }
}
function showsnaker(){
        var x = document.getElementById("snackbar");
        x.classList.toggle('show');
        console.log(x.classList);
  setTimeout(function(){ x.classList.toggle('show');}, 3000);
}

var timer = new Date("Dec 24, 2020 24:00:00").getTime();

  var run= setInterval(function() {
  
  var present = new Date().getTime();
  
  var inBetween= timer - present;
  
  var days = Math.floor(inBetween / (1000 * 60 * 60 * 24));
  
  var hours = Math.floor((inBetween % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  
  var minutes = Math.floor((inBetween % (1000 * 60 * 60)) / (1000 * 60));
 
  
  document.getElementById("days").innerHTML = days;
  
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("mins").innerHTML = minutes;
  
if (inBetween < 0) {
    clearInterval(run);
  }
}, 60);
//Music
document.getElementById("myAudio").play(); 

