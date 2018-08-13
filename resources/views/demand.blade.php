
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
                       <h2>@lang('upit.naslov')</h2>
                       <p class="forma">@lang('upit.naslov1')</p>
                   </div>





                   <br />



                  <?php /* <form class="wpcf7 driver-app-form clearfix">
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
                   */ ?>
   <div class="col-md-12 upit">
                   <div class="col-md-12">
                     <p class="forma"> @lang('upit.vrsta')* </p>
                        {!! Form::open(['action' => 'TransportController@store', 'method' => 'POST' ], ['class' => 'wpcf7 driver-app-form clearfix', 'id'=>'forma']) !!}
                        <div class="col-md-6">

                     {{Form::radio('uvoz_izvoz', 'Uvoz', true) }}
                      {{Form::label('Uvoz', Lang::get('upit.uvoz'))}}

                  {{Form::radio('uvoz_izvoz', 'Izvoz', true) }}
                  {{Form::label('Izvoz', Lang::get('upit.izvoz'))}}
                </div>
                      <div class="col-md-6">
                        <i class="fa fa-star" aria-hidden="true"></i>
                      {{Form::select('tip_prevoza', ['Kopnom' => Lang::get('upit.tip1'), 'Avionski' => Lang::get('upit.tip2'), 'Pomorski' => Lang::get('upit.tip3')], null, ['class' => 'form-control', 'placeholder' => Lang::get('upit.tip')]) }}
                      @if($errors->first('tip_prevoza'))
                              <small class="text-danger">{{ $errors->first('tip_prevoza') }} *</small>
                      @endif
                    </div>
                  </div>

                  <div class="col-md-12">
                      <div class="col-md-6">
                    <p class="forma">@Lang('upit.viste') * </p>

                    {{Form::radio('posiljatelj_primatelj', 'Pošijatelj', true) }}
                    {{Form::label('posiljalac', Lang::get('upit.posiljalac'))}}

                    {{Form::radio('posiljatelj_primatelj', 'Primatelj', true) }}
                   {{Form::label('Primatelj', Lang::get('upit.primalac'))}}
                          </div>
                          <div class="col-md-6">
                            <br>
                                <i class="fa fa-star" aria-hidden="true"></i>
                          {{Form::select('status', ['Klijent' => Lang::get('upit.status1'), 'Nisam_klijent' => Lang::get('upit.status2'), 'Bivsi' => Lang::get('upit.status3'), 'nema_podatak' => Lang::get('upit.status4')], null, ['class' => 'form-control', 'placeholder' => Lang::get('upit.status')])  }}
                          @if($errors->first('status'))
                                  <small class="text-danger">{{ $errors->first('status') }} *</small>
                          @endif
                          </div>
                        </div>

                        <div class="col-md-12" style="margin-top: 30px;">
                            <div class="col-md-4">

                              <i class="fa fa-user" aria-hidden="true"></i>
                          {{Form::label('Ime', Lang::get('upit.kontaktpartner'))}}

                          {{Form::text('ime_partnera', '', ['class' => 'form-control', 'placeholder' => '']) }}
                          @if($errors->first('ime_partnera'))
                                  <small class="text-danger">{{ $errors->first('ime_partnera') }} *</small>
                          @endif
                                </div>
                                <div class="col-md-4">

                                  <i class="fa fa-suitcase" aria-hidden="true"></i>
                                  {{Form::label('Firma', Lang::get('upit.firma'))}}


                                  {{Form::text('firma', '', ['class' => 'form-control', 'placeholder' => '']) }}
                                  @if($errors->first('firma'))
                                          <small class="text-danger">{{ $errors->first('firma') }} *</small>
                                  @endif
                                </div>

                              </div>


                                                      <div class="col-md-12">
                                                          <div class="col-md-4">

                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        {{Form::label('Pb', Lang::get('upit.postanskibr'))}}

                                                        {{Form::text('pb', '', ['class' => 'form-control', 'placeholder' => '']) }}
                                                        @if($errors->first('pb'))
                                                                <small class="text-danger">{{ $errors->first('pb') }} *</small>
                                                        @endif
                                                              </div>
                                                              <div class="col-md-4">

                                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                {{Form::label('Mesto', Lang::get('upit.mesto'))}}

                                                                {{Form::text('mesto', '', ['class' => 'form-control', 'placeholder' => '']) }}
                                                                @if($errors->first('mesto'))
                                                                        <small class="text-danger">{{ $errors->first('mesto') }} *</small>
                                                                @endif
                                                              </div>
                                                              <div class="col-md-4">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                {{Form::label('Drzava', Lang::get('upit.drzava'))}}

                                                                {{Form::select('drzava', ['Srbija' => Lang::get('upit.drzava1'), 'Crna Gora' => Lang::get('upit.drzava2'), 'Hrvatska' => Lang::get('upit.drzava3')], null, ['class' => 'form-control', 'placeholder' => Lang::get('upit.drzava')]) }}
                                                                @if($errors->first('drzava'))
                                                                        <small class="text-danger">{{ $errors->first('drzava') }} *</small>
                                                                @endif
                                                              </div>
                                                            </div>
        <div class="col-md-12">
          <div class="col-md-4">

            <i class="fa fa-phone" aria-hidden="true"></i>

        {{Form::label('Telefon', Lang::get('upit.telefon'))}}
        {{Form::text('telefon', '', ['class' => 'form-control', 'placeholder' => '']) }}
        @if($errors->first('telefon'))
                <small class="text-danger">{{ $errors->first('telefon') }} *</small>
        @endif
              </div>
              <div class="col-md-4">

                <i class="fa fa-envelope" aria-hidden="true"></i>
                {{Form::label('Email', Lang::get('upit.email'))}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => '']) }}
                @if($errors->first('email'))
                        <small class="text-danger">{{ $errors->first('email') }} *</small>
                @endif
              </div>
        </div>

        <div class="col-md-12">
          <br>
          <p class="forma"> @lang('upit.posiljalac') / @lang('upit.primalac') * </p>
          <div class="col-md-4">

              <i class="fa fa-user" aria-hidden="true"></i>
        {{Form::label('Ime', Lang::get('upit.kontaktpartner'))}}
        {{Form::text('ime_partnera_2', '', ['class' => 'form-control', 'placeholder' => '' ]) }}
        @if($errors->first('ime_partnera_2'))
                <small class="text-danger">{{ $errors->first('ime_partnera_2') }} *</small>
        @endif
              </div>
              <div class="col-md-4">

                  <i class="fa fa-suitcase" aria-hidden="true"></i>
                  {{Form::label('Firma', Lang::get('upit.firma'))}}
                {{Form::text('firma2', '', ['class' => 'form-control', 'placeholder' => '']) }}
                @if($errors->first('firma2'))
                        <small class="text-danger">{{ $errors->first('firma2') }} *</small>
                @endif
              </div>

            </div>


                                    <div class="col-md-12">
                                        <div class="col-md-4">

                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{Form::label('Pb2', Lang::get('upit.postanskibr'))}}
                                      {{Form::text('postanski_broj2', '', ['class' => 'form-control', 'placeholder' => '']) }}
                                      @if($errors->first('postanski_broj2'))
                                              <small class="text-danger">{{ $errors->first('postanski_broj2') }} *</small>
                                      @endif
                                            </div>
                                            <div class="col-md-4">

                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{Form::label('Mesto', Lang::get('upit.mesto'))}}
                                              {{Form::text('mesto2', '', ['class' => 'form-control', 'placeholder' => '']) }}
                                              @if($errors->first('mesto2'))
                                                      <small class="text-danger">{{ $errors->first('mesto2') }} *</small>
                                              @endif
                                            </div>
                                            <div class="col-md-4">
                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                            {{Form::label('Drzava', Lang::get('upit.drzava'))}}
                                              {{Form::select('drzava2', ['Srbija' => 'Srbija', 'Crna Gora' => 'Crna Gora', 'Hrvatska' => 'Hrtvatska'], null, ['class' => 'form-control', 'placeholder' => Lang::get('upit.drzava')]) }}
                                              @if($errors->first('drzava2'))
                                                      <small class="text-danger">{{ $errors->first('drzava2') }} *</small>
                                              @endif
                                            </div>
                                          </div>
<div class="col-md-12">
<div class="col-md-4">

  <i class="fa fa-phone" aria-hidden="true"></i>

  {{Form::label('Telefon', Lang::get('upit.telefon'))}}
{{Form::text('telefon2', '', ['class' => 'form-control', 'placeholder' => '']) }}
@if($errors->first('telefon2'))
        <small class="text-danger">{{ $errors->first('telefon2') }} *</small>
@endif
</div>
<div class="col-md-4">

<i class="fa fa-envelope" aria-hidden="true"></i>
  {{Form::label('Email', Lang::get('upit.email'))}}
{{Form::text('email2', '', ['class' => 'form-control', 'placeholder' => '']) }}
@if($errors->first('email2'))
        <small class="text-danger">{{ $errors->first('email2') }} *</small>
@endif
</div>
        </div>

                                    <div class="col-md-12">
                                      <br>
                                      <p class="forma"> @lang('upit.brojvrsta') * </p>
                                        <div class="col-md-4">

                                          <i class="fa fa-comment" aria-hidden="true"></i>
                                      {{Form::label('Broj', Lang::get('upit.broj'))}}
                                      {{Form::text('broj', '', ['class' => 'form-control', 'placeholder' => '']) }}
                                      @if($errors->first('broj'))
                                              <small class="text-danger">{{ $errors->first('broj') }} *</small>
                                      @endif
                                            </div>
                                            <div class="col-md-4">
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                              {{Form::label('Vrsta', Lang::get('upit.vrsta'))}}
  {{Form::select('vrsta_kolija', ['BND' => Lang::get('upit.snop'), 'KST' => 'KST - Kutija', 'FAX' => 'FAX - Bure', 'KRT' => 'KRT - Karton' , 'ROL' => 'Rol - Rolna' , 'STK' => 'STK - Komad' , 'CON' => 'CON - Kontejner', 'EUP' => 'EUP - Europaleta', 'GIX' => 'GIX - Rešetkasta kutija' , 'SAK' => 'SAK - Džak' , 'VSG' => 'VSG - Okvir' ], null, ['class' => 'form-control', 'placeholder' => Lang::get('upit.vrsta')]) }}
  @if($errors->first('vrsta_kolija'))
          <small class="text-danger">{{ $errors->first('vrsta_kolija') }} *</small>
  @endif
                                            </div>
                                            <div class="col-md-4">

                                              <i class="fa fa-comment" aria-hidden="true"></i>
                                              {{Form::label('Tezina', Lang::get('upit.tezina'))}}
                                              {{Form::text('tezina_kg', '', ['class' => 'form-control', 'placeholder' => '']) }}
                                              @if($errors->first('tezina_kg'))
                                                      <small class="text-danger">{{ $errors->first('tezina_kg') }} *</small>
                                              @endif
                                            </div>

                                          </div>

                                          <div class="col-md-12">
                                            <br>
                                            <p class="forma"> @lang('upit.dimenzije') </p>
                                              <div class="col-md-4">

                                                  <i class="fa fa-comment" aria-hidden="true"></i>
                                            {{Form::label('Slobodno', @Lang::get('upit.kolicina') )}}
                                            {{Form::text('kolicina', '', ['class' => 'form-control', 'placeholder' => '']) }}
                                                  </div>
                                                  <div class="col-md-4">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                    {{Form::label('Dimenzije', @Lang::get('upit.dimenzije'))}}
                                                    {{Form::select('dimenzije', ['m3' => 'm³', 'lm' => 'LM', 'nepoznato' =>  @Lang::get('upit.nepoznato')], null, ['class' => 'form-control', 'placeholder' =>  @Lang::get('upit.dimenzije')]) }}
                                                      @if($errors->first('dimenzije'))
                                                              <small class="text-danger">{{ $errors->first('dimenzije') }} *</small>
                                                      @endif
                                                  </div>


                                                </div>


                                                <div class="col-md-12">
                                                  <br>
                                                  <p class="forma"> @lang('upit.usloviisporuke') </p>
                                                  <div class="col-md-4">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                    {{Form::label('incoterm', 'Incoterm')}}
                                                    {{Form::select('incoterm', ['EXW' => 'EXW', 'FCA' => 'FCA', 'FAS' => 'FAS', 'FOB' => 'FOB' , 'CFR' => 'CFR' , 'CIF' => 'CIF' , 'CPT' => 'CPT', 'CIP' => 'CIP', 'CPT' => 'CPT' , 'DDP' => 'DDP' , 'DAP' => 'DAP' , 'DAT' => 'DAT', 'unknown' => 'unknown' ], null, ['class' => 'form-control', 'placeholder' => '*']) }}
                                                    @if($errors->first('incoterm'))
                                                            <small class="text-danger">{{ $errors->first('incoterm') }} *</small>
                                                    @endif
                                                  </div>
                                                    <div class="col-md-4">

                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                  {{Form::label('Mesto', @Lang::get('upit.mesto') )}}

                                                  {{Form::text('mesto3', '', ['class' => 'form-control', 'placeholder' => '']) }}

                                                        </div>



                                                      </div>

                                                        <div class="col-md-12">
                                                                <br>
                                                              {{Form::checkbox('opasan_teret', 'opasan teret', false, ['class' => 'form-check-input']) }}
                                                      {{Form::label('opasan', @Lang::get('upit.opasanteret'))}}


                                                    </div>

                                                    <div class="col-md-12">
                                                            <br>

                                                  {{Form::label('Napomena', @Lang::get('upit.napomena'))}}

                                                          {{Form::textarea('napomena', '', ['class' => 'form-control', 'placeholder' => '']) }}
                                                </div>


                                                <div class="col-md-12 posalji">
                                                  <br>
       {{Form::submit(Lang::get('upit.posalji'), array('class' => 'wpcf7-submit')) }}


                                                </div>
                                          </div>




                   {!! Form::close() !!}



                   @if(session('success'))
                     <div class="alert alert-success">
                       {{ session('success') }}
                     </div>
                   @endif



               </div><!-- .col-md-9 end -->
           </div><!-- .row end -->
       </div><!-- .container end -->

   </div><!-- .page-content end -->
 @endsection
