<section >

    <x-marquee-project />

    {{-- Filter here, TODO --}}
    <div class="h-72"></div>

    <div class="sm:px-12 gap-24 px-6 my-20 flex flex-col justify-center items-center">
        @foreach($projects as $project)

        <x-project />

        @endforeach
    </div>
</section>