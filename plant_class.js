class Plant{
  constructor(plant){
    this.plant = plant;
    this.frame = 000;
    this.cap = 008;
    this.level = "Photos/" + plant + "/tile" + this.frame + ".png";
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
