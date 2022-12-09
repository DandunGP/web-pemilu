@if(session(''))
@endif
<form action="{{ route('loginAuth') }}" method="POST">
    @csrf
    <input type="email" name="email" id="email" placeholder="email">
    <input type="password" name="password" id="password" placeholder="password">
    <button type="submit"> Login </button>
</form>
