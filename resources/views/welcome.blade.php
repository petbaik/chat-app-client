@extends('layouts.app')

@section('content')
  <div class="d-flex rounded-lg overflow-hidden shadow">
    <!-- Users box-->
    <div class="col-5 px-0">
      <div class="bg-white">

        <div class="bg-gray px-4 py-2 bg-light">
          <p class="h5 mb-0 py-1">Recent</p>
        </div>
        <div>
          <div class="input-group p-3 bg-white">
            <div class="input-group-append">
              <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-search"></i></button>
            </div>
            <input type="text" placeholder="Search" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-white">
          </div>
        </div>
        <div class="messages-box">
          <div class="list-group rounded-0">
            <!-- <a class="list-group-item list-group-item-action active text-white rounded-0">
              <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">25 Dec</small>
                  </div>
                  <p class="font-italic mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
              <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">14 Dec</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur. incididunt ut labore.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
              <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">9 Nov</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
              <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">18 Oct</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
              <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">17 Oct</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
              <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">2 Sep</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
              <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">30 Aug</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
              <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">21 Aug</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
              </div>
            </a> -->

          </div>
        </div>
      </div>
    </div>
    <!-- Chat Box-->
    <div class="col-7 px-0">
      <div class="px-4 py-5  bg-white">

        <chat-messages default_messages="{{ $chat }}"></chat-messages>

        <send-message></send-message>

    </div>
  </div>
@endsection
