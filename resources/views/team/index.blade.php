@extends('layouts.auth-layout.app')


@section('contents')
<div class="text-center mg-tb-30">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-8 col-md-11 ml-5 col-sm-11 col-xs-11 center-block">
              

              @if(Auth::user()->role > 0)
                  <div class="panel">
                    <div class="panel-body">
                      
                      <form class="form-inline" action="{{ route('team.create') }}" method="post">
                        @csrf
                        <div class="input-group">
                          <input name="team_name" placeholder="Input Team Name..." type="text" class="form-control">
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Create</button>
                          </span>
                                                                        
                        </div>
                      </form>
                      
                    </div>
                  </div>
              @endif

              

              @if($teams->count() > 0) 
                <div class="sparkline12-list mg-b-30">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Teams</h1>
                        </div>
                    </div>
                    
                    <div class="sparkline12-graph">
                        <div class="static-table-list">
                            <table class="table hover-table">
                                <thead>
                                    <tr>
                                        <th>Team Names</th>
                                        <th class="text-center" colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                
                                    <tbody>
                                    @foreach($teams as $team)
                                        <tr>
                                            
                                            <td class="text-left">{{ $team->team }}</td>
                                            <td>
                                              @if(!$team->userIsAlreadyInTeam(Auth::user()->id, $team->id))
                                                <a href="{{ route('team.join', ['id' => $team->id]) }}" class="btn btn-success">
                                                  <i class="fa fa-plus" aria-hidden="true"></i>  
                                                  Join Team
                                                </a>
                                              @else

                                                  <a href="{{ route('team.leave', ['id' => $team->id]) }}" class="btn btn-success">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>  
                                                    Leaave Team
                                                  </a>
                                              @endif
                                            </td>
                                            @if(Auth::user()->role > 0)
                                              <td>
                                              <a href="{{ route('team.delete', ['id' => $team->id]) }}" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                              </a>
                                              </td>
                                            
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                
                            </table>
                        </div>
                    </div>
                    
                </div>

              @else

                <div class="well">
                  <h1>There Are No Teams Yet</h1>
                  <p>Contact a Mentor to Create a team for You!</p>
                </div>

              @endif
            </div>
        </div>
    </div>
</div>



@endsection