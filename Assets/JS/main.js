// heqader

window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.sticky-header');
  if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
  } else {
      navbar.classList.remove('scrolled');
  }
});

// hero section
document.addEventListener("DOMContentLoaded", function () {
  const heroContent = document.querySelector(".hero-content");
  heroContent.style.opacity = "0";
  heroContent.style.transform = "translateY(20px)";

  setTimeout(() => {
    heroContent.style.transition = "opacity 1s, transform 1s";
    heroContent.style.opacity = "1";
    heroContent.style.transform = "translateY(0)";
  }, 100);
});

// about
document.addEventListener("DOMContentLoaded", function () {
  const serviceCards = document.querySelectorAll(".service-card");
  const aboutCard = document.querySelector(".about-card");

  let delay = 0;

  // Animate service cards
  serviceCards.forEach((card) => {
    card.style.animationDelay = `${delay}s`;
    delay += 0.2;
  });

  // Animate about card
  if (aboutCard) {
    aboutCard.style.opacity = 0;
    aboutCard.style.transform = "translateY(20px)";
    setTimeout(() => {
      aboutCard.style.transition =
        "opacity 0.6s ease-out, transform 0.6s ease-out";
      aboutCard.style.opacity = 1;
      aboutCard.style.transform = "translateY(0)";
    }, delay * 1000); // Start after the last service card animation
  }
});

// services

document.addEventListener("DOMContentLoaded", function () {
  const serviceCards = document.querySelectorAll(".service-card");
  let delay = 0;

  serviceCards.forEach((card) => {
    card.style.animationDelay = `${delay}s`;
    delay += 0.2;
  });
});

// our portfolio

document.addEventListener('DOMContentLoaded', function () {
  const filterButtons = document.querySelectorAll('.filter-button');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  filterButtons.forEach(button => {
      button.addEventListener('click', function () {
          const filterValue = this.getAttribute('data-filter');

          // Remove 'active' class from all buttons
          filterButtons.forEach(btn => {
              btn.classList.remove('active');
          });

          // Add 'active' class to the clicked button
          this.classList.add('active');

          // Filter portfolio items based on data-filter attribute
          portfolioItems.forEach(item => {
              const itemFilters = item.classList;

              if (filterValue === 'all' || itemFilters.contains(filterValue)) {
                  item.style.display = 'block';
              } else {
                  item.style.display = 'none';
              }
          });
      });
  });
});



