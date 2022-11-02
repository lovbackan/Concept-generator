//History is an array which is filled with generated concepts which are saved in the local history (look at the last line of code in this js)

let history = [];

// If there is nothing in the history array then dont execute the code below the if statement
if (localStorage.getItem('history') !== null) {
  // fetch history
  history = localStorage.getItem('history').split(',');

  //  Loop through history and display it in the history list
  const ol = document.querySelector('.historyList');
  history.forEach((historyItem, i) => {
    if (i <= 14 && historyItem) {
      const li = document.createElement('li');
      li.appendChild(document.createTextNode(historyItem));
      ol.appendChild(li);
    }

    //Limits the history array to store only 16 items

    if (history[i] > history[15]) {
      history.pop();
    }
  });
}

// Take current generated concept string and save it to this new variable
const newGeneratedString = document
  .querySelector('.generatedString')
  .innerHTML.trim();

// If newGeneratesString is not null then place it in the first spot of the history array
if (newGeneratedString) {
  history.unshift(newGeneratedString);
}

// Saves the value of current history array to the local storage
localStorage.setItem('history', history);
console.log(history);
