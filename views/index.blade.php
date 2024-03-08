<div style="width: auto">

</div>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Page</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
<!-- Контент по центру страницы -->
<div class="text-center">
    <h1 class="text-4xl font-bold text-gray-900">Success Install</h1>
    <br>
    <h2 class="text-4xl text-gray-900">PHP Page</h2>
    <br>
    <h3 class="text-2xl text-blue-900 mb-10"><a href="/page.php">Simple page: {{$name}}</a></h3>
    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/page.php">Simple page button</a>
    <br>
    <br>
    <code>{{$data}}</code>
</div>
</body>
</html>
