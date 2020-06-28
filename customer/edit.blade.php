<h1>Edit Details</h1>

<form action="/customers/{{ $customer->id }}" method="post">

    @method('PATCH')

<div>
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $customer->name }}">
    @error('name') <p>{{ $message }}</p> @enderror
</div>
<div>
    <label for="email">Email</label>
    <input type="text" name="email" value="{{ $customer->email }}">
    @error('name') <p style="color:blue;">{{ $message }}</p> @enderror
</div>

    @csrf

    <button>Save Customer</buttons>

</form>