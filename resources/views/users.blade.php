<!-- <h1>Users Login </h1>

<form action="users" method="post">
    @csrf
    <input type="text" name="username" id="username" placeholder='enter user name' />
    <br><br>
    <input type="password" name="password" id="password" placeholder='enter Password' />
    <br><br>
    <button type="submit">Login</button>

</form> -->

<h1>User List</h1>



<table border="1">
    <tr>
        <td>ID</td>
        <td>Userid</td>
        <td>title</td>
        <td>Body</td>
    </tr>
    @foreach($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->userId }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->body }}</td>
        </tr>
    @endforeach
</table>