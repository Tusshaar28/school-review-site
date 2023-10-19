const ratingContainers = document.querySelectorAll('.rating-container');

ratingContainers.forEach(container => {
const stars = container.querySelectorAll('.fa-star');
const averageRatingContainer = document.createElement('div');
averageRatingContainer.classList.add('average-rating');
averageRatingContainer.style.float = "right";
container.appendChild(averageRatingContainer);

let totalRating = parseInt(localStorage.getItem(container.id)) || 0;
let numberOfRatings = localStorage.getItem(container.id + '-count') || 0;

stars.forEach(star => {
  star.addEventListener('click', function() {
    const rating = parseInt(this.getAttribute('data-rating'));
    stars.forEach(star => {
      if (parseInt(star.getAttribute('data-rating')) <= rating) {
        star.style.color = '#ffd700';
      } else {
        star.style.color = '#e4e5e9';
      }
    });
    totalRating += rating;
    numberOfRatings++;
    localStorage.setItem(container.id, totalRating);
    localStorage.setItem(container.id + '-count', numberOfRatings);
    const averageRating = (totalRating / numberOfRatings).toFixed(1);
    averageRatingContainer.innerHTML = averageRating + '<i class="fas fa-star checked"></i>';
  });
});

const storedTotalRating = parseInt(localStorage.getItem(container.id)) || 0;
const storedNumberOfRatings = parseInt(localStorage.getItem(container.id + '-count')) || 0;

if (storedTotalRating && storedNumberOfRatings) {
  const averageRating = (storedTotalRating / storedNumberOfRatings).toFixed(1);
  averageRatingContainer.innerHTML = averageRating + '<i class="fas fa-star checked"></i>';
}
})

//Changing Images in about.html
var images = ["images/image1.jpeg",    "images/image2.jpeg",    "images/image3.jpeg",    "images/image4.jpeg"];
var currentImage = 0;
function changeBodyBackground() {
  document.querySelector('.background-image-container').style.backgroundImage = "url(" + images[currentImage] + ")";
  currentImage = (currentImage + 1) % images.length;
}
setInterval(changeBodyBackground, 3000);

