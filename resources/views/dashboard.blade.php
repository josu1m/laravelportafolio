<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')

</head>
<body>
    <h2>DASHBOARD</h2>
    <div x-data="{ open: false }">
        <button x-on:click="open = ! open">Toggle Dropdown</button>
     
        <div x-show="open">
            Dropdown Contents...
        </div>
    </div>
</body>
</html>