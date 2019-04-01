var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/ca');
var db = mongoose.connection;
db.on('error', console.error.bind(console, 'connection error:'));
db.once('open', function() {
  console.log('connected successfully');
});

var n='wrgrfvyfv';
if(Nan.n)
{
    console.log('ok');
}
else
{
    console.log('error');
}
exports.m = db;