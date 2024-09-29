<h1>Add New Member </h1>
@if (session()->has('user'))
    <h3>Data Saved for {{session('user')}}</h3>
@endif
<form action="storedata" method="post">
    @csrf
    <input type="text" name="user" id="user" placeholder="Enter User name">
    <br><br>
    <input type="password" name="password" id="password" placeholder="Enter password">
    <br><br>
    <input type="text" name="email" id="email" placeholder="Enter User Email">
    <br><br>
    <button type="submit">Add User</button>
</form>