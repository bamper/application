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
        $__internal_ba16962a6966ef60fd9883cd33cd6446951182f08123fe7c2a10fbdf9c70dc07 = $this->env->getExtension("native_profiler");
        $__internal_ba16962a6966ef60fd9883cd33cd6446951182f08123fe7c2a10fbdf9c70dc07->enter($__internal_ba16962a6966ef60fd9883cd33cd6446951182f08123fe7c2a10fbdf9c70dc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba16962a6966ef60fd9883cd33cd6446951182f08123fe7c2a10fbdf9c70dc07->leave($__internal_ba16962a6966ef60fd9883cd33cd6446951182f08123fe7c2a10fbdf9c70dc07_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9321ee4951c0c40d9c41a05b1514d348cb5f6a8dbfbc6223e590c3b66d4e226 = $this->env->getExtension("native_profiler");
        $__internal_f9321ee4951c0c40d9c41a05b1514d348cb5f6a8dbfbc6223e590c3b66d4e226->enter($__internal_f9321ee4951c0c40d9c41a05b1514d348cb5f6a8dbfbc6223e590c3b66d4e226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <div id=\"loginModal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Logowanie</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" id=\"loginForm\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 53
        if (array_key_exists("last_username", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo " ";
        }
        echo "\" placeholder=\"Nazwa użytkownika\"/>
                            </div>

                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Hasło\" />
                            </div>

                            <p><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("user_resetting_request");
        echo "\" class=\"small\">Zapomniałeś hasła?</a></p>
                            <p><a href=\"";
        // line 61
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
        
        $__internal_f9321ee4951c0c40d9c41a05b1514d348cb5f6a8dbfbc6223e590c3b66d4e226->leave($__internal_f9321ee4951c0c40d9c41a05b1514d348cb5f6a8dbfbc6223e590c3b66d4e226_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_d5380553e0920ae1dde827c69a896ac36c2d5f2ae6f7d3b67e838bdbd35a0ab1 = $this->env->getExtension("native_profiler");
        $__internal_d5380553e0920ae1dde827c69a896ac36c2d5f2ae6f7d3b67e838bdbd35a0ab1->enter($__internal_d5380553e0920ae1dde827c69a896ac36c2d5f2ae6f7d3b67e838bdbd35a0ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_d5380553e0920ae1dde827c69a896ac36c2d5f2ae6f7d3b67e838bdbd35a0ab1->leave($__internal_d5380553e0920ae1dde827c69a896ac36c2d5f2ae6f7d3b67e838bdbd35a0ab1_prof);

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
        return array (  158 => 40,  136 => 61,  132 => 60,  118 => 53,  113 => 51,  101 => 41,  99 => 40,  92 => 35,  85 => 31,  79 => 28,  71 => 26,  67 => 24,  63 => 22,  61 => 21,  41 => 3,  35 => 2,  11 => 1,);
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
/*     <div id="loginModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*         <div class="modal-dialog modal-sm">*/
/*             <div class="modal-content">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">Logowanie</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <form action="{{ path('login_check') }}" method="post" id="loginForm">*/
/*                             <div class="form-group">*/
/*                                 <input class="form-control" type="text" id="username" name="_username" value="{% if last_username is defined %} {{ last_username }} {% endif %}" placeholder="Nazwa użytkownika"/>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <input class="form-control" type="password" id="password" name="_password" placeholder="Hasło" />*/
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
/* */
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
