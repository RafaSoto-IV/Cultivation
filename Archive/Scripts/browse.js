var images = new Array(
    "../Photos/Plants/corn.png",
    "../Photos/Plants/kale.png",
    "../Photos/Plants/parsnip.png",
    "../Photos/Plants/rhubarb.png",
    "../Photos/Plants/tomato.png",
    "../Photos/Plants/tulip.png"
);

var names = new Array(
    "Corn",
    "Kale",
    "Parsnip",
    "Rhubarb",
    "Tomato",
    "Tulip"
);

var description = new Array(
    "Known scientifically as zea mays, corn is an annual crop that takes approximately 7-8 weeks to mature. Corn needs full sunlight to grow well, and requires lots of water and warm growing conditions.",
    "Known scientifically as brassica oleracea, kale is an early spring or late summer crop that take approximately 8-10 weeks to mature. Kale is very labor intensive and requires consistent watering and feeding. Kale is best grown in cooler regions.",
    "Known scientifically as pastinaca sativa, parsnips are an early spring crop that take approximately 16 weeks to mature. Parsnips need full or partial sunlight, and are great for colder climate regions.",
    "Known scientifically as rheum rhabarbarum, rhubarb is a perennial crop that takes approximately 5 weeks to mature. Rhubarb is very pest resistant, although weeding is required to keep the plant healthy. Rhubarb needs plenty of sunlight and moderate climates.",
    "Known scientifically as solanum lycopersicum, tomatoes are an early summer crop that take anywhere from 8 to 16 weeks to mature. Tomatoes need full sunlight for at least 6 hours a day, and need warm growing conditions to thrive.",
    "Known scientifically as tulipa, tulips are an early spring crop that need to be planted in the cold. Bulbs can also be refrigerated before planting in warmer areas. Tulips need full or partial sunlight, and are great for colder climate regions."
);

var randomize = new Array(
    0,1,2,3,4,5
);

function test() {
    var cards = document.getElementsByClassName("plantCard");
    seed = shuffle(randomize);
    for (var i=0; i<seed.length; i++) {
        cards[i].querySelector("img").src = images[seed[i]];
        cards[i].querySelector("h4").innerHTML = names[seed[i]];
        cards[i].querySelector("p").innerHTML = description[seed[i]];
    }
}

function shuffle(array) {
    var remaining = array.length;
	var temp, random;

	while (remaining > 0) {
		random = Math.floor(Math.random() * remaining);
		remaining -= 1;
		temp = array[remaining];
		array[remaining] = array[random];
		array[random] = temp;
	}

	return array;
}