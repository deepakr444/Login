const container = document.querySelector('.container');
const loginlink = document.querySelector('.signinlink');
const signuplink = document.querySelector('.signuplink');
const loginForm = document.getElementById('loginForm');
const signupForm = document.getElementById('signupForm');

signuplink.addEventListener('click', () => {
  container.classList.add('active');
});

loginlink.addEventListener('click', () => {
  container.classList.remove('active');
});

// Handle Signup
signupForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  const username = document.getElementById('signupUsername').value;
  const password = document.getElementById('signupPassword').value;

  const response = await fetch('/signup', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ username, password }),
  });

  const result = await response.json();
  alert(result.message);
});

// Handle Login
loginForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  const username = document.getElementById('loginUsername').value;
  const password = document.getElementById('loginPassword').value;

  const response = await fetch('/login', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ username, password }),
  });

  const result = await response.json();
  if (response.ok) {
    alert('Login successful! Token: ' + result.token);
  } else {
    alert(result.message);
  }
});
