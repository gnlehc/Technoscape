<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="py-5">
        @if (Auth::check())
            <h1>Welcome <?php echo $Name; ?></h1>
        @endif
    </div>
</body>
</html>