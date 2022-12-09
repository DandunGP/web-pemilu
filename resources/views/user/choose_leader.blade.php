@if(auth()->user()->choose != 1)
<form action="{{ route('choosed') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($leader)
    <select name="choose">
        @foreach ($leader as $ld)
            <option value="{{$ld->id}}">{{$ld->name}}</option>
        @endforeach
    </select>
    @else
        leader not found
    @endif
    <button type="submit">Choose</button>
</form>
@else
Anda sudah memilih  
@endif