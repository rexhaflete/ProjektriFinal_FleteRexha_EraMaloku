const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.ancors');

if (hamburger && menu) {
  const toggleMenu = (open) => {
    menu.classList.toggle('open', open);
    hamburger.classList.toggle('open', open);
    hamburger.setAttribute('aria-expanded', open);
  };

  hamburger.addEventListener('click', () => {
    toggleMenu(!menu.classList.contains('open'));
  });

  menu.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => toggleMenu(false));
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
      toggleMenu(false);
    }
  });
}

 const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm');

    function checkMatch() {
      confirmPassword.setCustomValidity(
        password.value !== confirmPassword.value ? 'Passwords do not match' : ''
      );
    }

    password.addEventListener('input', checkMatch);
    confirmPassword.addEventListener('input', checkMatch);