@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-center">{{$user->companyName}} Jobs </h2>
                <div class="card ">
                    <section class="lang">
                        <div class="container">
                            @foreach($jobs as $job)
                                <div  class="all-jobs grid-2 card">
                                    <div class="img-alll">
                                        <img class="img-all"  src="{{asset('storage/'.$job->image)}}" alt="">
                                    </div>

                                    <div class="flex-1">
                                        <span>{{$job->title}}</span>
                                        <span >{{$job->user->companyName}}</span>
                                        <span>{{$job->location}}</span>
                                    </div>
                                    <div>
                                        <h5>📍 {{$job->created_at->diffForHumans()}}</h5>
                                    </div>

                                    <div>
                                        <a class="view" target="_blank" href="{{route('jobs.show',$job)}}">VIEW</a>
                                    </div>

                                </div>


                            @endforeach
                            {!! $jobs->links() !!}
                        </div>

                    </section>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card ">
                    <div class="card-body text-center ">
                        <h5 class="card-title">Are you hiring?</h5>
                        <p class="card-text">Advertise from $299</p>
                        <a href="{{route('jobs.create')}}" class="btn btn-primary">POST A JOB</a>
                    </div>
                </div>
                <ul class="list-group">
                    @foreach($categories as $category)
                        <a href="{{route('categories.jobs',$category->id)}}" class="list-group-item list-group-item-action">{{$category->name}}</a>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

@endsection
