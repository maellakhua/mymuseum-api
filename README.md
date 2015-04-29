# Mymuseum-API
Open source 2nd Harokopio Code camp application for a museum guide (server side). It uses the Foursquare API in order to provide an easier interface API to the client application.

## Open source software used for this project
- [CodeIgniter] (http://www.codeigniter.com/)
- [REST server for CodeIgniter] (https://github.com/chriskacerguis/codeigniter-restserver) provided by [Chris Kacerguis] (https://github.com/chriskacerguis)
- [Foursquare API] (https://github.com/hownowstephen/php-foursquare) for CodeIgniter provided by [Stephen Young] (https://github.com/hownowstephen)

## How to use
- Clone or download zip as file on your righthand side of the screen.
- Place them on your local WWW server or test them on our own server:   
	http://62.217.125.30/~ellakuser/museumapp/mymuseums/venues \(this might work with an upper case M for you\)
- The API offers the following attributes:  
	1. **lat,lng** - Specify a location in coordinates  
	eg. http://62.217.125.30/~ellakuser/museumapp/mymuseums/venues/lat/37.9756556/lng/23.7339464
	2. **location** - Specify a location by name  
	eg. http://62.217.125.30/~ellakuser/museumapp/mymuseums/venues/location/London
	3. **radius** - Define the search radius around a specific location  
	eg. http://62.217.125.30/~ellakuser/museumapp/mymuseums/venues/radius/10000	
	4. **limit** - Limits the number of results  
	eg. http://62.217.125.30/~ellakuser/museumapp/mymuseums/venues/limit/5
	5. **method** - Used method for sorting the results  
	eg. http://62.217.125.30/~ellakuser/museumapp/mymuseums/venues/method/distance
	6. Every posible combination of the above  
	eg. http://62.217.125.30/~ellakuser/museumapp/mymuseums/venues/radius/3000/location/Athens/limit/5
	
## Used API
- Foursquare API

## Future Extentions
- Implement extensive error handling
- Optimize search results and response time


