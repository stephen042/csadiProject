<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div class="top-bar-area one-line bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="info box">
                        <ul>
                            <li>
                                <p>
                                    <i class="fas fa-envelope-open"></i> <span>{{ config('app.App_mail')}}</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-mobile-alt"></i> <span>{{ config('app.App_number')}}</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-right topbar-button col-md-3">
                    <a href="" class="btn btn-theme circle effect standard btn-sm">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
