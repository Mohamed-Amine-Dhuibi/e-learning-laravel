<h1>
    Title :  {{ $event->name }}
 </h1>
    Course Brief : {!! $event->description !!}<br/>
    Fee :  {{ $event->fees }}

    <a href="/event/enrol/{{ $event->id }}/confirm">Enroll</a>