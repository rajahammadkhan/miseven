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
                        <h1>Terms And Conditions</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li> <a href="{{ route('home') }}">Home</a></li>
                        <li> Terms And Conditions</li>
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
                                    <h3 class="h5" style="font-size: 35px;">ELIGIBILITY AND REOUIREMENTS:</h3>
                                    <div class="pb-md-2">
                                      <h3 class="h5">1. AGE RESTRICTIONS:</h3>
                                      <p>When renting vehicles from MI7 Rent A Car LLC the following age limits are observed: Minimum 20 years old. Maximum 70 years old.</p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">2. CONCURRENT RENTALS:</h3>
                                      <p>The hirer is not allowed to rent more than 1 vehicle at the same time. If the hirer has an existing active rental that coincides with a new booking's scheduled pick-up, we have the right to refuse the new booking.</p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">REQUIRED DOCUMENTS:</h3>
                                      <p>The hirer is required to provide the following original, valid documents. All documents have to be under the hirer's name:
                                        <ul>
                                          <li>1.  UAE Residents: UAE Driving License - Emirates ID - Credit card* (valid for the next 3 months minimum)</li>
                                          <span>- Passport with Residence visa</span>
                                          <li>2.  Non-UAE Residents: International Driving Permit / GCC driving license / valid driving license from their country of origin (refer to Driving License Exemptions list)</li>
                                        </ul>
                                      </p>
                                      <p>
                                        - Passport with entry stamp <br>
                                        - Credit card* (valid for the next 3 months minimum) <br>
                                        * The same credit card is not allowed to be used on 2 or more concurrent rentals.
                                      </p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">DRIVING LICENSE:</h3>
                                      <p>Tourists from all GCC countries are permitted to drive in the UAE with their respective local driving licenses. Please note that in case the hirer's Visit or Tourist visa in UAE is changed to a Residence visa, you will need to obtain an UAE driving license. This together with a copy of your passport with Residence visa page has to be submitted to MI7 Rent a car Immediately. MINIMUM RENTAL PERIOD AND INCREMENTS: The minimum rental period is 1 day (24 hours). Prorated hourly rental is not allowed. A rental with less than 24-hour duration will be considered as a 1-day rental. Similarly, any excess rental period that is less than 24 hours is considered as an additional 1-day rental.</p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">MAKING A BOOKING:</h3>
                                      <p>The hirer may reserve their booking via the following options: 1.Getting in touch with the contact center. 2. Visiting any MI7 Rent A Car desk BOOKING MODIFICATION: The hirer may modify their prepaid booking at least 24 hours prior to pick-up date and time, and will be charged with the corresponding fee(s). The total payable amount will be recalculated if the rates have changed between the dates the original and amended bookings are made. In which case, the last prices will apply. </p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">BOOKING CANCELLATION:</h3>
                                      <p>The hirer may cancel their booking online and will be charged with the corresponding fee(s). Refunds, where applicable, will be made within 25 calendar days. Booking Cancellation Fee: Hirer can cancel booking 24 hours (or more) prior to pick-up date and time without any applicable fees. If hirer cancels booking less than 24 hours prior to pick-up date and time will be charged 50% of the car rate per day; same applies if hirer doesn't show at the pick-up time.
                                      </p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">RENTAL EXTENSION:</h3>
                                      <p>Hirer may request for the rental extension at any MI7 Rent a car desk by making a new booking with pick-up date and time matching their current rental's off-hire date and time. New rates at the time of new booking shall apply on the rental extension and the local rates and policies will apply on the rental extension.</p>
                                    </div>
                                    <br>
                                      <h3 class="h5" style="font-size: 35px;">EARLY RETURN:</h3>            
                                    <div class="pb-md-2">
                                      <h3 class="h5">*IMPORTANT:</h3>
                                      <p>If the hirer returns the car early to return date, 50% of rental fees will be added to the rental fees of the car. This applies to all rented days.</p>
                                      <h3 class="h5">LATE RETURN:</h3>
                                      <p>Only 1-hour grace period for late return is allowed. Beyond this, rental charges will apply per local rates and policies.</p>
                                      <h3 class="h5">*IMPORTANT:</h3>
                                      <p>In case any terrific fines, any payment made are considered as payment to the fines and any consequences such as car lock etc, and the customer has to pay MI7 Rent A Car for the rental period.</p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">PAYMENT AND FEES:</h3>
                                        <ul>
                                          <li>1.  VALUE-ADDED TAX (VAT): MI7 Rent A Car reserves the right to add value-added tax (VAT) on all services and rates, as confirmed and implemented by the UAE Government.</li>
                                          <li>2.  RATES VALIDITY: MI7 Rent A Car reserves the right to change the prices of its products and services.</li>
                                          <li>3.  PAYMENT: All prices are payable in UAE Dirhams (AED). Cash and all major credit cards are accepted as means of payment. Advance payment for the whole rental is required prior to collecting the vehicle from the counter.</li>
                                          <li>4.  SECURITY DEPOSIT: At the time of vehicle pick-up, the main driver shall leave a security deposit. If the security deposit is not provided, MI7 Rent A Car reserves the right to refuse the rental, and consideration the case as a booking cancellation. Booking cancellation terms and conditions apply.</li>
                                          <li>5.  ONE-WAY RENTAL FEE: (WR) The hirer may return the vehicle to a MI7 Rent a car location only during that location's working hours (see Location List for working hours). Additional charges may apply. If the hirer returns the rented vehicle to any location other than the original pick-up location, One-Way Rental fees of 500AED (OWR) shall apply.</li>
                                          <li>6.  AIRPORT FEE (PRK): If the hirer picks up and/or drops off the vehicle at any airport location, Airport Fees (PRK) shall apply.</li>
                                          <li>7.  TOLL FEE: Toll gate crossing is charged at actual price + (25% administration fee).</li>
                                          <li>8.  TRAFFIC FINES: Any traffic fine incurred by the hirer is their liability and is charged at actual fine amount + (10% administration fee).</li>
                                          <li>9.  IMPOUNDING FEE: If the vehicle is impounded, the customer is liable to compensate MI7 Rent a car for both the COMPLETE impounding fee and loss of rental (number of days the car stops being rented for fixing)</li>
                                          <li>10. PARKING FEE: The hirer is responsible for registering their vehicle for paid parking and for all parking charges in relation to the vehicle whilst on hire.</li>
                                          <li>11. FUEL POLICY: The hirer is required to return the vehicle with the same fuel level that it has when it was hired. Otherwise, a locally-determined refueling charge will apply.</li>
                                        </ul>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">DRIVING RESTRICTIONS:</h3>
                                      <ul>
                                        <li>1.  The hirer is prohibited to use the vehicle under below conditions and activities:</li>
                                        <li>2.  When the hirer is under the influence of alcohol/drugs</li>
                                        <li>3.  Racing, towing other vehicles, or off-road driving</li>
                                        <li>4.  Any other activity considered against the UAE law</li>
                                        <li>5.  The vehicle insurance does not cover any accident/damage resulting from any of the above scenarios. Any such violation would make the hirer liable to pay for the total damages to the vehicle and/or any ancillary damages caused.</li>
                                        <li>6.  Hirer is not allowed to hand over vehicles to unlicensed drivers, or a person less than 25 years old otherwise he/she will be responsible for all caused damages.</li>
                                        <li>7.  MI7 Rent A Car absolves itself or any responsibility for any case or valuables belonging to the hires that may be last whilst the vehicle is in his/her possession or after the entire period of the hire.</li>
                                        <li>8.  The hirer must ensure that the vehicle is parked in a safe and secure place when it is not in use. Any damage caused to the vehicle including damage due to acts of nature will be the sole responsibility and liability of the hirer as the same cannot be claimed from the insurance</li>
                                        <li>9.  The office has all the right to confiscate the vehicle at any time without prior warning.</li>
                                      </ul>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">Accidents:</h3>
                                      <p>In case the hirer is affected and not the causer: he is obligated to submit an accident report to MI7 Rent a car office and bear any consequential damages caused, such as the car stopping the rental, so that the days of stopping are calculated at the rental price mentioned in the contract.</p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">In case the hirer is the causer:</h3>
                                      <p>Any such violation that would make the lessee liable to pay 20% of the value of the damages to the vehicle and/or any consequential damages caused, such as stopping the car from renting. He bears the fees for opening the insurance file.
                                        <ul>
                                          <li>1.  It is hereby agreed upon between the hirer and the company that in case of a TOTAL LOSS (vehicle beyond and economical repairs) the hirer agrees to pay to the company 30% of the total. Insured value of the vehicle if the vehicle is less than 12 months from the date of purchase, and 20% if it is more than 10 months.</li>
                                          <li>2.  In case of an accident or technical trouble, the hirer must inform the rental office. Hirer is not allowed to repair without informing the rent office</li>
                                          <li>3.  Hirer is responsible for all damages and repairs that are acquired to the vehicle within the hire period and he will pay the full amount of the contract until damages are repaired.</li>
                                          <li>4.  In case of the robbery or burn for vehicle, the hirer will pay the rent amount till the cheque is issued by the insurance company.</li>
                                        </ul>
                                      </p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">GEOGRAPHICAL LIMITS:</h3>
                                      <p>The vehicles may be driven only within the geographical boundaries of UAE. MILEAGE LIMITS: 250 Kilometres Mileage limit is applicable on daily, weekly, and monthly rentals and are subject to mileage limits and extra mileage charges (EMC). 10 AED per Kilometre.</p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">VALUE-ADDED SERVICES:</h3>
                                      <p>DELIVERY AND COLLECTION: Delivery and collection services may be provided upon request, and will be charged accordingly.</p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">ADDITIONAL DRIVER:</h3>
                                      <p>A second driver may be added at an extra cost. In addition to the main hirer's documents, they shall also provide the passport copy and driving license of the second driver.</p>
                                    </div>
                                    <div class="pb-md-2">
                                      <h3 class="h5">CHILD SEAT:</h3>
                                      <p>Child seats for age bracket of 1-4 years old are available on request at an extra cost, and are subject to availability. CHAUFFEUR SERVICE :(currently not available).</p>
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