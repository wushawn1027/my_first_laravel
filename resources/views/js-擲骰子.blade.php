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
            margin: 0;
            padding: 20px;
            display: flex;
        }
        .box {
            display: flex;
            flex-direction: column;
            margin-right: 10px;
        }
        .btn {
            width: 100px;
            height: 50px;
            font-size: 25px;
            background-color: aqua;
            font-weight: bolder;
            border-radius: 20px;
        }
        #roll {
            color: red;
        }
        #reset {
            color: green;
        }
        .result1 , .result2 {
            height: auto;
            font-size: 25px;
            margin: 5px 5px;
        }
        .result2 {
            color: blue;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div class="box">
        <button class="btn" id="roll">擲骰子</button>
        <button class="btn" id="reset">清空</button>
    </div>
    <div class="result1"></div>
    <div class="result2"></div>
    <script>
        // 骰子遊戲,按下按鈕會一直擲骰子,直到骰子三顆相等時停止
        // 紀錄每次的結果=>輸出
        // 最後輸出一共擲幾次骰子
        
        
        var roll = document.querySelector('#roll');
        var reset = document.querySelector('#reset');
        var result1 = document.querySelector('.result1');
        var result2 = document.querySelector('.result2');
        var A = [];
        roll.addEventListener('click',function(){

            do{
                var dice1 = Math.floor(Math.random() * 6) + 1;
                var dice2 = Math.floor(Math.random() * 6) + 1;
                var dice3 = Math.floor(Math.random() * 6) + 1;
                A.push(dice1.value,dice2.value,dice3.value);
                // console.log(A.length);
                var times = A.length / 3;
                result2.innerHTML = '擲了共 : ' +  times + ' 次!';
                result1.innerHTML += dice1 + ',' + dice2 + ',' + dice3 + '/';
                result1.innerHTML += '<br>';

            }while(!(dice1 == dice2 && dice2 == dice3))
        })

        reset.addEventListener('click',function(){
                window.location.href = window.location.href; // 重新整理
        })
        
        
    </script>
</body>
</html>