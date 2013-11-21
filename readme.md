# Film Studies

My project built at the [TimesOpen Hack Day][1], held in November 2013.

Displays a list of the top movies at the box office and their leading cast
members, via the [Rotten Tomatoes API][2]. Clicking a cast member's name
displays recent stories about that person from The New York Times, via their
[Article Search API][3].


## Installation

1. Place the repository on a server running PHP. For local development, on a Mac
   running MAMP, this would be `/Applications/MAMP/htdocs/` by default. For me,
   it's `~/localhost`.

2. In `config.php`:

    * Define the URL where your project lives in `BASE_URL`. In my local
      development, this was `http://localhost/nythackday2013/filmstudies`
    * Define your Rotten Tomatoes and NYT API keys (`RT_API_KEY` and
      `NYT_API_KEY`)

3. Open the `BASE_URL` in your browser to see the results.


[1]: http://developers.nytimes.com/events/hack-day/
[2]: http://developer.rottentomatoes.com/
[3]: http://developer.nytimes.com/docs/read/article_search_api_v2
