var player = [];
var codVideos = ['q1z-6esziMU', 'hn7T3DYBWqE', 'RSTxzDemCzY', '_IMcS5SEryM', 'X4CmXi04rjI'];

function onYouTubeIframeAPIReady() {
    let divsPlayer = document.getElementsByClassName("video-iframe");
    for (let i = 0; i < divsPlayer.length; i++) {
        let playerAux = new YT.Player(divsPlayer[i].id, {
            videoId: codVideos[i],
            height: '370',
            width: '560',
            origin: 'https://udearroba.udea.edu.co'
        });
        player.push(playerAux);
    }
}

function stopVideos() {
    player.forEach(video => {
        video.pauseVideo();
    });
}