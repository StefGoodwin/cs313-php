const argumentList = process.argv;
const addThese = argumentList.slice(2,argumentList.length);

let sum = 0;
let solution = addThese.forEach((value) => {
  // convert to a number
  sum += Number(value);
  return sum;
});

console.log(sum);
