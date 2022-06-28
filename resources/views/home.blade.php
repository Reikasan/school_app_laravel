@extends('components.admin.admin-master')
@section('title', 'School App - index')

@section('content')
<div class="alert alert-primary" role="alert">
    3 New Message! <a href="#" class="alert-link">Check here</a>
</div>
<div class="container">
<div class="accordion accordion-flush" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Today's Lesson
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="list-group list-group-flush">
                    @foreach ($lessons as $lesson)
                        <a class="list-group item list-group-action" href="#">{{$lesson->start_time}} {{$lesson->student_id->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                {{$lesson->date}}
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="list-group list-group-flush">
                    @foreach ($lessons as $lesson)
                        <a class="list-group item list-group-action" href="#">{{$lesson->start_time}} {{$lesson->student_id->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                {{$lesson->date}}
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="list-group list-group-flush">
                    @foreach ($lessons as $lesson)
                        <a class="list-group item list-group-action" href="#">{{$lesson->start_time}} {{$lesson->student_id->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
