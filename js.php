<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        #box {
            width: 100px;
            height: 100px;
            background-color: pink;
            margin-bottom: 20px;
            transition: left 0.5s ease;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="box"></div>
    <button onclick="moveBox()">Move</button>
    <script>
        function moveBox() {
            var box = document.getElementById("box");
            box.style.position = "relative";
            box.style.left = "100px";
        }
    </script>
</body>
</html>
