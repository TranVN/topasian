@extends('layouts.app')

@section('content')
<div class="bgBotHeader">
</div>
<section class="contact container">
    <div class="row">
        <div class="col-6">
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
                <div class="py-2">
                    <h3>HANOI, VIETNAM</h3>
                    <p> 80B Nguyen Van Cu Street, Bo De Ward, Long Bien District, Hanoi,Vietnam</p>
                </div>
                <div class="py-2">
                    <h3>HO CHI MINH CITY, VIETNAM</h3>
                    <p> No. 90 Tran Dinh Xu street, District 1, HCM City,Vietnam</p>
                </div>
                <div class="py-2">
                    <h3>HONGKONG</h3>
                    <p> 3/F, Southtex Building, 51 Tsun Yip Street, Kwun Tong, Kowloon, HongKong</p>
                </div>
                <div class="py-2">
                    <h3>CHINA</h3>
                    <p> No. 798, Waihuan North Road, Chongchuan District, Nantong City, JiangSu,China</p>
                </div>
            </div>
        </div>
        <div class="col-6">
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
                <p>Copyright © 2020 VISAT CO.,LTD All Rights Reserved</p>
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
