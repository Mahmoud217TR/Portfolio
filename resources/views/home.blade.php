@extends('layouts.app')

@section('content')
<!-- Bio -->
<div class="container py-4">
    <div class="row justify-content-center bg-light rounded">
        <div class="col-lg-3 px-1 py-1">
            <div class="card bg-light">
                <img src="{{ asset('images/Formal.jpg') }}" class="card-img-top" alt="my picture">
                <div class="card-body">
                  <h5 class="card-title text-center h3">Mahmoud Mahmoud</h5>
                  <p class="card-text container">
                    <div class="row py-2">
                        <div class="col-sm-4 text-sm-end text-center">
                            <strong class="px-1">Age:</strong> 
                        </div>
                        <div class="col-sm-8 text-sm-start text-center">
                            {{ date("Y")-1999 }}
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-sm-4 text-sm-end text-center">
                            <strong class="px-1">From:</strong> 
                        </div>
                        <div class="col-sm-8 text-sm-start text-center">
                            <a class="link d-flex align-items-center justify-content-sm-start justify-content-center" href="https://www.google.com/maps/place/Homs%E2%80%8E,+Syria/data=!4m2!3m1!1s0x15230e9047c7c0fb:0xac367e06303788d0?sa=X&ved=2ahUKEwiS8qn0jY_zAhUjyIUKHUBbCIcQ8gF6BAgIEAE" target="_blank">
                                <span class="pe-1">Homs, Syria</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-sm-4 text-sm-end text-center">
                            <strong class="px-1">Currently:</strong> 
                        </div>
                        <div class="col-sm-8">
                            <a class="link d-flex align-items-center justify-content-sm-start justify-content-center" href="https://www.google.com/maps/place/Homs%E2%80%8E,+Syria/data=!4m2!3m1!1s0x15230e9047c7c0fb:0xac367e06303788d0?sa=X&ved=2ahUKEwiS8qn0jY_zAhUjyIUKHUBbCIcQ8gF6BAgIEAE" target="_blank">
                                <span class="pe-1">Homs, Syria</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-sm-4 text-sm-end text-center">
                            <strong class="px-1">Study:</strong> 
                        </div>
                        <div class="col-sm-8 text-sm-start text-center">
                            Software Engineering <a class="link" href="https://albaath-univ.edu.sy/" target="_blank">(Al-baath Univeristy)</a>
                        </div>
                    </div>
                  </p>
                  <div class="container py-2">
                      <div class="row">
                          <div class="col-sm-4 py-sm-0 py-2 text-center">
                            <a href="https://github.com/Mahmoud217TR/Bootstrap5-Testing-Template" class="px-1 link" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                          </div>
                          <div class="col-sm-4 py-sm-0 py-2 text-center">
                            <a href="https://www.linkedin.com/in/mahmoud-mahmoud-ab8708183/" class="px-1 link" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
                          </div>
                          <div class="col-sm-4 py-sm-0 py-2 text-center">
                            <a href="https://www.facebook.com/mahmoud.mahmoud.927758/" class="px-1 link" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </a>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="container">
                <div class="row py-2">
                    <div class="col text-center">
                        <div class="display-4">
                            Biography
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col mx-5">
                        <p class="bio">
                            Hi I'm Mahmoud, (I know it's hard to spell so you can call me <strong>Marlo</strong>).
                            <br><br>
                            I was born in <strong>Homs, Syria</strong> (still living there currently).
                            <br><br>
                            My Native Language is <strong>Arabic</strong>, but also I speak <strong>English</strong> Fluently.
                            <br><br>
                            I'm a Fullstack Developer, I build websites with <strong><a class="link" href="https://laravel.com/" target="_blank">Laravel</a> & <a class="link" href="https://vuejs.org/" target="_blank">Vue.js</a></strong>, I'm also experienced in using <strong><a class="link" href="https://getbootstrap.com/" target="_blank">Bootstrap</a></strong> to make my designs appealing and responsive as much as possible.
                            <br><br>
                            I also like to create different apps & programs that I feel it would be a good use for me and others, and for that I use <strong><a class="link" href="https://www.python.org/" target="_blank">Python</a></strong>.
                            <br><br>
                            Wanna get me excited??
                            <br>
                            Just give me a problem that need thinking and you would get me working on it <strong>immediately</strong> (believe me when I say I won't sleep until I <strong>solve it</strong> or <strong>pass out</strong> trying to XD).
                            <br><br>
                            I made several projects mostly to <strong>Challenge</strong> my self or sometimes just for <strong>Fun</strong> and good time.
                            <br><br>
                            <strong>Gaming</strong> ??
                            <br>
                            You bet I do,
                            <br>
                            or I did in my free time when I had more electricity <strong>O~o</strong>.
                            <br>
                            now I fill my free time making <a class="link" href="https://github.com/Mahmoud217TR/Bootstrap-Reusable-Templates" target="_blank"><strong>bootstrap templates</strong></a> to use it in future projects, you can check them if you want they are free to use as well <strong>;)</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Skills -->
<div class="container my-4 bg-dark text-light rounded">
    <div class="row border rounded border-light">
        <div class="col-lg-2 py-2 d-flex justify-content-center align-items-center">
            <div class="display-4 rounded-start">
                Skills
            </div>
        </div>
        <div class="col-lg-10 bg-light py-2">
            <div class="row py-4">
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center" tool>
                    <img class='img-fluid skill-svg' src="{{ asset('svg/html.svg') }}" alt="HTML" title="HTML">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg' src="{{ asset('svg/css.svg') }}" alt="CSS" title="CSS">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg' src="{{ asset('svg/javascript.svg') }}" alt="JavaScript" title="JavaScript">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg' src="{{ asset('svg/laravel.svg') }}" alt="Laravel" title="Laravel">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg' src="{{ asset('svg/vue-js.svg') }}" alt="Vue js" title="Vue js">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg' src="{{ asset('svg/python.svg') }}" alt="Python" title="Python">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg' src="{{ asset('svg/github.svg') }}" alt="Github" title="Github">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg-big' src="{{ asset('svg/sqlite.svg') }}" alt="Sqlite" title="Sqlite">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg-big' src="{{ asset('svg/mysql.svg') }}" alt="mySql" title="mySql">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg' src="{{ asset('svg/nodejs.svg') }}" alt="Node js" title="Node js">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg' src="{{ asset('svg/Cs.svg') }}" alt="C#" title="C#">
                </div>
                <div class="col-sm-1 py-sm-0 py-3 d-flex justify-content-center align-items-center">
                    <img class='img-fluid skill-svg' src="{{ asset('svg/java.svg') }}" alt="C++" title="C++">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
