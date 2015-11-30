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
        $__internal_3199fa678fd6cce26b141e907198b1f065594226be0b0b404f76ac3ff5e01ff4 = $this->env->getExtension("native_profiler");
        $__internal_3199fa678fd6cce26b141e907198b1f065594226be0b0b404f76ac3ff5e01ff4->enter($__internal_3199fa678fd6cce26b141e907198b1f065594226be0b0b404f76ac3ff5e01ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 14
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "</body>
</html>
";
        
        $__internal_3199fa678fd6cce26b141e907198b1f065594226be0b0b404f76ac3ff5e01ff4->leave($__internal_3199fa678fd6cce26b141e907198b1f065594226be0b0b404f76ac3ff5e01ff4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b96d8cd272573351a6d5215e2e05819758f0a916db622dea8c766f9dc3bc284 = $this->env->getExtension("native_profiler");
        $__internal_4b96d8cd272573351a6d5215e2e05819758f0a916db622dea8c766f9dc3bc284->enter($__internal_4b96d8cd272573351a6d5215e2e05819758f0a916db622dea8c766f9dc3bc284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4b96d8cd272573351a6d5215e2e05819758f0a916db622dea8c766f9dc3bc284->leave($__internal_4b96d8cd272573351a6d5215e2e05819758f0a916db622dea8c766f9dc3bc284_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2bc64b2ea3f486d3a3637d8de5e218a7d08a5f0662e06d073282bddbc0f164b4 = $this->env->getExtension("native_profiler");
        $__internal_2bc64b2ea3f486d3a3637d8de5e218a7d08a5f0662e06d073282bddbc0f164b4->enter($__internal_2bc64b2ea3f486d3a3637d8de5e218a7d08a5f0662e06d073282bddbc0f164b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/layout.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_2bc64b2ea3f486d3a3637d8de5e218a7d08a5f0662e06d073282bddbc0f164b4->leave($__internal_2bc64b2ea3f486d3a3637d8de5e218a7d08a5f0662e06d073282bddbc0f164b4_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_32296c1ca3826b3fc2fa41fa35035c0cb8a5f00ccd1311c5b0efb5b935889dde = $this->env->getExtension("native_profiler");
        $__internal_32296c1ca3826b3fc2fa41fa35035c0cb8a5f00ccd1311c5b0efb5b935889dde->enter($__internal_32296c1ca3826b3fc2fa41fa35035c0cb8a5f00ccd1311c5b0efb5b935889dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32296c1ca3826b3fc2fa41fa35035c0cb8a5f00ccd1311c5b0efb5b935889dde->leave($__internal_32296c1ca3826b3fc2fa41fa35035c0cb8a5f00ccd1311c5b0efb5b935889dde_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_087b6aa5847fb9770304fa30630f0d6789317eac40b9497cd51f57fc8fc8e203 = $this->env->getExtension("native_profiler");
        $__internal_087b6aa5847fb9770304fa30630f0d6789317eac40b9497cd51f57fc8fc8e203->enter($__internal_087b6aa5847fb9770304fa30630f0d6789317eac40b9497cd51f57fc8fc8e203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function(){
            alert('123');​
        });
    </script>
";
        
        $__internal_087b6aa5847fb9770304fa30630f0d6789317eac40b9497cd51f57fc8fc8e203->leave($__internal_087b6aa5847fb9770304fa30630f0d6789317eac40b9497cd51f57fc8fc8e203_prof);

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
        return array (  119 => 20,  114 => 19,  108 => 18,  97 => 17,  87 => 11,  83 => 10,  78 => 9,  72 => 8,  60 => 7,  51 => 28,  49 => 18,  47 => 17,  40 => 14,  38 => 8,  34 => 7,  26 => 1,);
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
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/layout.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/style.css') }}"/>*/
/* */
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/app/js/jquery-1.11.3.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/app/js/bootstrap.min.js') }}"></script>*/
/* */
/*     <script>*/
/*         $(function(){*/
/*             alert('123');​*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
