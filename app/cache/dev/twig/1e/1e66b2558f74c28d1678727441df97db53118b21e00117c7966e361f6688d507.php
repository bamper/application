<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a2d93f383a6531af7b168ba3be398e4731a5ae6c2507d560d9bb1fe0458afd57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d14005e420708ba51a94bbeb14f0766093a6a747674152d5a55aebc059c2c5d = $this->env->getExtension("native_profiler");
        $__internal_5d14005e420708ba51a94bbeb14f0766093a6a747674152d5a55aebc059c2c5d->enter($__internal_5d14005e420708ba51a94bbeb14f0766093a6a747674152d5a55aebc059c2c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d14005e420708ba51a94bbeb14f0766093a6a747674152d5a55aebc059c2c5d->leave($__internal_5d14005e420708ba51a94bbeb14f0766093a6a747674152d5a55aebc059c2c5d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ce2902d09deacc36da8c9716f3fd94c38037e1046594b48228c7e7db6bd189f = $this->env->getExtension("native_profiler");
        $__internal_8ce2902d09deacc36da8c9716f3fd94c38037e1046594b48228c7e7db6bd189f->enter($__internal_8ce2902d09deacc36da8c9716f3fd94c38037e1046594b48228c7e7db6bd189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ce2902d09deacc36da8c9716f3fd94c38037e1046594b48228c7e7db6bd189f->leave($__internal_8ce2902d09deacc36da8c9716f3fd94c38037e1046594b48228c7e7db6bd189f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e33a8291da4d64ffe2e32d47981d3ca8c6113a787f1dae5a2cd09418c6a2e412 = $this->env->getExtension("native_profiler");
        $__internal_e33a8291da4d64ffe2e32d47981d3ca8c6113a787f1dae5a2cd09418c6a2e412->enter($__internal_e33a8291da4d64ffe2e32d47981d3ca8c6113a787f1dae5a2cd09418c6a2e412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e33a8291da4d64ffe2e32d47981d3ca8c6113a787f1dae5a2cd09418c6a2e412->leave($__internal_e33a8291da4d64ffe2e32d47981d3ca8c6113a787f1dae5a2cd09418c6a2e412_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_65b2b7a72bb37f4d96a2d7dcd200106b002b2191c1188ad931aa1c6646228a5d = $this->env->getExtension("native_profiler");
        $__internal_65b2b7a72bb37f4d96a2d7dcd200106b002b2191c1188ad931aa1c6646228a5d->enter($__internal_65b2b7a72bb37f4d96a2d7dcd200106b002b2191c1188ad931aa1c6646228a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_65b2b7a72bb37f4d96a2d7dcd200106b002b2191c1188ad931aa1c6646228a5d->leave($__internal_65b2b7a72bb37f4d96a2d7dcd200106b002b2191c1188ad931aa1c6646228a5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
