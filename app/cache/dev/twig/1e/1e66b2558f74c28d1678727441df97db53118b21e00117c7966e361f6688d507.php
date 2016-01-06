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
        $__internal_369ef0bdd6407f79aee72f8abfcb1144a965ba43efd90835135b82014aadf14b = $this->env->getExtension("native_profiler");
        $__internal_369ef0bdd6407f79aee72f8abfcb1144a965ba43efd90835135b82014aadf14b->enter($__internal_369ef0bdd6407f79aee72f8abfcb1144a965ba43efd90835135b82014aadf14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_369ef0bdd6407f79aee72f8abfcb1144a965ba43efd90835135b82014aadf14b->leave($__internal_369ef0bdd6407f79aee72f8abfcb1144a965ba43efd90835135b82014aadf14b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8e7bd2473140f76031834545f05353c1d4a9b4f0d9c7f8d5fe40a87f9f0c5db = $this->env->getExtension("native_profiler");
        $__internal_c8e7bd2473140f76031834545f05353c1d4a9b4f0d9c7f8d5fe40a87f9f0c5db->enter($__internal_c8e7bd2473140f76031834545f05353c1d4a9b4f0d9c7f8d5fe40a87f9f0c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c8e7bd2473140f76031834545f05353c1d4a9b4f0d9c7f8d5fe40a87f9f0c5db->leave($__internal_c8e7bd2473140f76031834545f05353c1d4a9b4f0d9c7f8d5fe40a87f9f0c5db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b28778f6ee6faab3433436dbd75c2165ed86b91fb9b83ddd566a0021c7d95ace = $this->env->getExtension("native_profiler");
        $__internal_b28778f6ee6faab3433436dbd75c2165ed86b91fb9b83ddd566a0021c7d95ace->enter($__internal_b28778f6ee6faab3433436dbd75c2165ed86b91fb9b83ddd566a0021c7d95ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b28778f6ee6faab3433436dbd75c2165ed86b91fb9b83ddd566a0021c7d95ace->leave($__internal_b28778f6ee6faab3433436dbd75c2165ed86b91fb9b83ddd566a0021c7d95ace_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2b3e92b0734bc84ba554f85312f8dd99961ed1224dd27d9e19dcfd481b3567b = $this->env->getExtension("native_profiler");
        $__internal_a2b3e92b0734bc84ba554f85312f8dd99961ed1224dd27d9e19dcfd481b3567b->enter($__internal_a2b3e92b0734bc84ba554f85312f8dd99961ed1224dd27d9e19dcfd481b3567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a2b3e92b0734bc84ba554f85312f8dd99961ed1224dd27d9e19dcfd481b3567b->leave($__internal_a2b3e92b0734bc84ba554f85312f8dd99961ed1224dd27d9e19dcfd481b3567b_prof);

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
