const mongoose = require('mongoose');

const host = 'localhost';
const port = 27017;
const name = 'ca';
const connectionString = `mongodb://${host}:${port}/${name}`;
mongoose.connect(connectionString);
module.exports=mongoose;