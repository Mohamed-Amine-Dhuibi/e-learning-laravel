confirmation<br/>
title : {{ $event->name}}<br/>
fee : {{ $event->fees }}<br/>
{{ Form::open(['action' => 'App\Http\Controllers\EnrolementController@store', 'method' => 'POST']) }}
    {{ Form::hidden('e_id', $event->id) }}
    {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}
{{ Form::close() }}
