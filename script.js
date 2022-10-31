//History ska vara en array som ska fyllas med data från local storage men om det inte finns något i local storage så ska vi skapa en tom array.

let history = [];

if (localStorage.getItem('history') !== null) {
  // Hämta historiken
  history = localStorage.getItem('history').split(',');

  // Loopa igenom historik och visa upp på hemsidan
  const ol = document.querySelector('.historyList');
  history.forEach((historyItem, i) => {
    if (i <= 14) {
      const li = document.createElement('li');
      li.appendChild(document.createTextNode(historyItem));
      ol.appendChild(li);
    }

    //Begränsar historik arrayen

    if (history[i] > history[15]) {
      history.pop();
    }
  });
}

// Ta nuvarande sträng
const newGeneratedString = document
  .querySelector('.generatedString')
  .innerHTML.trim();

// Lägg till ny sträng i historiken längst fram
if (newGeneratedString) {
  history.unshift(newGeneratedString);
}

// Uppdatera med ny historik
localStorage.setItem('history', history);
console.log(history);
