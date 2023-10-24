 @extends('backOffice.menuDashboard')

 @section('listPosts')
     <x-app-layout>

         <!-- Bootstrap Table with Header - Light -->
         <div class="container-xxl flex-grow-1 container-p-y">
             <div class="row">
                 <div class="col-lg-12 mb-4 order-0">
                     <div class="card">
                      <br>
                      <h2 class="display-5"><strong>Liste des Publications</strong></h2>
                      <br>

                      <form action="{{ route('Posts.affiche') }}" method="GET" class="d-flex justify-content-end">
                        <div class="form-group mb-0 mr-2">
                            <input type="text" name="q" class="form-control" placeholder="Rechercher...">
                        </div>
                        <button class="btn btn-primary" type="submit">Rechercher</button>
                    </form>
                    

                         <div class="table-responsive text-nowrap">
                             <table class="table">
                                 <thead class="table-light">
                                     <tr>
                                         <th>Titre</th>
                                         <th>Date</th>
                                         <th>Photos</th>
                                         <th>Users</th>
                                         <th>Nombre de like</th>
                                         <th>Actions</th>
                                     </tr>
                                 </thead>
                                 <tbody class="table-border-bottom-0">
                                     @foreach ($posts as $post)
                                         <tr>
                                             <td> <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                  <a  href="{{ route('detailsPost', $post->id) }}"><strong>{{ $post->titre }}</strong></a></td>
                                              <td><span class="d-block font-xssss fw-500 mt-1  lh-3 text-grey-600">{{ $post->created_at }}</span>
                                              </td>   
                                             <td> 
                                              
                                                 <div class="card-body d-block p-0 mb-3">
                                                     <div class="row ps-2 pe-2">
                                                         <div class="col-sm-12 p-1"><a href="images/t-30.jpg"
                                                                 data-lightbox="roadtr"><img
                                                                     src="/images/{{ $post->image }}"
                                                                     class="rounded-3 w-100"
                                                                     alt="image"style="max-width: 100px;">

                                                             </a></div>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td> 
                                               @php
                                                  $user = \App\Models\User::find($post->user_id);
                                               @endphp
                                                 <ul 
                                                     class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                       
                                                     <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                         data-bs-placement="top" class="avatar avatar-m pull-up"
                                                         title=" {{ $user->lastName }} {{ $user->firstName }}">
                                                         <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Avatar"
                                                             class="rounded-circle" />
                                                     </li>
                                                
                                                  
                                                 </ul>
                                             </td>
                                                <td>
                                                  <h5 class="fw-700 font-lg mt-3 mb-2">{{ $post->likes }} likes </h5>
                                                </td>
                                             <td>
                                                 <div class="dropdown">
                                                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                         data-bs-toggle="dropdown">
                                                         <i class="bx bx-dots-vertical-rounded"></i>
                                                     </button>
                                                     <div class="dropdown-menu">
                                                         <a class="dropdown-item" href="{{ route('detailsPost', $post->id) }}"><i
                                                                 class="bx bx-edit-alt me-1"></i> Detail</a>


                                                                 <form action="{{ route('Posts.destroyPost', ['id' => $post->id]) }}" method="POST"
                                                                  class="d-inline-block">
                                                                  @csrf
                                                                  @method('DELETE')
                                                                  <button 
                                                                   class="dropdown-item" href="javascript:void(0);"><i  class="bx bx-trash me-1"></i> supprimer
                                                                      </button>
                                                              </form>


                                                                {{-- <a class="dropdown-item" href="javascript:void(0);"><i
                                                                 class="bx bx-trash me-1"></i> supprimer</a> --}}
                                                           
                                                     </div>
                                                 </div>
                                             </td>
                                         </tr>
                                     
                                         @endforeach

                                 </tbody>
                             </table>

                         
                            

                          </div> <br>
                          <div class="pagination">
                            {{ $posts->links() }}
                         </div>
                     </div>
                 </div>
             </div>
         </div>


   <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ Vite::asset('resources/assetsBack/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ Vite::asset('resources/assetsBack/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ Vite::asset('resources/assetsBack/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ Vite::asset('resources/assetsBack/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ Vite::asset('resources/assetsBack/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ Vite::asset('resources/assetsBack/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ Vite::asset('resources/assetsBack/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ Vite::asset('resources/assetsBack/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

     </x-app-layout>
 @endsection
