<!DOCTYPE html>
<html>

<head>
    <title>Форма</title>
</head>

<body>
    <h1>Заполните форму</h1>
    <form action="/store_form" method="POST">
        <?php echo csrf_field(); ?>
        <label for="first_name">Имя:</label>
        <input type="text" id="first_name" name="first_name"><br><br>

        <label for="last_name">Фамилия:</label>
        <input type="text" id="last_name" name="last_name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <button type="submit">Отправить</button>
    </form>
</body>

</html><?php /**PATH D:\Виктория\Курсы\Laravel\my-app\resources\views/form.blade.php ENDPATH**/ ?>