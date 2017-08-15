const mysql = require('mysql');
var con = require('../config/config');


var appRouter = function (app) {
    app.get("/", function (req, res) {
        res.send("Hello World");
    });


    app.post("/drones", function (req, res) {
        res.header("Access-Control-Allow-Origin", "*");
        res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
        console.log("in drones");
        con.query('SELECT * FROM drones', (err,rows) => {
        if(err) throw err;
        rows.forEach( (row) => {
        name=(`${row.name}`);

        console.log(`${row.name}`);
        });
        console.log('Data received from Db:\n');
        return res.send(rows);

  });
});


app.post("/search_drones", function (req, res) {
        res.header("Access-Control-Allow-Origin", "*");
        res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
        console.log("in drones search");
        var dronename=req.body.name;
        console.log(dronename);
        con.query('SELECT * FROM drones WHERE name=?', [dronename], (err,rows) => {
        if(err) throw err;
        rows.forEach( (row) => {
        name=(`${row.name}`);

        console.log(`${row.name}`);
        });
        console.log('Data received from Db:\n');
        
        return res.send(rows);

  });
});



app.post("/insert", function (req, res) {
        res.header("Access-Control-Allow-Origin", "*");
        res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
        console.log("in drones insert");
        var no=req.body.no;
        var mx='0';
        var dronename=req.body.name;
        var type=req.body.type;
        var description=req.body.des;
        console.log(dronename);
        con.query('INSERT INTO drones (no, name, max_speed, max_distance, type, description) VALUES (?,?,?,?,?,?);', [no, dronename, mx, mx,type, description], (err,rows) => {
        if(err) throw err;
        console.log('Data insert to  Db:\n');
        
        return res.send(dronename);

  });
});


}

module.exports = appRouter;