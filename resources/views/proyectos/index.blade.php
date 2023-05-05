@extends('layouts.master')
@section('content')
    <h1>TODOS LOS PROYECTOS</h1>

<!--
    Cardgropups para todos los proyectos, una carta por cada uno
-->

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
          <a href="/proyectos/show/1" class="text-decoration-none text-reset">
        <img src="/images/placeholder286x180.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
          </a>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <a href="/proyectos/show/2" class="text-decoration-none text-reset">
            <img src="/images/placeholder286x180.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
              </a>
      </div>
    </div>
    <div class="col">
        <div class="card">
            <a href="/proyectos/show/3" class="text-decoration-none text-reset">
          <img src="/images/placeholder286x180.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
            </a>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <a href="/proyectos/show/4" class="text-decoration-none text-reset">
              <img src="/images/placeholder286x180.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
                </a>
        </div>
      </div>
  </div>


@stop
