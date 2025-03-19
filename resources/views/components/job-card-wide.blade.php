@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>


    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">employer</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">Job Title</h3>
        <p class="text-sm text-gray-400 mt-auto">full time - salary</p>
    </div>

    <div class="">
        @foreach($job->tags as $tag)
            <x-tag :tag="$tag" size="sm" />
        @endforeach
    </div>
</x-panel>