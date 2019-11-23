<div class="tab-pane text-center" id="skills" role="tabpanel">
    <div class="card-deck">
        <div class="card">
            <h3 class="text-info">Professional Skills</h3>
            <div class="card-body">
                <div class="list-group">
                    <div class="list-group-item list-group-item-primary">
                        @foreach ($professional_skills as $professional_skill)
                            <div class="row">
                                <div class="col-md-3" style="margin-top:1%"> <i class="fa fa-cogs"style="font-size:20px;"></i>&nbsp;&nbsp;&nbsp;{{$professional_skill->skill}}</div>
                                <div class="col-md-8">
                                        @if ($professional_skill->level=='basic')
                                        <div class="progress" style="background-color:antiquewhite;height:50%; margin-top:2%;">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:30%">Beginer</div>
                                            </div>
                                    @elseif($professional_skill->level=='medium')
                                    <div class="progress" style="background-color:antiquewhite;height:50%; margin-top:2%;">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:50%">Medium</div>
                                        </div>
                                    @else
                                    <div class="progress" style="background-color:antiquewhite;height:50%; margin-top:2%;">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:80%">Exepert</div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-1" style="margin-top:1%; ">
                                    <div class="td-actions pull-right">
                                        <span style="cursor:pointer;"><i class="fa fa-edit"></i></span>
                                        <span style="cursor:pointer;"><i class="fa fa-times btn btn-danger btn-link btn-sm"></i></span>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#editExperienceModal_"><i class="fa fa-plus"></i> Add</button>
            </div>
        </div> 
        <div class="card">
                <h3 class="text-info">Personal Skills</h3>
                <div class="card-body">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-primary">
                            @foreach ($personal_skills as $personal_skill)
                                <div class="row">
                                    <div class="col-md-3" style="margin-top:1%"> <i class="fa fa-cogs"style="font-size:20px;"></i>&nbsp;&nbsp;&nbsp;{{$personal_skill->skill}}</div>
                                    <div class="col-md-6">
                                            @if ($personal_skill->level=='basic')
                                            <div class="progress" style="background-color:antiquewhite;height:50%; margin-top:2%;">
                                                    <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:30%">Beginer</div>
                                                </div>
                                        @elseif($personal_skill->level=='medium')
                                        <div class="progress" style="background-color:antiquewhite;height:50%; margin-top:2%;">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:50%">Medium</div>
                                            </div>
                                        @else
                                        <div class="progress" style="background-color:antiquewhite;height:50%; margin-top:2%;">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:80%">Exepert</div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <div class="td-actions pull-right">
                                            <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Profile" id="editSkill_{{$professional_skill->id}}" class="btn btn-success btn-link btn-sm">
                                            <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove" id="deleteSkill_{{$professional_skill->id}}" class="btn btn-danger btn-link btn-sm">
                                            <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#editExperienceModal_"><i class="fa fa-plus"></i> Add</button>
                </div>
            </div> 
    </div>
    <div class="card-deck">
        

    </div>
</div>

