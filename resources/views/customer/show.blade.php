<h1>Customer Details</h1>


<div>
    <h3>Name : {{ $customer->name }}</h3>

</div>

<div>
    <h3>Email : {{ $customer->email }}</h3>
</div>

<div>
    <h3>Created : {{ $customer->created_at->diffForHumans() }}</h3>
</div>


<a href="/customers/{{ $customer->id }}/edit">
    <button>Edit</button>
</a>

<a href="{{ route('customer.index') }}">
    <button>Home</button>
</a>
