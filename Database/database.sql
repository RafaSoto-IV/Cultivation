DROP TABLE if exists Plants;
DROP TABLE if exists Users;
DROP TABLE if exists Collections;

CREATE TABLE Plants (
id          INT,
plantName   TEXT,
img         TEXT,
season      TEXT,
growthWeeks INT,
difficulty  TEXT,
plantInfo   TEXT,
climate     TEXT,
waterQTY    TEXT,
sunlightHRs INT,
location    TEXT,
size        TEXT,
plantType   TEXT,
PRIMARY KEY (id)
);

@@ -15,40 +25,99 @@ pswd        VARBINARY(10),
PRIMARY KEY (userName)
);

CREATE TABLE Collections (
userName    VARBINARY(10),
id          INT
)

INSERT INTO Plants VALUES
    (
        1, 
        'Corn', 
        '../Photos/Plants/corn.png', 
        'Summer',
        7,
        'Medium',
        'Warm',
        'Wet',
        12,
        'Outdoors',
        'Large',
        'Vegetable',
        'Known scientifically as zea mays, corn is an annual crop that takes approximately 7-8 weeks to mature. Corn needs full sunlight to grow well, and requires lots of water and warm growing conditions.'
    ),
    (
        2, 
        'Kale', 
        '../Photos/Plants/kale.png', 
        'Spring',
        8,
        'Hard',
        'Cool',
        'Wet',
        6,
        'Both',
        'Medium',
        'Vegetable',
        'Known scientifically as brassica oleracea, kale is an early spring or late summer crop that take approximately 8-10 weeks to mature. Kale is very labor intensive and requires consistent watering and feeding. Kale is best grown in cooler regions.'
    ),
    (
        3, 
        'Parsnip', 
        '../Photos/Plants/parsnip.png', 
        'Spring',
        16,
        'Easy',
        'Cold',
        'Medium',
        8,
        'Outside',
        'Medium',
        'Root',
        'Known scientifically as pastinaca sativa, parsnips are an early spring crop that take approximately 16 weeks to mature. Parsnips need full or partial sunlight, and are great for colder climate regions.'
    ),
    (
        4, 
        'Rhubarb', 
        '../Photos/Plants/rhubarb.png', 
        'Fall',
        5,
        'Medium',
        'Moderate',
        'Medium',
        10,
        'Both',
        'Medium',
        'Vegetable',
        'Known scientifically as rheum rhabarbarum, rhubarb is a perennial crop that takes approximately 5 weeks to mature. Rhubarb is very pest resistant, although weeding is required to keep the plant healthy. Rhubarb needs plenty of sunlight and moderate climates.'
    ),
    (
        5, 
        'Tomato', 
        '../Photos/Plants/tomato.png', 
        'Known scientifically as solanum lycopersicum, tomatoes are an early summer crop that take anywhere from 8 to 16 weeks to mature. Tomatoes need full sunlight for at least 6 hours a day, and need warm growing conditions to thrive.'
        'Summer',
        10,
        'Easy',
        'Warm',
        'Medium',
        6,
        'Both',
        'Large',
        'Vine',
        'Known scientifically as solanum lycopersicum, tomatoes are an early summer crop that take anywhere from 10 weeks to mature. Tomatoes need full sunlight for at least 6 hours a day, and need warm growing conditions to thrive.'
    ),
    (
        6, 
        'Tulip', 
        '../Photos/Plants/tulip.png', 
        'Spring',
        3,
        'Hard',
        'Cold',
        'Dry',
        8,
        'Both',
        'Small',
        'Flower',
        'Known scientifically as tulipa, tulips are an early spring crop that need to be planted in the cold. Bulbs can also be refrigerated before planting in warmer areas. Tulips need full or partial sunlight, and are great for colder climate regions.'
    ); 