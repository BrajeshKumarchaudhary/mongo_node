const express = require('express');
const mongocon = require('./SolrConfig.js');
console.log(mongocon.mongo);
const app = express();
app.get('/getProduct',
        function (req, res)
        {
            var strQuery = mongocon.mongo.query().q('eid:sqy_1N');
            //  var strQuery = client.query.q('*:*&facet.query=eid:sqy_1N&facet=on');
            mongocon.mongo.search(strQuery, function (err, result) {
                if (err) {
                    console.log(err);
                    return;
                }
                console.log('Response:', result.response);
                res.send(result.response);
            });
        });
app.listen(3000,
        function () {
            console.log('Example app listening on port 3000!')
        });