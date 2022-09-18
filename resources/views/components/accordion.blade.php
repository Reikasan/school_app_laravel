@if ($addDate == 0)
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Today's Lesson
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
@elseif($addDate == 1)
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            {{ $lessons->getLessonDate($addDate) }}
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
@else
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            {{ $lessons->getLessonDate($addDate) }}
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
@endif
        <div class="accordion-body">
            <div class="list-group list-group-flush" id="">
                @if(count($lessons->getLessons($lessons->getLessonDate($addDate))) == 0)
                    <p>No Lesson</p>
                @else
                    @foreach ($lessons->getLessons($lessons->getLessonDate($addDate)) as $lesson)
                        <a class="list-group item list-group-action" href="#">
                            <div class="flex">
                                <div>{{ $lesson->start_time }}</div>
                                <div>{{ $lesson->student->name }}</div>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

