var found_plant = document.getElementsByClassName('plant');
var v;

var countdown = "1:00";
var clock = "01:00";
var count = 0;
var change = true;

var watering = new Audio("watering_can_audio.mp3");
watering.volume = 0.05;
var final_level = new Audio("save-01.wav");
final_level.volume = 0.05;
var timer = setInterval(thirst_meter, 1000)

$(function() {
  reveal = function($frame){
  console.log('choosen '+$frame);

    if($frame==4){
        final_level.play();
    }
    $("#information" + $frame).fadeIn('fast');
  }
})
class Plant{
  constructor(plant, string, cap){
    this.plant = plant;
    this.plant_name = string;
    if(getCookie('rFrame')){
	this.frame = getCookie('rFrame');
	count = getCookie('rFrame');
    	parseInt(count);

	console.log('look at the frame '+ this.frame + ' look at this cookie ' + getCookie('rFrame'));
    } else {
    	this.frame = 0;
    }
    this.cap = cap;
    this.exists = true;
    this.thirsty = false;
    this.level = "../../Photos/" + this.plant_name + "/tile" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
  }
  frameup(){
    if(change){
	this.frame++;
    }
    console.log('look at the frame in frameup '+ this.frame);
    if (this.frame > this.cap){
      this.frame = this.cap;
      // document.getElementById(this.plant_name + 'done').innerHTML = 'DONE!';
      clearInterval(timer);
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
  rhubarb = new Plant(plant, 'rhubarb', 4);
  var x = getCookie('rFrame');
  console.log('this is the cookie fresh from the oven' , x)
  if(x){
	change = false;
	for(var i=0; i < parseInt(x); i++){
		  console.log(rhubarb.frame);
		  rhubarb.frameup();
		reveal(i+1);
	}
  } 

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
  console.log("offsetLeft: " + document.getElementById("rhubarb").offsetLeft, "offsetTop: " + document.getElementById("rhubarb").offsetTop);
  var left = document.getElementById("rhubarb").offsetLeft;
  var top = document.getElementById("rhubarb").offsetTop;
  if(t[0] > top && t[0] < (top + 250)){
    if (l[0] > left && l[0] < (left + 250)) {
      //console.log(found_plant.id);
      var x = getCookie('rhubarb');
	if (x) {
    		//alert('wait some time before watering again! You have ' + countdown + " left");
	} else {
		console.log("cookie not found");
      		water();
	}    }
  }

  v = setTimeout(function(){   var img = document.getElementById('water');
  img.style.transform = 'rotate(0deg)';
  }, 1000);

}

function water(){
  // console.log(rhubarb.plant_name);

  setCookie("rhubarb", "rhubarb", 1*60);
  startTimer(1*60);
  clearTimeout(v);
  rotate();

  watering.play();
  change= true;
  count++;
  console.log(count);

  rhubarb.frameup();
  setCookie("rFrame", count, 1*24*60*60);
  console.log('last saved cookie' + getCookie('rFrame'))
}

function thirst_meter(){
    var x = getCookie('rhubarb');
    if(rhubarb.frame < 4){
        if (x) {
	    console.log('frame'+ rhubarb.frame);

	    clock = getCookie('timerR');

	    startTimer(getCookie('savedTimeR'));

    	    document.getElementById("thirst").innerHTML = "I'm quenched! Please come back later!"
	    + "<br />" + "(" + clock + ")" + "<br />";
        } else {
	    document.getElementById("thirst").innerHTML = "I'm thirsty!" + "<br />";
        }
    } else{
        document.getElementById("thirst").innerHTML = "I'm all grown up! Thanks for your help!" + "<br />";
    }
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
	setCookie("timerR", countdown, duration);	
	setCookie("savedTimeR", timer, duration);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);

}

function rotate(){
  var img = document.getElementById('water');
  img.style.transform = 'rotate(300deg)';

}

