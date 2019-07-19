var express = require('express');
var router = express.Router();
//var mongoconnection=require('../connection/Mongodb');
var solrconnection=require('../connection/SolrConfig');
var elasconnection=require('../connection/ElasticConnection');
var controller = require('../Controller/FetchMysql');

/* GET home page. */
router.get('/', function (req, res, next) {
    res.render('index', {title: 'Express'});
});


router.get('/name', function (req, res, next) {
    res.send("brajesh kumar chaudhary");
});
/*
 * Dynamic route
 * 
 */
router.get('/:id([0-9]{5})', function (req, res) {
    res.send('The id you specified is ' + req.params.id);
});
/*
 * dynamic route
 */
router.get('/things/:name/:id', function (req, res) {
    res.send('id: ' + req.params.id + ' and name: ' + req.params.name);
});
/**
 * pattern matching route
 */
router.get('/things/:id([0-9]{5})', function (req, res) {
    res.send('id: ' + req.params.id);
});
/*
 * middlleware
 * 
 */
//Middleware function to log request protocol
router.use('/things', function (req, res, next) {
    console.log("A request for things received at " + Date.now());
    next();
});

/*
 * passing data to template
 * 
 */
router.get('/dynamic_view', function (req, res) {
    var data = dynamic_view(req, res);
    res.render('index',data);
});
function dynamic_view(req, res)
{
    var data = {
        name: "TutorialsPoint",
        url: "http://www.tutorialspoint.com",
        title: 'Test_pages'
    };
    return data;

}
//calling the controller
router.get('/mysqldata',controller.author_list);
router.get('/solr_data/:id',controller.solr_data);
router.get('/elasticdata',controller.elastic_data);


module.exports = router;
