@extends('partials.default')

@section('meta_title', 'khaldane - admin')
@section('meta_description', 'admin panel')

@section('content')
    <div id="portfolio-wrap">
        <div class="admin-header">
            <div class="portfolio-title">
                <h2>Admin Panel</h2>
                <hr class="hr-small">
            </div>
        </div>
         <div class="admin-content col-sm-6" >
            <h1 class="admin-medium">Portfolio <a class="admin-right" href="/new-portfolio"><i class="fa fa-plus"></i></a></h1>
            <hr class="hr-large">
             
             @foreach($portfolio as $p)
             <div class="admin-case-study">
                <h4>{{ $p->companyName }}
                    <div class="action-header">
                        <a href="/edit-portfolio?id={{ $p->id }}"><i class="fa fa-pencil"></i></a>
                        <a data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i></a>
                    </div>
                 </h4>
                 <p>{{ $p->shortDescription }} </p>
             </div>
             @endforeach
             
        </div>
        
        <div class="admin-content">
            <h1 class="admin-medium">Tutorials <a class="admin-right" href="/new-tutorial"><i class="fa fa-plus"></i></a></h1>
            <hr  class="hr-large">
             <div class="admin-case-study">
                 @foreach($tutorials as $t)
                     <h4>{{ $t->title }}
                        <div class="action-header">
                            <a href="/edit-tutorial?id={{ $p->id }}"><i class="fa fa-pencil"></i></a>
                            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i></a>
                        </div>
                     </h4>
                 @endforeach
             </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Delete</h4>
          </div>
          <div class="modal-body">
            Are you sure you want to delete?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Yes</button>
          </div>
        </div>
      </div>
    </div>
@stop
