# Mymuseum-API
Open source 2nd Harokopio Code camp application for a museum guide (server side)

## Open source software used for this project
- [CodeIgniter] (http://www.codeigniter.com/)
- [REST server for CodeIgniter] (https://github.com/chriskacerguis/codeigniter-restserver) by [Chris Kacerguis] (https://github.com/chriskacerguis)
- [Foursquare API] (https://github.com/hownowstephen/php-foursquare) for CodeIgniter provided by [Stephen Young] (https://github.com/hownowstephen)

## How to use
- Clone or download zip as file on the low right corner of your screen.
- Place them on your local WWW server or test them on our own server:   
	http://62.217.125.30/~ellakuser/museumapp/Mymuseums/venues \(this might work with a lower case M for you\)
- The API offers the following attributes:  
	1. **lat,lng** - Specify a location in coordinates  
	eg. http://62.217.125.30/~ellakuser/museumapp/Mymuseums/venues/lat/37.57588/lng/27.4563
	2. **location** - Specify a location by name  
	eg. http://62.217.125.30/~ellakuser/museumapp/Mymuseums/venues/location/London
	3. **radius** - Define the search radius around a specific location  
	eg. http://62.217.125.30/~ellakuser/museumapp/Mymuseums/venues/radius/10000	
	4. **limit** - Limits the number of results  
	eg. http://62.217.125.30/~ellakuser/museumapp/Mymuseums/venues/limit/5
	5. Every posible combination of the above  
	eg. http://62.217.125.30/~ellakuser/museumapp/Mymuseums/venues/radius/3000/location/Athens/limit/5
	
## Aggregated APIs
- Foursquare API

## Future Extentions
- Aggregate other APIs
- Implement extensive error handling
- Optimize search results and response time


