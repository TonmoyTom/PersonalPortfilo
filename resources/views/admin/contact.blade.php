@extends('layouts.backend')

@section('content')
<!-- RIGHTPART -->
<div class="rightpart">
    <div class="rightpart_in">
        <!-- About Us -->


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
        <div id="contact" class="tokyo_tm_section login {{ (request()->is('contact')) ? 'active' : '' }}">
            <div class="container">
                <div class="tokyo_tm_contact">
                    <div class="tokyo_tm_title">
                        <div class="title_flex">
                            <div class="left">
                                <span>Home</span>
                                <p>If your have question then go to contact and message me.</p>
                            </div>
                        </div>
                    </div>
                    <div class="table data">
                        <table id="myTablecontact" class="table table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>EMail</th>
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