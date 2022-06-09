<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use Livewire\WithPagination;

class BackendComponent extends Component
{
    ## Import livewire pargination
    use WithPagination;

    ## Use bootstrap theme theme for pagination
    protected $paginationTheme = 'bootstrap';
}
