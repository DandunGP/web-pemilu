<form action="{{ route('inputLeader') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" id="name" placeholder="nama">
    <input type="text" name="vision_mission" id="vision_mission" placeholder="vision_mission">
    <button type="submit"> Insert </button>
</form>

@if ($leader)
<table border=1>
    <tr>
        <th>Nama</th>
        <th>Visi Misi</th>
        <th>Jumlah</th>
    </tr>
    @foreach ($leader as $ld)
        <tr>
            <td>{{$ld->name}}</td>
            <td>{{$ld->vision_mission}}</td>
            <td>0</td>
        </tr>
    @endforeach
</table>  
@else
leader not found
@endif
