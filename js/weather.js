//Define API KEY
apiKey = 'f6cb48ac149fb100cad23dae780eeb9b';

function defaultWeather(){ //Define Function
    var city = "london" //Get Location from user input in search bar

//Current Weather
    fetch("https://api.openweathermap.org/data/2.5/weather?q=" + city + "&units=metric&appid=" + apiKey) //Fetch API from OpenWeathermap.org
    .then((response) => response.json())
    .then((data) => {
        //Recieve Data From the JSON file in the API and assign to variables
        const {description, icon} = data.weather[0];
        const {temp, temp_min, temp_max, pressure, humidity} = data.main;
        const {speed} = data.wind;
        const {all} = data.clouds;
        const {country} = data.sys;


        //Writes variables to HTML Class
        document.querySelector(".writeIcon").src="https://openweathermap.org/img/wn/"+ icon + ".png",
        document.querySelector(".city").innerText = (`${city.toUpperCase()}, ${country}`),
        document.querySelector(".description").innerText = (`${description}`),
        document.querySelector(".temp").innerText = (`${temp}°C`),
        document.querySelector(".temp_range").innerText = (`High of ${temp_max} °C  and low of ${temp_min}°C`)
        document.querySelector(".speed").innerText = (`Wind Speed: ${speed} (m/s)`),
        document.querySelector(".clouds").innerText = (`Cloud Coverage: ${all} %`)

        ; 
    });

    //7 day forecast
    fetch("https://api.openweathermap.org/data/2.5/forecast/daily?q=" + city + "&cnt=14&units=metric&appid=" + apiKey) //Fetch API from OpenWeathermap.org
        .then((response) => response.json())
        .then((data) => {
            for (i=0;i<7;i++){

                const {max, min} = data.list[i].temp;
                const {icon} = data.list[i].weather[0];
                    document.querySelector(".forecastIcon"+(i+1)).src="https://openweathermap.org/img/wn/"+ icon + ".png",
                    document.querySelector(".max" +(i+1)).innerText = (`${max}°C`),
                    document.querySelector(".min" +(i+1)).innerText = (`${min}°C`);

    
            }
    });

}

function fetchWeather(){ //Define Function
    var city = document.getElementById("search-input").value; //Get Location from user input in search bar



    fetch("https://api.openweathermap.org/data/2.5/weather?q=" + city + "&units=metric&appid=" + apiKey) //Fetch API from OpenWeathermap.org
    .then((response) => response.json())
    .then((data) => {
        //Recieve Data From the JSON file in the API and assign to variables
        const {description, icon} = data.weather[0];
        const {temp, temp_min, temp_max, pressure, humidity} = data.main;
        const {speed} = data.wind;
        const {all} = data.clouds;
        const {country} = data.sys;


        //Writes variables to HTML Class
        document.querySelector(".writeIcon").src="https://openweathermap.org/img/wn/"+ icon + ".png",
        document.querySelector(".city").innerText = (`${city.toUpperCase()}, ${country}`),
        document.querySelector(".description").innerText = (`${description}`),
        document.querySelector(".temp").innerText = (`${temp}°C`),
        document.querySelector(".temp_range").innerText = (`High of ${temp_max} °C  and low of ${temp_min}°C`)
        document.querySelector(".speed").innerText = (`Wind Speed: ${speed} (m/s)`),
        document.querySelector(".clouds").innerText = (`Cloud Coverage: ${all} %`)

        ; 
    });

    //14 day forecast
    fetch("https://api.openweathermap.org/data/2.5/forecast/daily?q=" + city + "&cnt=14&units=metric&appid=" + apiKey) //Fetch API from OpenWeathermap.org
        .then((response) => response.json())
        .then((data) => {
            for (i=0;i<14;i++){

                const {max, min} = data.list[i].temp;
                const {icon} = data.list[i].weather[0];
                    document.querySelector(".forecastIcon"+(i+1)).src="https://openweathermap.org/img/wn/"+ icon + ".png",
                    document.querySelector(".max" +(i+1)).innerText = (`${max}°C`),
                    document.querySelector(".min" +(i+1)).innerText = (`${min}°C`);

    
            }
    });

}


