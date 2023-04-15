<!doctype html>
<html lang="en">
<x-head />
<body>
    <form action="{{route('auth.loginUser')}}" method="POST">
        @csrf
        <input type="text" placeholder="Email" name="email">
        <br>
        <input type="password" placeholder="Password" name="password">
        <br>
        <button>Commit</button>
    </form>
</body>
</html>
