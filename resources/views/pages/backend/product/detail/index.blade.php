@extends('layout.backend.main')

@section('title', 'Detail Product Page')

@section('content')
    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Product</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <button type="button" class="btn btn-outline-info block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#infoimage">
                                Add New Image
                            </button>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Description page detail product website at eti</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt="" class="img-fluid" width="20%"></td>
                                        <td><a href="{{ route('logo.edit') }}" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Change Image</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt="" class="img-fluid" width="20%"></td>
                                        <td><a href="{{ route('logo.edit') }}" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Change Image</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table row borders end -->
    </div>

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Wording Detail Product</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <button type="button" class="btn btn-outline-info block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#infowording">
                                Add Wording
                            </button>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Wodring description page detail product website at eti</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente quisquam recusandae ab necessitatibus impedit placeat, aspernatur omnis ut iste magnam ducimus enim porro voluptas delectus voluptatem beatae, eligendi, atque iure.</td>
                                        <td><button data-toggle="modal" data-backdrop="false" data-target="#infowording" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table row borders end -->
    </div>

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Big Image Product</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <button type="button" class="btn btn-outline-info block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#infoimage">
                                add new image
                            </button>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Big Image product website at eti</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>image<img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt="" class="img-fluid" width="20%"></td>
                                        <td><button data-toggle="modal" data-backdrop="false" data-target="#infoimage" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Change Image</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table row borders end -->
    </div>

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Related image Product</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <button type="button" class="btn btn-outline-info block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#infoimage">
                                add new image
                            </button>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Related image product website at eti</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>image<img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt="" class="img-fluid" width="20%"></td>
                                        <td><button data-toggle="modal" data-backdrop="false" data-target="#infoimage" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Change Image</button>
                                            <a href="#" class="btn btn-danger btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table row borders end -->
    </div>

    <!-- Modal -->
        <div class="modal fade text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info white">
                        <h4 class="modal-title white" id="myModalLabel11">Basic Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Check First Paragraph</h5>
                        <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot
                            cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                            liquorice. Apple pie sugar plum powder donut soufflé.</p>
                        <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy
                            cake.</p>
                        <hr>
                        <h5>Some More Text</h5>
                        <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish.
                            Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-info">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- End of Modal -->

    <!-- Modal Image -->
        <div class="modal fade text-left" id="infoimage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info white">
                        <h4 class="modal-title white" id="myModalLabel11">New Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form">
                                <div class="form-body">
                                    <h4 class="form-section">
                                        
                                    </h4>

                                    <div class="form-group">
                                        <label>Select Image</label>
                                        <label id="projectinput7" class="file center-block">
                                            <input type="file" id="file">
                                            <span class="file-custom"></span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-info">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- End of Modal Image -->

    <!-- Modal Wording -->
        <div class="modal fade text-left" id="infowording" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info white">
                        <h4 class="modal-title white" id="myModalLabel11">New Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form">
                            <div class="col-md-12">
                                <textarea id="projectinput9" rows="2" class="form-control" name="comment" placeholder="Lorem..."></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-info">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- End of Modal Wording -->
@endsection