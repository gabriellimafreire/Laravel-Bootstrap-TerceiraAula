<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap w/ vite</title>

    <!-- Styles-->
    @vite([
        'resources/css/app.css', 
                'resources/js/app.js',
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'node_modules/bootstrap/dist/js/bootstrap.bundle.js' 
    ])
</head>
<body>
    <div class="conatiner py-4 px-3 mx-auto">
        <h1>Hello, Bootstrap and Vite!</h1>
        <button class="btn btn-primary">Primary button</button>
    </div> 
    </body>
</html>