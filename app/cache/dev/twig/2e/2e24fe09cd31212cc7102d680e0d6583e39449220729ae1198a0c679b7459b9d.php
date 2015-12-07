<?php

/* ::base.html.twig */
class __TwigTemplate_739c3781312e1688cdae660469146766dc25f4de22533043e5599df71cb02de4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af1257bfe85fe318b546a8800b2dbf96dabca077d0206a5bead792cab656bb43 = $this->env->getExtension("native_profiler");
        $__internal_af1257bfe85fe318b546a8800b2dbf96dabca077d0206a5bead792cab656bb43->enter($__internal_af1257bfe85fe318b546a8800b2dbf96dabca077d0206a5bead792cab656bb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"iso-8859-2\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
</body>
</html>
";
        
        $__internal_af1257bfe85fe318b546a8800b2dbf96dabca077d0206a5bead792cab656bb43->leave($__internal_af1257bfe85fe318b546a8800b2dbf96dabca077d0206a5bead792cab656bb43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_850ac0b4d812446c7c020dd96139da23e13d86172e29eeea4d68e2071fb63b56 = $this->env->getExtension("native_profiler");
        $__internal_850ac0b4d812446c7c020dd96139da23e13d86172e29eeea4d68e2071fb63b56->enter($__internal_850ac0b4d812446c7c020dd96139da23e13d86172e29eeea4d68e2071fb63b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_850ac0b4d812446c7c020dd96139da23e13d86172e29eeea4d68e2071fb63b56->leave($__internal_850ac0b4d812446c7c020dd96139da23e13d86172e29eeea4d68e2071fb63b56_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9218767bf1c5f4cb7a618ff9f96365b936fa4675c619781a4d8295bcc021a084 = $this->env->getExtension("native_profiler");
        $__internal_9218767bf1c5f4cb7a618ff9f96365b936fa4675c619781a4d8295bcc021a084->enter($__internal_9218767bf1c5f4cb7a618ff9f96365b936fa4675c619781a4d8295bcc021a084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_9218767bf1c5f4cb7a618ff9f96365b936fa4675c619781a4d8295bcc021a084->leave($__internal_9218767bf1c5f4cb7a618ff9f96365b936fa4675c619781a4d8295bcc021a084_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_de8dd027bc120bb0e24106ab3e623e5e3c29210cad74b4342d7bbf2cd019a379 = $this->env->getExtension("native_profiler");
        $__internal_de8dd027bc120bb0e24106ab3e623e5e3c29210cad74b4342d7bbf2cd019a379->enter($__internal_de8dd027bc120bb0e24106ab3e623e5e3c29210cad74b4342d7bbf2cd019a379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de8dd027bc120bb0e24106ab3e623e5e3c29210cad74b4342d7bbf2cd019a379->leave($__internal_de8dd027bc120bb0e24106ab3e623e5e3c29210cad74b4342d7bbf2cd019a379_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8e7081083a37966ba395f9bb34b987000a9a62e68c4b20d5b122b1298344342 = $this->env->getExtension("native_profiler");
        $__internal_f8e7081083a37966ba395f9bb34b987000a9a62e68c4b20d5b122b1298344342->enter($__internal_f8e7081083a37966ba395f9bb34b987000a9a62e68c4b20d5b122b1298344342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f8e7081083a37966ba395f9bb34b987000a9a62e68c4b20d5b122b1298344342->leave($__internal_f8e7081083a37966ba395f9bb34b987000a9a62e68c4b20d5b122b1298344342_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 20,  114 => 19,  111 => 18,  105 => 17,  94 => 16,  84 => 10,  79 => 9,  73 => 8,  61 => 7,  51 => 22,  49 => 17,  47 => 16,  40 => 13,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-2" />*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/style.css') }}"/>*/
/* */
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>*/
/*     <script src="{{ asset('bundles/app/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/app/js/main.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
