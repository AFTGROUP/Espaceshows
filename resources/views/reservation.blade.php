@extends('layouts.landing')

@section('content')

<div class="col-xl-8 col-lg-7 offset-xl-2">
              <div class="card border-light shadow-lg py-3 p-sm-4 p-md-5">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block"></div>
                <div class="card-body position-relative zindex-2">
                  <h2 class="card-title pb-3 mb-4">Get Online Consultation</h2>
                  <form class="row g-4 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="fn" class="form-label fs-base">Full name</label>
                      <input type="text" class="form-control form-control-lg" id="fn" required>
                      <div class="invalid-feedback">Please enter your full name!</div>
                    </div>
                    <div class="col-12">
                      <label for="email" class="form-label fs-base">Email address</label>
                      <input type="email" class="form-control form-control-lg" id="email" required>
                      <div class="invalid-feedback">Please provid a valid email address!</div>
                    </div>
                    <div class="col-12">
                      <label for="specialist" class="form-label fs-base">Specialist</label>
                      <select class="form-select form-select-lg" id="specialist" required>
                        <option value="" selected disabled>Choose a specialist</option>
                        <option value="Therapist">Therapist</option>
                        <option value="Dentist">Dentist</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Pediatrician">Pediatrician</option>
                        <option value="Gynecologist">Gynecologist</option>
                        <option value="Surgeon">Surgeon</option>
                      </select>
                      <div class="invalid-feedback">Choose a specialist from the list!</div>
                    </div>
                    <div class="col-sm-6">
                      <label for="date" class="form-label fs-base">Date</label>
                      <input type="text" class="form-control form-control-lg" id="date" data-format='{"date": true, "datePattern": ["m", "d"]}' placeholder="mm/dd" required>
                      <div class="invalid-feedback">Enter a date!</div>
                    </div>
                    <div class="col-sm-6">
                      <label for="time" class="form-label fs-base">Time</label>
                      <input type="text" class="form-control form-control-lg" id="time" data-format='{"time": true, "timePattern": ["h", "m"]}' placeholder="hh:mm" required>
                      <div class="invalid-feedback">Enter a time!</div>
                    </div>
                    <div class="col-12 pt-2 pt-sm-3">
                      <button type="submit" class="btn btn-lg btn-primary w-100 w-sm-auto">Make an appointment</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>


@stop
