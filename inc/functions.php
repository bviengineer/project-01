<?php
// PHP - Random Quote Generator

//Multidimensional array for quote elements
$quotes = [];

//Inner associative array elements
$quotes[] = [
    'quote' => 'If you judge people, you have no time to love them!',
    'source' => 'Mother Teresa',
    'citation' => '',
    'year' => '',
    //'location' => "http://wisdomquotes.com/famous-quotes/",
];

$quotes[] = [
    'quote' => 'A great man is always willing to be little.',
    'source' => 'Ralph Waldo Emerson',
    'citation' => 'test',
    'year' => '1981',
    //'location' => "http://wisdomquotes.com/famous-quotes/",
];

$quotes[] = [
    'quote' => 'The greatest wealth is to live content with little.',
    'source' => 'Plato',
    'citation' => '',
    'year' => '',
    //'location' => "http://wisdomquotes.com/famous-quotes/",
];

$quotes[] = [
    'quote' => "It always seems impossible until it’s done.",
    'source' => 'Nelson Mandela',
    'citation' => 'test',
    'year' => '1981',
    //'location' => "http://wisdomquotes.com/famous-quotes/",
];

$quotes[] = [
    'quote' => 'Do what you can, with what you have, where you are.',
    'source' => 'Theodore Roosevelt',
    'citation' => '',
    'year' => '',
    //'location' => "http://wisdomquotes.com/famous-quotes/",
];

$quotes[] = [
    'quote' => "If you think you can do a thing or think you can’t do a thing, you’re right.",
    'source' => 'Henry Ford',
    'citation' => '',
    'year' => '',
    //'location' => "http://wisdomquotes.com/famous-quotes/",
];

$quotes[] = [
    'quote' => 'The pessimist sees difficulty in every opportunity. The optimist sees the opportunity in every difficulty.',
    'source' => 'Winston Churchhill',
    'citation' => 'test',
    'year' => '1981',
    //'location' => "https://www.briantracy.com/blog/personal-success/26-motivational-quotes-for-success/",
];

$quotes[] = [
    'quote' => 'We may encounter many defeats but we must not be defeated.',
    'source' => 'Maya Angelou',
    'citation' => '',
    'year' => '',
    //'location' => "https://www.briantracy.com/blog/personal-success/26-motivational-quotes-for-success/",
];

//getRandomQuuote function will handle the random selection of an inner array
function getRandomQuote($array){
    //Will generate a random number that will be used to determine which quote to pull from the inner arrays
    $randomNum = rand(0, 7);
    
    //Passing on the randomly selected inner associative array
    return $array[$randomNum];
  }
  

//printQuote funtion will print the returned quote from the getRandomQuote function
function printQuote($array){
    $theQuote = getRandomQuote($array);
    $quoteOutput = '';
    if ($theQuote['citation'] != '' && $theQuote['year'] != ''){
      $quoteOutput = "<p class='quote'>" . $theQuote['quote'] . "</p>";
      $quoteOutput .= "<p class='source'>" . $theQuote['source'];
      $quoteOutput .= "<span class='citation'>" . $theQuote['citation'] . "</span>";
      $quoteOutput .= "<span class='year'>" . $theQuote['year'] . "</span>";
      $quoteOutput .= "</p>";
    } else {
      $quoteOutput = "<p class='quote'>" . $theQuote['quote'] . "</p>";
      $quoteOutput .= "<p class='source'>" . $theQuote['source'] . "</p>";
    }
    //Will print the final quote to the screen
      echo $quoteOutput;
  }
  
  //Running or executing the printQuote function
  printQuote($quotes);
?>