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
        $__internal_c8b2ae84d4f8425af67b864ff298b56c61b46a7e8a6b2d64f1be603a330abe5d = $this->env->getExtension("native_profiler");
        $__internal_c8b2ae84d4f8425af67b864ff298b56c61b46a7e8a6b2d64f1be603a330abe5d->enter($__internal_c8b2ae84d4f8425af67b864ff298b56c61b46a7e8a6b2d64f1be603a330abe5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b2ae84d4f8425af67b864ff298b56c61b46a7e8a6b2d64f1be603a330abe5d->leave($__internal_c8b2ae84d4f8425af67b864ff298b56c61b46a7e8a6b2d64f1be603a330abe5d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b9fcccd95476ad062f1b0ef35cef17fb08780e521217ae12c5dbf8ab53a78a9 = $this->env->getExtension("native_profiler");
        $__internal_5b9fcccd95476ad062f1b0ef35cef17fb08780e521217ae12c5dbf8ab53a78a9->enter($__internal_5b9fcccd95476ad062f1b0ef35cef17fb08780e521217ae12c5dbf8ab53a78a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"row\">
        ";
        // line 43
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "        </div>
    </div>

    ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 48
            echo "    <div id=\"actionsModal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"actionsModal\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Logowanie</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"loginPanel\">
                                ";
            // line 59
            echo "                                <form action=\"";
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\" id=\"loginForm\">
                                    <div class=\"alert alert-danger\" role=\"alert\" id=\"loginFormError\">";
            // line 60
            echo "</div>
                                    <div class=\"form-group\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 64
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
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked=\"false\" />
                                        <label for=\"remember_me\">Zapamiętaj mnie</label>
                                    </div>

                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">

                                    <div class=\"form-group\">
                                        <button class=\"form-control btn btn-primary\" type=\"submit\" id=\"login-submit-button\">Zaloguj się</button>
                                    </div>

                                    <ul role=\"tablist\" id=\"tab-controls\">
                                        <li role=\"presentation\"><a href=\"#recoveryPanel\" class=\"small\" aria-controls=\"forgotten\" role=\"tab\" data-toggle=\"tab\">Zapomniałeś hasła?</a></li>
                                        <li> | </li>
                                        <li role=\"presentation\"><a href=\"#registrationPanel\" class=\"small\" aria-controls=\"registration\" role=\"tab\" data-toggle=\"tab\">Zarejestruj się</a></li>
                                    </ul>
                                </form>
                                ";
            // line 93
            echo "                            </div>

                            <div role=\"tabpanel\" class=\"tab-pane\" id=\"registrationPanel\">
                                ";
            // line 97
            echo "                                <form action=\"";
            echo $this->env->getExtension('routing')->getPath("user_registration_register");
            echo "\" method=\"post\" id=\"registrationForm\">
                                    <div class=\"form-group\">
                                        <div class=\"input-group\" id=\"input-group-username\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                            <input class=\"form-control\" type=\"text\" id=\"registration_user_username\" name=\"registration[user][username]\" placeholder=\"Nazwa użytkownika\"/>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"input-group\" id=\"input-group-email\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>
                                            <input class=\"form-control\" type=\"text\" id=\"registration_user_email\" name=\"registration[user][email]\" placeholder=\"E-mail\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"input-group\" id=\"input-group-password\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                                            <input class=\"form-control\" type=\"password\" id=\"registration_user_password_password\" name=\"registration[user][password][password]\" placeholder=\"Hasło\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"input-group\" id=\"input-group-password-confirm\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                                            <input class=\"form-control\" type=\"password\" id=\"registration_user_password_confirm\" name=\"registration[user][password][confirm]\" placeholder=\"Powtórz hasło\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <input type=\"hidden\" id=\"registration__token\" name=\"registration[_token]\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("registration"), "html", null, true);
            echo "\">
                                    </div>

                                    <div class=\"form-group\">
                                        <button class=\"form-control btn btn-primary\" type=\"submit\" id=\"registration-submit-button\">Zarejestruj się</button>
                                    </div>

                                    <ul role=\"tablist\" id=\"tab-controls\">
                                        <li role=\"presentation\"><a href=\"#loginPanel\" class=\"small\" aria-controls=\"login\" role=\"tab\" data-toggle=\"tab\">Zaloguj się</a></li>
                                    </ul>
                                </form>
                                ";
            // line 139
            echo "                            </div>

                            <div role=\"tabpanel\" class=\"tab-pane\" id=\"recoveryPanel\">
                                ";
            // line 143
            echo "                                <form action=\"";
            echo $this->env->getExtension('routing')->getPath("user_resetting_request");
            echo "\" method=\"post\" id=\"recoveryForm\">
                                    <div class=\"form-group\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>
                                            <input class=\"form-control\" type=\"text\" id=\"recovery_email\" name=\"email\" placeholder=\"E-mail\"/>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <button class=\"form-control btn btn-primary\" type=\"submit\" id=\"recovery-submit-button\">Wyślij</button>
                                    </div>

                                    <ul role=\"tablist\" id=\"tab-controls\">
                                        <li role=\"presentation\"><a href=\"#loginPanel\" class=\"small\" aria-controls=\"login\" role=\"tab\" data-toggle=\"tab\">Zaloguj się</a></li>
                                        <li> | </li>
                                        <li role=\"presentation\"><a href=\"#registrationPanel\" class=\"small\" aria-controls=\"registration\" role=\"tab\" data-toggle=\"tab\">Zarejestruj się</a></li>
                                    </ul>
                                </form>
                                ";
            // line 162
            echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 170
        echo "    <div class=\" navbar-fixed-bottom\">
        <div class=\"container\" id=\"messages-box\">
            ";
        // line 173
        echo "        </div>
    </div>
";
        
        $__internal_5b9fcccd95476ad062f1b0ef35cef17fb08780e521217ae12c5dbf8ab53a78a9->leave($__internal_5b9fcccd95476ad062f1b0ef35cef17fb08780e521217ae12c5dbf8ab53a78a9_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_f8fd31e2bf3e47aaf7d234c4183248dc099e9bcac47367bc569de3b7769176bc = $this->env->getExtension("native_profiler");
        $__internal_f8fd31e2bf3e47aaf7d234c4183248dc099e9bcac47367bc569de3b7769176bc->enter($__internal_f8fd31e2bf3e47aaf7d234c4183248dc099e9bcac47367bc569de3b7769176bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_f8fd31e2bf3e47aaf7d234c4183248dc099e9bcac47367bc569de3b7769176bc->leave($__internal_f8fd31e2bf3e47aaf7d234c4183248dc099e9bcac47367bc569de3b7769176bc_prof);

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
        return array (  278 => 43,  269 => 173,  265 => 170,  255 => 162,  233 => 143,  228 => 139,  214 => 127,  180 => 97,  175 => 93,  160 => 80,  137 => 64,  131 => 60,  126 => 59,  114 => 48,  112 => 47,  107 => 44,  104 => 43,  96 => 36,  89 => 32,  83 => 29,  79 => 28,  71 => 26,  67 => 24,  63 => 22,  61 => 21,  41 => 3,  35 => 2,  11 => 1,);
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
/*         <div class="row">*/
/*         {# {% if app.user is defined %} {{ dump(app.user) }} {% endif %}#}*/
/*         {% block content %} {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if is_granted("IS_AUTHENTICATED_ANONYMOUSLY") %}*/
/*     <div id="actionsModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="actionsModal">*/
/*         <div class="modal-dialog modal-sm">*/
/*             <div class="modal-content">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">Logowanie</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="tab-content">*/
/*                             <div role="tabpanel" class="tab-pane active" id="loginPanel">*/
/*                                 {# begin # loginForm #}*/
/*                                 <form action="{{ path('login_check') }}" method="post" id="loginForm">*/
/*                                     <div class="alert alert-danger" role="alert" id="loginFormError">{# Login errors field #}</div>*/
/*                                     <div class="form-group">*/
/*                                         <div class="input-group">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>*/
/*                                             <input class="form-control" type="text" id="username" name="_username" value="{% if last_username is defined %} {{ last_username }} {% endif %}" placeholder="Nazwa użytkownika"/>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="input-group">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>*/
/*                                             <input class="form-control" type="password" id="password" name="_password" placeholder="Hasło" />*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <input type="checkbox" id="remember_me" name="_remember_me" checked="false" />*/
/*                                         <label for="remember_me">Zapamiętaj mnie</label>*/
/*                                     </div>*/
/* */
/*                                     <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/* */
/*                                     <div class="form-group">*/
/*                                         <button class="form-control btn btn-primary" type="submit" id="login-submit-button">Zaloguj się</button>*/
/*                                     </div>*/
/* */
/*                                     <ul role="tablist" id="tab-controls">*/
/*                                         <li role="presentation"><a href="#recoveryPanel" class="small" aria-controls="forgotten" role="tab" data-toggle="tab">Zapomniałeś hasła?</a></li>*/
/*                                         <li> | </li>*/
/*                                         <li role="presentation"><a href="#registrationPanel" class="small" aria-controls="registration" role="tab" data-toggle="tab">Zarejestruj się</a></li>*/
/*                                     </ul>*/
/*                                 </form>*/
/*                                 {# end # loginForm #}*/
/*                             </div>*/
/* */
/*                             <div role="tabpanel" class="tab-pane" id="registrationPanel">*/
/*                                 {# begin # registerForm#}*/
/*                                 <form action="{{ path('user_registration_register') }}" method="post" id="registrationForm">*/
/*                                     <div class="form-group">*/
/*                                         <div class="input-group" id="input-group-username">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>*/
/*                                             <input class="form-control" type="text" id="registration_user_username" name="registration[user][username]" placeholder="Nazwa użytkownika"/>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="input-group" id="input-group-email">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>*/
/*                                             <input class="form-control" type="text" id="registration_user_email" name="registration[user][email]" placeholder="E-mail" />*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="input-group" id="input-group-password">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>*/
/*                                             <input class="form-control" type="password" id="registration_user_password_password" name="registration[user][password][password]" placeholder="Hasło" />*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="input-group" id="input-group-password-confirm">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>*/
/*                                             <input class="form-control" type="password" id="registration_user_password_confirm" name="registration[user][password][confirm]" placeholder="Powtórz hasło" />*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <input type="hidden" id="registration__token" name="registration[_token]" value="{{ csrf_token('registration') }}">*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <button class="form-control btn btn-primary" type="submit" id="registration-submit-button">Zarejestruj się</button>*/
/*                                     </div>*/
/* */
/*                                     <ul role="tablist" id="tab-controls">*/
/*                                         <li role="presentation"><a href="#loginPanel" class="small" aria-controls="login" role="tab" data-toggle="tab">Zaloguj się</a></li>*/
/*                                     </ul>*/
/*                                 </form>*/
/*                                 {# end # registerForm#}*/
/*                             </div>*/
/* */
/*                             <div role="tabpanel" class="tab-pane" id="recoveryPanel">*/
/*                                 {# begin # recoveryPanel #}*/
/*                                 <form action="{{ path('user_resetting_request') }}" method="post" id="recoveryForm">*/
/*                                     <div class="form-group">*/
/*                                         <div class="input-group">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>*/
/*                                             <input class="form-control" type="text" id="recovery_email" name="email" placeholder="E-mail"/>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <button class="form-control btn btn-primary" type="submit" id="recovery-submit-button">Wyślij</button>*/
/*                                     </div>*/
/* */
/*                                     <ul role="tablist" id="tab-controls">*/
/*                                         <li role="presentation"><a href="#loginPanel" class="small" aria-controls="login" role="tab" data-toggle="tab">Zaloguj się</a></li>*/
/*                                         <li> | </li>*/
/*                                         <li role="presentation"><a href="#registrationPanel" class="small" aria-controls="registration" role="tab" data-toggle="tab">Zarejestruj się</a></li>*/
/*                                     </ul>*/
/*                                 </form>*/
/*                                 {# end # recoveryPanel #}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class=" navbar-fixed-bottom">*/
/*         <div class="container" id="messages-box">*/
/*             {# messages #}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
