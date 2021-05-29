<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>MPO INIT TEST - Task Two</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .center {
            position: fixed;
            top: 50%;
            left: 50%;
            text-align: center;
            margin-top: -50px;
            margin-left: -100px;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal center">
    <div class="max-w-md mx-auto bg-blue-400 rounded-xl overflow-hidden md:max-w-2xl flex items-center justify-center mb-10">
        By PHP:
        @foreach($result as $res)
        {{ $res }}
        @endforeach
    </div>
    <div id="taskTwoJs" class="max-w-md mx-auto bg-blue-400 rounded-xl overflow-hidden md:max-w-2xl flex items-center justify-center">
        <!-- Showed By JS -->
    </div>
</body>

</html>
<script>
    let numberData = [1, -1, 3, -4, 5, -2, 7, 4, 2]
    let positiveNumberOnly = numberData.filter(num => num > -1).sort()

    document.getElementById("taskTwoJs").innerHTML = "By JS: " + positiveNumberOnly
</script>