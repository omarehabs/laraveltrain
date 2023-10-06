// page 1.1
// "Merceds-benz Cls"

//page 1.2
//undefiend
// showing alert with hello world

//page 1.3
//0
// false
// 25

//+++++++++++++++++++++++++===================

//page 2
//  error
//  1 then raisding an error
// 6

//page 3
//6
//5
//3
//2
//1
//4

//Q2
//

function sumObjectValues(obj) {
  const values = Object.entries(obj);
  let sum = 0;
  values.forEach((element) => {
    if (!isNaN(parseFloat(element[1]))) {
      sum += element[1];
    }
  });
  return sum;
}
const obj = { prop1: 1, prop2: 5, prop3: "not number" };
console.log(sumObjectValues(obj)); // outputs 6

// 3- Compute The Factorial Of 5 Hint : Do not use loops
function fact(num) {
  if (num < 2) {
    return 1;
  }
  num = num * fact(num - 1);
  return num;
}
console.log(fact(4));

//4- write a function called fizzbuzz that will accept no arguments
function fizzbuzz() {
  for (let i = 1; i < 101; i++) {
    if (i % 3 === 0 && i % 5 === 0) console.log("FizzBuzz");
    if (i % 3 === 0 && !(i % 5 === 0)) console.log("Fizz");
    if (!(i % 3 === 0) && i % 5 === 0) console.log("Buzz");
  }
}
fizzbuzz();

