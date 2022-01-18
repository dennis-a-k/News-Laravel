<?php

namespace App\Jobs;

use App\Models\News;
use App\Services\NewsParcer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsParsingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $source;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($source)
    {
        $this->source = $source;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(NewsParcer $parces)
    {
        $news = $parces->index($this->source);

        foreach ($news['items'] as $value) {
            switch ($value['category']) {
                case 'В мире':
                    $value['category_id'] = 'world';
                    break;
                case 'Новости Москвы':
                    $value['category_id'] = 'moscow_city';
                    break;
                case 'Политика':
                    $value['category_id'] = 'politics';
                    break;
                case 'Происшествия':
                    $value['category_id'] = 'incidents';
                    break;
                case 'Криминал':
                    $value['category_id'] = 'incidents';
                    break;
                case 'Общество':
                    $value['category_id'] = 'community';
                    break;
                default:
                    $value['category_id'] = 'other';
                    break;
            }
            unset($value['category']);

            (new News())->parsingNews($value);
        }
    }
}
