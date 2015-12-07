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
        $__internal_95e497f260cb1db8e64a047b6cee5388340291ccf5ca4688a0e84a6e294268fa = $this->env->getExtension("native_profiler");
        $__internal_95e497f260cb1db8e64a047b6cee5388340291ccf5ca4688a0e84a6e294268fa->enter($__internal_95e497f260cb1db8e64a047b6cee5388340291ccf5ca4688a0e84a6e294268fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e497f260cb1db8e64a047b6cee5388340291ccf5ca4688a0e84a6e294268fa->leave($__internal_95e497f260cb1db8e64a047b6cee5388340291ccf5ca4688a0e84a6e294268fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f3bb98d1e925c86d563429cde867ab7f831518888d644028cf660b21ca97e88 = $this->env->getExtension("native_profiler");
        $__internal_7f3bb98d1e925c86d563429cde867ab7f831518888d644028cf660b21ca97e88->enter($__internal_7f3bb98d1e925c86d563429cde867ab7f831518888d644028cf660b21ca97e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7f3bb98d1e925c86d563429cde867ab7f831518888d644028cf660b21ca97e88->leave($__internal_7f3bb98d1e925c86d563429cde867ab7f831518888d644028cf660b21ca97e88_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_094f8b0a0ef0ba418810cf2ee251d2e548a5dc35d79860bb0c2883f881367bde = $this->env->getExtension("native_profiler");
        $__internal_094f8b0a0ef0ba418810cf2ee251d2e548a5dc35d79860bb0c2883f881367bde->enter($__internal_094f8b0a0ef0ba418810cf2ee251d2e548a5dc35d79860bb0c2883f881367bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_094f8b0a0ef0ba418810cf2ee251d2e548a5dc35d79860bb0c2883f881367bde->leave($__internal_094f8b0a0ef0ba418810cf2ee251d2e548a5dc35d79860bb0c2883f881367bde_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_589f63cf78cdf9fafb2810399e2e0837652daf6da546743882985535476eafc0 = $this->env->getExtension("native_profiler");
        $__internal_589f63cf78cdf9fafb2810399e2e0837652daf6da546743882985535476eafc0->enter($__internal_589f63cf78cdf9fafb2810399e2e0837652daf6da546743882985535476eafc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_589f63cf78cdf9fafb2810399e2e0837652daf6da546743882985535476eafc0->leave($__internal_589f63cf78cdf9fafb2810399e2e0837652daf6da546743882985535476eafc0_prof);

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
