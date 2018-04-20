
@extends('layouts.app')

@section('content')
<div class="page-title-style01 page-title-negative-top pt-bkg15">
       <div class="container">
           <div class="row">

           </div><!-- .row end -->
       </div><!-- .container end -->
   </div><!-- .page-title-style01.page-title-negative-top end -->


   <div class="page-content">
       <div class="container">

           <div class="row">
     <img class="float-right" src="img/pics/q.png" width="260" alt=""/>
               <div class="col-md-9">

                   <div class="custom-heading">
                       <h2>Upit za troškove transporta</h2>
                   </div>



                   <p>
                       I throw myself down among the tall grass by the
                       trickling stream; and, as I lie close to the earth,
                       a thousand unknown plants are noticed by me: when I
                       hear the buzz of the little world among the stalks,
                       and grow familiar with the countless indescribable
                       forms of the insects and flies, then I feel the
                       presence of the Almighty, who formed us in his own
                       image, and the breath.
                       On the other hand, we denounce with righteous
                       indignation and dislike men who are so beguiled and
                       demoralized by the charms of pleasure of the moment,
                       so blinded by desire, that they cannot foresee the
                       pain and trouble that are bound to ensue; and equal
                       blame belongs to those who fail in their duty.
                   </p>

                   <br />

                   <div class="custom-heading">
                       <h2>online driver application</h2>
                   </div><!-- .custom-heading end -->

                   <form class="wpcf7 driver-app-form clearfix">
                       <fieldset>
                           <label><span class="required">*</span> Driver first name:</label>

                           <input type="text" class="wpcf7-text" id="driver-name">
                       </fieldset>

                       <fieldset>
                           <label><span class="required">*</span> Driver last name:</label>

                           <input type="text" class="wpcf7-text" id="driver-last-name">
                       </fieldset>

                       <fieldset>
                           <label><span class="required">*</span> Driver last name:</label>

                           <input type="text" class="wpcf7-text" id="driver-date-birth" placeholder="mm/dd/yy">
                       </fieldset>

                       <fieldset>
                           <label><span class="required">*</span> You are:</label>

                           <select class="wpcf7-select" id="driver-type">
                               <option value="Owner">Owner</option>
                               <option value="Company driver">Company driver</option>
                           </select>
                       </fieldset>

                       <fieldset>
                           <label><span class="required">*</span> Driver's license date issued:</label>

                           <input class="wpcf7-text" id="driver-licence-period">
                       </fieldset>

                       <fieldset>
                           <label><span class="required">*</span> Type of driver's licence:</label>

                           <input class="wpcf7-text" id="driver-licence-type">
                       </fieldset>

                       <fieldset>
                           <label><span class="required">*</span> Your phone number:</label>

                           <input class="wpcf7-text" id="driver-phone">
                       </fieldset>

                       <fieldset>
                           <label><span class="required">*</span> Your cell number:</label>

                           <input class="wpcf7-text" id="driver-cell">
                       </fieldset>

                       <fieldset>
                           <label><span class="required">*</span> Years of experience:</label>

                           <input class="wpcf7-text" id="driver-experience" placeholder="Minimum 3...">
                       </fieldset>

                       <input type="submit" class="wpcf7-submit" value="apply now">
                   </form><!-- .wpcf7 end -->
               </div><!-- .col-md-9 end -->
           </div><!-- .row end -->
       </div><!-- .container end -->
   </div><!-- .page-content end -->
 @endsection
