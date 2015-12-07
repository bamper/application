<?php

/* AppBundle:Page:index.html.twig */
class __TwigTemplate_2fef28825174b94ddc04dbff9ba7277f5ac9a4b003933692f936edb3fe07d181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle:Page:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9adab87d9d829b66959ee596ac59657a28a91016796863f1a834b4812af6fb64 = $this->env->getExtension("native_profiler");
        $__internal_9adab87d9d829b66959ee596ac59657a28a91016796863f1a834b4812af6fb64->enter($__internal_9adab87d9d829b66959ee596ac59657a28a91016796863f1a834b4812af6fb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9adab87d9d829b66959ee596ac59657a28a91016796863f1a834b4812af6fb64->leave($__internal_9adab87d9d829b66959ee596ac59657a28a91016796863f1a834b4812af6fb64_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_27a3b3fe7328000f55f29de7404fe0faaf395d5d722346ff92356a8a5e3c255e = $this->env->getExtension("native_profiler");
        $__internal_27a3b3fe7328000f55f29de7404fe0faaf395d5d722346ff92356a8a5e3c255e->enter($__internal_27a3b3fe7328000f55f29de7404fe0faaf395d5d722346ff92356a8a5e3c255e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

 ";
        
        $__internal_27a3b3fe7328000f55f29de7404fe0faaf395d5d722346ff92356a8a5e3c255e->leave($__internal_27a3b3fe7328000f55f29de7404fe0faaf395d5d722346ff92356a8a5e3c255e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/*  {% extends '::layout.html.twig' %}*/
/* */
/*  {% block content %}*/
/* */
/* */
/*  {% endblock %}*/
