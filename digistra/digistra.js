const Graph = require('node-dijkstra')

const route = new Graph()
var a = { A:1, C:20, D: 4 };
route.addNode('A', { B:1 })
route.addNode('B', a)
route.addNode('C', { B:2, D:1 })
route.addNode('D', { C:1, B:4 ,E:5})

route.path('A', 'D') // => [ 'A', 'B', 'C', 'D' ]
console.log(route.path('A', 'E'));
