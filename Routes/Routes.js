const express = require('express');
const productcontroller = require('../Controllers/ProductController');
const app = express();
app.get('/getProduct',
        function (req, res)
        {
         var data=productcontroller.product.Home(req,res);
         console.log(data);
         res.send(data);
        });
 let port = 3000;
app.listen(port, () => {
    console.log('Server is up and running on port numner ' + port);
});
exports.app=app;