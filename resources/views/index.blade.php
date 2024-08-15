@if (!session()->has('id'))
<script>
    window.location = "/login";
</script>
@endif

@extends('layout.masterlayout')
@section('main-content')
       <!-- start page title -->
       <div class="row">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4>Dashboard</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Lexa</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Inbox</h4>
                    <div class="inbox-wid">
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img
                                        src="assets/images/users/user-1.jpg"
                                        class="avatar-sm rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 font-size-16">Misty</h6>
                                <p class="inbox-item-text text-muted mb-0">Hey! there I'm available...
                                </p>
                                <p class="inbox-item-date text-muted">13:40 PM</p>
                            </div>
                        </a>
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img
                                        src="assets/images/users/user-2.jpg"
                                        class="avatar-sm rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 font-size-16">Melissa</h6>
                                <p class="inbox-item-text text-muted mb-0">I've finished it! See you
                                    so...</p>
                                <p class="inbox-item-date text-muted">13:34 PM</p>
                            </div>
                        </a>
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img
                                        src="assets/images/users/user-3.jpg"
                                        class="avatar-sm rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 font-size-16">Dwayne</h6>
                                <p class="inbox-item-text text-muted mb-0">This theme is awesome!</p>
                                <p class="inbox-item-date text-muted">13:17 PM</p>
                            </div>
                        </a>
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img
                                        src="assets/images/users/user-4.jpg"
                                        class="avatar-sm rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 font-size-16">Martin</h6>
                                <p class="inbox-item-text text-muted mb-0">Nice to meet you</p>
                                <p class="inbox-item-date text-muted">12:20 PM</p>
                            </div>
                        </a>
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img
                                        src="assets/images/users/user-5.jpg"
                                        class="avatar-sm rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 font-size-16">Vincent</h6>
                                <p class="inbox-item-text text-muted mb-0">Hey! there I'm available...
                                </p>
                                <p class="inbox-item-date text-muted">11:47 AM</p>
                            </div>
                        </a>

                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img
                                        src="assets/images/users/user-6.jpg"
                                        class="avatar-sm rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 font-size-16">Robert Chappa</h6>
                                <p class="inbox-item-text text-muted mb-0">Hey! there I'm available...
                                </p>
                                <p class="inbox-item-date text-muted">10:12 AM</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end row -->

@endsection