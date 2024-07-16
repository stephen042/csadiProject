<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <header>
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">
    
            <div class="container">
    
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/" >
                        <img src="{{asset('assets/assets/img/logo.png')}}" class="logo logo-display" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
    
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="about" >About</a>
                        </li>
                        <li>
                            <a href="/contact" >Contact Us</a>
                        </li>
                        <li>
                            <a href="projects">Projects</a>
                        </li>
                        <li>
                            <a href="gallery" >Gallery</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
    
        </nav>
        <!-- End Navigation -->
    
    </header>
</div>
