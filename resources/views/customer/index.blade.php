<h1>Customers</h1>

@forelse($customers as $customer)
    <div>
        <a href="/customers/{{ $customer->id }}/show">
            {{ $customer->name }}
        </a>
    </div>

@empty
    <p>No Customer to show</p>
@endforelse

<br>
<a href="/customers/create">Add New Customer</a>
