@csrf
<div>
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name') ?? $customer->name }}">

    @error('name')
        {{ $message }}
    @enderror
</div>

<div>
    <br><label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') ?? $customer->email }}">

    @error('email')
        {{ $message }}
    @enderror
</div>
