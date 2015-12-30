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
        $__internal_dff6c0d906ab9a0d58ebf78071b05fca3bf2e2f061e073c61b6aaf86f3c8048c = $this->env->getExtension("native_profiler");
        $__internal_dff6c0d906ab9a0d58ebf78071b05fca3bf2e2f061e073c61b6aaf86f3c8048c->enter($__internal_dff6c0d906ab9a0d58ebf78071b05fca3bf2e2f061e073c61b6aaf86f3c8048c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff6c0d906ab9a0d58ebf78071b05fca3bf2e2f061e073c61b6aaf86f3c8048c->leave($__internal_dff6c0d906ab9a0d58ebf78071b05fca3bf2e2f061e073c61b6aaf86f3c8048c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4749923950f578ce386764ee3f3c65167848c2da47bae6d0176082521ef99ea1 = $this->env->getExtension("native_profiler");
        $__internal_4749923950f578ce386764ee3f3c65167848c2da47bae6d0176082521ef99ea1->enter($__internal_4749923950f578ce386764ee3f3c65167848c2da47bae6d0176082521ef99ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4749923950f578ce386764ee3f3c65167848c2da47bae6d0176082521ef99ea1->leave($__internal_4749923950f578ce386764ee3f3c65167848c2da47bae6d0176082521ef99ea1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0ffc809285e421c2649822f244be627bede263efb0c596180c7c22047dab0da = $this->env->getExtension("native_profiler");
        $__internal_a0ffc809285e421c2649822f244be627bede263efb0c596180c7c22047dab0da->enter($__internal_a0ffc809285e421c2649822f244be627bede263efb0c596180c7c22047dab0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0ffc809285e421c2649822f244be627bede263efb0c596180c7c22047dab0da->leave($__internal_a0ffc809285e421c2649822f244be627bede263efb0c596180c7c22047dab0da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbb2fedd6097aa84f605511ae49a1ef8c96e38b559d51dd0257b0f2be94c31f0 = $this->env->getExtension("native_profiler");
        $__internal_fbb2fedd6097aa84f605511ae49a1ef8c96e38b559d51dd0257b0f2be94c31f0->enter($__internal_fbb2fedd6097aa84f605511ae49a1ef8c96e38b559d51dd0257b0f2be94c31f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fbb2fedd6097aa84f605511ae49a1ef8c96e38b559d51dd0257b0f2be94c31f0->leave($__internal_fbb2fedd6097aa84f605511ae49a1ef8c96e38b559d51dd0257b0f2be94c31f0_prof);

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
