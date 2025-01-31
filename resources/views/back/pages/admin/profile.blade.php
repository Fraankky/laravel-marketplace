@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Dashboard')
@section('content')


<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Profile</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <div class="profile-photo">
                        <a href="modal" class="avatar"><i class="fa fa-pencil"></i></a>
                        <img src="{{ $admin->picture }}" alt="" class="avatar-photo" id="adminProfilePicture" >
                        
                    </div>
                    <h5 class="text-center h5 mb-0">Ross C. Lopez</h5>
                    <p class="text-center text-muted font-14">
                        Lorem ipsum dolor sit amet
                    </p>
        
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Personal Detail </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#update-password" role="tab">Update Password</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- Timeline Tab start -->
                                <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                    <div class="pd-20">
                                       
                                    </div>
                                </div>

                                <!-- Setting Tab End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection