<?
$APPLICATION->SetAdditionalCSS("/feedbackForm/style.css");
?>
<section class="section" id="feedback_light">
	<div class="wrapperFreeBlock">
		<div class="lightVariant">
			<div class="feedbackBlock wrapperTwoBlock">
				<img class="close" src="/static/img/build/how-to-invest/close.svg" onClick="closeFeedback()"/>
				<div class="feedbackText">
					<div>
						<span class="titleFeedbackTypography feedbackTitle">
							Укажите ваши актуальные данные, и мы свяжемся с вами
						</span><br/>
						<span class="titleFeedbackTypography time">в течение 15 минут</span>
					</div>
					<img class="feedbackImage" src="/static/img/build/how-to-invest/lightMessage.svg"/>
				</div>
				
				<form class="feedbackForm">
					<div class="formInput">
						<label class="labelTypography" id="label_name_light" for="name_light">Ваше имя:</label>
						<input class="input" type="text" name="name" id="name_light" onchange="onChange('name')" placeholder="Введите имя"/>
					</div>
					<div class="formInput">
						<label class="labelTypography" id="label_phone_light" for="phone_light">Ваш телефон:</label>
						<input class="input" type="tel" id="phone_light" name="phone" onchange="onChange('phone')" placeholder="Номер телефона"/>
					</div>
					<div class="formInput">
						<label class="labelTypography" id="label_email_light" for="email_light">Ваш email:</label>
						<input class="input" type="email" id="email_light" name="email" onchange="onChange('email')" placeholder="Адрес электронной почты"/>
					</div>
					<div id="error_light">Введите корректный номер телефона, адрес электронной почты, имя</div>
					<button type="button" class="buttonContainedFeedback buttonSend" onClick="sendMessage()">Отправить заявку</button>
				</form>
			</div>
		</div>	
	</div>
</section>

<section class="section" id="successful_light">
	<div class="wrapperBlockFive">
		<div class="lightVariant" id="test">
			<div class="successfulBlock wrapperTwoBlock">
				<img class="close" src="/static/img/build/how-to-invest/close.svg" onClick="closeSuccessful()"/>
				<div>
					<span class="titleFeedbackTypography">
						Спасибо, ваша заявка отправлена!
					</span>
					<img class="successfulImage" src="/static/img/build/how-to-invest/lightSendMessage.svg"/>
				</div>
				<div class="successfulText">
					<span class="successfulTitleTypography white">Долго ждать?</span>
					<div class="telephone">
						<span class="successfulTypography">Наберите прямо сейчас:</span>
						<a class="tel">+ 0 ( 000 ) 000 00 000</a>
					</div>
					<div>
						<span  class="successfulTypography">Или добавляйтесь в месседжер</span>
						<div class="iconsBlock">
							<img class="icon" src="/static/img/build/how-to-invest/darkWhatsapp.svg"/>
							<img class="viber" src="/static/img/build/how-to-invest/darkViber.svg"/>
							<img class="icon" src="/static/img/build/how-to-invest/darkTelegram.svg"/>
							<img class="icon" src="/static/img/build/how-to-invest/darkEmail.svg"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="feedback_dark">
	<div class="wrapperFreeBlock" >
		<div class="darkVariant">
			<div class="feedbackBlock wrapperTwoBlock">
				<img class="close" src="/static/img/build/how-to-invest/close.svg" onClick="closeFeedback()"/>
				<div class="feedbackText">
					<div>
						<span class="titleFeedbackTypography feedbackTitle">
							Укажите ваши актуальные данные, и мы свяжемся с вами
						</span><br/>
						<span class="titleFeedbackTypography time">в течение 15 минут</span>
					</div>
					<img class="feedbackImage" src="/static/img/build/how-to-invest/darkMessage.svg"/>
				</div>
				
				<form class="feedbackForm">
					<div class="formInput">
						<label class="labelTypography" id="label_name_dark" for="name_dark">Ваше имя:</label>
						<input class="input" type="text" name="name" id="name_dark" onchange="onChange('name')" placeholder="Введите имя"/>
					</div>
					<div class="formInput">
						<label class="labelTypography" id="label_phone_dark" for="phone_dark">Ваш телефон:</label>
						<input class="input" type="tel" id="phone_dark" name="phone" onchange="onChange('phone')" placeholder="Номер телефона"/>
					</div>
					<div class="formInput">
						<label class="labelTypography" id="label_email_dark" for="email_dark">Ваш email:</label>
						<input class="input" type="email" id="email_dark" name="email" onchange="onChange('email')" placeholder="Адрес электронной почты"/>
					</div>
					<div id="error_dark">Введите корректный номер телефона, адрес электронной почты, имя</div>
					<button type="button" class="buttonContainedFeedback buttonSend" onClick="sendMessage()">Отправить заявку</button>
				</form>
			</div>
		</div>
	</div>
</section>
<section id="successful_dark">
	<div class="wrapperBlockFive">
		<div class="darkVariant">
			<div class="successfulBlock wrapperBlockTwo">
				<img class="close" src="/static/img/build/how-to-invest/close.svg" onClick="closeSuccessful()"/>
				<div>
					<span class="titleFeedbackTypography">
						Спасибо, ваша заявка отправлена!
					</span>
					<img class="successfulImage" src="/static/img/build/how-to-invest/sendMessage.svg"/>
				</div>
				<div class="successfulText">
					<span class="successfulTitleTypography question">Долго ждать?</span>
					<div class="telephone">
						<span class="successfulTypography">Наберите прямо сейчас:</span>
						<a class="tel">+ 0 ( 000 ) 000 00 000</a>
					</div>
					<div>
						<span  class="successfulTypography">Или добавляйтесь в месседжер</span>
						<div class="iconsBlock">
							<img class="icon" src="/static/img/build/how-to-invest/whatsappLight.svg"/>
							<img class="viber" src="/static/img/build/how-to-invest/viberLight.svg"/>
							<img class="icon" src="/static/img/build/how-to-invest/telegram.svg"/>
							<img class="icon" src="/static/img/build/how-to-invest/email.svg"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="error">
	<div class="wrapperFreeBlock">
		<div class="redVariant">
			<div class="errorBlock wrapperTwoBlock">
				<img class="errorClose" src="/static/img/build/how-to-invest/close.svg" onClick="closeError()"/>
				<div>
					<span class="titleFeedbackTypography">
						Ошибка отправки
					</span>
					<img class="errorImage" src="/static/img/build/how-to-invest/sendMessage.svg"/>
				</div>
				<div class="errorText">
					<span class="errorTitleTypography">
						Похоже, что при отправке формы возникла проблема. Пожалуйста, повторите попытку позже или обратитесь за помощью в нашу службу поддержки 
						<a href='mailto:hep@bizmal.ru'><span>hep@bizmal.ru</span></a>
					</span>
					<div class="telephone">
						<span class="errorTypography">Наберите прямо сейчас:</span>
						<a class="tel" href="tel:">+ 0 ( 000 ) 000 00 000</a>
					</div>
					<div>
						<span  class="errorTypography">Или добавляйтесь в месседжер</span>
						<div class="iconsBlock">
							<img class="icon" src="/static/img/build/how-to-invest/whatsappWhite.svg"/>
							<img class="viber" src="/static/img/build/how-to-invest/viberWhite.svg"/>
							<img class="icon" src="/static/img/build/how-to-invest/telegramWhite.svg"/>
							<img class="icon" src="/static/img/build/how-to-invest/emailWhite.svg"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">

	let category_id = 0
	let colorVariant = ''
	let colorVariantField = ''
	let feedback = ''
	let successful = ''

	let fields = new Map()
	const regex = { name: /^[\u0400-\u04FF]+$/, email: /^\S+@\S+\.\S+$/, phone: /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{10}$/, }

	function openFeedback(color, category){
		category_id = category
		colorVariant = color
		feedback = document.getElementById(`feedback_${colorVariant}`);
		successful = document.getElementById(`successful_${colorVariant}`);
		feedback.classList.add("active");
		e.stopPropagation()
	}

	function onChange(field, color) {
		colorVariantField = color
		const fieldName = document.getElementById(`${field}_${(color || colorVariant)}`);
		const label = document.getElementById(`label_${field}_${(color || colorVariant)}`);
		const error = document.getElementById(`error_${(color || colorVariant)}`);
	
		if(fieldName.value.match(regex[field])){
			error.classList.remove("active");
			fieldName.classList.remove("error");
			label.classList.remove("error");
			fields.set(field, fieldName.value)
		}else{
			error.classList.add("active");
			fieldName.classList.add("error");
			label.classList.add("error");
			fields.set(field, '')
		}
	}
	function sendMessage(color) {
		successful = document.getElementById(`successful_${(color || colorVariant)}`);
		feedback = document.getElementById(`feedback_${(color || colorVariant)}`);
	
		if(![...fields.values()].some(field => !field)){
		
			const email = fields.get('email') && { "EMAIL": [
					{
						"VALUE": `${fields.get('email') }`,
						"VALUE_TYPE": "WORK"
					}
				],
			};

			const name = fields.get('name') && {"NAME": `${fields.get('name')}`,};

			const phone = fields.get('phone') &&{ "PHONE": [
					{
						"VALUE": `${fields.get('phone')}`,
						"VALUE_TYPE": "WORK"
					}
				]
			};
			
			var myHeaders = new Headers();
			myHeaders.append("Content-Type", "application/json");

			var raw = JSON.stringify({
			"contact": {
				...name,
				"OPENED": "Y",
				"ASSIGNED_BY_ID": 1,
				"TYPE_ID": "CLIENT",
				"SOURCE_ID": "SELF",
				...email,
				...phone,
			},
			"deal": {
				"TITLE": "Заяки от соискателей",
				"OPENED": "Y",
				"ASSIGNED_BY_ID": 1,
				"PROBABILITY": 30,
				"CATEGORY_ID": 16,
				"COMMENTS": "hello world"
			}
			});

			var requestOptions = {
			method: 'POST',
			headers: myHeaders,
			body: raw,
			redirect: 'follow'
			};

			fetch("https://bizmall.top/api/bx24/create_feedback", requestOptions)
			.then(response => response.text())
			.then(result => !!!result.code ? successfullySent() : sendingError() )
			.catch(error => sendingError());
		}
	}

	function successfullySent() {
		feedback.classList.remove("active");
		clear()
		successful.classList.add("active");
	}

	function sendingError() {
		feedback.classList.remove("active");
		clear()
		error.classList.add("active");
	}

	function closeFeedback() {   
		feedback.classList.remove("active");
		clear()
	};

	function closeSuccessful() {   
		successful.classList.remove("active");
	}

	function closeError() {   
		error.classList.remove("active");
	}

	function clear() {
		for(let field in fields){
			document.getElementById(`${field}_${(colorVariantField || colorVariant)}`).classList.remove("error");
			document.getElementById(`label_${field}_${(colorVariantField || colorVariant)}`).classList.remove("error");
		}
		document.getElementById(`error_${(colorVariantField || colorVariant)}`).classList.remove("active");
	}
	
</script>