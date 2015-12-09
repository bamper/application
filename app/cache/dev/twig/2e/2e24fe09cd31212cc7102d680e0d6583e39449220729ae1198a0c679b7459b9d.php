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
        $__internal_68c6cd3552e0c9e2de6a6feeef7587d5e113e90d7d6828a6cf991a2ba78332da = $this->env->getExtension("native_profiler");
        $__internal_68c6cd3552e0c9e2de6a6feeef7587d5e113e90d7d6828a6cf991a2ba78332da->enter($__internal_68c6cd3552e0c9e2de6a6feeef7587d5e113e90d7d6828a6cf991a2ba78332da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_68c6cd3552e0c9e2de6a6feeef7587d5e113e90d7d6828a6cf991a2ba78332da->leave($__internal_68c6cd3552e0c9e2de6a6feeef7587d5e113e90d7d6828a6cf991a2ba78332da_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5173172277f212a9578a8a993a5f88d66ede0475c8f91a04eb4930d8743f5fa2 = $this->env->getExtension("native_profiler");
        $__internal_5173172277f212a9578a8a993a5f88d66ede0475c8f91a04eb4930d8743f5fa2->enter($__internal_5173172277f212a9578a8a993a5f88d66ede0475c8f91a04eb4930d8743f5fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5173172277f212a9578a8a993a5f88d66ede0475c8f91a04eb4930d8743f5fa2->leave($__internal_5173172277f212a9578a8a993a5f88d66ede0475c8f91a04eb4930d8743f5fa2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48424bcb8dc8185d8bb257c64adb5d1ae2f5f2a168ae3da913ac4fe48a4c60b2 = $this->env->getExtension("native_profiler");
        $__internal_48424bcb8dc8185d8bb257c64adb5d1ae2f5f2a168ae3da913ac4fe48a4c60b2->enter($__internal_48424bcb8dc8185d8bb257c64adb5d1ae2f5f2a168ae3da913ac4fe48a4c60b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_48424bcb8dc8185d8bb257c64adb5d1ae2f5f2a168ae3da913ac4fe48a4c60b2->leave($__internal_48424bcb8dc8185d8bb257c64adb5d1ae2f5f2a168ae3da913ac4fe48a4c60b2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa9ecfce014e9608e138180fbc1cf46dd1b7e60a21d532075c3e97d070ea116b = $this->env->getExtension("native_profiler");
        $__internal_fa9ecfce014e9608e138180fbc1cf46dd1b7e60a21d532075c3e97d070ea116b->enter($__internal_fa9ecfce014e9608e138180fbc1cf46dd1b7e60a21d532075c3e97d070ea116b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa9ecfce014e9608e138180fbc1cf46dd1b7e60a21d532075c3e97d070ea116b->leave($__internal_fa9ecfce014e9608e138180fbc1cf46dd1b7e60a21d532075c3e97d070ea116b_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_595312b45d293774c7a034846ae11f77ccf5d056c065c1b8065e3f3649ad530a = $this->env->getExtension("native_profiler");
        $__internal_595312b45d293774c7a034846ae11f77ccf5d056c065c1b8065e3f3649ad530a->enter($__internal_595312b45d293774c7a034846ae11f77ccf5d056c065c1b8065e3f3649ad530a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_595312b45d293774c7a034846ae11f77ccf5d056c065c1b8065e3f3649ad530a->leave($__internal_595312b45d293774c7a034846ae11f77ccf5d056c065c1b8065e3f3649ad530a_prof);

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
