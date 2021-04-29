<h1>Add New Customer</h1>

<form action="{{ route('customer.store') }}" method="post">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}">

        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div>
        <br><label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email') }}">

        @error('email')
            {{ $message }}
        @enderror
    </div>

    <br><button>Add New</button>
</form>
