// Hämta historiken
let history = localStorage.getItem('history').split(',');

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
