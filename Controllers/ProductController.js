var SolrNode = require('solr-node');
var client = new SolrNode({
    host: '127.0.0.1',
    port: '8983',
    core: 'cacore',
    protocol: 'http'
});
var product = {
    Home: function (req, res)
    {
        var strQuery = client.query().q('eid:C4175421');
        client.search(strQuery, function (err, result) {
            if (err) {
                console.log(err);
                return;
            }
//            console.log(result.response);
            return result.response;
        });
    }
};
exports.product = product;
