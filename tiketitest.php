<?php
   define('allow', true);
   include_once('includes.php');
   include('header.php'); 
   ?>
<!-- start page title -->
<div class="row">
   <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
         <h4 class="mb-sm-0 font-size-18">IPv4 Ping check</h4>
         <!-- <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                <li class="breadcrumb-item active">Horizontal Layout</li>
            </ol>
            </div> -->
      </div>
   </div>
</div>
<!-- end page title -->
<?php include('ads_upper.php'); ?>
<div class="d-lg-flex">
   <div class="chat-leftsidebar me-lg-4">
      <div class="card">
      <div class="card-body">
         <div class="py-4 border-bottom">
            <div class="media">
               <div class="align-self-center me-3">
                  <img src="/assets/images/user.png" class="avatar-xs rounded-circle" alt="">
               </div>
               <div class="media-body">
                  <h5 class="font-size-15 mt-0 mb-1">Henry Wells</h5>
                  <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active</p>
               </div>
               <div>
                  <div class="dropdown chat-noti-dropdown active">
                     <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="bx bx-plus-circle bx-tada"></i>
                     </button>
                     <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="search-box chat-search-box py-4">
            <div class="position-relative">
               <input type="text" class="form-control" placeholder="Search...">
               <i class="bx bx-search-alt search-icon"></i>
            </div>
         </div>
         <div class="chat-leftsidebar-nav">
            <ul class="nav nav-pills nav-justified">
               <li class="nav-item">
                  <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                  <i class="bx bx-chat font-size-20 d-sm-none"></i>
                  <span class="d-none d-sm-block">Open tickets</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#groups" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                  <i class="bx bx-group font-size-20 d-sm-none"></i>
                  <span class="d-none d-sm-block">Closed tickets</span>
                  </a>
               </li>
            </ul>
            <div class="tab-content py-4">
               <div class="tab-pane show active" id="chat">
                  <div>
                     <h5 class="font-size-14 mb-3">Recent</h5>
                     <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                        <li class="active">
                           <a href="#">
                              <div class="media">
                                 <div class="align-self-center me-3">
                                    <i class="mdi mdi-circle font-size-10"></i>
                                 </div>
                                 <div class="avatar-xs align-self-center me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                    H
                                    </span>
                                 </div>
                                 <div class="media-body overflow-hidden">
                                    <h5 class="text-truncate font-size-14 mb-1">Steven Franklin</h5>
                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                 </div>
                                 <div class="font-size-11">05 min</div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="media">
                                 <div class="align-self-center me-3">
                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                 </div>
                                 <div class="avatar-xs align-self-center me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                    I
                                    </span>
                                 </div>
                                 <div class="media-body overflow-hidden">
                                    <h5 class="text-truncate font-size-14 mb-1">Adam Miller</h5>
                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                 </div>
                                 <div class="font-size-11">12 min</div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="media">
                                 <div class="align-self-center me-3">
                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                 </div>
                                 <div class="avatar-xs align-self-center me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                    K
                                    </span>
                                 </div>
                                 <div class="media-body overflow-hidden">
                                    <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                 </div>
                                 <div class="font-size-11">24 min</div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="media">
                                 <div class="align-self-center me-3">
                                    <i class="mdi mdi-circle text-warning font-size-10"></i>
                                 </div>
                                 <div class="avatar-xs align-self-center me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                    N
                                    </span>
                                 </div>
                                 <div class="media-body overflow-hidden">
                                    <h5 class="text-truncate font-size-14 mb-1">Jose Vickery</h5>
                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                 </div>
                                 <div class="font-size-11">1 hr</div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="media">
                                 <div class="align-self-center me-3">
                                    <i class="mdi mdi-circle font-size-10"></i>
                                 </div>
                                 <div class="avatar-xs align-self-center me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                    M
                                    </span>
                                 </div>
                                 <div class="media-body overflow-hidden">
                                    <h5 class="text-truncate font-size-14 mb-1">Mitchel Givens</h5>
                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                 </div>
                                 <div class="font-size-11">3 hrs</div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="media">
                                 <div class="align-self-center me-3">
                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                 </div>
                                 <div class="avatar-xs align-self-center me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                    I
                                    </span>
                                 </div>
                                 <div class="media-body overflow-hidden">
                                    <h5 class="text-truncate font-size-14 mb-1">Stephen Hadley</h5>
                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                 </div>
                                 <div class="font-size-11">5hrs</div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <div class="media">
                                 <div class="align-self-center me-3">
                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                 </div>
                                 <div class="avatar-xs align-self-center me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                    K
                                    </span>
                                 </div>
                                 <div class="media-body overflow-hidden">
                                    <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                 </div>
                                 <div class="font-size-11">24 min</div>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-pane" id="groups">
                  <h5 class="font-size-14 mb-3">Groups</h5>
                  <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                     <li>
                        <a href="#">
                           <div class="media align-items-center">
                              <div class="avatar-xs me-3">
                                 <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                 G
                                 </span>
                              </div>
                              <div class="media-body">
                                 <h5 class="font-size-14 mb-0">General</h5>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="media align-items-center">
                              <div class="avatar-xs me-3">
                                 <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                 R
                                 </span>
                              </div>
                              <div class="media-body">
                                 <h5 class="font-size-14 mb-0">Reporting</h5>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="media align-items-center">
                              <div class="avatar-xs me-3">
                                 <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                 M
                                 </span>
                              </div>
                              <div class="media-body">
                                 <h5 class="font-size-14 mb-0">Meeting</h5>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="media align-items-center">
                              <div class="avatar-xs me-3">
                                 <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                 A
                                 </span>
                              </div>
                              <div class="media-body">
                                 <h5 class="font-size-14 mb-0">Project A</h5>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="media align-items-center">
                              <div class="avatar-xs me-3">
                                 <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                 B
                                 </span>
                              </div>
                              <div class="media-body">
                                 <h5 class="font-size-14 mb-0">Project B</h5>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         </div>
      </div>
   </div>
   <div class="w-100 user-chat">
      <div class="card">
         <div class="p-4 border-bottom ">
            <div class="row">
               <div class="col-md-4 col-9">
                  <h5 class="font-size-15 mb-1">Steven Franklin</h5>
                  <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active now</p>
               </div>
               <div class="col-md-8 col-3">
                  <ul class="list-inline user-chat-nav text-end mb-0">
                     <li class="list-inline-item d-none d-sm-inline-block">
                        <div class="dropdown">
                           <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="bx bx-search-alt-2"></i>
                           </button>
                           <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                              <form class="p-3">
                                 <div class="form-group m-0">
                                    <div class="input-group">
                                       <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                       <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </li>
                     <li class="list-inline-item  d-none d-sm-inline-block">
                        <div class="dropdown">
                           <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="bx bx-cog"></i>
                           </button>
                           <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">View Profile</a>
                              <a class="dropdown-item" href="#">Clear chat</a>
                              <a class="dropdown-item" href="#">Muted</a>
                              <a class="dropdown-item" href="#">Delete</a>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div>
            <div class="chat-conversation p-3">
               <ul class="list-unstyled mb-0" data-simplebar style="max-height: 486px;">
                  <li>
                     <div class="chat-day-title">
                        <span class="title">Today</span>
                     </div>
                  </li>
                  <li>
                     <div class="conversation-list">
                        <div class="dropdown">
                           <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="bx bx-dots-vertical-rounded"></i>
                           </a>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Copy</a>
                           </div>
                        </div>
                        <div class="ctext-wrap">
                           <div class="conversation-name">Steven Franklin</div>
                           <p>
                              Hello!
                           </p>
                           <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                        </div>
                     </div>
                  </li>
                  <li class="right">
                     <div class="conversation-list">
                        <div class="dropdown">
                           <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="bx bx-dots-vertical-rounded"></i>
                           </a>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Copy</a>
                           </div>
                        </div>
                        <div class="ctext-wrap">
                           <div class="conversation-name">Henry Wells</div>
                           <p>
                              Hi, How are you? What about our next meeting?
                           </p>
                           <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conversation-list">
                        <div class="dropdown">
                           <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="bx bx-dots-vertical-rounded"></i>
                           </a>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Copy</a>
                           </div>
                        </div>
                        <div class="ctext-wrap">
                           <div class="conversation-name">Steven Franklin</div>
                           <p>
                              Yeah everything is fine
                           </p>
                           <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                        </div>
                     </div>
                  </li>
                  <li class="last-chat">
                     <div class="conversation-list">
                        <div class="dropdown">
                           <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="bx bx-dots-vertical-rounded"></i>
                           </a>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Copy</a>
                           </div>
                        </div>
                        <div class="ctext-wrap">
                           <div class="conversation-name">Steven Franklin</div>
                           <p>& Next meeting tomorrow 10.00AM</p>
                           <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                        </div>
                     </div>
                  </li>
                  <li class=" right" style="margin-right:15px">
                     <div class="conversation-list">
                        <div class="dropdown">
                           <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="bx bx-dots-vertical-rounded"></i>
                           </a>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Copy</a>
                           </div>
                        </div>
                        <div class="ctext-wrap">
                           <div class="conversation-name">Henry Wells</div>
                           <p>
                              Wow that's great
                           </p>
                           <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:07</p>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="p-3 chat-input-section">
               <div class="row">
                  <div class="col">
                     <div class="position-relative">
                        <input type="text" class="form-control chat-input" placeholder="Enter Message...">
                     </div>
                  </div>
                  <div class="col-auto">
                     <button type="submit" class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php'); ?>