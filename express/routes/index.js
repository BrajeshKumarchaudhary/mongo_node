var express = require('express');
var router = express.Router();

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
   res.render('index', {
      name: "TutorialsPoint", 
      url:"http://www.tutorialspoint.com",
      title:'test_page'
   });
});

//async  test(params, callBack) {
//    var myInit = {
//      method: 'GET',
//      headers: {
//        'Accept': 'application/json',
//        'Content-Type': 'application/json'
//      },
//      body: JSON.stringify(params),
//    };
//    callBack(await callService('url', myInit));
//  }
//async  callService(url, params) {
//    return new Promise((resolve, reject) => {
//      fetch(url, params)
//        .then((response) =>
//          response.json()
//        )
//        .then((responseJson) => {
//          resolve(responseJson);
//        }).catch((reject) => {
//          console.error(reject);
//        })
//    });
//  }

module.exports = router;
