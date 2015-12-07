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
        $__internal_ae9b92256b348b9a07f02861fc9ed263adaebc822feb83bfbe3b610aaf6318e1 = $this->env->getExtension("native_profiler");
        $__internal_ae9b92256b348b9a07f02861fc9ed263adaebc822feb83bfbe3b610aaf6318e1->enter($__internal_ae9b92256b348b9a07f02861fc9ed263adaebc822feb83bfbe3b610aaf6318e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae9b92256b348b9a07f02861fc9ed263adaebc822feb83bfbe3b610aaf6318e1->leave($__internal_ae9b92256b348b9a07f02861fc9ed263adaebc822feb83bfbe3b610aaf6318e1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c64914d07195681882a27b44b4d3d299ee5923bbb8ddc6c38c5ca04bca999b6 = $this->env->getExtension("native_profiler");
        $__internal_1c64914d07195681882a27b44b4d3d299ee5923bbb8ddc6c38c5ca04bca999b6->enter($__internal_1c64914d07195681882a27b44b4d3d299ee5923bbb8ddc6c38c5ca04bca999b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <nav class=\"navbar navbar-default navbar-inverse\">
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
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">FAQ</a></li>
                    <li><a href=\"#\">Kontakt</a></li>
                    ";
        // line 21
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "                        <a href=\"#\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"type=\"button\" class=\"btn btn-warning navbar-btn navbar-right btn-login\">Zaloguj się</a>
                    ";
        } else {
            // line 24
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><img
                                    src=\"";
            // line 26
            if (array_key_exists("user", $context)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profile", array()), "profileData", array()), "response", array()), "players", array()), 0, array(), "array"), "avatar", array()), "html", null, true);
                echo " ";
            }
            echo "\" alt=\"Avatar\" class=\"navbar-img img-circle\"></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("user_profile_show");
            echo "\">Profil</a></li>
                            <li><a href=\"#\">Ustawienia</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Wyloguj</a></li>
                        </ul>
                    </li>
                    ";
        }
        // line 35
        echo "                </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class=\"container\" style=\"padding-top: 75px;\">
        ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "    </div>

    ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 44
            echo "    <div id=\"loginModal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Logowanie</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\" id=\"loginForm\">

                            <div class=\"alert alert-danger\" role=\"alert\" id=\"loginFormError\">";
            // line 54
            echo "</div>

                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 59
            if (array_key_exists("last_username", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
                echo " ";
            }
            echo "\" placeholder=\"Nazwa użytkownika\"/>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Hasło\" />
                                </div>
                            </div>

                            <p><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("user_resetting_request");
            echo "\" class=\"small\">Zapomniałeś hasła?</a></p>
                            <p><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("user_registration_register");
            echo "\" class=\"small\">Zarejestruj się</a></p>

                            <input type=\"hidden\" name=\"_target_path\" value=\"/profile\" />
                            <div class=\"form-group\">
                                <button class=\"form-control btn btn-primary\" type=\"submit\" id=\"login-submit-button\">Zaloguj się</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        
        $__internal_1c64914d07195681882a27b44b4d3d299ee5923bbb8ddc6c38c5ca04bca999b6->leave($__internal_1c64914d07195681882a27b44b4d3d299ee5923bbb8ddc6c38c5ca04bca999b6_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_44d8a2c7e6b1d7af84b0c0effcfd17878bd4a48b899576226f568f301d9bdaca = $this->env->getExtension("native_profiler");
        $__internal_44d8a2c7e6b1d7af84b0c0effcfd17878bd4a48b899576226f568f301d9bdaca->enter($__internal_44d8a2c7e6b1d7af84b0c0effcfd17878bd4a48b899576226f568f301d9bdaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_44d8a2c7e6b1d7af84b0c0effcfd17878bd4a48b899576226f568f301d9bdaca->leave($__internal_44d8a2c7e6b1d7af84b0c0effcfd17878bd4a48b899576226f568f301d9bdaca_prof);

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
        return array (  173 => 40,  151 => 71,  147 => 70,  129 => 59,  122 => 54,  117 => 52,  107 => 44,  105 => 43,  101 => 41,  99 => 40,  92 => 35,  85 => 31,  79 => 28,  71 => 26,  67 => 24,  63 => 22,  61 => 21,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/*     <nav class="navbar navbar-default navbar-inverse">*/
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
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="#">Home</a></li>*/
/*                     <li><a href="#">FAQ</a></li>*/
/*                     <li><a href="#">Kontakt</a></li>*/
/*                     {% if not is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                         <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"type="button" class="btn btn-warning navbar-btn navbar-right btn-login">Zaloguj się</a>*/
/*                     {% else %}*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img*/
/*                                     src="{% if user is defined %}{{user.profile.profileData.response.players[0].avatar }} {% endif %}" alt="Avatar" class="navbar-img img-circle"></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('user_profile_show') }}">Profil</a></li>*/
/*                             <li><a href="#">Ustawienia</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="{{ path('logout') }}">Wyloguj</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/*     <div class="container" style="padding-top: 75px;">*/
/*         {% block content %} {% endblock %}*/
/*     </div>*/
/* */
/*     {% if is_granted("IS_AUTHENTICATED_ANONYMOUSLY")%}*/
/*     <div id="loginModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*         <div class="modal-dialog modal-sm">*/
/*             <div class="modal-content">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">Logowanie</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <form action="{{ path('login_check') }}" method="post" id="loginForm">*/
/* */
/*                             <div class="alert alert-danger" role="alert" id="loginFormError">{# Login errors field #}</div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>*/
/*                                     <input class="form-control" type="text" id="username" name="_username" value="{% if last_username is defined %} {{ last_username }} {% endif %}" placeholder="Nazwa użytkownika"/>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>*/
/*                                     <input class="form-control" type="password" id="password" name="_password" placeholder="Hasło" />*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <p><a href="{{ path('user_resetting_request') }}" class="small">Zapomniałeś hasła?</a></p>*/
/*                             <p><a href="{{ path('user_registration_register') }}" class="small">Zarejestruj się</a></p>*/
/* */
/*                             <input type="hidden" name="_target_path" value="/profile" />*/
/*                             <div class="form-group">*/
/*                                 <button class="form-control btn btn-primary" type="submit" id="login-submit-button">Zaloguj się</button>*/
/*                             </div>*/
/* */
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
