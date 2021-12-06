@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
    <div class="row">
        @if(session('ok'))
            <div class="alert alert-success" role="alert">
                {{ session('ok') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @elseif(session('edit'))
            <div class="alert alert-info" role="alert">
                {{ session('edit') }}
            </div>
        @endif
    </div>
</div>

<section class="container fluid p-4">
    <div class="col-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
             <li class="nav-item" role="presentation">
              <button class="nav-link active" id="perfil-tab" data-bs-toggle="tab" data-bs-target="#perfil" type="button" role="tab" aria-controls="perfil" aria-selected="false">Perfil</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="true">Skills</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About Me</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="whatido-tab" data-bs-toggle="tab" data-bs-target="#whatido" type="button" role="tab" aria-controls="whatido" aria-selected="false">What I Do</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pro-tab" data-bs-toggle="tab" data-bs-target="#pro" type="button" role="tab" aria-controls="pro" aria-selected="false">Pro skills</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="estudio-tab" data-bs-toggle="tab" data-bs-target="#estudio" type="button" role="tab" aria-controls="estudio" aria-selected="false">Estudios</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="work-tab" data-bs-toggle="tab" data-bs-target="#work" type="button" role="tab" aria-controls="work" aria-selected="false">Trabajos</button>
            </li>
        </ul>

          

        <div class="tab-content" id="myTabContent">
              <!--perfil-->
              <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
                  @include('admin.includes.perfil-edit')
              </div>
              <!--what-->
              <div class="tab-pane fade show" id="whatido" role="tabpanel" aria-labelledby="whatido-tab">
              
                  <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Crear Titulo</button>
                        <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar Titulo</button>
                      </div>
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                              @include('admin.includes.titulo-create')
                        </div>
                        <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                              @include('admin.includes.titulo-edit')
                        </div>
                      </div>
                    </div>
              </div>

              <!--pro skills-->
              <div class="tab-pane fade show" id="pro" role="tabpanel" aria-labelledby="pro-tab">
              
                  <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-nuevo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-nuevo" type="button" role="tab" aria-controls="v-pills-nuevo" aria-selected="true">Crear Titulo</button>
                        <button class="nav-link" id="v-pills-editar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-editar" type="button" role="tab" aria-controls="v-pills-editar" aria-selected="false">Editar Titulo</button>
                        <button class="nav-link" id="v-pills-nombre1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-nombre1" type="button" role="tab" aria-controls="v-pills-nombre1" aria-selected="false">Editar nombre de Professional Skills</button>
                      </div>
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-nuevo" role="tabpanel" aria-labelledby="v-pills-nuevo-tab">
                              @include('admin.includes.pro-create')
                        </div>
                        <div class="tab-pane fade" id="v-pills-editar" role="tabpanel" aria-labelledby="v-pills-editar-tab">
                              @include('admin.includes.pro-edit')
                        </div>
                        <div class="tab-pane fade" id="v-pills-nombre1" role="tabpanel" aria-labelledby="v-pills-nombre1-tab">
                              @include('admin.includes.pro-edit-nombre')
                        </div>
                      </div>
                    </div>
              </div>

              <!--skills-->
              <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
              
                <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-new3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new3" type="button" role="tab" aria-controls="v-pills-new3" aria-selected="true">Crear Habilidad</button>
                        <button class="nav-link" id="v-pills-edit3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit3" type="button" role="tab" aria-controls="v-pills-edit3" aria-selected="false">Editar Habilidad</button>
                        <button class="nav-link" id="v-pills-cambiar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cambiar" type="button" role="tab" aria-controls="v-pills-cambiar" aria-selected="false">Cambiar nombre de Technical Skills</button>
                      </div>

                      <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-new3" role="tabpanel" aria-labelledby="v-pills-new3-tab">
                              @include('admin.includes.skills-create')
                        </div>
                        <div class="tab-pane fade" id="v-pills-edit3" role="tabpanel" aria-labelledby="v-pills-edit3-tab">
                              @include('admin.includes.skills-edit')
                        </div>
                        <div class="tab-pane fade" id="v-pills-cambiar" role="tabpanel" aria-labelledby="v-pills-cambiar-tab">
                              @include('admin.includes.skills-edit-nombre')
                        </div>
                      </div>
                    </div>
              </div>

              <!--about-->
              <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                  @include('admin.includes.about-edit')
              </div>

              <!--Studies-->
              <div class="tab-pane fade" id="estudio" role="tabpanel" aria-labelledby="estudio-tab">
              
                <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-newestudio-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newestudio" type="button" role="tab" aria-controls="v-pills-newestudio" aria-selected="true">Crear education</button>
                        <button class="nav-link" id="v-pills-editestudio-tab" data-bs-toggle="pill" data-bs-target="#v-pills-editestudio" type="button" role="tab" aria-controls="v-pills-editestudio" aria-selected="false">Editar educacion</button>
                      </div>

                      <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-newestudio" role="tabpanel" aria-labelledby="v-pills-newestudio-tab">
                              @include('admin.includes.estudios-create')
                        </div>
                        <div class="tab-pane fade" id="v-pills-editestudio" role="tabpanel" aria-labelledby="v-pills-editestudio-tab">
                              @include('admin.includes.estudios-edit')
                        </div>
                      </div>
                    </div>
              </div>


              <!--Work-->
              <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">
              
                <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-newtrabajo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newtrabajo" type="button" role="tab" aria-controls="v-pills-newtrabajo" aria-selected="true">Crear trabajo</button>
                        <button class="nav-link" id="v-pills-edittrabajo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edittrabajo" type="button" role="tab" aria-controls="v-pills-edittrabajo" aria-selected="false">Editar educacion</button>
                      </div>

                      <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-newtrabajo" role="tabpanel" aria-labelledby="v-pills-newtrabajo-tab">
                              @include('admin.includes.work-create')
                        </div>
                        <div class="tab-pane fade" id="v-pills-edittrabajo" role="tabpanel" aria-labelledby="v-pills-edittrabajo-tab">
                              @include('admin.includes.work-edit')
                        </div>
                      </div>
                    </div>
              </div>


            
        </div>
    </div>
</section>

@endsection
