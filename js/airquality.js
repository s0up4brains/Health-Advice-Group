//Define API KEY
apiKey = 'f6cb48ac149fb100cad23dae780eeb9b';

var x = document.getElementById("Geolocation");

function fetchAirQuality(){ //Define Function

    //Recieve user location from Geolocation
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
      } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    
    //Display User Position
    function showPosition(position) {
      x.innerHTML = " Currently Displaying Air Quality Data for current Location: <br><br>Latitude: " + position.coords.latitude + 
      "<br>Longitude: " + position.coords.longitude;
    
    }

    //Geo Location Error Handling
    function showError(error) {
      switch(error.code) {
        case error.PERMISSION_DENIED:
          x.innerHTML = "Please allow Location Access to see the air quality in your area."
          break;
        case error.POSITION_UNAVAILABLE:
          x.innerHTML = "Location information is unavailable."
          break;
      }}
    

      navigator.geolocation.getCurrentPosition(position => {
        const { latitude, longitude } = position.coords;
        //Get User Location
   

    fetch("http://api.openweathermap.org/data/2.5/air_pollution?lat=" + latitude + "&lon=" + longitude + "&appid=" + apiKey)
     //Fetch API from OpenWeathermap.org

    .then((response) => response.json())
    .then((data) => {
        //Recieve Data From the JSON file in the API and assign to variables
        const {aqi} = data.list[0].main;
        const {co,no,no2,o3,so2,pm2_5,pm10,nh3} = data.list[0].components;
       
        document.querySelector(".aqi").innerText = (`The Air Rating for the area is: ${aqi}`),
        document.querySelector(".co").innerText = (`Сoncentration of CO (Carbon monoxide): ${co} $ μg/m3`),
        document.querySelector(".no").innerText = (`Сoncentration of NO (Nitrogen monoxide): ${no} μg/m3`),
        document.querySelector(".no2").innerText = (`Сoncentration of NO2 (Nitrogen dioxide): ${no2} μg/m3`),
        document.querySelector(".o3").innerText = (`Сoncentration of O3 (Ozone): ${o3} μg/m3`),
        document.querySelector(".so2").innerText = (`Сoncentration of SO2 (Sulphur dioxide): ${so2} μg/m3`),
        document.querySelector(".pm2_5").innerText = (`Сoncentration of PM2.5 (Fine particles matter): ${pm2_5} μg/m3`),
        document.querySelector(".pm10").innerText = (`Сoncentration of PM10 (Coarse particulate matter): ${pm10} μg/m3`),
        document.querySelector(".nh3").innerText = (`Сoncentration of NH3 (Ammonia): ${nh3} μg/m3`);

    });    


      fetch("http://api.openweathermap.org/data/2.5/air_pollution/forecast?lat=" + latitude + "&lon=" + longitude + "&appid=" + apiKey)
     //Fetch API from OpenWeathermap.org

    .then((response) => response.json())
    .then((data) => {
      for (i=0;i<14;i++){
        //Recieve Data From the JSON file in the API and assign to variables
        const {aqi} = data.list[i].main;       
        document.querySelector(".aqi" + (i+1)).innerText = (`${aqi}`);

      }
    });    
  });
}