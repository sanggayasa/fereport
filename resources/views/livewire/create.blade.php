<div class="body">
    <div class="container-fluid">
        <div class="form-group">
            <div class="form-group">
                <label for="comment">Keterangan:</label>
                {{ $body}}
                <textarea wire:model="body" name="body" class="form-control" rows="5" id="comment"></textarea>
            </div>
        </div>
        <input wire:clink="createpost" type="submit" name="Submit" value="SELESAI" class="btn btn-primary btn-user btn-block">
    </div>
</div>