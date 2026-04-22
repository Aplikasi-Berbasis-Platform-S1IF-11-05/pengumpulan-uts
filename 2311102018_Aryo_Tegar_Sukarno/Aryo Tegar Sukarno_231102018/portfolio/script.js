let menuIcon = document.querySelector("#menu-icon"); 
let navbar = document.querySelector(".navbar");
let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header .navbar a");

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        }
    });
};

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};
 (function() {
    const toggleBtn = document.querySelector('.toggle-password');
    const passwordField = document.getElementById('password');
    
    if (toggleBtn && passwordField) {
      toggleBtn.addEventListener('click', function(e) {
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        if (type === 'text') {
          toggleBtn.classList.remove('bx-show');
          toggleBtn.classList.add('bx-hide');
        } else {
          toggleBtn.classList.remove('bx-hide');
          toggleBtn.classList.add('bx-show');
        }
      });
    }

    const loginForm = document.querySelector('form');
    if (loginForm) {
      loginForm.addEventListener('submit', function(e) {
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');
        if (!usernameInput.value.trim()) {
          e.preventDefault();
          usernameInput.style.borderColor = '#ef4444';
          usernameInput.focus();
          setTimeout(() => {
            usernameInput.style.borderColor = '#e2e8f0';
          }, 1500);
          return;
        }
        if (!passwordInput.value) {
          e.preventDefault();
          passwordInput.style.borderColor = '#ef4444';
          passwordInput.focus();
          setTimeout(() => {
            passwordInput.style.borderColor = '#e2e8f0';
          }, 1500);
          return;
        }
      });
    }

    const inputs = document.querySelectorAll('.input-group input');
    inputs.forEach(input => {
      input.addEventListener('focus', function() {
        this.style.borderColor = '#4f46e5';
      });
      input.addEventListener('blur', function() {
        if (!this.value) {
          this.style.borderColor = '#e2e8f0';
        } else {
          this.style.borderColor = '#cbd5e1';
        }
      });
    });
  })();