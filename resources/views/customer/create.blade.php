<h1>Add New Customer</h1>

<form action="{{ route('customer.store') }}" method="post">

    @include('customerFormLayout.form')

    <br><button type="submit">Add New</button>
</form>
