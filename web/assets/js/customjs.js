function displayRangeValue()
{
	var label = document.getElementById("rangeValueDisplayed");
	var inputRange = document.getElementById("review_rate");
	label.textContent = inputRange.value;
}