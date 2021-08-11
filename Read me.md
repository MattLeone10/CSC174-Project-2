# Read me

This is the read me for project 2. At some point soon I will fill this out with relevant information w/r/t using our website. 



- Pick a CSS framework
  - Should we have our own css in addition to a framework?
- Connect database to functionality


## Information Architecture
### Ontology
#### Domain
- city name
- skyline photo
- state
- US region
- size (area)
- population
- history
- landscape
- weather
- attractions
- restaurants
- hotels
- map
- visitors
- guest book

#### Triples
- City has a name
- City has a skyline photo
- City is located in a state
- City belongs to a specific US region
- City is a certain number of square miles
- City has a population
- City has a history
- Fauna and natural features form a city's landscape
- City has certain weather patterns
- Visitors see a city's attractions
- Visitors eat at restaurants
- Visitors stay in a hotel
- Map shows where attractions are
- Visitors sign a guest book

### Taxonomy
#### Homepage
<head>
    <title>Course name | Assignment</title>
</head>

<header>
    <h1>Visit our Cities</h1>
</header>

<navbar>
  <ul>
    <li>Home</li>
    <li>Chicago</li>
    <li>Phoenix</li>
    <li>Ridgewood</li>
    <li>Sign Guest Book</li>
    <li>Guest Book</li>
  </ul>
<navbar>

[hero image]

<article>
  <h2>Our Cities:</h2>

  [image of something in the city]
  <h3>Chicago, IL</h3>
  [short intro paragraph - about 50 words]

  [image of something in the city]
  <h3>Phoenix, AZ</h3>
  [short intro paragraph - about 50 words]

  [image of something in the city]
  <h3>Ridgewood, NJ</h3>
  [short intro paragraph - about 50 words]
</article>

<aside>
  <h2>Sign the Guest Book</h2>
  [html form with first name, last name, email, zipcode, and city visited as input]
  [link to guest book page that says "Go to Guest Book"]
</aside>

<footer>
  <p>CSC 174 Advanced Front End Web Development</p>
</footer>

#### City Pages
<head>
    <title>Course name | City name</title>
</head>

<header>
    <h1>Visit Our Cities: Phoenix</h1>
    [city skyline photo]
</header>

<navbar>
  <ul>
    <li>Home</li>
    <li>Chicago</li>
    <li>Phoenix</li>
    <li>Ridgewood</li>
    <li>Sign Guest Book</li>
    <li>Guest Book</li>
  </ul>
<navbar>

<article>
  <h2>Quick Facts</h2>
  [pic of the city]
  [unordered list with the city's state, US region, square mileage, and population]

  <h2>History of the City</h2>
  <h3>City's Founding</h3>
  [short paragraph - about 100 words]
  <h3>Famous Historical Events</h3>
  [short paragraph - about 100 words]

  <h2>Life in the City</h2>
  <h3>Landscape</h3>
  [short paragraph - about 50 words]
  <h3>Weather</h3>
  [short paragraph - about 50 words]
  [photo of something related to the city]
</article>

<aside>
  <h2>Visit City name</h2>
  <h3>Places to See</h3>
    [figures of the city's attractions with their names captioned below - 3 figures]
  <h3>Places to Eat</h3>
    [figures of the city's restaurants with their names captioned below - 3 figures]
  <h3>Places to Stay</h3>
    [figures of the city's hotels with their names captioned below - 3 figures]
  [embedded map with attractions, restauants, and hotels marked"]
</aside>

<footer>
  <p>CSC 174 Advanced Front End Web Development</p>
</footer>

#### Sign Guest Book Page
<head>
    <title>Course name | Assignment</title>
</head>

<header>
    <h1>Visit our Cities</h1>
</header>

<navbar>
  <ul>
    <li>Home</li>
    <li>Chicago</li>
    <li>Phoenix</li>
    <li>Ridgewood</li>
    <li>Sign Guest Book</li>
    <li>Guest Book</li>
  </ul>
<navbar>

<h2>Sign the Guest Book</h2>
[html form with first name, last name, email, zipcode, and city visited as input]
[link to guest book page that says "Go to Guest Book"]

<footer>
  <p>CSC 174 Advanced Front End Web Development</p>
</footer>

#### Guest Book Page
<head>
    <title>Course name | Assignment</title>
</head>

<header>
    <h1>Visit our Cities</h1>
</header>

<navbar>
  <ul>
    <li>Home</li>
    <li>Chicago</li>
    <li>Phoenix</li>
    <li>Ridgewood</li>
    <li>Sign Guest Book</li>
    <li>Guest Book</li>
  </ul>
<navbar>

<h2>Our Guest Book</h2>
<p>See who has visited Chicago, Phoenix, or Ridgewood</p>
[table with database information, as well as edit and delete buttons]

<footer>
  <p>CSC 174 Advanced Front End Web Development</p>
</footer>

### Choreography

### Content Citations
- Ridgewood
    - City's Founding: https://en.wikipedia.org/wiki/Ridgewood,_New_Jersey
    - Famous Historical Events: https://www.ridgewoodlibrary.org/hc-brief-ridgewood-history