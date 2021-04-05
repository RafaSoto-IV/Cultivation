class Plant{
  constructor(plant, string, cap){
    this.plant = plant;
    this.plant_name = string;
    this.frame = 0;
    this.cap = cap;
    this.level = "../Photos/" + this.plant_name + "/tile" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
  }
  frameup(){
    this.frame += 1;
    if (this.frame > this.cap){
      this.frame = this.cap;
      document.getElementById(this.plant_name + 'done').innerHTML = 'DONE!';
    }
    this.level = "../Photos/" + this.plant_name + "/tile" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
    console.log(document.getElementById(this.plant_name));
  }
  framedown(){
    this.frame -= 1;
    if(this.frame < 0){
      this.frame = 0;
    }
    this.level = "../Photos/" + this.plant_name + "/tile" + this.frame + ".png";
    document.getElementById(this.plant_name).src = this.level;
  }
}

function classify(){
  plant1 = new Plant(plant1, 'plant1', 8);
  plant2 = new Plant(plant2, 'plant2', 14);
  plant3 = new Plant(plant3, 'plant3', 21);
}
