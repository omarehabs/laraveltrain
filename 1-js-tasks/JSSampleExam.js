//Q1
//1 - What is an Event Loop ?
/**
 * as JS is single thread language and also non blocking I/O
 * the code the would block callback stack if will be executed
 * Web APIs execute it instead of main thread then  WebAPIs push it to callback queue
 * Event Loop is responsable for getting tasks from callback queue to callback stack to get executed
 *
 */

// 2-  How do you add an element at the begining of an array? How do
// you add one at the end?
// to add element at the end we can use push method
const arr = [1, 2, 3];
arr.push(4);
console.log(arr); // outputs  [1,2,3,4]
// or by using splice method
const arr2 = [1, 2, 3];
arr2.splice(arr2.length, 0, 4);
console.log(arr2); // outputs  [1,2,3,4]

// to add element at the beginning we can use splice method
const arr3 = [1, 2, 3];
arr3.splice(0, 0, 4);
console.log(arr3); // outputs  [4,1,2,3]
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------

//Q2
/*
  1- code snippet #1
  outpit = 3
  2- code snippet #2
  output = 5 
  3- code snippet #3
  output = ['baz'] 
  4- code snippet #4
  output = 
          1
          'hello'
          true
  5- code snippet #5
  output = 
            true
            [['carName','Bmw'],['carPrice',1000000]]
*/

// Q3
//1-Create Function sumObjectValues() that will sum all values of
// the fields that contain numbers . ensure that iteration is
// done only over own property of the object

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

/**
 * 2-  Show the execution of 3 asynchronous block of code, one after
       the other in sequence       
 */

function asyncCodeBlocks() {
  setTimeout(() => {
    console.log("first block"), 1000;
  });
  setTimeout(() => {
    console.log("second block"), 2000;
  });
  setTimeout(() => {
    console.log("third block"), 3000;
  });
}
asyncCodeBlocks();

/**
 * 3 -Get the maximum value from a numbers array along with its index
 */

function maxNumber(arr) {
  console.log(arguments)
  let obj = { max: -Infinity };
  for (let n = 0; n < arr.length; n++) {
    if (arr[n] > obj.max) {
      obj.max = arr[n];
      obj.index = n;
    }
  }
  return obj;
}
console.log(maxNumber([1, 2, 3, 6, 0, -2]));

/**
 *4- Write a function which accepts two valid dates and returns the
  difference between them as number of days
 */

function dateDifference(firstDate, secondDate) {
  const diff = new Date (firstDate).getTime() - new Date (secondDate).getTime();

 return diff / (1000 * 60 * 60 * 24);

}
console.log(dateDifference('2000-01-01', '300-01-01'))

//5- Design a Calulator interface for 2 number inputs which can
//perform sum, difference, product and dividend whenever invoked
//on the same interface.

function calculator(n1, n2) {
  return {
    sum: n1 + n2,
    difference: n1 - n2,
    product: n1 * n2,
    dividend: n1 / n2,
  };
}
console.log(calculator(29, 5));


//6- Write a function which can return multiple values from a function
function mulValues (val1, val2) {
  return [val1, val2]
}

//7- Write a function to reverse an array. For Example :
//reverse([1, 2, 3, 4]) ➞ [4, 3, 2, 1]

function revArr(arr) {
  if (arr.length < 2) {
    return arr;
  }
  // easy solution
  //return arr.reverse()
  const arr2 = [];
  for (let i = arr.length - 1; i >= 0; i--) {
    arr2.push(arr[i]);
  }
  return arr2;
}
console.log(revArr([1, 22, 3, 6, 475, -6]));

//8- Write a function that converts an object into an array, where each
//element represents a key-value pair in the form of an array.
//For Example :
//({ a: 1, b: 2 }) ➞ [["a", 1], ["b", 2]]
function convertToArr(obj) {
  //easy solution
  //return Object.entries(obj)

  const keys = Object.keys(obj);
  const values = Object.values(obj);

  return keys.map((e, i) => {
    return [e, values[i]];
  });
}
console.log(convertToArr({ 1: "one", 2: "two", 3: "three" }));
