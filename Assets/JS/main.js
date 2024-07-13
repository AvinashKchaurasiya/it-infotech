document.addEventListener('DOMContentLoaded', function () {
    const heroContent = document.querySelector('.hero-content');
    heroContent.style.opacity = '0';
    heroContent.style.transform = 'translateY(20px)';
  
    setTimeout(() => {
      heroContent.style.transition = 'opacity 1s, transform 1s';
      heroContent.style.opacity = '1';
      heroContent.style.transform = 'translateY(0)';
    }, 100);
  });
  