@extends('layouts.main')

@section('title', 'Uthal - Main Page')

@section('content')

    <div class="container-fluid" id="home-header">
        <div id="warning">
            <p class="col-md-10 offset-md-1">Some services maybe will be unavailable due COVID-19 <a href="#">Learn More</a>
            </p>
        </div>
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <h2 id="header-text"><b>Find for a vehicle<br> using our</b> platform!</h2>
            </div>
            <div class="row">
                <p id="header-sub-text">175 000 vehicles for sale in 20 000 locations around the world!</p>
            </div>
            <div class="row" id="main-search-div">
                <h3>Search for a desired vehicle!</h3>
                <label for="" class="form-label">Type the brand or the vehicle model:</label>
                <div class="col-md-8">
                    <form action="announces/all" method="get" id="keyword-filter-form">
                        <input type="text" id="search-input" name="keyword" class="form-control">
                    </form>
                </div>
                <div class="col-md-4 col-sm-6" id="search-btn-div">
                    <button class="btn col-md-6 btn-default-color" onclick="submitKeywordForm()" type="submit" id="search-btn">Search</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="cards-block">
                <div class="row">
                    <div class="card-content col-md-4">
                        <i class="fas fa-car"></i>
                        <h4>Vehicle Diversity</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum corporis iste ipsam a eos
                            eius qui quaerat minus!</p>
                    </div>
                    <div class="card-content col-md-4">
                        <i class="fas fa-hands-helping"></i>
                        <h4>Reliable Deals</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum corporis iste ipsam a eos
                            eius qui quaerat minus!</p>
                    </div>
                    <div class="card-content col-md-4">
                        <i class="fas fa-phone"></i>
                        <h4>Easy Communication</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum corporis iste ipsam a eos
                            eius qui quaerat minus!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase">Uthal Motors</h5>
                    <p>We really hope that you find the best opportunity!</p>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                {{-- <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
               <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div> --}}
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://mdbootstrap.com/"> uthalmotors.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script>
        function submitKeywordForm(){
            document.getElementById('keyword-filter-form').submit();
        }
    </script>

@endsection
