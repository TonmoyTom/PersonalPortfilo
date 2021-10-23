@extends('layouts.backend')

@section('content')
<!-- RIGHTPART -->
<div class="rightpart">
  <div class="rightpart_in">
    <!-- About Us -->

    <!--Create  Modal -->
    <div class="modal fade hide" id="abouteCreate">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create About Section</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="tokyo_tm_contact models">
              <div class="fields">
                <form action="{{route('homeStore')}}" method="post" class="contact_form" id="homes-data"
                  autocomplete="off" enctype="multipart/form-data">
                  @csrf
                  <div class="returnmessage" data-success="Your message has been received, We will contact you soon.">
                  </div>
                  <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                  <div class="first">
                    <ul>
                      <li>
                        <input type="text" placeholder="Name" name="name" id=">
                                  <span class=" text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Title" name="titleone">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Title" name="titletwo">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Title" name="titlethree Optional">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <textarea name="descriptions"></textarea>
                      </li>
                      <li>
                        <input type="text" placeholder="Facebook" name="link1">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Github" name="link2">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Instagram Optinal" name="link3">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="LinkedIN Optinal" name="link4">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Google+ Optinal" name="link5">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="file" placeholder="Google+ Optinal" name="image">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                    </ul>
                  </div>
                  <div class="tokyo_tm_button" data-position="left">
                    <button type="submit" class="save_data">
                      {{ __('Register') }}
                    </button>
                  </div>

                  <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Create  Modal -->
    <!--view   Modal -->
    <div class="modal fade" id="viewAbout">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">View All Data </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
            wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
            you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>

    <!--view  Modal -->
    <!--view   Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create Update Section</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="tokyo_tm_contact models">
              <div class="fields">
                <form class="contact_form" id="homesdataStore" autocomplete="off" enctype="multipart/form-data">
                  <div class="returnmessage" data-success="Your message has been received, We will contact you soon.">
                  </div>
                  <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                  <div class="first">
                    <ul>
                      <li>
                        <input type="text" placeholder="Name" name="homesid" id="homesid">
                        <input type="text" placeholder="Name" name="name" id="name">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Title" name="titleone" id="titleone">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Title" name="titletwo" id="titletwo">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Title" name="titlethree" id="titlethree">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <textarea name="descriptions" id="descriptions"></textarea>
                      </li>
                      <li>
                        <input type="text" placeholder="Facebook" name="link1" id="link1">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Github" name="link2" id="link2">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Instagram Optinal" name="link3" id="link3">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="LinkedIN Optinal" name="link4" id="link4">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="text" placeholder="Google+ Optinal" name="link5" id="link5">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                      <li>
                        <input type="file" placeholder="Google+ Optinal" name="image" id="image">
                        <span class="text-danger error-text product_name_error"></span>
                      </li>
                    </ul>
                  </div>
                  <div class="tokyo_tm_button" data-position="left">
                    <button type="submit" class="save_data update_student">
                      {{ __('Register') }}
                    </button>
                  </div>

                  <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--view  Modal -->
    {{-- Delete Modal --}}
    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Student Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4>Confirm to Delete Data ?</h4>
            <input type="hidden" id="deleteing_id">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closed" data-bs-dismiss="modal"
              aria-label="Close">Close</button>
            <button type="button" class="btn btn-primary delete_student">Yes Delete</button>
          </div>
        </div>
      </div>
    </div>
    {{-- End - Delete Modal --}}

    <!-- About Us  -->
    <div id="homes" class="tokyo_tm_section login {{ (request()->is('homes')) ? 'active' : '' }}">
      <div class="container">
        <div class="tokyo_tm_contact">
          <div class="tokyo_tm_title">
            <div class="title_flex">
              <div class="left">
                <span>Home</span>
                <p>If your have question then go to contact and message me.</p>
              </div>
              <div class="left">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#abouteCreate">
                  Create
                </button>
              </div>
            </div>
          </div>
          <div class="table data">
            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- About Us  -->

  </div>
</div>

@endsection