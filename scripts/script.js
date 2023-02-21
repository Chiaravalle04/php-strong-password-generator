const inputRange = document.getElementById('range');

const inputNumber = document.getElementById('number');

inputNumber.innerHTML = inputRange.value;

inputNumber.oninput = () => {

    inputRange.value = inputNumber.value;

}

inputRange.oninput = () => {

    inputNumber.value = inputRange.value;

}