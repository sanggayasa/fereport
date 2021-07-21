<div>
  {{-- Success is as dangerous as failure. --}}
  {{-- <div> --}}
  {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
  {{-- <div class="w-auto"> --}}
  {{-- <form action=""> --}}
  <input wire:model="file" type="file" id="file" class="filepond" name="file">
  {{-- <button type="submit" class="rounded-full py-1 px-6 bg-blue-500 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">Submit</button> --}}
  {{-- </form> --}}
  {{-- <input type="file" id=""> --}}
  Create contact
  {{-- </div>  --}}
  {{-- </div> --}}

  <form wire:submit.prevent="store">
    <div class="flex justify-between mb-2">
      <div class="w-auto">
        <label for="name" class="block">Name</label>
        <input wire:model="name" name="name" id="name" type="text" class="form-control form-control-sm py-1 rounded-lg w-full @error('name') is-invalid @enderror" placeholder="Name" aria-label="First name">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="w-auto">
        <label for="name" class="block">Kelas</label>
        <input wire:model="kelas" name="kelas" id="kelas" type="text" class="form-control form-control-sm py-1 rounded-lg w-full @error('name') is-invalid @enderror" placeholder="Name" aria-label="First name">
        @error('kelas')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-6">
        <label for="phone" class="block">Phone</label>
        <input wire:model="phone" name="phone" id="phone" type="text" class="form-control py-1 rounded-lg w-full @error('phone') is-invalid @enderror" placeholder="Phone number" aria-label="Last name">
        @error('phone')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col mt-4">
        <button type="submit" class="rounded-full py-1 px-6 bg-blue-500 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">Submit</button>
      </div>
    </div>
  </form>
  <hr>
</div>
@section('script')
<script>
  const inputElement = document.querySelector('input[id="file"]');
  const pond = FilePond.create(inputElement);
  FilePond.setOptions({
    server: {
      url: '/upload',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      }
    }
  });
</script>
@endsection