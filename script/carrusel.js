const videos = document.querySelectorAll('#video-hero-carousel .hero-video');
let current = 0;

videos[current].play();

videos.forEach((video, index) => {
  video.addEventListener('ended', () => {
    video.style.display = 'none';
    current = (current + 1) % videos.length;
    videos[current].style.display = 'block';
    videos[current].play();
  });
});


