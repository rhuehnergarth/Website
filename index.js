
function findChore(nameOfUser){
    var mysql = require('mysql');

    var con = mysql.createConnection({
    host: "localhost",
    user: "id15818364_rhuehnergarth",
    password: "Ck#W<ql{j@3L[Lnu",
    database: "id15818364_whitecastlechores"
    });

    con.connect(function(err) {
        if (err) throw err;
        con.query("SELECT name, address FROM customers Where name = " + nameOfUser, function (err, result, fields) {
            if (err) throw err;
            return result;
        });
    });
}