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
        $__internal_e97c51c2a5ffc181f9ed70a5d7362ab5393882f60052324239c36a1535ca8bc8 = $this->env->getExtension("native_profiler");
        $__internal_e97c51c2a5ffc181f9ed70a5d7362ab5393882f60052324239c36a1535ca8bc8->enter($__internal_e97c51c2a5ffc181f9ed70a5d7362ab5393882f60052324239c36a1535ca8bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 23
        echo "
</body>
</html>
";
        
        $__internal_e97c51c2a5ffc181f9ed70a5d7362ab5393882f60052324239c36a1535ca8bc8->leave($__internal_e97c51c2a5ffc181f9ed70a5d7362ab5393882f60052324239c36a1535ca8bc8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_99fde116a6766942765399c66b98adfe815fd846ede6028af1e41570ce2d3391 = $this->env->getExtension("native_profiler");
        $__internal_99fde116a6766942765399c66b98adfe815fd846ede6028af1e41570ce2d3391->enter($__internal_99fde116a6766942765399c66b98adfe815fd846ede6028af1e41570ce2d3391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_99fde116a6766942765399c66b98adfe815fd846ede6028af1e41570ce2d3391->leave($__internal_99fde116a6766942765399c66b98adfe815fd846ede6028af1e41570ce2d3391_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e92ea36e4c2191e835fc4f285f530c3e7dfb36d6d2836594692312cc1e999c2e = $this->env->getExtension("native_profiler");
        $__internal_e92ea36e4c2191e835fc4f285f530c3e7dfb36d6d2836594692312cc1e999c2e->enter($__internal_e92ea36e4c2191e835fc4f285f530c3e7dfb36d6d2836594692312cc1e999c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_e92ea36e4c2191e835fc4f285f530c3e7dfb36d6d2836594692312cc1e999c2e->leave($__internal_e92ea36e4c2191e835fc4f285f530c3e7dfb36d6d2836594692312cc1e999c2e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_f43213f3422309a567c30b2e0f46382d70a746b891aa50ad22076c25aa9beddb = $this->env->getExtension("native_profiler");
        $__internal_f43213f3422309a567c30b2e0f46382d70a746b891aa50ad22076c25aa9beddb->enter($__internal_f43213f3422309a567c30b2e0f46382d70a746b891aa50ad22076c25aa9beddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f43213f3422309a567c30b2e0f46382d70a746b891aa50ad22076c25aa9beddb->leave($__internal_f43213f3422309a567c30b2e0f46382d70a746b891aa50ad22076c25aa9beddb_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_027a6bf693a9e788d3a4a326fe06c88ad1605a47f133dcbb7e6f62a861803aa9 = $this->env->getExtension("native_profiler");
        $__internal_027a6bf693a9e788d3a4a326fe06c88ad1605a47f133dcbb7e6f62a861803aa9->enter($__internal_027a6bf693a9e788d3a4a326fe06c88ad1605a47f133dcbb7e6f62a861803aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_027a6bf693a9e788d3a4a326fe06c88ad1605a47f133dcbb7e6f62a861803aa9->leave($__internal_027a6bf693a9e788d3a4a326fe06c88ad1605a47f133dcbb7e6f62a861803aa9_prof);

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
        return array (  124 => 21,  120 => 20,  115 => 19,  109 => 18,  98 => 17,  88 => 11,  84 => 10,  79 => 9,  73 => 8,  61 => 7,  51 => 23,  49 => 18,  47 => 17,  40 => 14,  38 => 8,  34 => 7,  26 => 1,);
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
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/font-awesome/css/font-awesome.min.css') }}">*/
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
/*     <script src="{{ asset('bundles/app/js/main.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
