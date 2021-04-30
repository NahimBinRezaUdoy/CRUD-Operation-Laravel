<h1>Edit Customer Details</h1>

<form action="/customers/{{ $customer->id }}/update" method="post">
    @method('put')
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $customer->name }}">

        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div>
        <br><label for="email">Email</label>
        <input type="email" name="email" value="{{ $customer->email }}">

        @error('email')
            {{ $message }}
        @enderror
    </div>

    <br><button type="submit">Update</button>
</form>
