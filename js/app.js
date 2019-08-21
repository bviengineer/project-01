//Variables
const   quoteBtn = document.getElementById("loadQuote"),
        bgColor = document.getElementsByTagName("body")[0],
        colorsArray = [
            "", // empty string because the random # returned will never be 0 [unless the + 1 is removed] and thus the color at position 0 will never be selected
            "pink",
            "blue",
            "black",
            "teal",
            "violet",
            "purple",
            "silver",
            "yellow",
        ];

const   reloadPage = function (){
            window.location.reload(true);
},
        changeColor = function (){
            let randomNum = Math.floor(Math.random() * 8)+ 1;
            bgColor.style.backgroundColor = colorsArray[randomNum];
        };


//Will calll the changeColor function definition if the show another Quote button is clicked 
quoteBtn.addEventListener("click", changeColor);

// Calls the reloadPage function every 20 seconds
setInterval(reloadPage, 5000);