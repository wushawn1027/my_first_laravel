<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            width: 100%;
            height: 100vh;
            background-color: rgb(240, 95, 95);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .Box {
            width: 500px;
            height: 500px;
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
            background-color: white;
            border: 2px white solid;
            border-radius: 10px;
        }
        .innerbox {
            width: 50%;
            height: 50%;
            border: 5px white solid;
            border-radius: 10px;
        }
        .answer-box {
            opacity: 0.5;
        }

    </style>
</head>
<body>
    <div class="Box"></div>

    <script>
        var level = 2;
        var count = 0;

        game();

        function game(){
            size = 100 / level;

            var box = document.querySelector('.Box');
            box.innerHTML = "";

            var color = `rgb(${Math.floor(Math.random()*256)} , ${Math.floor(Math.random()*256)} , ${Math.floor(Math.random()*256)})`;

            for (i = 0; i < level**2 ; i++) {
                box.innerHTML += `<div class="innerbox" style="width:${size}%; height:${size}%;background-color:${color}"></div>`;
            }

            var answer = Math.floor(Math.random()*level**2)+1;
            var abox = document.querySelector(`.Box .innerbox:nth-child(${answer})`);
            abox.classList.add('answer-box');
            abox.style.opacity = 0.5 + level * 0.05;

            var answerBox = document.querySelector('.answer-box');
            answerBox.addEventListener('click',function(){
                count++;
                if (count == level){
                    level ++ ;
                    count = 0;
                }
                
                game();
            })
        }

    </script>
</body>
</html>