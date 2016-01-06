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
        $__internal_c5b534743db20d96d0a06300d33cfc67c3a69334324ff251b77975ff3eb5bf15 = $this->env->getExtension("native_profiler");
        $__internal_c5b534743db20d96d0a06300d33cfc67c3a69334324ff251b77975ff3eb5bf15->enter($__internal_c5b534743db20d96d0a06300d33cfc67c3a69334324ff251b77975ff3eb5bf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b534743db20d96d0a06300d33cfc67c3a69334324ff251b77975ff3eb5bf15->leave($__internal_c5b534743db20d96d0a06300d33cfc67c3a69334324ff251b77975ff3eb5bf15_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_32e091b904a73ea62259c8d5d8fe102840adabde0c89c04241567f75b93c3656 = $this->env->getExtension("native_profiler");
        $__internal_32e091b904a73ea62259c8d5d8fe102840adabde0c89c04241567f75b93c3656->enter($__internal_32e091b904a73ea62259c8d5d8fe102840adabde0c89c04241567f75b93c3656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
gdfgdfgdfgfdgdfgdfsggdgdfgdfdfgdfg
 ";
        
        $__internal_32e091b904a73ea62259c8d5d8fe102840adabde0c89c04241567f75b93c3656->leave($__internal_32e091b904a73ea62259c8d5d8fe102840adabde0c89c04241567f75b93c3656_prof);

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
/* gdfgdfgdfgfdgdfgdfsggdgdfgdfdfgdfg*/
/*  {% endblock %}*/
