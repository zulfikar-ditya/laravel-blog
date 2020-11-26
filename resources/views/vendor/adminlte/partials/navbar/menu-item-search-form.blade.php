<form action="" method="get" class="form-inline mx-2">
    <div class="input-group">
        <input class="form-control" type="search" name="search"
               placeholder="{{ $item['text'] }}" aria-label="{{ $item['aria-label'] ?? $item['text'] }}">
        <div class="input-group-append">
            <button class="btn btn-navbar bg-maroon" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>

