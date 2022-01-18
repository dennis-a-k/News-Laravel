<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Jobs\NewsParsingJob;
use App\Models\Source;

class ParserController extends Controller
{
    public function index()
    {
        $sources = (new Source())->getSources();

        foreach ($sources as $source) {
            NewsParsingJob::dispatch($source->link);
        }

        return redirect()->route('news::index');
    }
}
