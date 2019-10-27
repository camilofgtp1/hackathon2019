new Picker(document.querySelector('.fromDay'), {
	format: 'DD.MM.YYYY',
	text: {
		title: 'Datum auswählen',
	},
}).pick();
new Picker(document.querySelector('.fromTime'), {
	format: 'HH:mm',
	text: {
		title: 'Zeit auswählen',
	},
}).pick();
new Picker(document.querySelector('.toDay'), {
	format: 'DD.MM.YYYY',
	text: {
		title: 'Datum auswählen',
	},
}).pick();
new Picker(document.querySelector('.toTime'), {
	format: 'HH:mm',
	text: {
		title: 'Zeit auswählen',
	},
}).pick();
new Picker(document.querySelector('.regularlyDuration'), {
	format: 'DD.MM.YYYY',
	text: {
		title: 'Datum auswählen',
	},
}).pick();