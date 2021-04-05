class Plant{
  constructor(plant, string){
    this.plant = plant;
    this.plant_name = string;
    this.frame = 0;
    this.cap = 8;
    this.level = "../Photos/" + this.plant_name + "/tile00" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
  }
  frameup(){
    this.frame += 1;
    if (this.frame > this.cap){
      this.frame = this.cap;
    }
    this.level = "../Photos/" + this.plant_name + "/tile00" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level
    console.log(document.getElementById(this.plant_name).src);
  }
  framedown(){
    this.frame -= 1;
    if(this.frame < 0){
      this.frame = 0
    }
    this.level = "../Photos/" + this.plant_name + "/tile00" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
  }
}

function classify(){
  plant1 = new Plant(plant1, 'plant1');
}
