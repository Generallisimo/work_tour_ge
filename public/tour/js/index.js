window.addEventListener('resize', function() {
    var videoSource = document.getElementById('video-source');
    var videoElement = document.getElementById('video-element');

    var videoSourceFooter = document.getElementById('video-source_footer');
    var videoElementFooter = document.getElementById('video-element_footer');

    if (window.innerWidth < 768) {
      videoSource.src = '/tour/images/head1.mp4'; // Путь к маленькому видео
      videoSourceFooter.src = '/tour/images/foot1.mp4'; // Путь к маленькому видео
    } else {
        videoSource.src = '/tour/images/head.mp4'; // Путь к большому видео
        videoSourceFooter.src = '/tour/images/foot.mp4'; // Путь к большому видео
    }
    
    videoElement.load();
    videoElementFooter.load();
  });
  