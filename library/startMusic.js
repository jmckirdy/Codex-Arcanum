function playMusic() {
    const audioElement = document.getElementById("startMusic");
    audioElement.play();

    // When the audio ends, restart playback
    audioElement.addEventListener('ended', function() {
        audioElement.play();
    });
}