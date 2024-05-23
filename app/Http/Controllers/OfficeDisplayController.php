<?php

namespace App\Http\Controllers;

use App\Repositories\OfficeRepository;
use Illuminate\Contracts\View\View;

class OfficeDisplayController extends Controller
{
    public function show(string $slug, OfficeRepository $officeRepository): View
    {
        $office = $officeRepository->forSlug($slug);

        if (! $office) {
            abort(404);
        }

        return view('site.page', ['item' => $office]);
    }
}
