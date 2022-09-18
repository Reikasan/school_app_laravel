<x-layout>
    <div class="alert alert-primary" role="alert">
        3 New Message! <a href="#" class="alert-link">Check here</a>
    </div>
    <div class="container">
    <div class="accordion accordion-flush" id="accordionExample">
        <div class="accordion-item">
            <x-accordion addDate=0></x-accordion>
        </div>
        <div class="accordion-item" id="tomorrow">
            <x-accordion addDate=1></x-accordion>
        </div>
        <div class="accordion-item" id="twoMoreDay">
            <x-accordion addDate=2></x-accordion>
        </div>
    </div>
</x-layout>