const express = require('express');
const mon = require('./Mongodb');
console.log(mon);
var formidable = require('formidable');
var fs = require('fs');
const productcontroller = require('../Controllers/ProductController');
const app = express();
app.get('/getProduct',
        function (req, res)
        {
            var data = productcontroller.product.Home(req, res);
            console.log(data);
            res.send(data);
        });
app.get('/fileUpload',
        function (req, res) {
            res.writeHead(200, {'Content-Type': 'text/html'});
            res.write('<form action="http://127.0.0.1:3000/loadfile" method="post" enctype="multipart/form-data">');
            res.write('<input type="file" name="filetoupload"><br>');
            res.write('<input type="submit">');
            res.write('</form>');
            return res.end();
        });
app.post('/loadfile',
        function (req, res) {
            if (req.url == '/loadfile') {
                var form = new formidable.IncomingForm();
                form.parse(req, function (err, fields, files) {
                    var oldpath = files.filetoupload.path;
                    var newpath = '/home/sqyuser/' + files.filetoupload.name;
                    fs.rename(oldpath, newpath, function (err) {
                        if (err)
                            throw err;
                        res.write('File uploaded and moved!');
                        res.end();
                    });
                });
            } else {
                res.writeHead(200, {'Content-Type': 'text/html'});
                res.write('<form action="fileupload" method="post" enctype="multipart/form-data">');
                res.write('<input type="file" name="filetoupload"><br>');
                res.write('<input type="submit">');
                res.write('</form>');
                return res.end();
            }
        });
let port = 3000;
app.listen(port, () => {
    console.log('Server is up and running on port numner ' + port);
});
exports.app = app;