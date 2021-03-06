var goalId=0;



$(document).ready(function(){
    getGoals();
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";


    date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });

    clock = $('.clock').FlipClock({
        clockFace: 'TwentyFourHourClock'
    });


    $('#tasksmodal').modal({
        keyboard: false
    });
});


function changeGoalSelection()
{
    goalId=$("#GoalSelection").val();
    getGoals();
}


function actualiseSelectors()
{
    $.get("/myMind/public/GoalsTitles", function( data ) {
        $("#GoalSelection").html("<option value=\"0\"> Select Goal .... </option>");
        $("#GoalSelection").append("<option value=\"0\"> Show All Goals </option>");
        for (i = 0; i < data.result.length; ++i)
        {
            $("#GoalSelection").append("<option value=\""+data.result[i].id+"\">"+data.result[i].titreGoal+"</option>")
        }
    });

}



function getGoals()
{
    actualiseSelectors();
    var template;
    $(".LoadingGlass").fadeIn();

    if(goalId == 0)
    {
        sourceUrl="/myMind/public/Taches/InProgress/Likes/0";
    }
    else
    {
        sourceUrl="/myMind/public/Taches/InProgress/Likes/"+goalId;
    }
    $.get('TasksPinBoot.html', function(data) {
        template=data;
        $.get(sourceUrl, function( data ) {
            var taskTemplate= Mustache.render(template,data);
            $("#inProgressList").html(taskTemplate);


            var inProgressTaskCount=data.result.length;
            var inProgressTaskScore=0;
            for (i = 0; i < data.result.length; ++i)
            {
                inProgressTaskScore+=data.result[i].valueTache;
            }

            $("#inProgressTaskScore").html(inProgressTaskScore);
            $("#inProgressTaskCount").html(inProgressTaskCount+" Task");

            $('.pinboot').each(function(){
                $(this).pinterest_grid({
                    no_columns: 3,
                    padding_x: 5,
                    padding_y: 5,
                    margin_bottom: 50,
                    single_column_breakpoint: 700
                })});

            $(".LoadingGlass").fadeOut();
        });
        
    });


}


function addGoal()
{
    $(".LoadingGlass").fadeIn();
    var task=
        {
            titreGoal : $("#titreGoal").val(),
            descGoal : $("#descGoal").val(),
            dateCreation : $("#dateCreation").val(),
            idCategorie :$("#idCategorie").val()
        };


    $.post( "/myMind/public/Goals/Add",task,function()
    {
        getGoals();
        $("#creationSuccessAlert").fadeIn('fast').delay(1000).fadeOut('fast');
    });


}


function loadTaskModal(id,value)
{
    $("#idGoal").html("<option value=\""+id+"\">"+value+"</option>")
    $("#TasksModal").modal('show');
}

function loadCancelModal(id,value)
{
    $("#CanceledValue").html('-'+value);
    $("#CancelModalButton").html('<button type="button" class="btn btn-outline-secondary" onclick="CancelGoalTask('+id+')">Cancel</button>');
    $("#GoalTaskCancelModal").modal('show');
}

function loadALLCancelModal(id,value)
{
    $("#CanceledValue").html('-'+value);
    $("#CancelModalButton").html('<button type="button" class="btn btn-outline-secondary" onclick="CancelALLGoalTask('+id+')">Cancel</button>');
    $("#GoalTaskCancelModal").modal('show');
}

function loadSuppresionModal(id,value)
{
    $("#LosedValue").html('-'+value);
    $("#DeleteModalButton").html('<button type="button" class="btn btn-outline-danger" onclick="deleteTask('+id+')">Delete</button>');
    $("#TaskSuppressionModal").modal('show');
}

function loadALLSuppresionModal(id,value)
{
    $("#LosedValue").html('-'+value);
    $("#DeleteModalButton").html('<button type="button" class="btn btn-outline-danger" onclick="deleteALLGoalTask('+id+')">Delete</button>');
    $("#TaskSuppressionModal").modal('show');
}

function loadDoneGoalTaskModal(id,value)
{
    $("#GainedValue").html('+'+value);
    $("#DoneModalButton").html('<button type="button" class="btn btn-outline-success" onclick="DoneGoalTask('+id+');">Finish !</button>');
    $("#GoalTaskDoneModal").modal('show');
}

function  loadDoneALLGoalTaskModal(id,value)
{
    $("#GainedValue").html('+'+value);
    $("#DoneModalButton").html('<button type="button" class="btn btn-outline-success" onclick="DoneALLGoalTask('+id+');">Finish !</button>');
    $("#GoalTaskDoneModal").modal('show');

}

function confGoalTask($id)
{
    $(".LoadingGlass").fadeIn();
    $.get( "/myMind/public/Tache/Conf/"+$id, function( data ) {
        getGoals();
    });
}

function WipToggle($id)
{
    $(".LoadingGlass").fadeIn();
    $.get( "/myMind/public/Tache/Wip/"+$id, function( data ) {
        getGoals();
    });

}

function DoneGoalTask(id)
{
    $(".LoadingGlass").fadeIn();
    $.get( "/myMind/public/Tache/Done/"+id, function( data ) {
        getGoals();
    });
    $("#GoalTaskDoneModal").modal('hide');
}

function DoneALLGoalTask(id)
{
    $(".LoadingGlass").fadeIn();
    $.get( "/myMind/public/Goal/Done/"+id, function( data ) {
        getGoals();
    });
    $("#GoalTaskDoneModal").modal('hide');
}


function UnDoneGoalTask(id)
{
    $(".LoadingGlass").fadeIn();
    $.get( "/myMind/public/Tache/UnDone/"+id, function( data ) {
        getGoals();
    });
    $("#GoalTaskUnDoneModal").modal('hide');
}

function UnDoneALLGoalTask(id)
{
    $(".LoadingGlass").fadeIn();
    $.get( "/myMind/public/Goal/UnDone/"+id, function( data ) {
        getGoals();
    });
    $("#GoalTaskUnDoneModal").modal('hide');
}

function CancelGoalTask(id)
{
    $(".LoadingGlass").fadeIn();
    $.get( "/myMind/public/Tache/Cancel/"+id, function( data ) {
        getGoals();
        $("#GoalTaskCancelModal").modal('hide');
    });

}

function CancelALLGoalTask(id)
{
    $(".LoadingGlass").fadeIn();
    $.get( "/myMind/public/Goal/Cancel/"+id, function( data ) {
        getGoals();
        $("#GoalTaskCancelModal").modal('hide');
    });

}


function commentTask(id)
{
    $.get( "/myMind/public/Tache/"+id+"/Comment/"+$('#'+id+'input').val(), function( data ) {
        getGoals();
    });
}

function toggleparametres(id)
{
    $("#"+id+"parametres").fadeToggle();
}


function loadUnDoneGoalTaskModal(id,value)
{
    $("#UnGainedValue").html('-'+value);
    $("#UnDoneModalButton").html('<button type="button" class="btn btn-outline-warning" onclick="UnDoneGoalTask('+id+')">In Progress</button>');
    $("#GoalTaskUnDoneModal").modal('show');
}

function loadUnDoneALLGoalTaskModal(id,value)
{
    $("#UnGainedValue").html('-'+value);
    $("#UnDoneModalButton").html('<button type="button" class="btn btn-outline-warning" onclick="UnDoneALLGoalTask('+id+')">In Progress</button>');
    $("#GoalTaskUnDoneModal").modal('show');
}




function deleteTask(id)
{
    $.get('/myMind/public/Taches/Delete/'+id, function(data) {
        getGoals();
        $("#TaskSuppressionModal").modal('hide');
    });


}

function deleteALLGoalTask(id)
{
    $.get('/myMind/public/Goal/Delete/'+id, function(data) {
        $("#TaskSuppressionModal").modal('hide');
        getGoals();
    });


}

function duplicateGoalTask(id)
{
    $(".LoadingGlass").fadeIn();
    $.get('/myMind/public/Taches/Duplicate/'+id, function(data) {
        getGoals();
    });


}


function addTask()
{
    $(".LoadingGlass").fadeIn();
    var task=
        {
            titreTache : $("#titreTache").val(),
            descTache : $("#descTache").val(),
            valueTache : $("#valueTache").val(),
            dateCreation : $("#dateCreation").val(),
            deadLine : $("#deadLine").val(),
            idGoal :$("#idGoal").val()
        };


    $.post( "/myMind/public/Taches/Add",task,function()
    {
        //getInProgressTasks();
        $("#TasksModal").modal('hide');
        getGoals();
        $("#creationSuccessAlert").fadeIn('fast').delay(1000).fadeOut('fast');
        $(".LoadingGlass").fadeOut();
    });


}

