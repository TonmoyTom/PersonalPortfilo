@extends('layouts.backend')

@section('content')
      
      <!-- RIGHTPART -->
      <div class="rightpart">
        <div class="rightpart_in">
         
           <!-- DashBoard -->
       
           
           <div id="dashboard" class="tokyo_tm_section ">
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
          <!-- DashBoard -->

       
          
            <!-- About Us -->

              <!--Create  Modal -->
              <div class="modal fade" id="abouteCreate">
                <div class="modal-dialog modal-dialog-centered modal-lg" >
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
                          <form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                            <div class="first">
                              <ul>
                                <li>
                                  <input id="name" type="text" placeholder="Name">
                                </li>
                                <li>
                                  <input id="email" type="text" placeholder="Email">
                                </li>
                                <li>
                                  <input id="password" type="password" placeholder="Password">
                                </li>
                                <li>
                                  <input id="password" type="password" placeholder="Confirm Password">
                                </li>
                              </ul>
                            </div>
                            <div class="tokyo_tm_button" data-position="left">
                              <a id="send_message" href="#">
                                <span>Submit</span>
                              </a>
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
                <div class="modal-dialog modal-dialog-centered modal-lg" >
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">View All Data </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>

               <!--view  Modal -->
           <!-- About Us  -->
            <div id="aboutus" class="tokyo_tm_section login {{ (request()->is('aboutus')) ? 'active' : '' }}">
              <div class="container">
                <div class="tokyo_tm_contact">
                  <div class="tokyo_tm_title">
                    <div class="title_flex">
                      <div class="left">
                        <span>About Us</span>
                        <p>If your have question then go to contact  and message me.</p>
                      </div>
                      <div class="left">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#abouteCreate">
                          Create
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="table data">
                    <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Order</th>
                          <th>Description</th>
                          <th>Deadline</th>
                          <th>Status</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Alphabet puzzle</td>
                          <td>2016/01/15</td>
                          <td>Done</td>
                   
                            <td>
                              <div class="left">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#abouteCreate">
                                  Edit
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewAbout">
                                  View
                                </button>
                                <button type="button" class="btn btn-primary" >
                                  Delete
                                </button>
                              </div>
                            </td>
                          
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Layout for poster</td>
                          <td>2016/01/31</td>
                          <td>Planned</td>
                          <td>
                            <div class="left">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#abouteCreate">
                                Edit
                              </button>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewAbout">
                                View
                              </button>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                Delete
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Image creation</td>
                          <td>2016/01/23</td>
                          <td>To Do</td>
                          <td>
                            <div class="left">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#abouteCreate">
                                Edit
                              </button>
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#viewAbout">
                                View
                              </button>
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                                Delete
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Create font</td>
                          <td>2016/02/26</td>
                          <td>Done</td>
                          <td>
                            <div class="left">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#abouteCreate">
                                Edit
                              </button>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewAbout">
                                View
                              </button>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                Delete
                              </button>
                            </div>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>	
            </div>
            <!-- About Us  -->
   
        </div>
      </div>
      <!-- /RIGHTPART -->
@endsection
