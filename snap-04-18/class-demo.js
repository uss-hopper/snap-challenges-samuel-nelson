/*
function convertToGrams(weight, units) {

	if(units === "lbs") ;
	{ return weight * 453.592;
	} else if (units === "oz") {
		return weight * 28.349;
	} else if (units === "kg") {
		return weight / 1000;
	} else if (units === "mg") {
		return weight * 1000;
	} else if (units === "g") {
		return weight;
	}

	//	convertPoundstoGrams (weight);
	//	convertKilogramsToGrams(weight);

}


convertToGrams(weight:8, units:"lbs");

function convertPoundstoGrams(weight) {
		// Do math to covert weight from pounds to grams;
		return weight * 453.592;
}


number: 12
i: 12
*/

function sumFactors(number) {
	sum = 0;
	for(i = number; i > 0; i--) {
		if (number % i === 0) {
			sum = i + sum;
		}
	}
	return sum;
}

console.log(sumFactors(number:1));