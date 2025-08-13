document.addEventListener('DOMContentLoaded', () => {
  const introScreen = document.querySelector('.intro-screen');
  const startButton = document.getElementById('startButton');

  startButton.addEventListener('click', () => {
    introScreen.classList.add('hidden');
    // Jika ada animasi yang ingin kamu mulai, panggil di sini
  });
});

onload = () => {
  const c = setTimeout(() => {
    document.body.classList.remove("not-loaded");
    clearTimeout(c);
  }, 1000);
};