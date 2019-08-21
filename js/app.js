//Variables
const   quoteBtn = document.getElementById("loadQuote"),
        bgColor = document.getElementsByTagName("body")[0],
        colorsArray = [
            "pink",
            "blue",
            "black",
            "teal",
            "violet",
            "purple",
            "silver",
            "yellow",
        ];

        //function definition refreshes page and calls the change color function 
const   reloadPage = function (){
            window.location.reload(true);
        },
        
        //function definition generates a random number and uses it to select a color from the colors array
        changeColor = function (){
            let randomNum = Math.floor(Math.random() * colorsArray.length);                
            bgColor.style.backgroundColor = colorsArray[randomNum];
        };

// Calls the reloadPage function every 20 seconds
setInterval(changeColor, 5000);