<!DOCTYPE html>
<html lang="en">

{{-- head start --}}
@include('includes.head')
{{-- head end --}}

<body>

    <!-- Preloader Start -->
    @include('includes.preloader')
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    @include('includes.startHeader')
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
     @include('includes.header')
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-bg">
        <div id="bootcarousel" class="carousel slide item-bg animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="uppercase carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="bg-fixed slider-thumb" style="background-image: url(assets/assets/img/banner/4.jpg);"></div>
                    <div class="box-table">
                        <div class="shadow box-cell dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h4 data-animation="animated slideInRight">Be a part of the world by make a donation</h4>
                                            <h1 data-animation="animated slideInLeft">Join with us and save the world</h1>
                                            <a class="btn btn-light effect btn-sm" href="#" data-animation="animated slideInUp">Learn more</a>
                                            <a class="btn btn-theme effect btn-sm" href="#" data-animation="animated slideInUp">Join Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bg-fixed slider-thumb" style="background-image: url(assets/assets/img/banner/5.jpg);"></div>
                    <div class="box-table">
                        <div class="shadow box-cell dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content" data-animation="animated slideInRight">
                                            <h4 data-animation="animated slideInRight">Be a part of the world by make a donation</h4>
                                            <h1 data-animation="animated slideInLeft">Help us to save the Homeless People</h1>
                                            <a class="btn btn-light effect btn-sm" href="#" data-animation="animated slideInUp">Learn more</a>
                                            <a class="btn btn-theme effect btn-sm" href="#" data-animation="animated slideInUp">Join Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bg-fixed slider-thumb" style="background-image: url(assets/assets/img/banner/6.jpg);"></div>
                    <div class="box-table">
                        <div class="shadow box-cell dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content" data-animation="animated slideInRight">
                                            <h4 data-animation="animated slideInRight">For the poor children</h4>
                                            <h1 data-animation="animated slideInLeft">Give a helping hand and Help unfortunates</h1>
                                            <a class="btn btn-light effect btn-sm" href="#" data-animation="animated slideInUp">Learn more</a>
                                            <a class="btn btn-theme effect btn-sm" href="#" data-animation="animated slideInUp">Join Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Services 
    ============================================= -->
    <section class="services-area bg-gray carousel-shadow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center service-carousel owl-carousel owl-theme">
                        <div class="service-item">
                            <div class="thumb">
                                <img src="assets/assets/img/services/1.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Food Donate</h4>
                                <p>
                                    Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself pleasure.
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-right"></i></a> 
                            </div>  
                        </div>
                        <div class="service-item">
                            <div class="thumb">
                                <img src="assets/assets/img/services/2.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Medical Care</h4>
                                <p>
                                    Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself pleasure.
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-right"></i></a> 
                            </div>  
                        </div>
                        <div class="service-item">
                            <div class="thumb">
                                <img src="assets/assets/img/services/3.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Child Education</h4>
                                <p>
                                    Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself pleasure.
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-right"></i></a> 
                            </div>  
                        </div>
                        <div class="service-item">
                            <div class="thumb">
                                <img src="assets/assets/img/services/4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Homeless People</h4>
                                <p>
                                    Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself pleasure.
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-right"></i></a> 
                            </div>  
                        </div>
                        <div class="service-item">
                            <div class="thumb">
                                <img src="assets/assets/img/services/5.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Street child</h4>
                                <p>
                                    Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself pleasure.
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-right"></i></a> 
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End services area -->

    <!-- Start Help Step 
    ============================================= -->
    <div class="help-step-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 info">
                    <h2>How Can You Help?</h2>
                    <h5>Your support will help us to make life better living for poor vulnerable children.</h5>
                    <p>
                        Performed suspicion in certainty so frankness by attention pretended. Newspaper or in tolerably education enjoyment. Extremity excellent certainty discourse sincerity no he so resembled. Joy house worse arise total boy but. Elderly up chicken do at feeling is. Like seen drew no make fond at on rent. Behaviour extremely her explained situation yet september gentleman are who. Is thought or pointed hearing he. 
                    </p>
                    <p>
                        Do however as pleased offence outward beloved by present. By outward neither he so covered amiable greater. Juvenile proposal betrayed he an informed weddings followed. Precaution day see imprudence sympathize principles. At full leaf give quit to in they up. 
                    </p>
                    <a href="#" class="btn btn-theme effect btn-sm">Learn more</a>
                </div>
                <div class="col-md-7 items">
                    <div class="row">
                        <div class="item col-md-6 col-sm-6">
                            <div class="content">
                                <div class="thumb">
                                    <img src="assets/assets/img/team/4.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>Become a volunteer</h4>
                                    <p>
                                        Their saved linen downs tears son add music. Expression alteration entreaties mrs can terminated estimating 
                                    </p>
                                    <a href="#">Join Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-6 col-sm-6">
                            <div class="content">
                                <div class="thumb">
                                    <img src="assets/assets/img/team/5.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>Donate Us</h4>
                                    <p>
                                        Their saved linen downs tears son add music. Expression alteration entreaties mrs can terminated estimating 
                                    </p>
                                    <a href="#">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Help Step -->

    <!-- Start Recent Causes
    ============================================= -->
    <div class="recent-causes-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="recent-causes-items causes-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="bg-cover col-md-6 thumb" style="background-image: url(assets/assets/img/causes/1.jpg);"></div>
                            <div class="col-md-6 info">
                                <h4>Recent Causes</h4>
                                <h2>Feed for hungry child</h2>
                                <ul>
                                    <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                    <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span></li>
                                </ul>
                                <p>
                                    Neither it cordial so painful picture studied if. Sex him position doubtful resolved boy expenses. Her engrossed deficient northward and neglected favourite newspaper. But use peculiar produced concerns ten.
                                </p>
                                <div class="progress-box">
                                    <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="22"></div>
                                    </div>
                                </div>
                                <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="bg-cover col-md-6 thumb" style="background-image: url(assets/assets/img/causes/2.jpg);"></div>
                            <div class="col-md-6 info">
                                <h4>Recent Causes</h4>
                                <h2>Support for Children</h2>
                                <ul>
                                    <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                    <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span></li>
                                </ul>
                                <p>
                                    Neither it cordial so painful picture studied if. Sex him position doubtful resolved boy expenses. Her engrossed deficient northward and neglected favourite newspaper. But use peculiar produced concerns ten.
                                </p>
                                <div class="progress-box">
                                    <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="22"></div>
                                    </div>
                                </div>
                                <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="bg-cover col-md-6 thumb" style="background-image: url(assets/assets/img/causes/3.jpg);"></div>
                            <div class="col-md-6 info">
                                <h4>Recent Causes</h4>
                                <h2>Flood Affected People</h2>
                                <ul>
                                    <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                    <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span></li>
                                </ul>
                                <p>
                                    Neither it cordial so painful picture studied if. Sex him position doubtful resolved boy expenses. Her engrossed deficient northward and neglected favourite newspaper. But use peculiar produced concerns ten.
                                </p>
                                <div class="progress-box">
                                    <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="22"></div>
                                    </div>
                                </div>
                                <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Recent Causes -->

    <!-- Start Popular Causes
    ============================================= -->
    <div class="popular-causes-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="text-center site-heading">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Popular Causes</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="popular-causes-items">
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/assets/img/causes/4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Support for Children</h4>
                                <ul>
                                    <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                    <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span></li>
                                </ul>
                                <p>
                                    Her engrossed deficient northward and neglected favourite newspaper. But use peculiar produced concerns ten.
                                </p>
                                <div class="progress-box">
                                    <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="22"></div>
                                    </div>
                                </div>
                                <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/assets/img/causes/5.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Food for syrian</h4>
                                <ul>
                                    <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                    <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span></li>
                                </ul>
                                <p>
                                    Her engrossed deficient northward and neglected favourite newspaper. But use peculiar produced concerns ten.
                                </p>
                                <div class="progress-box">
                                    <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="22"></div>
                                    </div>
                                </div>
                                <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/assets/img/causes/6.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Uganda education</h4>
                                <ul>
                                    <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                    <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span></li>
                                </ul>
                                <p>
                                    Her engrossed deficient northward and neglected favourite newspaper. But use peculiar produced concerns ten.
                                </p>
                                <div class="progress-box">
                                    <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="22"></div>
                                    </div>
                                </div>
                                <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/assets/img/causes/7.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Capetown orphanage</h4>
                                <ul>
                                    <li>Time Left <span> <i class="fas fa-calendar-alt"></i> 15 day</span></li>
                                    <li>Target Location <span> <i class="fas fa-map-marker-alt"></i> Mombasa, USA</span></li>
                                </ul>
                                <p>
                                    Her engrossed deficient northward and neglected favourite newspaper. But use peculiar produced concerns ten.
                                </p>
                                <div class="progress-box">
                                    <h5>Raised $57,089<span class="pull-right">Goal $50,000</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="22"></div>
                                    </div>
                                </div>
                                <a class="btn btn-theme effect btn-sm" href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Causes -->

    <!-- Start Event
    ============================================= -->
    <div class="event-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="text-center site-heading">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Our Event</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="event-items inner-cell event-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/assets/img/event/1.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="date">
                                    12 Oct <span>2018</span>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="#">Paid hill fine ten now love</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> King Street, Melbourne
                                            </li>
                                            <li>
                                                <i class="fas fa-clock"></i> 8:00 - 16:00
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see.  
                                    </p>
                                    <a class="btn btn-theme effect btn-sm" href="#">Learn more <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/assets/img/event/2.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="date">
                                    23 Nov <span>2018</span>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="#">Mutual living ask extent</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> King Street, Melbourne
                                            </li>
                                            <li>
                                                <i class="fas fa-clock"></i> 8:00 - 16:00
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see.  
                                    </p>
                                    <a class="btn btn-theme effect btn-sm" href="#">Learn more <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/assets/img/event/3.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="date">
                                    05 Jun <span>2018</span>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="#">Theirs expect dinner</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> King Street, Melbourne
                                            </li>
                                            <li>
                                                <i class="fas fa-clock"></i> 8:00 - 16:00
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see.  
                                    </p>
                                    <a class="btn btn-theme effect btn-sm" href="#">Learn more <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/assets/img/event/4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="date">
                                    22 Dec <span>2018</span>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="#">Separate screened outweigh</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> King Street, Melbourne
                                            </li>
                                            <li>
                                                <i class="fas fa-clock"></i> 8:00 - 16:00
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see.  
                                    </p>
                                    <a class="btn btn-theme effect btn-sm" href="#">Learn more <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Event -->

    <!-- Start Make Donation 
    ============================================= -->
    <div class="donation-form default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form">
                    <h2>Make a donation now</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Donation Details</h3>
                        </div>
                        <div class="row">
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Amount">Amount</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="Amount" placeholder="$129.00" required="">
                                            <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="donateType">Frequency</label>
                                    <select id="donateType" class="form-control">

                                        <option value="once">Once</option>

                                        <option value="weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Payment Details</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cardNumber">Card Number</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number" required="">
                                                <span class="input-group-addon"><i class="fas fa-credit-card"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-8">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="expMonth">Expiration Date</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <input type="text" class="form-control" id="expMonth" placeholder="MM" required="" data-stripe="exp_month">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <input type="text" class="form-control" name="expYear" placeholder="YY" required="" data-stripe="exp_year">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-4 pull-right">
                                        <div class="form-group">
                                            <label for="cvCode">CV Code</label>
                                            <input type="password" class="form-control" id="cvCode" placeholder="CV" required="" data-stripe="cvc">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-theme effect btn-sm" type="submit">Donate Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center col-md-6 faq-items">
                    <h2>FAQ</h2>
                    <!-- Start Accordion -->
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                            Do I need a business plan?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            She wholly fat who window extent either formal. Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but. Questions am sincerity zealously concluded consisted or no gentleman it. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                            How long should a business plan be? 
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            She wholly fat who window extent either formal. Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but. Questions am sincerity zealously concluded consisted or no gentleman it. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                            What goes into a business plan?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            She wholly fat who window extent either formal. Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but. Questions am sincerity zealously concluded consisted or no gentleman it. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                            Where do I start? 
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            She wholly fat who window extent either formal. Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but. Questions am sincerity zealously concluded consisted or no gentleman it. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Make Donation -->

    <!-- Start Team Members
    ============================================= -->
    <div class="team-members-area item-white bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="text-center site-heading">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Meet our Volunteers</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 team-member-info">
                    <div class="team-carousel-items owl-carousel owl-theme">
                        <div class="item">
                            <div class="col-md-6 thumb">
                                <img src="assets/assets/img/team/1.jpg" alt="Team">
                            </div>
                            <div class="col-md-6 info title">
                                <h3>Moana Siqual</h3>
                                <h5>Blood Donor</h5>
                                <ul>
                                    <li>Date of birth: <span>12 Jan, 1995</span></li>
                                    <li>Location: <span>California, Dubai</span></li>
                                </ul>
                                <p>
                                    Contented attending smallness it oh ye unwilling. Turned favour man two but lovers. Suffer should if waited common person little oh. Improved civility graceful sex few smallest screened settling. Likely active her warmly has
                                </p>
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6 thumb">
                                <img src="assets/assets/img/team/2.jpg" alt="Team">
                            </div>
                            <div class="col-md-6 info title">
                                <h3>Anu Sparkle</h3>
                                <h5>Teacher of children</h5>
                                <ul>
                                    <li>Date of birth: <span>12 Jan, 1995</span></li>
                                    <li>Location: <span>California, Kenya</span></li>
                                </ul>
                                <p>
                                    Contented attending smallness it oh ye unwilling. Turned favour man two but lovers. Suffer should if waited common person little oh. Improved civility graceful sex few smallest screened settling. Likely active her warmly has
                                </p>
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6 thumb">
                                <img src="assets/assets/img/team/3.jpg" alt="Team">
                            </div>
                            <div class="col-md-6 info title">
                                <h3>Dunald Minia</h3>
                                <h5>The organizer</h5>
                                <ul>
                                    <li>Date of birth: <span>12 Jan, 1995</span></li>
                                    <li>Location: <span>California, USA</span></li>
                                </ul>
                                <p>
                                    Contented attending smallness it oh ye unwilling. Turned favour man two but lovers. Suffer should if waited common person little oh. Improved civility graceful sex few smallest screened settling. Likely active her warmly has
                                </p>
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Members -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area default-padding">
        <div class="container">
            <div class="row">
                <div class="text-center site-heading">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Recent Blog</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <div class="col-md-4 item-box">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-left-sidebar.html">
                                    <img src="assets/assets/img/blog/1.jpg" alt="Thumbnail">
                                    <div class="overlay-icon">
                                        <i class="fa fa-images"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="title-meta">
                                    <div class="date">
                                        15 <span>Nov</span>
                                    </div>
                                    <div class="title">
                                        <h4>
                                            <a href="blog-single-left-sidebar.html">Disposing commanded dashwoods</a>
                                        </h4>
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fas fa-user"></i> Admin</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i> 2 Aug, 2018
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter
                                </p>
                                <a href="blog-single-left-sidebar.html">read more <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item-box">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-left-sidebar.html">
                                    <img src="assets/assets/img/blog/4.jpg" alt="Thumbnail">
                                    <div class="overlay-icon">
                                        <i class="fa fa-video"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="title-meta">
                                    <div class="date">
                                        28 <span>Nov</span>
                                    </div>
                                    <div class="title">
                                        <h4>
                                            <a href="blog-single-left-sidebar.html"> Goodness as reserved raptures use set</a>
                                        </h4>
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fas fa-user"></i> Admin</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i> 2 Aug, 2018
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter
                                </p>
                                <a href="blog-single-left-sidebar.html">read more <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item-box">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-left-sidebar.html">
                                    <img src="assets/assets/img/blog/2.jpg" alt="Thumbnail">
                                    <div class="overlay-icon">
                                        <i class="fa fa-images"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="title-meta">
                                    <div class="date">
                                        20 <span>Nov</span>
                                    </div>
                                    <div class="title">
                                        <h4>
                                            <a href="blog-single-left-sidebar.html">Tolerably earnestly middleton</a>
                                        </h4>
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fas fa-user"></i> Admin</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i> 2 Aug, 2018
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter
                                </p>
                                <a href="blog-single-left-sidebar.html">read more <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Clients
    ============================================= -->
    <div class="clients-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center clients-items owl-carousel owl-theme">
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/1.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/2.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/3.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/4.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/5.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/6.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/7.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/8.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/9.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/assets/img/clients/1.png" alt="Clients"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients -->

    <!-- Start Footer 
    ============================================= -->
        @include('includes.footer')
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    @include('includes.scripts')

</body>
</html>