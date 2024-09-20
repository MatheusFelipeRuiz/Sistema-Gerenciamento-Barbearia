const IP_PRICE = document.getElementById('price');
const IP_DURATION = document.getElementById('duration');

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


