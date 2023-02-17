## About Project

This BackEnd project allows you to consult weather data by selecting the country and the required city, shows specific data, geolocation and search history.

## Installation

1. Run ```composer install``` to install dependencies.

2. Copy the ```.env.example``` file and create a new file called ```.env```.

3. In the ```.env``` file, change the name of the database to one already created.

4. Run the ```php artisan migrate``` command to create the tables and database required by the application.

5. Run the command ```php artisan db:seed --class=CountriesSeeder``` to insert default data into the 'cities' and 'countries' tables.

6. Run the ```php artisan serve``` command to start the laravel test server.

## Routes

 - **GET**: http://*{localhost:port}*/api/weather/history
 
 Returns the search history with the information of the city and the country
 
 - **GET**: http://*{localhost:port}*/api/city/perCountry/{*city_id*} 
 
 Returns the cities by country sending the parameter ```idCountry: number``` by GET method
 
 - **GET**: http://*{localhost:port}*/api/country/list 
 
Return the countries
 
 - **POST**: http://*{localhost:port}*/api/weather/history/save
 
Receive the ```city_id: number``` and ```timestamp: number``` parameters by POST to store the search history data.
