
@extends('backOffice.menuDashboard')
@section('listProjets')
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Projet Environnementales</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Projet Environnementales</h5>
                <div class="table-responsive text-nowrap">

                <form action="{{ route('Admin.projets.search') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Rechercher par titre de projet" name="search">
                    <button type="submit"  class="btn btn-outline-secondary" type="submit">Rechercher</button>
                </div>
            </form>
          <table class="table">
              <thead>
                  <tr>
                      <th>Projet</th>
                      <th>Objectife</th>
                      <th>Ressource</th>
                      <th>Utilisateur</th>
                      <th>etat</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($projects as $project)
                  <tr>
                      <td>
                          <a href="{{ route('Admin.projet.details', ['id' => $project->id]) }}">{{ $project->titre }}</a>
                      </td>
                      <td>{{ $project->objectif }}</td>
                      <td>{{ $project->ressources }}</td>
                      <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="{{ $project->user->firstName }} {{ $project->user->lastName }}">
                                  <img src="{{ asset('storage/' . $project->user->profile_photo_path) }}" alt="Avatar" class="rounded-circle" />
                              </li>
                          </ul>
                      </td>
                      <td>
                          <span class="badge bg-label-primary me-1">{{ $project->etat }}</span>
                      </td>
                      <td>
                          <div>
                              <form action="{{ route('Admin.projects.destroy', $project) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">Supprimer</button>
                              </form>
                          </div>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
                          </div>
                        </div>
                    </div>

                  </div>

                </div>

              </div>



    @endsection
