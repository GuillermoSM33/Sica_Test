<x-app-layaout>

    @section('title', 'Servicios de Osmosis')

    <div class="video-container" style="width: 100%; margin-bottom: 20px; padding: 0; height: 30vh;">
        <video id="loopVideo" autoplay muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
            <source src="{{ asset('storage/videos/ocean.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <h2 class="section-title">Servicios de Osmosis</h2>

    <br>

    <x-card_for_service :servicios="$servicios"> </x-card_for_service>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('loopVideo');
            var startTime = 5;
            var endTime = 40;

            video.addEventListener('timeupdate', function() {
                if (video.currentTime >= endTime) {
                    video.currentTime = startTime;
                    video.play();
                }
            });

            video.addEventListener('loadedmetadata', function() {
                video.currentTime = startTime;
                video.play();
            });

            video.addEventListener('play', function() {
                if (video.currentTime < startTime || video.currentTime >= endTime) {
                    video.currentTime = startTime;
                }
            });
        });
    </script>

</x-app-layaout>
