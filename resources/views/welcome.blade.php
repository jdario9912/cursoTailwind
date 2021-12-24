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

    <div class="container mx-auto pt-5 pl-5">
        <div class="w-64 h-64 bg-gray-400 border-8 border-red-800 hover:border-opacity-25 rounded-2xl"></div>

        <div class="divide-y-4 divide-red-500">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A odio necessitatibus officia voluptates laudantium voluptatibus sapiente, magnam explicabo sed nam ut quisquam tenetur fugiat unde similique eveniet distinctio exercitationem quos?</p>
            <p>Aliquid, sunt ea repellendus, fugit ullam at quae, quibusdam ipsam eveniet est tempora accusamus fugiat aliquam libero incidunt veniam recusandae tempore labore vitae! Necessitatibus accusantium exercitationem nobis a id minus.</p>
            <p>Magni ut saepe nobis voluptatem eveniet voluptates quam, sed ducimus, tempora eos non, praesentium fugit sequi beatae reprehenderit vel suscipit distinctio ipsam delectus amet ratione. Unde deleniti provident perspiciatis dolorem.</p>
            <p>Nesciunt, voluptatem. Dolores reiciendis cupiditate quasi, minus quis, tempora voluptatibus ipsam asperiores dolorem laboriosam dolor itaque? Ab fuga a error aliquid quibusdam nisi soluta nostrum eaque, possimus harum! Quod, sunt?</p>
            <p>Rem quaerat exercitationem neque ducimus, nisi veritatis officiis aperiam? Vel esse alias totam. Sint id nulla quisquam. Unde accusamus numquam ea, voluptates, nisi quisquam sunt deleniti sed deserunt debitis similique.</p>
            <p>Dolorem libero possimus molestiae incidunt optio, non nemo nisi saepe dicta earum, debitis reiciendis autem suscipit, laudantium dignissimos? Qui atque magni voluptate quam error distinctio dolor. Hic sit dolorum doloremque?</p>
            <p>Veritatis quod quaerat nulla quis laboriosam deleniti, eveniet non perspiciatis! Quasi in, aliquid corporis repudiandae consectetur eveniet provident modi sed eum, asperiores, officiis doloremque placeat facilis porro magnam consequatur quod.</p>
            <p>Nam repudiandae illum, officiis explicabo consequatur, reprehenderit atque saepe delectus esse consectetur neque pariatur blanditiis ab voluptates id. Voluptate obcaecati molestias unde omnis, rerum iure corrupti nulla ipsa ea cumque.</p>
            <p>Rerum modi dolores repudiandae nesciunt enim, totam repellendus quia ut nisi soluta voluptatibus, hic nostrum cum exercitationem ipsa esse molestiae tempore ipsum? Unde sapiente eligendi dolore magnam! Delectus, ad commodi?</p>
            <p>Cumque temporibus quasi rem consectetur libero, omnis eveniet, quia tenetur necessitatibus est unde ut ad odit expedita nihil? Quas deleniti ullam ipsam est, ad eius. Nostrum illo facilis nemo voluptatem.</p>
        </div>

        <nav class="divide-x-2 divide-green-700">
            <a href="">Link 1</a>
            <a href="">Link 2</a>
            <a href="">Link 3</a>
            <a href="">Link 4</a>
            <a href="">Link 5</a>
        </nav>

        <div class="flex justify-center -space-x-14">
            <div class="mix-blend-multiply bg-blue-400  w-11 h-11"></div>
            <div class="mix-blend-multiply bg-pink-400  w-11 h-11"></div>
        </div>

        

    </div>
</body>
</html>