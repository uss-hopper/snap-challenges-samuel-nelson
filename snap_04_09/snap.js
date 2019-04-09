/**
 * Take two numbers and multiply them.
 *
 * @param int firstNumber One number to multiply.
 * @param int secondNumber The other number to multiply.
 * @return int The product of the two numbers.
 */
function mulitplyNumbers(firstNumber, secondNumber) {
	return firstNumber * secondNumber;
}

let myNumber = -5
let firstNumber = 29;

console.log(firstNumber);

console.log(mulitplyNumbers(myNumber, 5));
console.log(mulitplyNumbers(2, 5));
console.log(mulitplyNumbers(-1, 5));
console.log(mulitplyNumbers(6, 5));

console.log(firstNumber);


/**
 * Take two names and concatenate them into a full name.
 *
 * @param string firstName The given name to concatenate.
 * @param string lastName The family name to concatenate.
 * @return string The full name of our person.
 */

function getFullName(firstName, lastName) {
	return firstName + ' ' + lastName;
}

let myFirstName = 'Barry';

console.log(getFullName(myFirstName, 'Schulzetenberg'));
console.log(getFullName('Paul', 'Schulzetenberg'));

let myFirstName = 'Susanna';

console.log(getFullName(myFirstName, 'Schulzetenberg'));