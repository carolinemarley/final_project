<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Animation</title> 
    </head> 
    <body> 
        <div id="box" style="width:100px;height:100px;background-color:pink;">
        </div>
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
