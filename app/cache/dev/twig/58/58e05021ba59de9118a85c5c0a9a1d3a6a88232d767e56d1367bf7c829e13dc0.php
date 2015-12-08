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
        $__internal_31b04339872130466efefcdea1536501d613617baf74d916a4ec8182ad917d10 = $this->env->getExtension("native_profiler");
        $__internal_31b04339872130466efefcdea1536501d613617baf74d916a4ec8182ad917d10->enter($__internal_31b04339872130466efefcdea1536501d613617baf74d916a4ec8182ad917d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b04339872130466efefcdea1536501d613617baf74d916a4ec8182ad917d10->leave($__internal_31b04339872130466efefcdea1536501d613617baf74d916a4ec8182ad917d10_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb694b5ca35d93187385fa92e638dcb738f99c37229d0d74cac2d22d252266e2 = $this->env->getExtension("native_profiler");
        $__internal_eb694b5ca35d93187385fa92e638dcb738f99c37229d0d74cac2d22d252266e2->enter($__internal_eb694b5ca35d93187385fa92e638dcb738f99c37229d0d74cac2d22d252266e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profile", array()), "profileData", array()), "response", array()), "players", array()), 0, array(), "array"), "avatar", array()), "html", null, true);
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
        // line 41
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "    </div>

    ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 45
            echo "    <div id=\"loginModal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Logowanie</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\" id=\"loginForm\">

                            <div class=\"alert alert-danger\" role=\"alert\" id=\"loginFormError\">";
            // line 55
            echo "</div>

                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 60
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
            // line 76
            echo $this->env->getExtension('routing')->getPath("user_resetting_request");
            echo "\" class=\"small\">Zapomniałeś hasła?</a></p>
                            <p><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("user_registration_register");
            echo "\" class=\"small\">Zarejestruj się</a></p>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 79
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
        
        $__internal_eb694b5ca35d93187385fa92e638dcb738f99c37229d0d74cac2d22d252266e2->leave($__internal_eb694b5ca35d93187385fa92e638dcb738f99c37229d0d74cac2d22d252266e2_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8c956e232fc4e7447b2ff7ab7d2fb4818359de92bdfd8ad61e3fb252aacd4f5 = $this->env->getExtension("native_profiler");
        $__internal_b8c956e232fc4e7447b2ff7ab7d2fb4818359de92bdfd8ad61e3fb252aacd4f5->enter($__internal_b8c956e232fc4e7447b2ff7ab7d2fb4818359de92bdfd8ad61e3fb252aacd4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_b8c956e232fc4e7447b2ff7ab7d2fb4818359de92bdfd8ad61e3fb252aacd4f5->leave($__internal_b8c956e232fc4e7447b2ff7ab7d2fb4818359de92bdfd8ad61e3fb252aacd4f5_prof);

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
        return array (  184 => 41,  162 => 79,  157 => 77,  153 => 76,  130 => 60,  123 => 55,  118 => 53,  108 => 45,  106 => 44,  102 => 42,  99 => 41,  92 => 35,  85 => 31,  79 => 28,  71 => 26,  67 => 24,  63 => 22,  61 => 21,  41 => 3,  35 => 2,  11 => 1,);
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
/*                                     src="{% if app.user is defined %}{{app.user.profile.profileData.response.players[0].avatar }} {% endif %}" alt="Avatar" class="navbar-img img-circle"></a>*/
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
