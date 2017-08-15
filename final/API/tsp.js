var solver = require('node-tspsolver');
var geodist = require('geodist');

var costMatrix = [
    [0, 1, 3, 4,3],
    [1, 0, 2, 3,4],
    [3, 2, 0, 5,1],
    [4, 3, 5, 0,3],
    [4, 3, 5, 3,0]
]

solver
    .solveTsp(costMatrix, true, {})
    .then(function (result) {
        console.log(result); // result is an array of indices specifying the route.
    });


var dist = geodist([41.85, -87.65], [33.7489, -84.3881],{unit: 'meters'});
console.log(dist);
