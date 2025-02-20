<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAsociationRequest;
use App\Http\Requests\UpdateAsociationRequest;
use App\Models\Asociation;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

class AsociationController extends Controller
{
    use DisableAuthorization;
    protected $model = Asociation::class;
}
