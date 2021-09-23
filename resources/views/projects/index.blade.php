@extends('layouts.app')

@section('content')
<div class="container full-page">
    <div class="row">
        <div class="col-lg-4 py-4 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row py-2">
                    <div class="display-4 text-light">
                        My Projects
                    </div>
                </div>
                <div class="row py-2">
                    <p class="text-muted">
                        These are some of my public published projects.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-8 py-4">
            <img src="{{ asset('svg/states.svg') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>

<div class="void"></div>

<div class="container full-page">
    <div class="row">
        <div class="col-lg-4 bg-dark d-flex justify-content-center align-items-center py-4 py-lg-0">
            <div class="container">
                <div class="row">
                    <div class="display-5 text-light py-2">
                        Project Name
                    </div>
                </div>
                <div class="row text-muted py-4">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, odio eveniet explicabo est, perferendis neque quasi rem itaque, commodi ipsa accusamus expedita repellat a sapiente aliquid eligendi eaque? Eum, tenetur.
                    </p>
                </div>
                <div class="row py-2 text-light">
                    <div class="col text-center">
                        <a class="light-link" href="#" title="See More">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
                                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a class="light-link" href="#" title="Check in Github Repo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a class="light-link" href="#" title="Share">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                                <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 d-flex justify-content-center align-items-center bg-dark py-4 py-lg-0">
            <img src="{{ asset('svg/project.svg') }}" alt="project pic" class="img-fluid project-img">
        </div>
    </div>
</div>

<div class="void"></div>

<div class="container full-page">
    <div class="row">
        
        <div class="col-lg-8 d-flex justify-content-center align-items-center bg-dark py-4 py-lg-0">
            <img src="{{ asset('svg/project.svg') }}" alt="project pic" class="img-fluid project-img">
        </div>
        <div class="col-lg-4 bg-dark d-flex justify-content-center align-items-center py-4 py-lg-0">
            <div class="container">
                <div class="row">
                    <div class="display-5 text-light py-2">
                        Project Name
                    </div>
                </div>
                <div class="row text-muted py-4">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, odio eveniet explicabo est, perferendis neque quasi rem itaque, commodi ipsa accusamus expedita repellat a sapiente aliquid eligendi eaque? Eum, tenetur.
                    </p>
                </div>
                <div class="row py-2 text-light">
                    <div class="col text-center">
                        <a class="light-link" href="#" title="See More">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
                                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a class="light-link" href="#" title="Check in Github Repo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a class="light-link" href="#" title="Share">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                                <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
