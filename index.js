// const navbarAutocomplete = document.querySelector('#navbar-search-autocomplete');
// const navbarData = ['One', 'Two', 'Three', 'Four', 'Five'];
// const navbarDataFilter = (value) => {
//   return navbarData.filter((item) => {
//     return item.toLowerCase().startsWith(value.toLowerCase());
//   });
// };

// new mdb.Autocomplete(navbarAutocomplete, {
//   filter: navbarDataFilter,
// });

const words = [
  { name: "apple", image: "https://via.placeholder.com/20x20?text=A" },
  { name: "banana", image: "https://via.placeholder.com/20x20?text=B" },
  { name: "cherry", image: "https://via.placeholder.com/20x20?text=C" },
  { name: "grape", image: "https://via.placeholder.com/20x20?text=G" },
  { name: "kiwi", image: "https://via.placeholder.com/20x20?text=K" },
  { name: "lemon", image: "https://via.placeholder.com/20x20?text=L" },
  { name: "orange", image: "https://via.placeholder.com/20x20?text=O" },
  { name: "peach", image: "https://via.placeholder.com/20x20?text=P" },
  { name: "pear", image: "https://via.placeholder.com/20x20?text=P" },
  { name: "pineapple", image: "https://via.placeholder.com/20x20?text=P" }
];

const searchInput = document.getElementById("search");
const suggestions = document.querySelector(".search-suggestions");

searchInput.addEventListener("input", function() {
  const input = this.value.toLowerCase();
  const matchingWords = words.filter(function(word) {
    return word.name.toLowerCase().includes(input);
  });
  
  const suggestionList = matchingWords.map(function(word) {
    return `<li><img src="${word.image}" alt="${word.name}"><a href="${word.name}.html">${word.name}</a></li>`;
  });
  
  if (input && matchingWords.length > 0) {
    suggestions.innerHTML = `<ul>${suggestionList.join("")}</ul>`;
    suggestions.style.display = "block";
  } else {
    suggestions.innerHTML = "";
    suggestions.style.display = "none";
  }
});

document.addEventListener("click", function(event) {
  if (!event.target.matches("#search") && !event.target.matches(".search-suggestions *")) {
    suggestions.innerHTML = "";
    suggestions.style.display = "none";
  }
});

