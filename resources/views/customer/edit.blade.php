<h1>Edit Customer Details</h1>

<form action="/customers/{{ $customer->id }}/update" method="post">
    @method('put')

    @include('customerFormLayout.form')

    <br><button type="submit">Update</button>
</form>
