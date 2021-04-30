var found_plant = document.getElementsByClassName('plant');
var watering = new Audio("watering_can_audio.mp3");
var v;
var countdown;
watering.volume = 0.05;
//var timer = setInterval(check, 3000)

$(function() {
  reveal = function($frame){
    $("#information" + $frame).fadeIn('fast');
  }
})
class Plant{
  constructor(plant, string, cap){
    this.plant = plant;
    this.plant_name = string;
    this.frame = 0;
    this.cap = cap;
    this.exists = true;
    this.thirsty = false;
    this.level = "../../Photos/" + this.plant_name + "/tile" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
  }
  frameup(){
    this.frame += 1;
    if (this.frame > this.cap){
      this.frame = this.cap;
      // document.getElementById(this.plant_name + 'done').innerHTML = 'DONE!';
      //clearInterval(timer);
    }else{
      reveal(this.frame);
    }
    this.level = "../../Photos/" + this.plant_name + "/tile" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
    //console.log(document.getElementById(this.plant_name));
  }
  framedown(){
    if(this.frame < 0){
      this.frame = 0;
    } else{
      this.frame -= 1;
    }
    this.level = "../../Photos/" + this.plant_name + "/tile" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
  }
}
function cultivate(plant){
  parsnip = new Plant(plant, 'parsnip', 4);
}

// The event handler function for grabbing the word
function grabber(event) {

   // Set the global variable for the element to be moved
   theElement = event.currentTarget;

   // Determine the position of the word to be grabbed, first removing the units from left and top
   posX = parseInt(theElement.style.left);
   posY = parseInt(theElement.style.top);

   // Compute the difference between where it is and where the mouse click occurred
   diffX = event.clientX - posX;
   diffY = event.clientY - posY;

   // Now register the event handlers for moving and dropping the word
   document.addEventListener("mousemove", mover, true);
   document.addEventListener("mouseup", dropper, true);

}

// The event handler function for moving the word
function mover(event) {
   // Compute the new position, add the units, and move the word
   theElement.style.left = (event.clientX - diffX) + "px";
   theElement.style.top = (event.clientY - diffY) + "px";
}

// The event handler function for dropping the word
function dropper(event) {
   // Unregister the event handlers for mouseup and mousemove

   document.removeEventListener("mouseup", dropper, true);
   document.removeEventListener("mousemove", mover, true);

   check(theElement.style.left, theElement.style.top);

   /*update(theElement.style.left, theElement.style.top, theElement.id, theElement.src)
	*/
}

function check(left, top){

  l = String(left).split("px")
  t = String(top).split("px")

  console.log(l[0], t[0])
  console.log("offsetLeft: " + document.getElementById("parsnip").offsetLeft, "offsetTop: " + document.getElementById("parsnip").offsetTop);
  var left = document.getElementById("parsnip").offsetLeft;
  var top = document.getElementById("parsnip").offsetTop;
  if(t[0] > top && t[0] < (top + 250)){
    if (l[0] > left && l[0] < (left + 250)) {
      //console.log(found_plant.id);
      var x = getCookie('plantWatered');
	     console.log("inside field", x);
	      if (x) {
		        console.log(x);
    		      alert('wait some time before watering again! You have ' + countdown + " left");
	           } else {
		             console.log("cookie not found");
      		         water();
	     }
    }
  }

  v = setTimeout(function(){   var img = document.getElementById('water');
img.style.transform = 'rotate(0deg)';
}, 1000);

}

if( getCookie('plantwatered') === null ) {
    console.log("i am thirsty");
}

function water(){
  // console.log(parsnip.plant_name);
  setCookie("plantWatered", "parsnip", 7);
  startTimer(7);
  clearTimeout(v);
  rotate();

  watering.play();
  parsnip.frameup();
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function startTimer(duration) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        countdown = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

function rotate(){
  var img = document.getElementById('water');
  img.style.transform = 'rotate(300deg)';

}
