

$("#sendMail").on("click", function(){
    // Необходимо получить все значения из формы
    let email = $("#email").val().trim();
    let name = $("#name").val().trim();
    let phone = $("#phone").val().trim();
    let message = $("#message").val().trim();

    // Необходимо сделать проверку
    if(email == "") {
        $("#error-mes").text("Введите E-mail");
        return false;
    } else if (name == "") {
        $("#error-mes").text("Введите Имя");
        return false;
    } else if (phone == "") {
        $("#error-mes").text("Введите номер телефона");
        return false;
    } else if (message.length < 5) {
        $("#error-mes").text("Введите сообщение не менее 5 символов");
        return false;
    }

    $("#error-mes").text("");

    // Подключаем ajax
    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: { 'name': name, 'email': email, 'phone': phone, 'message': message},
        dataType: 'html',
        // делаем кнопку неактивной
        beforeSend: function() {
            $("#sendMail").prop("disabled", true);
        },
        success: function(data) {
            if(!data) {
                alert('Были ошибки, сообщение не отправлено');
            } else {
                $("#mail-form").trigger("reset");
            }
            $("#sendMail").prop("disabled", false);
        }
    });

});