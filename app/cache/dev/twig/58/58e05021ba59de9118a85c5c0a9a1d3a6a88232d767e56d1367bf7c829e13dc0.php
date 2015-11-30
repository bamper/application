<?php

/* ::layout.html.twig */
class __TwigTemplate_5b5859ff7d7b1a90e9b46bcb210c54d95d91dbb6dbbb2a5d8efd0623d5770b08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_268fd1d0b61fde553375af17bf8b4ef565ddebcbff3c71f8721e48b82e679253 = $this->env->getExtension("native_profiler");
        $__internal_268fd1d0b61fde553375af17bf8b4ef565ddebcbff3c71f8721e48b82e679253->enter($__internal_268fd1d0b61fde553375af17bf8b4ef565ddebcbff3c71f8721e48b82e679253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268fd1d0b61fde553375af17bf8b4ef565ddebcbff3c71f8721e48b82e679253->leave($__internal_268fd1d0b61fde553375af17bf8b4ef565ddebcbff3c71f8721e48b82e679253_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_818904ee0eeb22f6f10dbc3ef0cd6cd6cbee0aac177011f50444e467d6a19910 = $this->env->getExtension("native_profiler");
        $__internal_818904ee0eeb22f6f10dbc3ef0cd6cd6cbee0aac177011f50444e467d6a19910->enter($__internal_818904ee0eeb22f6f10dbc3ef0cd6cd6cbee0aac177011f50444e467d6a19910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <nav class=\"navbar navbar-inverse\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Application</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                <!-- Single button -->
                <div class=\"btn-group navbar-right\">
                    <button type=\"button\" class=\"btn navbar-btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Action <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">FAQ</a></li>
                    <li><a href=\"#\">Kontakt</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class=\"container\" style=\"padding-top: 75px;\">
        ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "    </div>
";
        
        $__internal_818904ee0eeb22f6f10dbc3ef0cd6cd6cbee0aac177011f50444e467d6a19910->leave($__internal_818904ee0eeb22f6f10dbc3ef0cd6cd6cbee0aac177011f50444e467d6a19910_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_4d6188528407361d339f77d718478e83a342bf7fc7d31e09367f4a4037294881 = $this->env->getExtension("native_profiler");
        $__internal_4d6188528407361d339f77d718478e83a342bf7fc7d31e09367f4a4037294881->enter($__internal_4d6188528407361d339f77d718478e83a342bf7fc7d31e09367f4a4037294881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_4d6188528407361d339f77d718478e83a342bf7fc7d31e09367f4a4037294881->leave($__internal_4d6188528407361d339f77d718478e83a342bf7fc7d31e09367f4a4037294881_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 43,  85 => 44,  83 => 43,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/*     <nav class="navbar navbar-inverse">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">Application</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* */
/*                 <!-- Single button -->*/
/*                 <div class="btn-group navbar-right">*/
/*                     <button type="button" class="btn navbar-btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                         Action <span class="caret"></span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li role="separator" class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="#">Home</a></li>*/
/*                     <li><a href="#">FAQ</a></li>*/
/*                     <li><a href="#">Kontakt</a></li>*/
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/*     <div class="container" style="padding-top: 75px;">*/
/*         {% block content %} {% endblock %}*/
/*     </div>*/
/* {% endblock %}*/
