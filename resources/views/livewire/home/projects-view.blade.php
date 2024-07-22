<?php

use Livewire\WithPagination;
use Livewire\Volt\Component;
use App\Models\Project;

new class extends Component {
    use WithPagination;

    public function with(): array
    {
        return [
            'projects' => Project::paginate(5),
        ];
    }
}; ?>

<div>
    @forelse ($projects as $project)
    <div class="col-md-12 single-item" wire:key="{{ $project->uuid }}">
        <div class="item">
            <div class="bg-cover thumb col-md-6" style="background-image: url({{$project->placeholder_image}});">
            </div>
            <div class="info col-md-6">
                <div class="meta">
                    <ul>
                        <li>
                            <i class="fas fa-calendar"></i><span>{{$project->starting_date}} - {{$project->ending_date}}
                            </span>
                        </li>
                        <li>Target Beneficiaries <span> - <i class="fas fa-users"></i> {{$project->target_beneficiaries}}</span>
                        </li>
                        <li>Funded By <span> - <i class="fa fa-wallet"></i> {{$project->funded_by}}</span>
                        </li>
                        <li>
                            Location <span> - <i class="fas fa-map-marker-alt"></i> {{$project->location}}</span>
                        </li>
                    </ul>
                </div>
                <h2>
                    <a href="{{ route('projects-details',[$project])}}">{{$project->heading}} </a>
                </h2>
                <p>
                    {{ Str::words($project->description, 20, '...') }}
                </p>
                <a class="btn btn-theme effect btn-sm" href="{{ route('projects-details',[$project])}}">Learn more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    @empty
    <h1>No Projects available right now </h1>
    @endforelse

    <div class="col-md-12 pagi-area outer-page">
        <nav aria-label="navigation">
            {{ $projects->links() }}
        </nav>
    </div>

</div>