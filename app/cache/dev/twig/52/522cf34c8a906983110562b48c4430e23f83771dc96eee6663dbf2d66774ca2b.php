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
        $__internal_f7dcc4422003d264b46ccbd2126a909bff6194b1731c6f4be75173ea064b7987 = $this->env->getExtension("native_profiler");
        $__internal_f7dcc4422003d264b46ccbd2126a909bff6194b1731c6f4be75173ea064b7987->enter($__internal_f7dcc4422003d264b46ccbd2126a909bff6194b1731c6f4be75173ea064b7987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7dcc4422003d264b46ccbd2126a909bff6194b1731c6f4be75173ea064b7987->leave($__internal_f7dcc4422003d264b46ccbd2126a909bff6194b1731c6f4be75173ea064b7987_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_537d9541264336ac4e2cc18cf7c5a9c4afd76f81c53dec20818494b916916545 = $this->env->getExtension("native_profiler");
        $__internal_537d9541264336ac4e2cc18cf7c5a9c4afd76f81c53dec20818494b916916545->enter($__internal_537d9541264336ac4e2cc18cf7c5a9c4afd76f81c53dec20818494b916916545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

 ";
        
        $__internal_537d9541264336ac4e2cc18cf7c5a9c4afd76f81c53dec20818494b916916545->leave($__internal_537d9541264336ac4e2cc18cf7c5a9c4afd76f81c53dec20818494b916916545_prof);

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
