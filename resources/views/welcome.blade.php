<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d8a648;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        h1 {
            font-size: 9vw;
            color: #333;
        }
        p {
            margin: 0;
            font-size: 2vw; /* Adjust the size as needed */
            color: #6e4c1a;
        }
        .button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 2vw; /* Adjust the size as needed */
            background-color: #080808;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #26292c; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <h1>Practical Examination</h1>
    <p>CRUD FUNCTIONALITY IN LARAVEL FRAMEWORK</p>
    <a href="/students" class="button">Go to Student's Information</a>
</body>
</html>
