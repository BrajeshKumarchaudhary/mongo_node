var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function (req, res, next) {
    res.render('index', {title: 'Express'});
});


router.get('/name', function (req, res, next) {
    res.send("brajesh kumar");
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
router.get('/things/:id([0-9]{5})', function(req, res){
   res.send('id: ' + req.params.id);
});
/*
 * middlleware
 * 
 */
//Middleware function to log request protocol
router.use('/things', function(req, res, next){
   console.log("A request for things received at " + Date.now());
   next();
});

/*
 * passing data to template
 * 
 */
router.get('/dynamic_view', function(req, res){
   res.render('dynamic', {
      name: "TutorialsPoint", 
      url:"http://www.tutorialspoint.com"
   });
});
module.exports = router;
