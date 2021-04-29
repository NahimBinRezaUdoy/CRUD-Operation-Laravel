<h1>Customers</h1>

@forelse($customers as $customer)
    <div>
        {{ $customer->name }}
    </div>
    <div>
        {{ $customer->email }}
    </div>

@empty
    <p>No Customer to show</p>
@endforelse
