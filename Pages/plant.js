class Plant{
  constructor(plant, string){
    this.plant = plant;
    this.plant_name = string;
    this.frame = 0;
    this.cap = 8;
    this.level = "../Photos/" + this.plant_name + "/tile00" + this.frame + ".png";
    console.log(this.level);
    console.log(this.plant_name);
    document.getElementById(this.plant_name).src = this.level;
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

function classify(){
  console.log('??????????');
  plant1 = new Plant(plant1, 'plant1');
}
