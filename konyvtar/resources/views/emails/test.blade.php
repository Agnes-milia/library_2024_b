<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email küldés</title>
    <style>
        img{
            width: 80%;
        }

        div{
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
    <div>
        <img src="https://st3.depositphotos.com/2633985/37520/v/1600/depositphotos_375202318-stock-illustration-cat-waving-hand-black-silhouette.jpg" alt="cica">
    </div>
</body>
</html>