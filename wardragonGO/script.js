// A function to toggle the labels for the note section depending on selection
function updateGoLabel(data){
    var goVar = data.value;
    var goLbl = "";
    if(goVar == "Read"){
        goLbl = "Add a book to your TBR!";
    } else if(goVar == "Watch"){
        goLbl = "Save something for your next couch potato sesh!";
    } else if(goVar == "Search"){
        goLbl = "What's on your mind?";
    } else if(goVar == "See"){
        goLbl = "Time to leave the house!";
    } else if(goVar == "Eat"){
        goLbl = "Foodie Judie!";
    } else if(goVar == "Try"){
        goLbl = "Try new things!";
    }
    document.getElementById("actionNoteLabel").innerHTML = goLbl;
}

// A function to change the color of the bingo tiles
function colorTile(tile){
    tile.style.color = "#F0B44A";
    tile.style.background = "#D83532";
}
