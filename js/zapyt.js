// JavaScript Document
//після завантаження веб-сторінки з формою
$(function () {
  // при відправці форми на сервер (id="consultationForm")
  $('#consultationFormElement').submit(function (event) {
    // відмінимо стандартні дії браузера
    event.preventDefault();
    // створимо змінну, яка буде вказувати валідна форма чи ні
    var formValid = true;
    // переберемо всі елементи керування форми(input ) 
    $('#consultationForm input').each(function () {
      //знайдемо предків, що мають клас .form-group (для встановлення success/error)
      var formGroup = $(this).parents('.form-group');      
      //валідація даних за допомогою  HTML5 функції checkValidity
      if (this.checkValidity()) {
        //додамо до formGroup класс .has-success та видалимо .has-error
        formGroup.addClass('has-success').removeClass('has-error');        
      } else {
        //додамо до formGroup класс .has-error та видалимо .has-success
        formGroup.addClass('has-error').removeClass('has-success');        
        //якщо елемент не пройшов перевірку, то відмітимо форму як не валідну  
        formValid = false;
      }
    });
      // якщо форма валідна, то відправляємо форму на сервер (AJAX)
    if (formValid) {
      // отримуємо name, який ввів клієнт
      var first_name = $("#first_name").val();
      // отримуємо email, який ввів клієнт
      var last_name = $("#last_name").val();
      // отримуємо phone, який ввів клієнт
      var phone_number = $("#phone_number").val();
      // отримуємо comment, який ввів клієнт
	    var email = $("#email").val();
       
      // обєкт, через який будемо створювати форму перед відправкою на сервер
      var formData = new FormData();
      // додамо в formData значення 'first_name'
      formData.append('first_name', first_name);
      // додамо в formData значення 'last_name'
      formData.append('last_name', last_name);
      // додамо в formData значення 'phone_number'
      formData.append('phone_number', phone_number);
      // додамо в formData значення 'email'
	    formData.append('email', email);
       
      // технологія AJAX 
      $.ajax({
        //метод передачі запиту - POST
        type: "POST",
        //URL-адреса запиту
        url: "form/zapyt.php",
        //дані, що передаються - formData
        data: formData,
        // не встановлювати тип контенту, оскільки використовуємо FormData
        contentType: false,
        // не обробляти дані formData
        processData: false,
        // відключити кешування даних у браузері
        cache: false,
        //при успішному виконанні запиту		
				
		//у випадку успіху
        success: function (data) {
          $('#error').text('Ваш запит відправлено! Наш менеджер Вам зателефонує!');
          // розбираємо рядок JSON, отриманий від сервера
          var $data =  JSON.parse(data);
          // якщо сервер повернув відповідь success, то дані відправлені
          if ($data.result == "success") {            
          }
		      else {
            // Якщо сервер повернув error, то ...
            $('#error').text('Якщо Ви не хочете вводити дані, зателефонуйте нам!');
			      if ($data.first_name) {
			        //додати до елемента клас .has-error та видалити .has-success
              $('#first_name').parents('.form-group').addClass('has-error').removeClass('has-success');
		          $('#error').text('Ви не ввели імя');
             }
			      if ($data.last_name) {
			        //додати до елемента клас .has-error та видалити .has-success
              $('#last_name').parents('.form-group').addClass('has-error').removeClass('has-success');
              $('#error').text('Ви не ввели прізвище');
		        	}
		      	if ($data.phone_number) {
			        //додати до елемента клас .has-error та видалити .has-success
              $('#phone_number').parents('.form-group').addClass('has-error').removeClass('has-success');
              $('#error').text('Ви не ввели телефон'); 
		        	}
		      	if ($data.email) {
		    	   //додати до елемента  клас .has-error та видалити .has-success
		    	   $('#email').parents('.form-group').addClass('has-error').removeClass('has-success');
                    $('#error').text('Ви не ввели email');
	        		}
           }
         },
         error: function (request) {
          $('#error').text('Виникла помилка ' + request.responseText + ' при відправці даних. Спробуйте зателефонувати нам.');
         }
      });
    }
  });
});