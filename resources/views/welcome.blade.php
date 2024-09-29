<head>
@include('cdn');
</head>
<h1>Welcome</h1>
<a href="{{URL::to('/about')}}">about</a>
<a href="{{URL::to('/contact')}}">Contact</a>

<form action="{{URL::to('save_data')}}" method="post">
    <input type="text" placeholder="Enter Name">
    <button>submit</button>
</form>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>