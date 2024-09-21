const IP_PRICE = document.getElementById('price');
const IP_DURATION = document.getElementById('duration');
const formataNumeroPreco = (numero) => {

	const price = Number(numero).toFixed(2).split('.');
	const numbers = price[0];
	const decimals = price[1] > 0 && price[1] < 9 ? price[1] + '0' : price[1];
	const formatedValue = 'R$ ' + numbers + ',' + decimals;

	return formatedValue;
};

window.addEventListener('load', function () {
	IP_PRICE.value = formataNumeroPreco(IP_PRICE.value);
	IP_DURATION.dispatchEvent(new Event('input'));
});

IP_PRICE.addEventListener('input', function () {
	let priceValue = this.value.replace(/[^\d]/g, '');
	let formatedValue = priceValue.slice(0, -2).replace(/\B(?=(\d{3})+(?!\d))/g, '.') + '' + priceValue.slice(-2);
	formatedValue = 'R$ ' + formatedValue.slice(0, -2) + ',' + formatedValue.slice(-2);

	this.value = formatedValue;
});

IP_DURATION.addEventListener('input', function () {
	let durationValue = this.value.replace(/[^\d]/g, '');
	let formatedValue = durationValue + ' min';
	this.value = formatedValue;
});
