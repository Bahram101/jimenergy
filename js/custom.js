// document.addEventListener('DOMContentLoaded', function () {
// 	const form = document.getElementById('form');
 
// 	form.addEventListener('submit', formSend);

// 	async function formSend(e) {
     
// 		e.preventDefault();
//         console.log('OK')

// 		let error = formValidate(form);
// 		let formData = new FormData(form);

// 		if (error === 0) {
// 			console.log('ok');
// 			form.classList.add('_sending');
// 			// const response = await fetch('send.php', {
// 			// 	method: 'POST',
// 			// 	body: formData,
// 			// });

// 			// if (response.ok) {
// 			// 	form.reset();
// 			// 	$.fancybox.close();
// 			// 	form.classList.remove('_sending');
// 			// } else {
// 			// 	form.classList.remove('_sending');
// 			// }
// 		}
// 	}

// 	function formValidate(form) {
// 		let error = 0;
// 		let formReq = document.querySelectorAll('._req');

// 		for (let i = 0; i < formReq.length; i++) {
// 			const input = formReq[i];
// 			formRemoveError(input);

// 			if (input.value === '') {
//                 console.log('EMP')
// 				formAddError(input);
// 				error++;
// 			}
// 		}
// 		return error;
// 	}

// 	formAddError = (input) => {
// 		input.parentElement.classList.add('_error');
// 	};
// 	formRemoveError = (input) => {
// 		input.parentElement.classList.remove('_error');
// 	};
// });
