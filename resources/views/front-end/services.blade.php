@include('front-end/inc/header')



<!-- Banner Section -->
<div id="page-banner" class="page-banner faq-banner container-fluid no-padding">
    <div class="page-heading">
        <h3>Our Services</h3>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Services</a></li>
        </ol>
    </div>
</div><!-- Banner Section /- -->



<!-- Choose Us -->
<div class="container-fluid no-padding choose-us">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
        <div class="section-header">
            <h3>What We Do ( Our Services)</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="choose-us-box">
                    <div class="choose-img-box"><img src="{{ asset('front-end/images/choose-us/choose-us-1.jpg')}}" alt="choose-us-1" />
                    </div>
                    <div class="choose-us-content-box text-right">
                        <h3>Trust And Safety</h3>
                        <p>The first mate and his Skipper too will do their very best to make the others in
                            their tropic island nest the year.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-area">
            <!-- Pagination -->
            <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>

                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                    </a>
                </li>
            </ul><!-- Pagination/- -->
        </div>

    </div><!-- Container/- -->
    <div class="section-padding"></div>
</div><!-- Choose Us/- -->


@include('front-end/inc/footer')