document.addEventListener("DOMContentLoaded", () => {
    
    const reviewForm = document.getElementById("review-form");
    const reviewList = document.getElementById("reviews");
    const watchlistButton = document.getElementById("add-to-watchlist");
    
    const logButton = document.getElementById("test-button");

    

    
    reviewForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const textarea = reviewForm.querySelector("textarea");
        const reviewText = textarea.value.trim();

        if (reviewText) {
            const reviewItem = document.createElement("li");
            reviewItem.textContent = reviewText;
            reviewList.appendChild(reviewItem);
            textarea.value = "";
        }
    });

    watchlistButton.addEventListener("click", () => {
        alert("Anora has been added to your watchlist!");
    });
    
    logButton.addEventListener("click", () => {
        alert("You have watched this film !");
});
});
