<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/read.css')}} ">
</head>

<body>
    <div class="container">
        <h1 id = "label-from">READ FROM</h1>
        <br>
        <div>
            <label for="">Name : {{$c_data -> c_name}}</label>
            <br>
            
            <br>
            <br>
            <label for="">Phone : {{$c_data -> c_phone}}</label>
            <br>
             
            <br>
            <br>
            <a href="/customers"><button class="back-btn" type="button">back</button></a>
        </div>
    </div>
</body>

</html>