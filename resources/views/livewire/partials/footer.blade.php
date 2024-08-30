<!-- FOOTER -->
<footer class="bg-dark bg-cover "
style="background-image: url({{ asset('client/assets/img/patterns/pattern-2.svg') }})">
<div class="py-12 border-bottom border-gray-700">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">

                <!-- Heading -->
                <h5 class="mb-7 text-center text-white">Want style Ideas and Treats?</h5>

                <!-- Form -->
                <form class="mb-11">
                    <div class="row gx-5 align-items-start">
                        <div class="col">
                            <input type="email" class="form-control form-control-gray-700 form-control-lg"
                                placeholder="Enter Email *">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-gray-500 btn-lg">Subscribe</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3">

                <!-- Heading -->
                <h4 class="mb-6 text-white"> {{ $shop->name }}</h4>

                <!-- Social -->
                <ul class="list-unstyled list-inline mb-7 mb-md-0">

                    @if ($shop->facebook)
                    <li class="list-inline-item">
                        <a target="_blank" href="{{ $shop->facebook }}" class="text-gray-350">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>                                
                    @endif

                    @if ($shop->youtube)
                    <li class="list-inline-item">
                        <a target="_blank" href="{{ $shop->youtube }}" class="text-gray-350">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    @endif

                    @if ($shop->twitter)
                    <li class="list-inline-item">
                        <a target="_blank" href="{{ $shop->twitter }}" class="text-gray-350">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    @endif
                   
                    @if ($shop->instagram)                            
                    <li class="list-inline-item">
                        <a target="_blank" href="{{ $shop->instagram }}" class="text-gray-350">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    @endif

                    @if ($shop->tiktok)
                    <li class="list-inline-item">
                        <a target="_blank" href="{{ $shop->tiktok }}" class="text-gray-350">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </li>
                    @endif
                </ul>

            </div>
            <div class="col-6 col-sm">

                <!-- Heading -->
                <h6 class="heading-xxs mb-4 text-white">
                    Support
                </h6>

                <!-- Links -->
                <ul class="list-unstyled mb-7 mb-sm-0">
                    <li>
                        <a class="text-gray-300" href="./contact-us.html">Contact Us</a>
                    </li>
                    <li>
                        <a wire:navigate class="text-gray-300" href="{{ route('customer.faqs') }}">FAQs</a>
                    </li>
                    <li>
                        <a class="text-gray-300" data-bs-toggle="modal" href="#modalSizeChart">Size
                            Guide</a>
                    </li>
                    <li>
                        <a class="text-gray-300" href="./shipping-and-returns.html">Shipping & Returns</a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-sm">

                <!-- Heading -->
                <h6 class="heading-xxs mb-4 text-white">
                    Shop
                </h6>

                <!-- Links -->
                <ul class="list-unstyled mb-7 mb-sm-0">
                    <li>
                        <a class="text-gray-300" href="./shop.html">Men's Shopping</a>
                    </li>
                    <li>
                        <a class="text-gray-300" href="./shop.html">Women's Shopping</a>
                    </li>
                    <li>
                        <a class="text-gray-300" href="./shop.html">Kids' Shopping</a>
                    </li>
                    <li>
                        <a class="text-gray-300" href="./shop.html">Discounts</a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-sm">

                <!-- Heading -->
                <h6 class="heading-xxs mb-4 text-white">
                    Company
                </h6>

                <!-- Links -->
                <ul class="list-unstyled mb-0">
                    <li>
                        <a class="text-gray-300" href="./about.html">Our Story</a>
                    </li>
                    <li>
                        <a class="text-gray-300" href="#!">Careers</a>
                    </li>
                    <li>
                        <a class="text-gray-300" href="#!">Terms & Conditions</a>
                    </li>
                    <li>
                        <a class="text-gray-300" href="#!">Privacy & Cookie policy</a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-sm">

                <!-- Heading -->
                <h6 class="heading-xxs mb-4 text-white">
                    Contact
                </h6>

                <!-- Links -->
                <ul class="list-unstyled mb-0">
                    <li>
                        <a class="text-gray-300" href="tel:">{{ $shop->phone_1 ?? '' }}</a>
                    </li>
                    @if ($shop->phone_2)
                    <li>
                        <a class="text-gray-300" href="#!">{{ $shop->phone_2 ?? '' }}</a>
                    </li>
                    @endif
                    @if ($shop->email)
                    <li>
                        <a class="text-gray-300" href="#!">{{ $shop->email }}</a>
                    </li>
                    @endif
                </ul>

            </div>
        </div>
    </div>
</div>
<div class="py-6">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Copyright -->
                <p class="mb-3 mb-md-0 fs-xxs text-muted">
                    © 2019 All rights reserved. Designed by Unvab.
                </p>

            </div>
            <div class="col-auto">

                <!-- Payment methods -->
                <img class="footer-payment" src="{{ asset('/client/assets/img/payment/mastercard.svg') }}"
                    alt="...">
                <img class="footer-payment" src="{{ asset('/client/assets/img/payment/visa.svg') }}"
                    alt="...">
                <img class="footer-payment" src="{{ asset('/client/assets/img/payment/amex.svg') }}"
                    alt="...">
                <img class="footer-payment" src="{{ asset('/client/assets/img/payment/paypal.svg') }}"
                    alt="...">
                <img class="footer-payment" src="{{ asset('/client/assets/img/payment/maestro.svg') }}"
                    alt="...">
                <img class="footer-payment" src="{{ asset('/client/assets/img/payment/klarna.svg') }}"
                    alt="...">

            </div>
        </div>
    </div>
</div>
</footer>