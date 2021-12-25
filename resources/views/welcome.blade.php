<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso Tailwind</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .imagen{
            background-image: url("{{asset('img/field-g74c45bb4f_1920.jpg')}}");
            height: 400px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<div class="container">

    <table class="table mt-2 w-full border-separate lg:border-collapse table-fixed">
        <thead>
            <tr>
                <th class="w-1/4">Pais</th>
                <th class="w-1/4">Ciudad</th>
                <th class="w-1/2">Descripcion</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>Argentina</td>
                <td>Buenos Aires</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quod, asperiores optio, libero omnis quibusdam beatae voluptates facilis delectus sapiente, voluptas officia amet dolorum quis assumenda eos! Voluptate, magni laudantium.</td>
            </tr>
            <tr>
                <td>Colombia</td>
                <td>Bogota</td>
                <td>Doloribus mollitia inventore quaerat eos nisi dicta porro tempore, sunt expedita assumenda ratione repellendus eius aspernatur sapiente molestias consequatur. Et incidunt autem unde, cupiditate placeat blanditiis quas quo! Suscipit, optio.</td>
            </tr>
            <tr>
                <td>España</td>
                <td>Madrid</td>
                <td>Sequi et, deserunt est dicta expedita beatae debitis ullam error, reiciendis ea vitae tempora dolor provident quia ad tenetur itaque illum inventore totam vero culpa illo suscipit quidem corrupti. Necessitatibus?</td>
            </tr>
        </tbody>
    </table>

</div>
</body>
</html>