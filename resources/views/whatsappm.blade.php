@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <div class="contact-form">
                    <div class="contact-form-info">
                        <div class="contact-title">
                            <h3>Book Your Taxi On What's App</h3>
                        </div>
                        <form action="{{route('send-message')}}" method="POST">
                            @csrf
                            <div class="contact-page-form">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <label name="name" class="form-label-title ">Full Name</label>
                                        <input name="name" type="text" placeholder="Full Name *">
                                    </div>
                                    <div class="contact-inner">
                                        <label name="number" class="form-label-title ">Mobile Number </label>
                                        <input name="number" type="numbber" placeholder="Mobile Number *" >
                                    </div>
                                    <div class="contact-inner">
                                        <label name="name" class="form-label-title ">Email</label>
                                        <input type="text" placeholder="Email *" id="email" name="email">
                                    </div>
                                    <div class="contact-inner">
                                        <label name="from" class="form-label-title ">From </label>
                                        <input name="from" type="text" placeholder="From *" value="{{$package->from}}" >
                                    </div>
                                    <div class="contact-inner">
                                        <label name="to" class="form-label-title ">To</label>
                                        <input name="to" type="text" placeholder="To *"value="{{$package->to}}">
                                    </div>
                                    <div class="contact-inner">
                                        <label name="car" class="form-label-title ">Car</label>
                                        <input name="car" type="text" placeholder="Car *" value="{{$car}}" >
                                    </div>
                                    <div class="contact-inner contact-message">

                                        <label name="message" class="form-label-title ">Message</label>
                                        <textarea name="message" placeholder="Message *"></textarea>
                                    </div>
                                </div>
                                <div class="contact-submit-btn">
                                    <button class="submit-btn" type="submit">Submit</button>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
