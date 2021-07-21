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
  Create fereport
  {{-- </div>  --}}
  {{-- </div> --}}

  <form wire:submit.prevent="store">
    <div class="flex justify-between mb-2">
      <div class="w-auto">
        <label for="ticket_number" class="block">ticket number</label>
        <input wire:model="ticket_number" name="ticket_number" id="ticket_number" type="text" class="form-control form-control-sm py-1 rounded-lg w-full @error('ticket_number') is-invalid @enderror" placeholder="Ticket number" aria-label="First name">
        @error('ticket_number')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="w-auto">
        <label for="tanggal_ticket" class="block">tanggal_ticket</label>
        <input wire:model="tanggal_ticket" name="tanggal_ticket" id="tanggal_ticket" type="text" class="form-control form-control-sm py-1 rounded-lg w-full @error('tanggal_ticket') is-invalid @enderror" placeholder="Tanggal Ticket" aria-label="First name">
        @error('tanggal_ticket')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-6">
        <label for="id_customer" class="block">id_customer</label>
        <input wire:model="id_customer" name="id_customer" id="id_customer" type="text" class="form-control py-1 rounded-lg w-full @error('id_customer') is-invalid @enderror" placeholder="id_customer" aria-label="Last name">
        @error('id_customer')
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