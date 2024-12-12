function onPodcast() {
  const audioPlayer = $('#audioPlayer')[0];
  const togglePlayBtn = $('.podcast .toggle-play');
  const playIcon = $('.podcast .icon-play-green');
  const pauseIcon = $('.podcast .icon-pause-green');
  const timeElapsed = $('.podcast .time-elapsed');
  const progressBarContainer = $('.podcast .progress-container');
  const progressBar = $('.podcast .progress-bar');
  const durationDisplay = $('.podcast .duration');

  $(audioPlayer).on('loadedmetadata', function () {
    const duration = audioPlayer.duration || 0;
    durationDisplay.text(formatTime(duration));
  });

  function togglePlayPause() {
    if (audioPlayer.paused) {
      audioPlayer.play();
      playIcon.hide();
      pauseIcon.show();
    } else {
      audioPlayer.pause();
      playIcon.show();
      pauseIcon.hide();
    }
  }

  function updateTime() {
    const currentTime = audioPlayer.currentTime;
    const progressValue = (currentTime / (audioPlayer.duration || 1)) * 100;
    timeElapsed.text(formatTime(currentTime));
    progressBar.width(`${progressValue}%`);
  }

  function formatTime(timeInSeconds) {
    const minutes = Math.floor(timeInSeconds / 60);
    const seconds = Math.floor(timeInSeconds % 60);
    return `${padWithZero(minutes)}:${padWithZero(seconds)}`;
  }

  function padWithZero(number) {
    return number < 10 ? '0' + number : number;
  }

  togglePlayBtn.on('click', togglePlayPause);

  $(audioPlayer).on('timeupdate', updateTime);

  progressBarContainer.on('click', function (e) {
    const containerWidth = $(this).width();
    const offsetX = e.pageX - $(this).offset().left;
    const newTime = offsetX / containerWidth * audioPlayer.duration;
    audioPlayer.currentTime = newTime;
  });

  $(audioPlayer).on('ended', function () {
    playIcon.show();
    pauseIcon.hide();
    progressBar.width('0%');
    timeElapsed.text(formatTime(0));
  });
  $('body').append('<p style="color: green; text-align: center;">jQuery is working yes!</p>');
}


export default onPodcast;
