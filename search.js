
// document.addEventListener("DOMContentLoaded", function() {
//   const searchForm = document.getElementById("search-form");
//   searchForm.addEventListener("submit", function(event) {
//     event.preventDefault();
//     const query = document.getElementById("query").value;
//     // Get the current URL
//     const currentUrl = window.location.href;
//     //generate timestamp
//     const timestamp = date.now();
//      const updatedUrl = currentUrl.includes("?") ? `${currentUrl}&timestamp=${timestamp}` : `${currentUrl}?timestamp=${timestamp}`;
    
//   fetch("act.php?query=" + query, {
//       method: "GET", // Use GET to include query parameters in the URL
//     })
//       .then(response => response.text())
//       .then(data => {
//         // Display the search results on the page
//         document.getElementById("search-results").innerHTML = data;
//       });
//   });
// });
document.addEventListener("DOMContentLoaded", function() {
  const searchForm = document.getElementById("search-form");
  searchForm.addEventListener("submit", function(event) {
    event.preventDefault();
    const query = document.getElementById("query").value;

    // Get the current URL
    const currentUrl = window.location.href;

    // Generate timestamp
    const timestamp = Date.now();

    // Update the URL with the timestamp as a query parameter
    const updatedUrl = currentUrl.includes("?")
      ? `${currentUrl}&timestamp=${timestamp}`
      : `${currentUrl}?timestamp=${timestamp}`;

    // Fetch the updated URL with the query parameter
    fetch(updatedUrl, {
      method: "GET", // Use GET to include query parameters in the URL
    })
      .then(response => response.text())
      .then(data => {
        // Display the search results on the page
        document.getElementById("search-results").innerHTML = data;
      });
  });
});
