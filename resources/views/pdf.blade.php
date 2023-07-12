<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        form {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        textarea {
            width: 100%;
            height: 200px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0069d9;
        }
    </style>
    </head>

    <body>
        <form action="/generate-pdf" method="post">
            @csrf
            <label for="html">Enter HTML:</label>
            <textarea name="html" id="html"></textarea>
            <button type="submit">Generate PDF</button>
        </form>
    </body>
    </html>
