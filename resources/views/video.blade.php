<x-layout>
    <div class="container text-center min-h-700">
        <section class="video-block p-relative mb-30">
            <div class="container">
                <video width="60%" height="350" controls>
                    <source src="{{ asset('videoplayback.mp4') }}" type="video/mp4">
                    <source src="{{ asset('videoplayback.mp4') }}" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>

        </section>
    </div>
</x-layout>
