@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter Nanme"
        value="{{ old('name') ?? $student->name }}">
    @error('name')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
        placeholder="Enter email" value="{{ old('email') ?? $student->email }}">
    @error('email')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>

