@extends('layouts.app')
@section('title')
<title>Contact</title>
@endsection
@section('content')
<div class="bgBotHeader">
</div>
<section class="contact container">
    <div class="row">
        <div class="col-6 col-lg-6 col-sm-12">
            <div class="global">
                <h2 class="styleH2"><b>OUR GLOBAL COVERAGE</b></h2>
                <hr>
                <img class="imgContact" src="https://vnvis.com/wp-content/uploads/2023/05/Map-1.png" alt="">
                <p class="pt-2">Email: Info@vnvis.com <br>
                    Tel: +84 24 3207 9388</p>
            </div>
            <div class="office">
                <h2 class="styleH2"><b>OUR OFFICE</b></h2>
                <hr>
                <span class="spanContact">
                We offer the highest level of service at competitive rates and tailor made the inspection plan for our customers. <br>

                Our personnel offer in-depth experience in relevant industries. Our team is fluent in English and local languages and dialects to facilitate communication. <br>

                UTS understand that customers demand more than basic services from their partners. We can assist with engineering and consulting services; We can assist with travel itineraries and airport transportation, provide translators for factory visits and negotiate impasses with vendors on your behalf.
                </span>
                <div class="py-2">
                    <h3>HO CHI MINH CITY, VIETNAM</h3>
                    <span class="spanContact">English name: TOP ASIA INSPECTION COMPANY LIMITED <br>
                        Address: Room 302, Floor 3, Gems Building, 594-596 Cộng Hòa, Ward 13, Tan Binh District, Ho Chi Minh City, Vietnam, Zip Code: 700000 <br>
                        Email: example@gmail.com <br>
                        HP: +84 917198968
                    </span>
                </div>
                <div class="py-2">
                    <h3>Guangzhou Office</h3>
                    <span class="spanContact"> Room 2215, Building 2,Xinkai Square,No 22, YongSheng West Road, Nanhai District, Foshan,Guangdong Province, China, Zip code: 528200 <br>
                    Tel: (+86 757)86783812/+8618925940255
                    </span>
                </div>
                <div class="py-2">
                    <h3>Hangzhou Office</h3>
                    <span class="spanContact">
                        Room 1502, E Building, No.307 LiuHe Road, PuYan Street, Binjiang District, Hangzhou City,ZheJiang Province, China, Zip Code: 310051 <br>
                        Tel: (+86 571)87423201/88175227/+8613958194553
                    </span>
                </div>
                <div class="py-2">
                    <h3>Hong Kong Office</h3>
                    <span class="spanContact">
                        Room 1405,14/F., Lucky Centre, 165Wanchai Road, Wanchai, Hong Kong <br>
                        Tel: +852-92734633 <br>

                    </span>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-sm-12">
            <h2 class="styleH2"><b>CONTACT US TODAY</b></h2>
            <hr>
            <form action="" class="contactForm">
                <label>Your Name <span>(*)</span></label>
                <input type="text" value="">
                <label>Company <span>(*)</span></label>
                <input type="text" value="">
                <label>Your Mail <span>(*)</span></label>
                <input type="text" value="">
                <label>Telephone <span>(*)</span></label>
                <input type="text" value="">
                <label>Your Inquiry <span>(*)</span></label>
                <textarea name="" id=""></textarea>
                <div class="container text-center mt-5">
                    <button class="btnContactForm">SEND NOW</button>
                    <p class="pt-5 text-center"><em>*** Fields marked with * are required</em></p>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- copyright  -->
<div class="copyRight ">
    <div class="container">
        <div class="row pt-3">
            <div class="col-6 pt-2">
                <p>Copyright © 2020 TOPASIA CO.,LTD All Rights Reserved</p>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..."
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
