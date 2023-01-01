// var name = "Sakib al hasan";
// alert(name);
// document.write(name, " is my name <br>");
// document.write(1209);

// var num = 20;
// num = toString(num);

// var another = parseFloat(2.45435); //parseInt("100");

// console.log(typeof (num));
// console.log(typeof (another), another);
// console.log(another.toFixed(2));
// console.log(another.toPrecision(6));

// var a, b, c;
// a = "sakib";
// b = "al";
// c = "hasan";
// document.write(a + " " + b + " " + c);
// document.write("Number of character " + a.length + a.charAt(3));

// var inpu = prompt("Enter your name: ");
// document.write("<br> You entered: " + inpu);


// var num1 = prompt("Enter first name: ");
// var num2 = prompt("Enter 2nd number: ");

// num1 = parseInt(num1, 10);
// num2 = parseInt(num2, 10);

// document.write("Summation is " + (num1 + num2));


// var num = 5;
// if (num % 2 == 0)
//     console.log("Even");
// else if (num == 5) {
//     console.log("is 5");
//     console.log("Herre");
// }
// else
//     console.log("odd");

// var digit = prompt("Enter a digit:");
// switch (digit) {
//     case "0":
//         console.log("Zero");
//         break;
//     case "1":
//         console.log("ono");
//         break;
//     case "2":
//         console.log("two");
//         break;
//     default:
//         console.log("Not a digit");

// }



// for (var i = 0; i < 10; i++) {
//     if (i == 1) {
//         //console.write("it is continue");
//         //continue;
//     }
//     if (i == 3)
//         break;
//     document.write("<br><h1> Bangladesh<\h2> <br>");
// }
// num = 2;
// document.write(num > 0 ? "positive" : "negative");
// document.write(num > 0 ? "positive" : num == 0 ? "zero" : "negative");


// function square(num) {
//     document.write("square is " + num ** 2);
// }

// function sum(num1, num2) {
//     return num1 + num2;
// }

// square(2);
// document.write("<br>" + sum(2, 5));

// //iifes imidiate invoke functio
// (function square(num) {
//     document.write("square is " + num ** 2);
// })(6);

// //expression function
// var dis = function square(num) {
//     document.write("square is " + num ** 2);
// }
// dis(4);


//array

// var names = new Array(5);       //size doesn't matter
// names[0] = "sakib";
// names[1] = "al";
// names[2] = "al"
// names[3] = "al"
// names[4] = "al"
// document.write(names[3]);
// names.push("hasan");
// document.write(names[5]);
// document.write(names.length);
// names.pop();
// names.shift();
// document.write(names.length);
// names.unshift("firsat nam");
// document.write(names.length);
// names.splice(2, 1, "a", "d");
// console.log(names);
// names.splice(1, 2);
// console.log(names);

// var new_a = ["i", "am", "nothing"];
// new_a = new_a.concat(names);
// console.log(new_a);

// var numbers = [1, 45, 21, 8, 5, 6];
// numbers.sort(function (a, b) {
//     return a - b;
// });//reverse b-a
// console.log(numbers);

// var run = [["sakib", 23], ["al", 100], ["hasan", 34]];

// function higRun(info) {
//     var name = info[0][0];
//     var highRun = info[0][1];

//     for (var i = 1; i < 3; i++) {
//         if (highRun < info[i][1]) {
//             name = info[i][0];
//             highRun = info[i][1];
//         }
//     }

//     document.write(name + " " + highRun);
// }

// higRun(run);