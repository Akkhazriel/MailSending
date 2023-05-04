<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="mt-5 display-5 h3 mb-3 fw-normal">Обратная связь</h1>
        <form id="mail-form" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
            <input type="email" id="email" name="email" placeholder="Email" class="form-control"> <br>
            <input type="text" id="name" name="name" placeholder="Введите ваше имя" class="form-control"> <br>  
            <input type="phone" id="phone" name="phone" placeholder="Введите ваш телефон" class="form-control"><br>
            <textarea name="message" id="message" cols="30" rows="3" class="form-control"></textarea>

            <button type="button" id="sendMail" name="button" class="btn btn-success rounded-pill px-3 mt-3">Отправить</button> <br>
        </form>
    </div>
    
    <div id="error-mes"></div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>