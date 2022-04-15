var url = 'https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-23DE7444-DFA4-4A62-8763-63200CBFF4C4';

// 二微陣列
var Cities = [
    // 全部
    ['基隆市', '新北市', '臺北市', '桃園市', '新竹市', '新竹縣', '苗栗縣', '臺中市', '南投縣', '彰化縣', '雲林縣', '嘉義市', '嘉義縣', '臺南市', '高雄市', '屏東縣', '宜蘭縣', '花蓮縣', '臺東縣', '澎湖縣', '金門縣', '連江縣'],
    // 北部
    ['基隆市', '新北市', '臺北市', '桃園市', '新竹市', '新竹縣', '苗栗縣'], 
    // 中部
    ['臺中市', '南投縣', '彰化縣', '雲林縣', '嘉義市', '嘉義縣'],
    // 南部
    ['臺南市', '高雄市', '屏東縣'],
    // 東部
    ['宜蘭縣', '花蓮縣', '臺東縣'],
    // 離島
    ['澎湖縣', '金門縣', '連江縣'],
]

var nowCities; // 處理要顯示的城市
var orgData = {}; // 用來放組織過後的資料
nowCities = Cities[0]; // 一開始設定全部 => 取第0列

fetch_data(); // 取資料

function fetch_data() {
    fetch(url)
    .then(function(response){
        return response.json();
    })
    .then(function(result){
        console.log(result);
        organization_data(result); // 處理資料的組織
        arrange_cities(); // 處理所有選單中的每一個城市
    });
}


// 處理資料
function organization_data(result) {
    var locations = result.records.location; // 所有城市
    // 對每一個城市來處理
    // 箭頭函式
    locations.forEach(location => {
        var locationName = location.locationName; // 取城市名稱
        var loc_wE_t_0 = location.weatherElement[0].time[0];
        var wxCondition = loc_wE_t_0.parameter.parameterName;
        var startTime = loc_wE_t_0.startTime;
        var endTime =loc_wE_t_0.endTime;
        var minT = location.weatherElement[2].time[0].parameter.parameterName;
        var maxT = location.weatherElement[4].time[0].parameter.parameterName;
        var pop = location.weatherElement[1].time[0].parameter.parameterName;
        var ci = location.weatherElement[3].time[0].parameter.parameterName;

       orgData[locationName] = {
           wxCondition: wxCondition, startTime: startTime, endTime: endTime, 
           minT: minT, maxT: maxT, pop: pop, ci: ci,
       }

    });
}



// 處理所有的每一個城市
function arrange_cities() {
    var innerbox = document.querySelector('.containermain');
    innerbox.innerHTML = "";

    nowCities.forEach(function (city, index){
        var cityData = orgData[city]; // 取得陣列中依順序的城市資料
        console.log('cityData',cityData);
        // 放這張城市那片的資料
        innerbox.innerHTML += 
            `<div class="innerbox">
            
                <div class="inner-top">
                    <p class="p-city">${city}</p>
                    <p class="p-st">${cityData.startTime.substr(0, 16).replaceAll('-', "/")}
                   
                    <p class="p-et">${cityData.endTime.substr(0, 16).replaceAll('-', "/")}</p>
                    <p class="p-con">${cityData.wxCondition}</p>
                </div>
                <div class="inner-bottom">
                    <p class="p-t">${cityData.minT}°C ~ ${cityData.maxT}°C</p>
                    <p class="p-pop">${cityData.pop} %</p>
                    <p class="p-ci">${cityData.ci}</p>
                </div>
                <div class="in-innerbox">
                    <img src="/weather-img/pngsucai_1.png" width="50" height="50" alt="">
                </div>
             </div>`;
    });
}
//  ['基隆市', '新北市', '臺北市', '桃園市', '新竹市', '新竹縣', '苗栗縣', '臺中市', '南投縣', '彰化縣', '雲林縣', '嘉義市', '嘉義縣', '臺南市', '高雄市', '屏東縣', '宜蘭縣', '花蓮縣', '臺東縣', '澎湖縣', '金門縣', '連江縣']
/* <p>${cityData.startTime .substr(0, 16)=>保留0~16 .replaceAll('-', "/")=>把-換成/}</p> */
// <p class="p-l">|</p>
