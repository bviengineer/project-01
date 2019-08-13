// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
$quotes = [];

// Each inner array element should be an associative array
$quotes['Mother Teresa '] = [
    'quote' => 'If you judge people, you have no time to love them!',
    'source' => 'Mother Teresa',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];

$quotes['Ralph Waldo Emerson'] = [
    'quote' => 'A great man is always willing to be little.',
    'source' => 'Ralph Waldo Emerson',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];


$quotes['Plato'] = [
    'quote' => 'The greatest wealth is to live content with little.',
    'source' => 'Plato',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];


$quotes['Nelson Mandela'] = [
    'quote' => 'It always seems impossible until it’s done.',
    'source' => 'Nelson Mandela',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];


$quotes['Theodore Roosevelt'] = [
    'quote' => 'Do what you can, with what you have, where you are.',
    'source' => 'Theodore Roosevelt',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];


$quotes['Henry Ford'] = [
    'quote' => 'If you think you can do a thing or think you can’t do a thing, you’re right.',
    'source' => 'Henry Ford',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];

// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuotes($array){
  foreach ($array as $quote) {
    echo $quote['quote'] . ' --- ' . $quote['source'] . "\n";
  }
}

getRandomQuotes($quotes);


// Create the printQuote funtion and name it printQuote 
