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
        $__internal_1934a721b12224f59688740528dc58692fe14c38217a38e297e77f2a36493161 = $this->env->getExtension("native_profiler");
        $__internal_1934a721b12224f59688740528dc58692fe14c38217a38e297e77f2a36493161->enter($__internal_1934a721b12224f59688740528dc58692fe14c38217a38e297e77f2a36493161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1934a721b12224f59688740528dc58692fe14c38217a38e297e77f2a36493161->leave($__internal_1934a721b12224f59688740528dc58692fe14c38217a38e297e77f2a36493161_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6b53f5983d12bc5868a2db127a8ce8dd6a736aaace6330f57327efa8f93f33d = $this->env->getExtension("native_profiler");
        $__internal_b6b53f5983d12bc5868a2db127a8ce8dd6a736aaace6330f57327efa8f93f33d->enter($__internal_b6b53f5983d12bc5868a2db127a8ce8dd6a736aaace6330f57327efa8f93f33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b6b53f5983d12bc5868a2db127a8ce8dd6a736aaace6330f57327efa8f93f33d->leave($__internal_b6b53f5983d12bc5868a2db127a8ce8dd6a736aaace6330f57327efa8f93f33d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51ceb25f7f5c25e2a2c39d4a7384480f463199a3afb2392f25d78b25882333e0 = $this->env->getExtension("native_profiler");
        $__internal_51ceb25f7f5c25e2a2c39d4a7384480f463199a3afb2392f25d78b25882333e0->enter($__internal_51ceb25f7f5c25e2a2c39d4a7384480f463199a3afb2392f25d78b25882333e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_51ceb25f7f5c25e2a2c39d4a7384480f463199a3afb2392f25d78b25882333e0->leave($__internal_51ceb25f7f5c25e2a2c39d4a7384480f463199a3afb2392f25d78b25882333e0_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_10342a6a3d9290b455e20ec38166d1585a553bfbce5ddd9eb32a1949f0d12633 = $this->env->getExtension("native_profiler");
        $__internal_10342a6a3d9290b455e20ec38166d1585a553bfbce5ddd9eb32a1949f0d12633->enter($__internal_10342a6a3d9290b455e20ec38166d1585a553bfbce5ddd9eb32a1949f0d12633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10342a6a3d9290b455e20ec38166d1585a553bfbce5ddd9eb32a1949f0d12633->leave($__internal_10342a6a3d9290b455e20ec38166d1585a553bfbce5ddd9eb32a1949f0d12633_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_247e8618dc700ceef140f75ec62680f5bd063f6cca077f334d2e6d9901d7c751 = $this->env->getExtension("native_profiler");
        $__internal_247e8618dc700ceef140f75ec62680f5bd063f6cca077f334d2e6d9901d7c751->enter($__internal_247e8618dc700ceef140f75ec62680f5bd063f6cca077f334d2e6d9901d7c751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_247e8618dc700ceef140f75ec62680f5bd063f6cca077f334d2e6d9901d7c751->leave($__internal_247e8618dc700ceef140f75ec62680f5bd063f6cca077f334d2e6d9901d7c751_prof);

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
