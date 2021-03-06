@extends('layouts.principal')
@section('content')
<div class="container">
    <div class="row ">
        <div class="wrapper-inner text-center">
            <h2 class="title">Contact us</h2>
            <div class="contact-inner">
                <form class="contact-form">
                    <div class="col-md-6">
                        <input type="text" class="form-control wow bounceInLeft" placeholder="your name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control wow bounceInLeft" placeholder="your email">
                    </div>

                    <div class="col-md-12 ">
                        <textarea class="form-control" cols="30" rows="6" placeholder="your message"></textarea>
                    </div>
                    <div class="btn-container col-md-12 text-center submit">
                        <a href="#" class=" wow bounceInLeft" >submit Now</a>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
            <div class="btn-container m40">
                <a href="index" class=" wow bounceInDown" data-wow-delay=".1s">Home</a>
                <a href="suscribe" class=" wow bounceInDown" data-wow-delay=".3s">Suscríbete</a>
                <a href="#" class="active wow bounceInDown" data-wow-delay=".8s">Contáctanos</a>
            </div>
<!--            <ul class="list-inline socail-link">
                <li><a href="#"><i class="fa fa-facebook wow fadeInRight" data-wow-delay=".2s"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter wow fadeInRight" data-wow-delay=".4s"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus wow fadeInRight" data-wow-delay=".8s"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin wow fadeInRight" data-wow-delay=".1s"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram wow fadeInRight" data-wow-delay="1.1s"></i></a></li>
            </ul>-->
            <div class="copyright text-center white ">
               <p>&copy; Designed and developed by 
                    <a href="https://www.facebook.com/jOshE091" target="_blank">Jose Luis</a>
                    <!--<a href="https://www.facebook.com/PattyVelez11" target="_blank">Paty </a></p>-->
                <p>Copyright reserved to both.2016 </p>
            </div>
        </div> <!-- wrapper-inner end -->
    </div> <!-- row end -->
</div> <!-- container-fluid end -->
@stop