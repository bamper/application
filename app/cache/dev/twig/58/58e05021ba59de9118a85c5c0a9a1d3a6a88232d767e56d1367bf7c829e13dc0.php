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
        $__internal_f81d0d7200cbd8e5180ed047676c6572211aa72a7db9434fd5b1082af2dfd222 = $this->env->getExtension("native_profiler");
        $__internal_f81d0d7200cbd8e5180ed047676c6572211aa72a7db9434fd5b1082af2dfd222->enter($__internal_f81d0d7200cbd8e5180ed047676c6572211aa72a7db9434fd5b1082af2dfd222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f81d0d7200cbd8e5180ed047676c6572211aa72a7db9434fd5b1082af2dfd222->leave($__internal_f81d0d7200cbd8e5180ed047676c6572211aa72a7db9434fd5b1082af2dfd222_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_75925aa9b646fccec62650a0d14000046df1430c4398a5894172de1e82e10a66 = $this->env->getExtension("native_profiler");
        $__internal_75925aa9b646fccec62650a0d14000046df1430c4398a5894172de1e82e10a66->enter($__internal_75925aa9b646fccec62650a0d14000046df1430c4398a5894172de1e82e10a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                        <a href=\"#\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"type=\"button\" class=\"btn btn-warning navbar-btn navbar-right btn-login\">Zaloguj się</a>
                    ";
        } else {
            // line 24
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><img
                                    src=\"";
            // line 26
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profile", array()), "SteamAvatar", array()), "html", null, true);
                echo " ";
            }
            echo "\" alt=\"Avatar\" class=\"navbar-img img-circle img-responsive\"></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\"><span class=\"glyphicon glyphicon-tasks\"></span> Panel</a></li>
                            <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("user_profile_show");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> Profil</a></li>
                            <li><a href=\"#\"><span class=\"glyphicon glyphicon-cog\"></span> Ustawienia</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Wyloguj</a></li>
                        </ul>
                    </li>
                    ";
        }
        // line 36
        echo "                </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class=\"container\" style=\"padding-top: 75px;\">
        ";
        // line 42
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "    </div>

    ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 46
            echo "    <div id=\"loginModal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Logowanie</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\" id=\"loginForm\">

                            <div class=\"alert alert-danger\" role=\"alert\" id=\"loginFormError\">";
            // line 56
            echo "</div>

                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 61
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

                            <div class=\"form-group\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                                <label for=\"remember_me\">Zapamiętaj mnie</label>
                            </div>

                            <p><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("user_resetting_request");
            echo "\" class=\"small\">Zapomniałeś hasła?</a></p>
                            <p><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("user_registration_register");
            echo "\" class=\"small\">Zarejestruj się</a></p>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
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
        
        $__internal_75925aa9b646fccec62650a0d14000046df1430c4398a5894172de1e82e10a66->leave($__internal_75925aa9b646fccec62650a0d14000046df1430c4398a5894172de1e82e10a66_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_992697f6cb682476790652a9742e0498090e0c4476a30e55db54670905b412f6 = $this->env->getExtension("native_profiler");
        $__internal_992697f6cb682476790652a9742e0498090e0c4476a30e55db54670905b412f6->enter($__internal_992697f6cb682476790652a9742e0498090e0c4476a30e55db54670905b412f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_992697f6cb682476790652a9742e0498090e0c4476a30e55db54670905b412f6->leave($__internal_992697f6cb682476790652a9742e0498090e0c4476a30e55db54670905b412f6_prof);

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
        return array (  188 => 42,  166 => 80,  161 => 78,  157 => 77,  134 => 61,  127 => 56,  122 => 54,  112 => 46,  110 => 45,  106 => 43,  103 => 42,  96 => 36,  89 => 32,  83 => 29,  79 => 28,  71 => 26,  67 => 24,  63 => 22,  61 => 21,  41 => 3,  35 => 2,  11 => 1,);
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
/*                     {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                         <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"type="button" class="btn btn-warning navbar-btn navbar-right btn-login">Zaloguj się</a>*/
/*                     {% else %}*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img*/
/*                                     src="{% if app.user is defined %}{{app.user.profile.SteamAvatar }} {% endif %}" alt="Avatar" class="navbar-img img-circle img-responsive"></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('dashboard') }}"><span class="glyphicon glyphicon-tasks"></span> Panel</a></li>*/
/*                             <li><a href="{{ path('user_profile_show') }}"><span class="glyphicon glyphicon-user"></span> Profil</a></li>*/
/*                             <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Ustawienia</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="{{ path('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Wyloguj</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/*     <div class="container" style="padding-top: 75px;">*/
/*         {# {% if app.user is defined %} {{ dump(app.user) }} {% endif %}#}*/
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
/*                             <div class="form-group">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" checked />*/
/*                                 <label for="remember_me">Zapamiętaj mnie</label>*/
/*                             </div>*/
/* */
/*                             <p><a href="{{ path('user_resetting_request') }}" class="small">Zapomniałeś hasła?</a></p>*/
/*                             <p><a href="{{ path('user_registration_register') }}" class="small">Zarejestruj się</a></p>*/
/* */
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*                             <input type="hidden" name="_target_path" value="/profile" />*/
/* */
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
