//Variables
const   quoteBtn = document.getElementById("loadQuote"),
        bgColor = document.getElementsByTagName("body")[0],
        colorsArray = [
            "", // empty string because the random # returned will never be 0 [unless the + 1] is removed and thus the color at position 0 will never be selected
            "pink",
            "blue",
            "black",
            "teal",
            "violet",
            "purple",
            "silver",
            "yellow",
        ];

const   changeColor = function (){
            let randomNum = Math.floor(Math.random() * 8)+ 1;
            bgColor.style.backgroundColor = colorsArray[randomNum];
            console.log(randomNum); //for testing purposes        
        };

//Reloads or refreshes the page which will also load a new quote, after 20 seconds
function reloadPage (){
    window.location.reload(true);
    changeColor();
}

//Will calll the changeColor function definition if the show another Quote button is clicked 
quoteBtn.addEventListener("click", changeColor);

// Calls the reloadPage function every 20 seconds
setTimeout(reloadPage, 20000);