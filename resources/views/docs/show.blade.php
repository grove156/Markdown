@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <header class="page-header">
        <h1>Markdown Viewer</h1>
      </header>
    </div>
      <div class="row">
        <div class="col-md-6 docs__sidebar">
          <aside>
              {!! $index !!}
          </aside>
        </div>

        <div class="col-md-6 docs_content">
          <article>
            {!! $content !!}
          </article>
        </div>
      </div>
  </div>
@endsection
