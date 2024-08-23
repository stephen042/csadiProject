<?php

use Livewire\WithPagination;
use Livewire\Volt\Component;
use App\Models\Project;

new class extends Component {
    use WithPagination;

    public function with(): array
    {
        return [
            'images' => Project::select('placeholder_image')->paginate(12)
        ];
    }
}; ?>
<div>
    <div class="portfolio-area default-padding">
        <div class="container">
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="row magnific-mix-gallery masonary">
                            <div id="portfolio-grid" class="portfolio-items col-3">
                                @forelse ($images as $image)
                                <div class="pf-item branding photography">
                                    <div class="item-inner">
                                        <img src="{{asset('storage/'.$image->placeholder_image)}}" alt="Thumb">
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{asset('storage/'.$image->placeholder_image)}}" class="item popup-link"><i
                                                        class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <h1>No Projects photos yet</h1>
                                @endforelse
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 pagi-area outer-page">
                    <nav aria-label="navigation">
                        {{ $images->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Loop through the images and display them side by side -->
</div>