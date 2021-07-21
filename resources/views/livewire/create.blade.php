<div class="body">
    <div class="container-fluid">
        <form wire:submit.prevent="store">
            <div class="form-group">
                <div class="form-group">
                    <label for="comment">Keterangan:</label>
                    {{ $office}}
                    <textarea wire:model="office" name="office" class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
            <input type="submit" name="Submit" value="SELESAI" class="btn btn-primary btn-user btn-block">
    </div>
    </form>
</div>