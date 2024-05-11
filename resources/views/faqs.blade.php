@extends('layouts.master')

@section('top-styles')
<style type="text/css">
    .header-lower{
        background-color: #0d1927 !important;
    }
</style>
@endsection

@section('content')

<!-- Page Title -->
        <section class="page-title style-two">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                        <h1>FAQs</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li> <a href="{{ route('home') }}">Home</a></li>
                        <li> FAQs</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <hr style="border-top-color: rgba(41, 170, 227,0.1);">

    <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="text">
                                   <div class="col-lg-12 offset-xl-1">
            <div class="pb-md-2">
              <h3 class="h5">1. What is the minimum age to rent a car?</h3>
              <p style="margin-left: 30px;">The minimum age to rent a car in Dubai is 21 years old. If you have already reached this age - everything is in order, contact Alfa Rent Car to rent a car.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">2. Is it enough for me to have a Russian license to drive in Dubai?</h3>
              <p style="margin-left: 30px;">Yes, enough. You need the internal rights of the country of which you are a citizen - Russia, Ukraine, etc.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">3. The trip was canceled, the car was booked. Will my money be returned?</h3>
              <p style="margin-left: 30px;">We do not take prepayment for car rental. You pay for our services on the spot, after your arrival in Dubai. Therefore, if the trip is interrupted, please let us know and we will cancel the booking. Since there is no prepayment for car rental, there are no problems with the return of money.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">4. What does car insurance cover?</h3>
              <p style="margin-left: 30px;">If the accident occurred due to the fault of the client, then the insurance will be 10% of the damage. To this is added a fixed amount that the insurance company has set for this car. This amount depends on the specific brand of car. For example, for Lamborghini Huracan it is $1370.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">5. I had an accident. What to do?</h3>
              <p style="margin-left: 30px;">Most importantly, contact your landlord as soon as possible and tell them what happened. The technical support representatives of our company will promptly take the necessary measures and tell you how to behave, depending on the specific circumstances. Remember that you cannot leave the scene of the accident until the police officers complete the paperwork.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">6. What do you need to rent a car?</h3>
              <p style="margin-left: 30px;">You must be at least 21 years of age to rent a car from Alfa Rent Car. You will need the following documents:
                <ul style="margin-left: 30px;">
                  <li>Original passport;</li>
                  <li>Domestic driver's license issued in the country of which you are a citizen;</li>
                  <li>A bank card with enough money to pay for the rental services - the required amount will be blocked as a deposit, and then debited from your account.</li>
                </ul>
              </p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">7. How to pay for car rental?</h3>
              <p style="margin-left: 30px;">You choose which payment option is more convenient for you - by credit card or in cash. But keep in mind that when paying with a card, the processing company takes an additional interest for using the money transfer service.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">8. Can I transfer control to another driver?</h3>
              <p style="margin-left: 30px;">Only the person specified in the contract can drive the rented car. But in one contract you can specify two drivers. Accordingly, they can change, and you can transfer control to another person - provided that he is also indicated in the contract for this car.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">9. Why can the police fine me?</h3>
              <p style="margin-left: 30px;">The Dubai Traffic Police can fine a driver for, for example:
                <ul style="margin-left: 30px;">
                  <li>Speeding;</li>
                  <li>Driving at a speed below the minimum allowed on the given section of the road;</li>
                  <li>Driving without a license;</li>
                  <li>Driving a car that does not have license plates;</li>
                  <li>Running a red light;</li>
                  <li>Driving under the influence of alcohol or drugs;</li>
                  <li>Violation of the safe distance between your car and other vehicles.</li>
                </ul>
                <span style="margin-left: 30px;">According to statistics, up to 90% of fines are assigned due to speeding.</span>
                <span style="margin-left: 30px;">A complete list of traffic fines, as well as their sizes, can be found on this page</span>
                <span style="margin-left: 30px;">https://www.edarabia.com/dubai-police-traffic-fines/#1</span>
              </p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">10. Are there traffic jams in Dubai?</h3>
              <p style="margin-left: 50px;">Yes. In Dubai, there is an average of one car for every two people. Therefore, it is not surprising that traffic jams occur on the roads. Local authorities are fighting them, and the situation is gradually improving, but the problem has not yet been completely resolved. Traffic jams on the highway connecting Dubai with the emirate of Sharjah are considered the most serious.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">11. What gasoline to fill in a car?</h3>
              <p style="margin-left: 50px;">Two types of gasoline are presented at Dubai petrol stations - Super (98) and Special (95). An employee of Kings Rental Cfrs will tell you which one to fill in the tank of a rented car. At the gas station, there is no need to get out of the car, just tell the gas station attendant the brand of gasoline you need and how many liters you need to fill in the tank.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">12. How much is parking in Dubai?</h3>
              <p style="margin-left: 50px;">The answer to this question depends on the type of parking.
                <ul style="margin-left: 50px;">
                  <li>When shopping, entertainment centers usually have a zone allocated for free parking.</li>
                  <li>Hotels and restaurants offer valet parking, which means you hand over the car to the person who places it. This service can be either free or paid.</li>
                  <li>There are paid parking zones on city streets. Hourly rates start at $0.55.</li>
                </ul>
              </p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">13. How to pay for parking in Dubai?</h3>
              <p style="margin-left: 50px;">If you use paid parking, you can pay for the service in two ways:
                <ul style="margin-left: 50px;">
                  <li>At the machine - insert the required number of coins, press OK and wait until the device issues a check, which must be placed under the car window so that it can be seen;</li>
                  <li>Via SMS - from a mobile phone with a UAE number, send an SMS to 7275 with the text "Vehicle number zone number number of hours". For example, O44970 363K 4.</li>
                  <span style="margin-left: 50px;">This means: car number O 44970, zone 363K, parking for 4 hours.</span>
                </ul>
              </p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">14. Is smoking allowed in the car?</h3>
              <p style="margin-left: 50px;">No. This is not only unwelcome, but also punishable by a fine.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">15. Is it allowed to transport alcoholic beverages in the rental car?</h3>
              <p style="margin-left: 50px;">UAE laws only allow you to carry alcoholic beverages in a car if you have a license to do so. If you are carrying a small amount of alcohol, especially purchased in Duty Free, for your own consumption, the police will treat you loyally. But the transportation of alcohol in such quantity that it is immediately clear that this is a commercial consignment will entail serious consequences not only for the driver, but also for the rental company.</p>
            </div>
            <div class="pb-md-2">
              <h3 class="h5">16. The lease has expired. Who will pick up my car and deliver it to the rental company?</h3>
              <p style="margin-left: 50px;">Our driver will deliver the car to the client in Dubai, and after the expiration of the rental period, he will pick it up where it is convenient for you to leave the car. Delivery to another city in the United Arab Emirates is possible, but for an additional fee. The cost depends both on the brand of the car and on how far it needs to be delivered.</p>
            </div>
          </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection