<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
$quotes = [];

// Each inner array element should be an associative array
$quotes[] = [
    'quote' => 'If you judge people, you have no time to love them!',
    'source' => 'Mother Teresa',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];

$quotes[] = [
    'quote' => 'A great man is always willing to be little.',
    'source' => 'Ralph Waldo Emerson',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];


$quotes[] = [
    'quote' => 'The greatest wealth is to live content with little.',
    'source' => 'Plato',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];


$quotes[] = [
    'quote' => 'It always seems impossible until it’s done.',
    'source' => 'Nelson Mandela',
    'citation' => '';
    'year' => '',
    'location' => "http://wisdomquotes.com/famous-quotes/",
];


$quotes[] = [
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

$quotes[] = [
    'quote' => 'The pessimist sees difficulty in every opportunity. The optimist sees the opportunity in every difficulty.',
    'source' => 'Winston Churchhill',
    'citation' => '',
    'year' => '',
    //'location' => "https://www.briantracy.com/blog/personal-success/26-motivational-quotes-for-success/",
];

$quotes[] = [
    'quote' => 'We may encounter many defeats but we must not be defeated.',
    'source' => 'Maya Angelou',
    'citation' => '',
    'year' => '',
    //'location' => "https://www.briantracy.com/blog/personal-success/26-motivational-quotes-for-success/",
];

// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuotes($array){
    //shuffling the array before the random selection in order to minimize the successive selection of the same quote 
    shuffle($array);
    $randomNum = rand(0, 7);
    echo $array[$randomNum]['quote'] . ' --- ' . $array[$randomNum]['source'] . "\n";
  }

getRandomQuotes($quotes);


// Create the printQuote funtion and name it printQuote 
?>