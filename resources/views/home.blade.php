@extends('layouts.backend')

@section('content')
      
      <!-- RIGHTPART -->
      <div class="rightpart">
        <div class="rightpart_in">
         
           <!-- DashBoard -->
           
           <div id="dashboard" class="tokyo_tm_section {{ (request()->is('home')) ? 'active' : '' }}">
            <div class="container">
              <div class="tokyo_tm_news">
                <div class="tokyo_tm_title">
                  <div class="title_flex">
                    <div class="left">
                      <span>DashBoard</span>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        
          <!-- DashBoard -->
   
        </div>
      </div>
      <!-- /RIGHTPART -->
@endsection
