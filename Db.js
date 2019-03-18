var mysql      = require('mysql');
var pool  = mysql.createPool({
  connectionLimit : 10,
  host            :'127.0.0.1',
  user            : 'root',
  password        : 'p@$$W0rd',
  database        : 'sqyglobal'
});

exports.data=pool;