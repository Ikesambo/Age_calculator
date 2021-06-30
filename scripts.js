function showCalendar(month, year,day) {
    let firstDay = (new Date(year, month)).getDay();
    let daysInMonth = 32 - new Date(year, month, 32).getDate();
    let tbl = document.getElementById("calendar-body"); // body of the calendar

    // filing data about month and in the page via DOM.
    monthAndYear.innerHTML = months[month] + " " + year;
    let cellText="";
    //let cell="";

    // creating all cells
    let date = 1;
    for (let i = 0; i < 6; i++) {
        // creates a table row
        let row = document.createElement("tr");
        //creating individual cells, filing them up with data.
        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < firstDay) {
                let cell = document.createElement("td");
                let cellText = document.createTextNode("");
                cell.appendChild(cellText);
                row.appendChild(cell);

            }


            else if (date > daysInMonth) {
                break;
            }
            else {
                let cell = document.createElement("td");
                let cellText = document.createTextNode(date);
                if(date==day){

                 cell.classList.add("selected-date");
               }//coloring the slected day
               cell.appendChild(cellText);

               row.appendChild(cell);
              //  var classname="name";

              //  cell.setAttribute("class",classname);


                date++;


            }


        }


        tbl.appendChild(row); // appending each row into calendar body.
    }

}

//getting
