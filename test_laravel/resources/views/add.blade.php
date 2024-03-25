<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/add.css')}} ">
</head>

<body>
    <div>
        <h1 id = "label-from">ADD FROM</h1>
        <form action="/customers" method="POST"> 
            @csrf
            <label for="">Name : </label>
            <br>
            <input type="text">
            <br>
            <br>
            <label for="">Phone : </label>
            <br>
            <input type="text">
            <br>
            <br>
            <button class="submit-btn" type="submit">submit</button>
        </form>
    </div>
</body>

</html>