@foreach($users as $user)
    <tr>
        <td> {{ $user->id }}   </td>
        <td> {{ $user->name }} </td>
        <td> {{ $user->email }} </td>
        <td> {{ $user->gender }} </td>
        <td> {{ $user->biography }} </td>
        <td>
            {!! Form::open(['route' => ['eloquentDelete',$user->id], 'method' => 'DELETE' ]) !!}
                <button type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach