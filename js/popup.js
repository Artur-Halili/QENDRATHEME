document.addEventListener('DOMContentLoaded', function() {
  const popup = document.getElementById('scrollPopup');
  const closeBtn = document.querySelector('.scroll-popup-close');

  window.addEventListener('scroll', function() {
    if (window.scrollY > 400 && !popup.classList.contains('shown')) {
      popup.style.display = 'flex';
      popup.classList.add('shown');
    }
  });

  closeBtn.addEventListener('click', function() {
    popup.style.display = 'none';
  });
});
