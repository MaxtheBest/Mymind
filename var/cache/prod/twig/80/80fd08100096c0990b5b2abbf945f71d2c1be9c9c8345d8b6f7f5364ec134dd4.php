<?php

/* Home.html.twig */
class __TwigTemplate_deb509694fb42e71c7882b3787c7115a31a2727d5c4c98869347b87131af6112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/assets/progresscircle.css\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/progresscircle.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Tangerine\">

</head>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-inversed\">
    <a class=\"navbar-brand\" href=\"#\">MindSet</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" id=\"all\">All Tasks<span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Features</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Pricing</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
        </ul>
    </div>
</nav>

<body>
    <div class=\"container-fluid\">
        <div class=\"row\" >

            <div class=\"col-lg-6  col-md-12 col-sm-12\" id=\"UnFinishedPlan\">
                <div class=\"alert alert-secondary glassBlue\" role=\"alert\" >
                    <div class=\"row  align-items-center glassBlue\" style=\"margin-bottom: 10px;padding:5px;\" >
                        <div class=\"col-lg-6 col-md-6\" id=\"inProgress\" >
                            <h1>In progress <span class=\"badge badge-secondary\" id=\"CountUnFinished\">0</span></h1>
                        </div>
                        <div class=\"col-lg-3 col-md-6\" >
                            <h3>Total Score<span class=\"badge badge-Info\" id=\"TotalScoreUnFinished\">0</span></h3>
                        </div>

                        <div class='col-lg-1 offset-lg-1 '>
                            <button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#AddTaskModal\">Add+ </button>
                        </div>
                    </div>
                        <div class=\"row\" id=\"UnFinishedTask\">
                            <div class=\"col-lg-6\" id=\"UnFinishedTask1\">
                            </div>

                            <div class=\"col-lg-6\" id=\"UnFinishedTask2\">
                            </div>

                        </div>

                </div>
            </div>


            <div class=\"col-lg-6 col-md-12 col-sm-12\" id=\"FinishedPlan\">
                <div class=\"alert alert-success glassGreen\"  >
                    <div class=\"row  glassGreen\" style=\"margin-bottom: 10px;padding:5px;\">
                        <div class=\"col-lg-6 col-md-6\"   >
                            <h1>Done <span class=\"badge badge-success\" id=\"CountFinished\"> 5</span></h1>
                        </div>
                        <div class=\"col-lg-3 col-md-6\" >
                            <h3>Total Score<span class=\"badge badge-Info\" id=\"TotalScoreDone\"> 5000</span></h3>
                        </div>

                        <div class='col-lg-1 offset-lg-1 '>
                            <button type=\"button\" class=\"btn btn-warning\">Add</button>
                        </div>
                    </div>
                    <div class=\"row\" id=\"FinishedTask\">

                    </div>
                </div>

                </div>
            </div>



        </div>

    </div>



    <div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"AddTaskModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Add New Task</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form>
                <div class=\"modal-body\">
                    <div class=\"container\">
                        <form id=\"AddTaskForm\">

                            <div class=\"form-group\">
                                <label for=\"titreTache\">Task Title</label>
                                <input class=\"form-control\" id=\"titreTache\"  placeholder=\"Enter a title \">
                            </div>

                        <div class=\"form-group\">
                            <label for=\"descTache\">Task Description</label>
                            <textarea class=\"form-control\" id=\"descTache\" rows=\"3\" placeholder=\"Enter a brief Description of your task \"></textarea>
                        </div>


                        <div class=\"form-group\">
                            <label for=\"valueTache\">Task Value</label>
                            <input class=\"form-control\" id=\"valueTache\"  placeholder=\"give your task a value\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"persTache\">Task Percentage</label>
                            <input class=\"form-control\" id=\"persTache\"  placeholder=\"give your task a value\">
                        </div>



                        <div class=\"form-group\">
                            <select class=\"form-control\" id=\"idGoal\">
                            </select>
                            <div class='col-lg-2 offset-lg-8 '>
                                <button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#AddGoalModal\">Add+ </button>
                            </div>
                        </div>

                        </form>





                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"AddTask\">Submit</button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div>
                </form>

            </div>
        </div>
    </div>



    <div class=\"modal\" tabindex=\"-2\" role=\"dialog\" id=\"AddGoalModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Add New Task</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"container\">
                            <form id=\"AddTaskForm\">

                                <div class=\"form-group\">
                                    <label for=\"titreTache\">Task Title</label>
                                    <input class=\"form-control\" id=\"titreTache\"  placeholder=\"Enter a title \">
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"descTache\">Task Description</label>
                                    <textarea class=\"form-control\" id=\"descTache\" rows=\"3\" placeholder=\"Enter a brief Description of your task \"></textarea>
                                </div>


                                <div class=\"form-group\">
                                    <label for=\"valueTache\">Task Value</label>
                                    <input class=\"form-control\" id=\"valueTache\"  placeholder=\"give your task a value\">
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"persTache\">Task Percentage</label>
                                    <input class=\"form-control\" id=\"persTache\"  placeholder=\"give your task a value\">
                                </div>



                                <div class=\"form-group\">
                                    <select class=\"form-control\" id=\"idGoal\">
                                    </select>
                                    <div class='col-lg-2 offset-lg-8 '>
                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#GoalModal\">Add New Goal+ </button>
                                    </div>
                                </div>

                            </form>





                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"AddTask\">Submit</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>






<script>

    \$(\"#inProgress\").click(function(){
        \$(\"#UnFinishedTask\").slideToggle(100);
    });

    \$(document).ready(function () {
        \$.get( \"http://localhost:8000/Goals\", function( data ) {
            for (i = 0; i < data.result.length; ++i) {
                \$( \"#idGoal\" ).append(\"\\
                <option value=\\\"\"+data.result[i].id+\"\\\">\"+data.result[i].titreGoal+\"</option>\\
                \");
            }
        });
    });


    \$(document).ready(function() {
        ReadFinishedTask();
        ReadUnFinishedTask();






    });

    function ReadUnFinishedTask()
    {
        \$( \"#UnFinishedTask1\" ).html('');
        \$( \"#UnFinishedTask2\" ).html('');
        \$.get( \"http://localhost:8000/Goals/Categorie/1\", function( data ) {
            var titreGoal= data.result[0].titreGoal;
            var tachesGoal= data.result[0].taches;
            var TotalScore=0;

            var i;
            \$( \"#CountUnFinished\" ).html(tachesGoal.length);
            for (i = 0; i < tachesGoal.length;i+=2) {
                TotalScore+=tachesGoal[i].valueTache;
                TotalScore+=tachesGoal[i+1].valueTache;
                \$( \"#UnFinishedTask1\" ).append(\"\\
                    <div class=\\\"card\\\" style='margin-bottom: 5px;' > \\
                        <div class=\\\"card-body\\\"> \\
                            <div class='row'>\\
                                <div class='col-lg-9  col-md-3 col-sm-3'>\\
                                    <h5 class=\\\"card-title\\\">\"+tachesGoal[i].titreTache+\"</h5> \\
                                </div> \\
                                \\<div class='col-lg-3   col-sm-3'>\\
                                    <h3><span class=\\\"badge badge-info\\\">\"+tachesGoal[i].valueTache+\"</span></h3>\\
                                </div> \\
                            </div> \\
                            <div class='row'>\\
                            <div class='col-lg-12  col-md-3 col-sm-3'>\\
                                <h6 class=\\\"card-subtitle mb-2 text-muted\\\">\"+titreGoal+\"</h6> \\
                                <p class=\\\"card-text\\\">\"+tachesGoal[i].descTache+\"</p> \\
                             </div>\\
                            </div>\\
                            <hr width=\\\"100%\\\"/>\\
                            <div class='row align-items-center' style=\\\"margin:0px;\\\">\\
                                <div class='col-lg-3 col-md-3  col-sm-2'>\\
                                    <button type=\\\"button\\\" class=\\\"btn btn-success\\\">Done</button>\\
                                </div> \\
                                <div class='col-lg-3 col-md-3 col-sm-2'>\\
                                    <button type=\\\"button\\\" class=\\\"btn btn-warning\\\">Modify</button>\\
                                </div> \\
                                <div class='col-lg-3 offset-lg-3  col-md-3 col-sm-2'>\\
                                    <div class=\\\"circlechart\\\" data-percentage=\\\"\"+tachesGoal[i].persTache+\"\\\"></div>\\
                                </div> \\
                            </div> \\
                    </div> \\
                </div>\");

                \$( \"#UnFinishedTask2\" ).append(\"\\
                    <div class=\\\"card\\\" style='margin-bottom: 5px;' > \\
                        <div class=\\\"card-body\\\"> \\
                            <div class='row'>\\
                                <div class='col-lg-9  col-md-3 col-sm-3'>\\
                                    <h5 class=\\\"card-title\\\">\"+tachesGoal[i+1].titreTache+\"</h5> \\
                                </div> \\
                                \\<div class='col-lg-3   col-sm-3'>\\
                                    <h3><span class=\\\"badge badge-info\\\">\"+tachesGoal[i+1].valueTache+\"</span></h3>\\
                                </div> \\
                            </div> \\
                            <div class='row'>\\
                            <div class='col-lg-12  col-md-3 col-sm-3'>\\
                                <h6 class=\\\"card-subtitle mb-2 text-muted\\\">\"+titreGoal+\"</h6> \\
                                <p class=\\\"card-text\\\">\"+tachesGoal[i+1].descTache+\"</p> \\
                             </div>\\
                            </div>\\
                            <hr width=\\\"100%\\\"/>\\
                            <div class='row align-items-center' style=\\\"margin:0px;\\\">\\
                                <div class='col-lg-3 col-md-3  col-sm-2'>\\
                                    <button type=\\\"button\\\" class=\\\"btn btn-success\\\">Done</button>\\
                                </div> \\
                                <div class='col-lg-3 col-md-3 col-sm-2'>\\
                                    <button type=\\\"button\\\" class=\\\"btn btn-warning\\\">Modify</button>\\
                                </div> \\
                                <div class='col-lg-3 offset-lg-3  col-md-3 col-sm-2'>\\
                                    <div class=\\\"circlechart\\\" data-percentage=\\\"\"+tachesGoal[i+1].persTache+\"\\\"></div>\\
                                </div> \\
                            </div> \\
                    </div> \\
                </div>\");
            }
            \$( \"#TotalScoreUnFinished\" ).html(TotalScore);
            \$( \"#UnFinishedPlan\" ).fadeIn(500);
            \$('.circlechart').circlechart(); // Initialization
        });

    }

    function ReadFinishedTask() {
        \$.get( \"http://localhost:8000/Taches/Finished\", function( data ) {
            var tachesGoal= data.result;
            var TotalScore=0;
            var i;
            \$( \"#CountFinished\" ).html(tachesGoal.length);
            for (i = 0; i < tachesGoal.length; ++i) {
                TotalScore+=tachesGoal[i].valueTache;
                \$( \"#FinishedTask\" ).append(\"\\
                <div class=\\\"col-lg-6  col-md-12 col-sm-12\\\"> \\
                    <div class=\\\"card\\\" > \\
                        <div class=\\\"card-body\\\"> \\
                            <div class='row'>\\
                                <div class='col-lg-9  col-md-3 col-sm-3'>\\
                                    <h5 class=\\\"card-title\\\">\"+tachesGoal[i].titreTache+\"</h5> \\
                                </div> \\
                                \\<div class='col-lg-3   col-sm-3'>\\
                                    <h3><span class=\\\"badge badge-info\\\">\"+tachesGoal[i].valueTache+\"</span></h3>\\
                                </div> \\
                            </div> \\
                            <div class='row'>\\
                            <div class='col-lg-12  col-md-3 col-sm-3'>\\
                                <h6 class=\\\"card-subtitle mb-2 text-muted\\\">Done</h6> \\
                                <p class=\\\"card-text\\\">\"+tachesGoal[i].descTache+\"</p> \\
                             </div>\\
                            </div>\\
                            <hr width=\\\"100%\\\"/>\\
                            <div class='row align-items-center' style=\\\"margin:0px;\\\">\\
                                <div class='col-lg-3 col-md-3  col-sm-2'>\\
                                    <button type=\\\"button\\\" class=\\\"btn btn-success\\\">Done</button>\\
                                </div> \\
                                <div class='col-lg-3 col-md-3 col-sm-2'>\\
                                    <button type=\\\"button\\\" class=\\\"btn btn-warning\\\">Modify</button>\\
                                </div> \\
                                <div class='col-lg-3 offset-lg-3  col-md-3 col-sm-2'>\\
                                    <div class=\\\"circlechart\\\" data-percentage=\\\"\"+tachesGoal[i].persTache+\"\\\"></div>\\
                                </div> \\
                            </div> \\
                        </div>\\
                </div>\");
            }
            \$( \"#TotalScoreDone\" ).html(TotalScore);
            \$( \"#FinishedPlan\" ).fadeIn(500);
            \$('.circlechart').circlechart(); // Initialization
        });

    }

    \$(\"#AddTask\").click(function(){

        var task=
            {
                titreTache : \$(\"#titreTache\").val(),
                descTache : \$(\"#descTache\").val(),
                valueTache : \$(\"#valueTache\").val(),
                persTache :\$(\"#persTache\").val(),
                idGoal :\$(\"#idGoal\").val()
            };

        alert(task.titreTache);

        \$.post( \"http://localhost:8000/Taches/Add\",task);



        \$('#AddTaskModal').fadeOut(500);
        setTimeout(function() {
            \$(\"#AddTaskModal\").modal('hide');
        }, 750);
    });


</script>






</body>

</html>";
    }

    public function getTemplateName()
    {
        return "Home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Home.html.twig", "C:\\xampp2\\htdocs\\Mymind\\templates\\Home.html.twig");
    }
}
