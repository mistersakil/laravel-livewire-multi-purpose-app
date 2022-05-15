@if (isset($meta_title))
    <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">
            {{ isset($meta_title) ? $meta_title : 'Dashboard' }}
        </h3>
    </div>
    <div class="content-header-right col-md-4 col-12">
        <div class="btn-group float-md-right">
            <button class="btn btn-secondary btn-sm mr-1" type="button">
                <i class="icon-plus"></i> Add New
            </button>
            <button class="btn btn-secondary btn-sm" type="button">
                <i class="icon-list"></i> List
            </button>
        </div>
    </div>
@endif
