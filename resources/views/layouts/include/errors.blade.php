<div class="input-group">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="font-bold col-red">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
