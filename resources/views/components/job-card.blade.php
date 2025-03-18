<x-panel class="flex flex-col text-center">
    <div class="self-start text-left text-sm">
        employer
    </div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Job Title</h3>
        <p class="text-sm mt-4">full time - salary</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="">
            <x-tag>Tag 1</x-tag>
            <x-tag>Tag 2</x-tag>
            <x-tag>Tag 3</x-tag>
        </div>

        <x-employer-logo :width="42"/>
    </div>
</x-panel>