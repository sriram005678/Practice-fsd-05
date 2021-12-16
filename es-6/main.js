//var vs let : difference:

var a = 10; //global variable//

function add(b){
    return a+b; //local variable 'b' is not used outside bcas 
    
}

c = add(10);

console.log(c);


function add(){
    let d =70; 
}

console.log(d); // not worked becas it's local variable.


if(a>5){        // if is a block so 
    var d = 20;  // it's global variable
    let e = 30;  // it's local variable
}


console.log(d);
console.log(e);


// arrow method

const pi = 3.17;
function add(b){
    return b + pi;
}

c = add(50);
console.log(c);

//arrow method

let add = b => b+pi;
c = add(50);
console.log(c);




// default argument

function add(b, pi=3.14){
    return b + pi;
}
c = add(10);
console.log(c);



function add(b=10, pi){
    return b + pi;
}
c = add(3);
console.log(c);