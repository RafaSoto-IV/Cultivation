var found_plant = document.getElementsByClassName('plant');
var timer = setInterval(check, 3000)
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
    this.level = "../../Photos/" + this.plant_name + "/tile" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
  }
  frameup(){
    this.frame += 1;
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

  //console.log(l[0], t[0])

	if(t[0] > 400 && t[0] < 650){
    if (l[0] > 0 && l[0] < 250) {
      //console.log(found_plant.id);
      water()
    }
  }

}

function water(){
  // console.log(parsnip.plant_name);
  parsnip.frameup();
}
