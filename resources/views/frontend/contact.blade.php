
@extends('frontend.layouts.main')
@section('content')


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div id="map" class="h-100 w-100 ">
          </div>
        </div>
        <div class=" col-md-6 contact_form-container">
          <div class="contact_box">
            {{-- <form action=""> --}}
              {!! Form::open([
                'url' => '/contact',
                'method' => 'post'
                ]) !!}
                {{-- @csrf --}}
              {{-- <input type="text" placeholder="Your Name"> --}}
              {!! Form::text('name', '', [
                'name' => "name",
                'placeholder' => "Your Name"
              ]) !!}
              {!! Form::select('country', ['1' => 'Nepal','2' =>  'Inda', '3' => 'Bangladesh', '4' => 'Bhutan'],'2', [
                'name' => "name",
                'placeholder' => "Your Country"
              ]) !!}
              <input type="email" placeholder="Email">
              <input type="text" placeholder="Phone Number">
              <input type="text" placeholder="Message">
              <div>
                <button type="submit">
                  Submit
                </button>
              </div>
            {{-- </form> --}}
            {!! Form::close() !!}
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>

  <!-- end contact section -->

@endsection
  