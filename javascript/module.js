// This is a Rectangle Module. 

var length, width;

// This is the object to consist public members. 
// The rest are private members. 
var publicAPI = {
    create: function create(l, w)
    {
        length = l;
        width = w;
    },
    getArea: function getArea()
    {
        return (length * width);
    },
    getPerimeter: function getPerimeter()
    {
        return (2 * (length + width));
    }
};


// create a Rectangle module instance 
//var myRect = Rectangle();
publicAPI.create(5, 4);
console.log("Area: " + publicAPI.getArea());
console.log("Perimeter: " + publicAPI.getPerimeter());

