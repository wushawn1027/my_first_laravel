<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box {
            width: 1000px;
            height: 700px;
            border: 2px blue dashed;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }
        h1 {
            color: blue;
            font-weight: bolder;
        }
        .innerbox {
            width: 800px;
            height: 30px;
            display: flex;
            justify-content: space-between;
        }
        span {
            font-weight: bolder;
        }
        input {
            border: 2px green dashed;
        }
        button {
            color: blue;
            font-weight: bolder;
            font-size: 20px;
            background-color: aqua;
            border: 2px green solid;
        }
        #result {
            width: 300px;
            height: 30px;
            border: 2px blue dashed;
            text-align: center;
            line-height: 30px;
        }
        table {
            width: 700px;
        }
        table, th, td {
            border: 2px aqua dashed;
        }
        th , td {
            text-align: center;
            font-size: 23px;
        }
        
    </style>
</head>
<body>
    <div class="box">
        <h1>BMI 計算機</h1>
        <h3>身體質量指數 (Body Mass Index，簡稱BMI)是公認用來估計肥胖程度的方法</h3>
        <h3>BMI = 體重 (公斤) / 身高的平方 (公尺)</h3>
        <div class="innerbox">
            <span>我的身高 : </span><input id="height" type="number"><span>公分</span>
            <span>我的體重 : </span><input id="weight" type="number"><span>公斤</span>
            <button id="calc">計算</button>
            <button id="reset">重新填寫</button><br>
        </div>
        <div id="result"></div>
        <table>
            <thead>
                <tr>
                    <th colspan="3">BMI值</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>男性</td>
                    <td>女性</td>
                </tr>
                <tr>
                    <td>體重過輕</td>
                    <td>＜20</td>
                    <td>＜19</td>
                </tr>
                <tr>
                    <td>正常範圍</td>
                    <td>20~25</td>
                    <td>19~25</td>
                </tr>
                <tr>
                    <td>體重過重</td>
                    <td>25~30</td>
                    <td>25~30</td>
                </tr>
                <tr>
                    <td>肥胖</td>
                    <td>30~40</td>
                    <td>30~40</td>
                </tr>
                <tr>
                    <td>病態肥胖</td>
                    <td>＞40</td>
                    <td>＞40</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <script>
        // var ht;
        // var wt;
        // var BMI = wt / ht * ht;
        var ht = document.querySelector('#height');
        var wt = document.querySelector('#weight');
        var result = document.querySelector('#result')
        var calc = document.querySelector('#calc');
        var reset = document.querySelector('#reset');

        calc.addEventListener('click',function(){
            // var ht = (htSub.value * 1) / 100;
            // var wt = wtSub.value * 1 ;
            var BMI = wt.value / ((ht.value / 100) ** 2);
            result.innerHTML = BMI.toFixed(2) ;  // toFixed() 可把Number四捨五入為指定小數位數的數字。
        })
            reset.addEventListener('click',function(){
                ht.value="";
                wt.value="";
                result.innerHTML="";
        })

        



    </script>
</body>
</html>