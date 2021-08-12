# Read me

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
  [link to sign the guest book]
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
[table with first name, last name, zipcode, and city visited, as well as edit and delete buttons]

<footer>
  <p>CSC 174 Advanced Front End Web Development</p>
</footer>

### Choreography
#### Homepage
The "Visit our Cities" heading is shown first because it lets users know that they are looking at a travel site about several different cities.

The navbar is shown next so users know where they are on the site right away and know where they are able to go on the website without having to look around the page.

The hero image visually shows users what the site is about before they begin to read more detailed information below.

The "Our Cities:" heading reinforces the theme of the site introduced in the header and lets users know that the following section is about all the cities, not just one in particular.  The cities in the section below, and everywhere else on the site, are listed in alphabetical order.  Alphabetical order is objective, unlike a hierarchy, and intuitive to users, unlike sorting by location, making it a fitting method of organization for a travel site.

Each city card has a background image that visually represents the city, so users already get a feel for the city.  At the top of the card is the name of the city followed by its state's abbreviation so users know what city the card is about.  Next is a brief paragraph about the city so users have some information to base their navigation off of.

Users typically want a call to action at the end of viewing a page, so the form to sign the guest book was placed last.  The form has an identifying header before asking for personal information.  The input fields started with basic personal information before moving to information necessary for a guestbook.  Finally there is a submit button and a link to the guest book, serving as calls to action.

The course name is placed in the footer because, while knowing the context for the site can be important, it is not essential for learning about visiting the cities.


#### City Pages
The "Visit our Cities: City name" heading is shown first because it lets users know that they are on the same site and what city they will be learning about.

The navbar is shown next so users know where they are on the site right away and know where they are able to go on the website without having to look around the page.

The quick facts section is the first city content shown so that users can quickly and easily get an idea of where the city is and how big it is.  When looking for places to visit, a city's location or size can be an important factor, so users should know that information right away.

The quick facts section has set up users to expect factual information about the city, so the site can seamlessly transition to the history of the city.  A city is founded before other historical events happen in the city, so the City's Founding section precedes the Famous Historical Events section.

The next section should continue the factional trend, while setting up users to learn about visiting the city.  The Life in the City section falls under both categories with informational paragraphs about landscape and weather that give users an idea of what visiting the city will look like.  Landscape is more visual while weather is more experiential, so since landscape will be observed by people visiting the city before the weather it is placed before weather on the site.

Now that users know about the city it makes sense to tell them about visiting the city.  A "Visit City name" header tells users what to expect from the next section, with subheadings for "Places to See," "Places to Eat," and "Places to Stay" providing more specific context below.

People usually pick what places they want to see first when planning a vaction, so the three attractions are listed/pictured first.  After finding places to see, tourists usually find places they want to eat, so restaurants are shown next.  Finally, people want to know where to stay when they are vacation, although it is usually not as high of a priority, so the hotels are pictured/listed last.

Maps are an important part of planning a vacation.  People need to know where to go and where their destinations are in relation to each other.  The map with the places listed marked is placed below the section where the destinations are listed because if they were placed before that section users would have no context for what the markers on the map were for.

Users typically want a call to action at the end of viewing a page, so a link to sign the guest book is placed at the bottom of the page.

The course name is placed in the footer because, while knowing the context for the site can be important, it is not essential for learning about visiting the cities.


#### Sign Guest Book Page
The "Visit our Cities" heading is shown first because it lets users know that they are looking at the same travel site about several different cities.

The navbar is shown next so users know where they are on the site right away and know where they are able to go on the website without having to look around the page.

The "Sign the Guest Book" heading provides context and direction for users.  The input fields started with basic personal information, name and email, before moving to information necessary for a guestbook, where the user is from and where they visited.

Users will most likely want to see the guest book after they have signed it, so a link that says "Go to Guest Book" is placed below the submit button.  The submit button and link both serve as the call to action that users like to see at the end of their browsing.

The course name is placed in the footer because, while knowing the context for the site can be important, it is not essential for learning about visiting the cities.

#### Guest Book Page
The "Visit our Cities" heading is shown first because it lets users know that they are looking at the same travel site about several different cities.

The navbar is shown next so users know where they are on the site right away and know where they are able to go on the website without having to look around the page.

The "Our Guest Book" heading and "See who has visited Chicago, Phoenix, or Ridgewood" subheading provide context for users.  

The table has identifying headers with the information provided in the same order they were listed on the form.  The users' emails were excluded from the table since users have no need to have that information about other people and do not want other people having that information about them.  At the far right of each table row are the edit and delete buttons.  They are placed to the far right because they were not part of the original form and serve as a call to action for users.

The course name is placed in the footer because, while knowing the context for the site can be important, it is not essential for learning about visiting the cities.

### Content Citations
- Chicago
    - History: https://www.history.com/topics/us-states/chicago
- Phoenix:
    - City's Founding: https://www.visitphoenix.com/learn-plan/history/
    - Famous Historical Events: https://www.google.com/amp/s/amp.azcentral.com/amp/82617886
- Ridgewood
    - City's Founding: https://en.wikipedia.org/wiki/Ridgewood,_New_Jersey
    - Famous Historical Events: https://www.ridgewoodlibrary.org/hc-brief-ridgewood-history

## Styling Choices

### Typography

- Arvo font is a serif font that has vibes of a type writer and gives a retro feel to the site. The site is a travel/tourist site encouraging visitors to visit the sities and sign a guestbook, bringing the modern practices of traveling and searching up sites to see a connection to the more retro and less tech-y days of signing guest books and joining a community of travelers. The info about the cities involves a lot of historical information. The font is meant to help portray the blending of modern and callback.

- Montserrat is the font of retro art deco travel posters, giving another subtle nod to the travel of days past.
