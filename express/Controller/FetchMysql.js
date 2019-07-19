/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var mysql = require("../connection/Db");
var solr = require("../connection/SolrConfig");
var elastic = require("../connection/ElasticConnection");

//defining the controller action

exports.author_list = function (req, res) {
    mysql.data.query('SELECT * from ca_project', function (error, results, fields) {
        if (error)
            throw error;
        res.send(JSON.stringify(results));
    });
}
exports.solr_data = function (req, res)
{
//        console.log(req.params.id);//accessing the request param
    var strQuery = solr.mongo.query().q('eid:C4175421');
    //  var strQuery = client.query.q('*:*&facet.query=eid:sqy_1N&facet=on');
    solr.mongo.search(strQuery, function (err, result) {
        if (err) {
            console.log(err);
            return;
        }
        console.log('Response:', result.response);
        res.send(result.response);
    });
};
//elastic search data
exports.elastic_data = async function (req, res)
{
    const response = await elastic.elas.search({
  index: 'ca_project',
  type: 'Property',
  body: {
    query: {
      match: {
        Ml_num: 'C4322098'
      }
    }
  }
})
 res.send(response.hits.hits);
}