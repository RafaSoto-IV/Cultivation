class Plant{
  constructor(plant){
    this.plant = plant;
    this.frame = 5;
    this.cap = 8;
    this.level = "../Photos/" + plant + "/tile00" + this.frame + ".png";
    console.log(this.plant);
    document.getElementById(this.plant).src = this.level;
  }
  frameup(){
    this.frame += 1;
    limiter();
  }
  framedown(){
    this.frame -= 1;
    limiter();
  }
  limiter(){
    if(this.frame < 0){
      this.frame = 0
    } else if (this.frame > this.cap){
      this.frame = this.cap;
    }
  }
}
