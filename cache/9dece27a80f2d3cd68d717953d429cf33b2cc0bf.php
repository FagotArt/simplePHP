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
    <h1 class="text-4xl font-bold text-gray-900">Simple  page</h1>
    <br>
    <h2 class="text-4xl text-gray-900 mb-10"><?php echo e($name); ?></h2>
    <br>
    <br>
    <code>
        <a href="/">Go to index</a>
    </code>

</div>
</body>
</html>

<?php /**PATH /var/www/html/views/page.blade.php ENDPATH**/ ?>